<html>
<head>
	<title>Add Users</title>
</head>
 
<body style="background-color: #143d59; color: #f4b41a;">
      <!-- Required meta tags -->
      <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <div style="background-color:  #f4b41a; width: 100px; height: 100%; position: absolute;" ></div>
    <div style="background-color:  #f4b41a; width: 100px; height: 100%; position: absolute; left: 1605px" ></div>
    <div class="container">
        <br><br><br>
    <a class="btn btn-warning" href="Index.php" role="button" >Home_______</a>
	<br/><br/>
 
	<form action="add.php" method="post" name="form1">
		<table width="25%" border="0">

        <div class="form-group">
        <label>Mobil</label>
        <input type="text" class="form-control" aria-describedby="emailHelp" name="Mobil">
    </div>

    <div class="form-group">
        <label >Harga</label>
        <input type="text" class="form-control" name="Harga">
    </div>
    <div class="form-group">
        <label >Gambar</label>
        <input type="text" class="form-control" name="Gambar">
    </div>

    <center><button type="submit" class="btn btn-warning" name="Submit">....SUBMIT....</button></center>
		</table>
	</form>
    </div>
    

    
	
	<?php

	
	if(isset($_POST['Submit'])) {
		$Mobil = $_POST['Mobil'];
		$Harga = $_POST['Harga'];
		$Gambar = $_POST['Gambar'];
		

		include ('Koneksi.php');
				

        $sql = "INSERT INTO produk (Mobil, Harga, gambar)
        VALUES ('$Mobil', '$Harga', '$Gambar')";

        $query = mysqli_query($connect, $sql);
        
	
		echo "<h1 style='text-align:center' >ADDED SUCCSSED.</h1>";
	}
	?>

      <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
    -->
</body>
</html>
