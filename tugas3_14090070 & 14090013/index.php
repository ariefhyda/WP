<html>
	<html lang="en">
<head>
	<meta charset="UTF-8">
	<title> Kalkulator Sederhana</title>
	<link rel="stylesheet" href="style.css">
</head>

<body>
<div class="container">
<div class="bayang-O">
		<div class='circel' >
		<img src="ww.jpg" height="200" width ="200">
		</a>
		</div>
	</div>
</div>
<div class="container1">
<div class="bayang-O">
		<div class='circel' >
		<img src="oo.jpg" height="200" width ="200">
		</a>
		</div>
	</div>
</div>
<form name="kalku" method ="post" action = "proses.php">
<br><br>
<center><h1> KALKULATOR SEDERHANA</h1>
<div id="kalku">
		<input size="14" name="A" type="text" placeholder="Bilangan pertama" />
		<input size="14" name="B" type="text" placeholder="Bilangan Kedua" />
		<div id="tombol">
                  <input value="+"  type="submit" name ="tambah" />
                  <input value="-"  type="submit" name = "kurang" />
                  <input value="*"  type="submit" name = "kali" />
                  <input value="/"  type="submit" name = "bagi" /><br>
                  <input value="Clear" type="submit" name = "input" />
     </div>
		<input size="14" name="C" type="text" placeholder="Hasil" value="<?php if (isset($_GET['C'])) echo $_GET['C']?>" />
	
	
	</div>
	</center>
</body>
</html>