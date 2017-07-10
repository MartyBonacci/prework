<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Challenge: Cat Clicker</title>
		<style>
			body {
				font-family: Arial, sans-serif;
			}
		</style>
	</head>
	<body>
		<h2 id="status" >Pet me!</h2>
		<img id="cat-pic" src="https://www.kasandbox.org/programming-images/animals/thumbs/cat.png">
		<br>

		<div id="cat-chat"></div>

		<script>

			var picText = document.getElementById("status")
			var onMouseOver function () {
				picText.textContent = "Purr";
			}
			var onMouseLeave function () {
				picText.textContent = "Pet me more!";
			}
				picText.addEventListener("mouseenter",onMouseOver);
				picText.addEventListener("mouseleave",onMouseLeave);

		</script>
	</body>
</html>