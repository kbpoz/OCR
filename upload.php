<html>
<body bgcolor="#51f0ae">
<center>

<?php

if(isset($_FILES['obrazek'])){

$file_name = $_FILES['obrazek']['name'];
$file_temp =  $_FILES['obrazek']['tmp_name'];

move_uploaded_file($file_temp,"images/".$file_name);

shell_exec('"C:\\Program Files (x86)\\Tesseract-OCR\\tesseract" "C:\\xampp\\htdocs\\images\\'.$file_name.'" ocr');

 
if(file_exists ("C:\\xampp\\htdocs\\ocr.txt")){

     echo "<br><h2>Rozpoznany tekst</h2><br><pre>";
 $myfile = fopen("ocr.txt", "r");
     echo fread($myfile, filesize("ocr.txt"));
 fclose($myfile);
     echo "</pre>";
     echo "<h2>Czy powyższy tekst zgadza się z tym na obrazku?</h2>";

 array_map('unlink', glob("C:\\xampp\\htdocs\\images\\$file_name"));
 array_map('unlink', glob("C:\\xampp\\htdocs\\ocr.txt"));

 } else{
     echo "<h2>Nie udało się otworzyć pliku!</h2>";
 }
}
?>

<a href="index.php?id=1" onclick="return  confirm('Czy na pewno chcesz cofnąć?' )">Wróć do uploadu pliku</a>

</center>
</body>