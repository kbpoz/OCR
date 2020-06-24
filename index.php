<html>
<body bgcolor="#51f0ae">


<center>

<head>
<h1>System rozpoznawania tekstu OCR</h1>
</head>

<form action="upload.php" method="POST" enctype="multipart/form-data">

<p><input type="file"  accept="image/*" name="obrazek" id="file"  onchange="loadFile(event)" style="display: none;"></p>
<p><label for="file" style="cursor: pointer;">Dodaj obrazek</label></p>
<p><img id="output" width="400" /></p>



<script>
var loadFile = function(event) {
	var image = document.getElementById("output");
	image.src = URL.createObjectURL(event.target.files[0]);
};
</script>

<input type="submit" value = "Zatwierdź"/>

</form>
</center>

</body>

