<!DOCTYPE html>
<html>
<head>
	<title>Cara Membuat Captcha dengan php | WWW.MALASNGODING.COM</title>
	<style>

body{
	font-family: "roboto";
	background: #F4F4F4;
}
 
h1,p{
	text-align: center;
}
 
.kotak{
	margin: 10px auto;
	background: #fff;
	
	width: 400px;
	padding: 20px 0px;
}
 
.kotak table tr td{
	padding: 5px;
}
 
.kotak table tr td input{
	padding: 5px;
	font-size: 12pt;
}

    </style>

</head>
<body>

	<h1>Cara Membuat Captcha dengan php | WWW.MALASNGODING.COM</h1>	
	<div class="kotak">		
 
		<?php 
		if(isset($_GET['pesan'])){
			if($_GET['pesan'] == "salah"){
				echo "<p>Captcha tidak sesuai.</p>";
			}
		}
		?>
 
		<p>Isi Captcha Dengan Benar</p>		
		<form action="periksa_captcha.php" method="post">
			<table align="center">						
				<tr>
					<td>Captcha</td>				
					<td><img src="captcha.php" alt="gambar" /> </td>
				</tr>
				<td>Isikan captcha </td>
				<td><input name="nilaiCaptcha" value=""/></td>
				<tr>
					<td><input type ="submit" value="Cek Captcha"></td>
				</tr>
			</table>
		</form>
	</div>


    <?php
    //mengaktifkan session
    session_start();
     
    header("Content-type: image/png");
     
    // menentukan session
    $_SESSION["Captcha"]="";
     
    // membuat gambar dengan menentukan ukuran
    $gbr = imagecreate(200, 50);
     
    //warna background captcha
    imagecolorallocate($gbr, 69, 179, 157);
     
    // pengaturan font captcha
    $color = imagecolorallocate($gbr, 253, 252, 252);
    $font = "{fonts/Roboto}"; 
    $ukuran_font = 20;
    $posisi = 32;
    // membuat nomor acak dan ditampilkan pada gambar
    for($i=0;$i<=5;$i++) {
        // jumlah karakter
        $angka=rand(0, 9);
     
        $_SESSION["Captcha"].=$angka;
     
        $kemiringan= rand(20, 20);
         
        imagettftext($gbr, $ukuran_font, $kemiringan, 8+15*$i, $posisi, $color, $font, $angka);	
    }
    //untuk membuat gambar 
    imagepng($gbr); 
    imagedestroy($gbr);

    for($i=0;$i<=5;$i++) {
	// jumlah karakter
	$angka=rand(0, 9);
 
	$_SESSION["Captcha"].=$angka;
 
	$kemiringan= rand(20, 20);
 	
	imagettftext($gbr, $ukuran_font, $kemiringan, 8+15*$i, $posisi, $color, $font, $angka);	
}

    
    ?>


</body>
</html>