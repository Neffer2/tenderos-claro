<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>D&iacute;a del tendero</title>
	<link rel="stylesheet" type="text/css" href="styles/styles.css">
</head>
<body>
	<div id="mainbox" class="mainbox">
		<div id="pyro" class="pyro">
	  		<div class="before"></div>
	  		<div class="after"></div>
		</div>
		<div id="box" class="box">
			<div class="box1">
				<span class="obstaculo span1"><b>$1</b></span>
				<span class="obstaculo span2"><b>$2</b></span>
				<span class="obstaculo span3"><b>$3</b></span>
			</div> 
			<div class="box2">
				<span class="obstaculo span1"><b>$4</b></span>
				<span class="obstaculo span2"><b>$5</b></span>
				<span class="obstaculo span3"><b>$6</b></span>
			</div>
		</div> 
		<div id="flecha" class="flecha"></div>

		<!-- <button id="ejemplo" style="position: absolute; margin-left: 5px;">1</button>
		<button class="obstaculo">2</button> -->

		<button class="spin" onclick="myFunction(this)">Girar</button>
	</div>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	<script type="text/javascript" src="js/jquerycollision/jquery-collision.min.js"></script>
	<script type="text/javascript">
		let pyro = document.getElementById('pyro');
		pyro.style.display = "none";


		function myFunction(btn){
			btn.disabled = true;
			let x = 1024; //min value
			let y = 9999; //max value 

			let deg = Math.floor(Math.random() * (x - y)) + y;
			document.getElementById('box').style.transform = `rotate(${deg}deg)`;

			let elem = document.getElementById('flecha');
			elem.classList.remove('animate');
			setTimeout(() => {
				elem.classList.add('animate');
				puntaje();
				fireWorks();
			}, 5000)
		}

		function puntaje(){
			let colision = $("#flecha").collision(".obstaculo");
			console.log(colision[0])
			if (colision[0]){
				console.log(colision[0].innerHTML);
			}else {
				console.log('No.');
			}
		}

		function fireWorks(){
			pyro.style.display = "block";
		}
	</script>
</body>
</html>