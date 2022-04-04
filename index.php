<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Buku Hubung</title>

	<!-- Custom fonts for this template-->
	<link href="assets/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
	<link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
	<!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">


	<link href="assets/css/sb-admin-2.min.css" rel="stylesheet"> -->
</head>
<style>
	body {
		display: flex;
		flex-direction: column;
		text-align: center;
		color: white;
		margin: 5px;
		min-height: 600px;
	}

	main {
		flex: 1 0 auto;
	}

	h1.title,
	.footer-copyright a {
		font-family: 'Architects Daughter', cursive;
		text-transform: uppercase;
		font-weight: 300;
		margin-bottom: 15px;
	}

	/* start welcome animation */

	body.welcome {
		/* background: #039be5; */
		background: #00cec9;
		overflow: hidden;
		-webkit-font-smoothing: antialiased;
	}

	.welcome .splash {
		height: 0px;
		padding: 0px;
		border: 130em solid #00cec9;
		position: fixed;
		left: 50%;
		top: 100%;
		display: block;
		box-sizing: initial;
		overflow: hidden;

		border-radius: 50%;
		transform: translate(-50%, -50%);
		animation: puff 0.5s 1.8s cubic-bezier(0.55, 0.055, 0.675, 0.19) forwards, borderRadius 0.2s 2.3s linear forwards;
	}

	.welcome #welcome {
		background: #f1c40f;
		width: 56px;
		height: 56px;
		position: absolute;
		left: 50%;
		top: 50%;
		overflow: hidden;
		opacity: 0;
		transform: translate(-50%, -50%);
		border-radius: 50%;
		animation: init 0.5s 0.2s cubic-bezier(0.55, 0.055, 0.675, 0.19) forwards, moveDown 1s 0.8s cubic-bezier(0.6, -0.28, 0.735, 0.045) forwards, moveUp 1s 1.8s cubic-bezier(0.175, 0.885, 0.32, 1.275) forwards, materia 0.5s 2.7s cubic-bezier(0.86, 0, 0.07, 1) forwards, hide 2s 2.9s ease forwards;
	}

	/* moveIn */
	.welcome header,
	.welcome a.btn {
		opacity: 0;
		animation: moveIn 5s 3.1s ease forwards;
	}

	@keyframes init {
		0% {
			width: 0px;
			height: 0px;
		}

		100% {
			width: 56px;
			height: 56px;
			margin-top: 0px;
			opacity: 1;
		}
	}

	@keyframes puff {
		0% {
			top: 100%;
			height: 0px;
			padding: 0px;
		}

		100% {
			top: 50%;
			height: 100%;
			padding: 0px 100%;
		}
	}

	@keyframes borderRadius {
		0% {
			border-radius: 50%;
		}

		100% {
			border-radius: 0px;
		}
	}

	@keyframes moveDown {
		0% {
			top: 50%;
		}

		50% {
			top: 40%;
		}

		100% {
			top: 100%;
		}
	}

	@keyframes moveUp {
		0% {
			background: #e67e22;
			top: 100%;
		}

		50% {
			top: 40%;
		}

		100% {
			top: 50%;
			background: #039be5;
		}
	}

	@keyframes materia {
		0% {
			background: #039be5;
		}

		50% {
			background: #039be5;
			top: 26px;
		}

	}

	@keyframes moveIn {
		0% {
			opacity: 0;
		}

		100% {
			opacity: 1;
		}
	}

	@keyframes hide {
		0% {
			opacity: 1;
		}

		100% {
			opacity: 0;
		}
	}

	.button {
		border-radius: 4px;
		background-color: #00cec9;
		border: none;
		color: #FFFFFF;
		text-align: center;
		font-size: 28px;
		padding: 20px;
		width: 200px;
		transition: all 0.5s;
		cursor: pointer;
		margin: 5px;
	}

	.button span {
		cursor: pointer;
		display: inline-block;
		position: relative;
		transition: 0.5s;
	}

	.button span:after {
		content: '\00bb';
		position: absolute;
		opacity: 0;
		top: 0;
		right: -20px;
		transition: 0.5s;
	}

	.button:hover span {
		padding-right: 25px;
	}

	.button:hover span:after {
		opacity: 1;
		right: 0;
	}

	.img {
		max-width: 80%;
		width: 250px;
		height: 250px;
		margin: 10px;
		border: 2px solid black;
		/* background: linear-gradient(to right, #000046, #1cb5e0); */
		background: linear-gradient(#000046, #1cb5e0);
		border-radius: 50%;
		margin-left: auto;
		margin-right: auto;
		display: flex;
	}

	img {
		max-width: 80%;
		width: 250px;
		margin: auto;
		margin-top: auto;
		margin-bottom: auto;
		display: block;
	}

	.center-align {
		margin-top: 50px;
	}

	.flow-text {
		margin-top: 50px;
	}

	.btn {
		background-color: whitesmoke;
		border-radius: 15px;
	}
</style>

<body class="welcome">
	<span id="splash-overlay" class="splash"></span>
	<span id="welcome" class="z-depth-4"></span>

	<main class="valign-wrapper">
		<span class="container grey-text text-lighten-1 ">
			<br>

			<p class="flow-text">Selamat Datang di</p>
			<h2 class="title grey-text text-lighten-1">BUKU HUBUNG</h2>


			<br>
			<div class="img">
				<img src="assets/img/jabat-tangan1.png" alt="">
			</div><br>
			<blockquote class="flow-text">Mempermudah Guru dan Wali Murid <br>Dalam Memantau Anak Didik </blockquote>
			<div class="center-align">
				<!-- Dropdown Trigger -->
				<div class="glossy">
					<a type="button" class="btn btn-outline-info mt-2" href="daftar-guru.php" data-activates="exams" style="font-weight: bold;">GURU</a>
					<a type="button" class="btn btn-outline-primary mt-2" href="daftar-wali.php" data-activates="exams" style="font-weight: bold;">WALI</a>
				</div>

			</div>
			<br>
			<br>
		</span>
	</main>
	<footer class="page-footer deep-purple darken-3">
		<div class="footer-copyright">
			<div class="container mb-2">
				<time datetime="{{ site.time | date: '%Y' }}">Mahasiswa &copy; 2022</time>
			</div>
		</div>
	</footer>
</body>

</html>