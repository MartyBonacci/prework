<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="author" content="Marty Bonacci">
		<meta name="description" content="prework for the deep dive coding bootcamp"><!--The description appears with the title in search reaults.-->
		<title>I completed the prework</title>
	</head>
	<body>
		<h1>ELEMENT 20</h1>

		<p>Japanese example: ご飯が熱い。</p>
		<p>I completed the prework!...again...and again...and  a third time...trying it from awd ide on tablet</p>

		<button id="clicker">Boring Button</button>

		<script>
			var clickerButton = document.getElementById("clicker");
			var onButtonClick = function() {
				clickerButton.textContent = "Oh wow, you clicked me!";
			}
				clickerButton.addEventListener("click",onButtonClick);

		</script>

	</body>
</html>