<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Challenge: Cat-stache</title>
		<style>
			#mustache-pic {
				position: absolute;
			}
		</style>
	</head>
	<body>

		<img id="cat-pic" src="https://www.kasandbox.org/programming-images/animals/cat.png" width="300" alt="cat photo">

		<img id="mustache-pic" src="https://www.kasandbox.org/programming-images/misc/mustache.png" alt="mustache" width="100">

		<script>
			var catPic = document.getElementById("cat-pic");
			var onCatClick = function(e) {
				consol.log(e);
				var stashePic = document.getElementById("mustache-pic");
				stashePic.className = "stachePic";
				stashePic.style.top = e.clienty + "px";
				stashePic.style.left = e.clientx + "px";
			};
			catPic.addEventListener("click", onCatClick);

		</script>
	</body>
</html>