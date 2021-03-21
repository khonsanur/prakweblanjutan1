<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@1,700&display=swap" rel="stylesheet">
	<style>
		html {
			margin: 0;
			padding: 0;
		}

		body {
			background-color: #ff7171;
			font-family: 'Poppins', sans-serif;	
			box-sizing: border-box;
			color:#f0e4d7;
		}


		.wrapper {
			margin: 50px auto;
			width: 30%;
			border-radius: 50px;
			box-shadow: 0px 0px 5px rgba(0,0,0, .2);
			padding: 5px 40px;
		}

		.result {
			margin-bottom: 20px;
		}

		input {
			margin: 10px 0 20px 0;
		}

		input[type=text], 
		input[type=number] {
			width: 100%;
			border-radius: 10px;
			border:none;
			padding: 7px;
			border:1px solid transparent;
			box-sizing: border-box;
			background-color: #f0e4d7;
		}

		input[type=text]:focus, 
		input[type=number]:focus  {
			border-radius: 10px;
			outline:none;
			border:1px solid #f5c0c0;
			box-shadow: 0 0 10px #9fd8df;
		}
		input[type=number]::-webkit-inner-spin-button {
		  -webkit-appearance: none;
		}

		input[type=radio] {
			margin:20px 7px;
		}

		ul li {
			display: inline-block;
			margin-left: 0;
		}

		ul {
			margin: 0;
			padding: 0;
		}

		input[type=submit] {
			background-color: #9fd8df;
			border-radius: 50px;
			width: 100%;
			padding: 5px;
			border:2px solid #f5c0c0;
			color: #ff7171;
			font-family: 'Poppins', sans-serif;	box-sizing: border-box;
			font-size: 20px;
		}

		input[type=submit]:hover {
			cursor: pointer;
			background-color: transparent;
			transition: all 0.3s ease;
			color:#f0e4d7;
		}
	</style>
</head>
<body>
	<div class="container">
		<div class="wrapper">
			<div class="title">
				<h1>Form Belanja</h1>
			</div>
			<div class="content">
				<form method="POST" action="form_belanja.php">
						<label for="customer">Nama Customer</label>
						<input type="text" name="customer" id="customer" required="">
						<label for="">Pilih Produk</label><br>
						<ul>
							<li><input type="radio" name="produk" value="Mesin Cuci" required="">Mesin cuci</li>
							<li><input type="radio" name="produk" value="Kulkas" required="">Kulkas</li>
							<li><input type="radio" name="produk" value="TV" required="">TV</li>
						</ul>
						<label for="jumlah">Jumlah</label>
						<input type="number" id="jumlah" name="jumlah" required="">
						<input type="submit" name="proses">
				</form>
			</div>
			<div class="result">
			<?php 
			if (isset($_POST['proses']) || isset($_POST['customer']) || isset($_POST['produk']) || isset($_POST['jumlah'])) :
			echo "Nama : " .$_POST['customer'];
			echo "<br/> Produk : " .$_POST['produk'];
			echo "<br/> Jumlah : " .$_POST['jumlah'];
				if ($_POST['produk'] == 'Mesin Cuci') {
					echo "<br/> Total : " .$_POST['jumlah'] * 3800000;
				} elseif ($_POST['produk'] == 'Kulkas') {
					echo "<br/> Total : " .$_POST['jumlah'] * 3100000;
				} else {
					echo "<br/> Total : " .$_POST['jumlah'] * 4200000;
				}
			endif
			?>	
		</div>
		</div>
	</div>
</body>
</html>

