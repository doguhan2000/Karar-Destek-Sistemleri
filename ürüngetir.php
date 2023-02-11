<?php

$baglanti=mysqli_connect("localhost","root","","ilyas");
$baglanti->set_charset("utf8");
if($baglanti){
    if ($_POST) {
       
		   if(strip_tags(trim(isset($_POST["subeadi"])))){
            $sube_ad=$_POST["subeadi"];
			
        }
        		   
  
        		

        $sorgu=mysqli_query($baglanti,"INSERT INTO şubeler(şubeadı) VALUES ('".$sube_ad."')");
        if ($sorgu==true) {
            echo "Kayıt veritabanına eklendi.";
			header( "refresh:2;url=yeni.php" ); 
        } else {
            echo "Hata:".$sorgu.$baglanti->error;
        }
		mysqli_close($baglanti);
    } else {
        echo "Veriler gelmedi";
    }
}



else { 
    die("bağlantı sağlanamadı");
}

?>