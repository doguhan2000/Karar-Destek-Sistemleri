
<!DOCTYPE html>
<html>
<head>
<title>KELER SATRANÇ KULÜBÜ</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
<style>
body{
	margin:0px;
	padding:0px;
	position:absolute;
	
	
}
.üst{
	background:	#003366;
	width:1515px;
	height:80px;
	background-color: #000;
	

	
	
}
.sidebar{
    background:	#003366;
    width: 250px;
    height: 1300px;
    float: left;
	z-index: 2;
	position:absolute;
	background-color: #000;
	
	
	
}
.anasayf{
	border-radius: 25px;
	padding-top:10px;
	margin-left:5px;
	



}
.mahalleler{
	padding-top:20px;
	margin-left:5px;
	
}
.harita{
	padding-top:20px;
	margin-left:5px;
}
.bune{
	padding-top:20px;
}
.bas{
	background:#000;
	width:1500px;
	height:40px;
    float:left;
    position:absolute;
}
.bas #genc{
	margin-left:1300px;
	position:absolute;

}
.bas span{
	color:white;
    padding-top:10px;
	padding-left:600px;
	font-family:georgia;
	font-size:20px;
}
.content{
	width:1515px;
	height:1000px;


}
.content .bune{
	margin-left:500px;
	padding-top:100px;
}
.mah{
	margin-left:900px;
	padding-top:80px;	

}
.mah label{
	border-style:inset;
	border-color:grey;
}
.parksay{
	margin-left:900px;
	padding-top:200px;
	position:absolute;
	height:0px;

}
.parksay label{
		border-style:inset;
		border-color:purple;
}
#result{
	margin-top:500px;
	margin-left:150px;
	background:#fff;
	width:400px;
	height:250px;
    text-align: center;
    border-style:ridge;
	position:absolute;


}
.eksik {
	margin-left:150px;
	display:flex;
	margin-top:800px;
	position:absolute;
}
#d4a{
	margin-left:600px;
	margin-top:750px;
	position:absolute;
}
.yıl{
	margin-top:500px;
	margin-left:900px;
	background:#912cee;
	color:white;
	width:400px;
	height:250px;
    text-align: center;
	border-style: ridge;
	position:absolute;
}
.deneme{
	margin-left:900px;
	margin-top:80px;
}
#buton{
	margin-top:300px;
	margin-left:50px;
	background:white;
}

.deneme span{
	margin-top:300px;
	border-style:inset;
	border-color:white;
	
}
#get{
	background:white;

}


</style>
<script type="text/javascript">
function pencereAc(adres)
{
    window.open(adres, "_blank");
}
function ana()
{
    pencereAc("anasayfa.php");
}
</script>
<script type="text/javascript">
function pencereAc(adres)
{
    window.open(adres, "_blank");
}
function cik()
{
    pencereAc("yönetici.php");
}
</script>
<script type="text/javascript">

function pencereAc(adres)
{
    window.open(adres, "_blank");
}
function ekle()
{
    pencereAc("yeni.php");
}
</script>

<script type="text/javascript">
function pencereAc(adres)
{
    window.open(adres, "_blank");
}
function pencereAcTest()
{
    pencereAc("ürün.php");
}
</script>
<script type="text/javascript">
function pen(adres)
{
    window.open(adres, "_blank");
}
function sp()
{
    pencereAc("siparisekle.php");
}

</script>

<script type="text/javascript">
function pen(adres)
{
    window.open(adres, "_blank");
}
function st()
{
    pencereAc("stok.php");
}

</script>

<script type="text/javascript">
function pen(adres)
{
    window.open(adres, "_blank");
}
function siparis()
{
    pencereAc("siparis.php");
}

</script>

<script>
$("#d4a").click(function(){
   $("#db4b").animate({
      height:'toggle'
   });
 });
</script>

</head>

<body>
<div id="piechart" style="position:absolute; 
	width:700px; 
	height:400px; margin-left:800px; margin-top:200px;
	 "> </div>
<div class="üst"> <br><center> <font size=6 color=white > KELER SATRANÇ KULÜBÜ </font></center>

</div>
<div class="sidebar"> 
        <div class="anasayf">
	    <button id="an" onClick="ana()" style="width:240px; height:50px; color:#003366; border-style:none; background-color:#FF7F00;border-radius: 15px; "> ANASAYFA</button>
	    </div>
		<div class="mahalleler"> 
		
		<input type="button"  value="VERİ GİRİŞİ" onClick="ekle()" style="width:240px; height:50px; color:#003366; border-style:none; background-color:#FF7F00;border-radius: 15px; "/>
		</div>
		<div class="harita">
		<input type="submit" value="ŞUBE KONTROL" onClick="sp()" style="width:240px; height:50px; color:#003366; border-style:none; background-color:#FF7F00;border-radius: 15px;  "/></div>
		<div class="harita">
		<input type="submit" value="ŞUBE ÇALIŞAN SAYISI" onClick="pencereAcTest()" style="width:240px; height:50px; color:#003366; border-style:none; background-color:#FF7F00;border-radius: 15px;"/></div>
		<div class="harita">
		<input type="submit" value="ÇALIŞAN LİSTESİ" onClick="siparis()" style="width:240px; height:50px; color:#003366; border-style:none; background-color:#FF7F00;border-radius: 15px; "/></div>
		<div class="harita">
		<input type="submit" value="ÜYELER LİSTESİ" onClick="st()" style="width:240px; height:50px; color:#003366; border-style:none; background-color:#FF7F00;border-radius: 15px;"/></div>
		<div class="harita">
		<input type="submit" value="ÇIKIŞ" onClick="cık()" style="width:240px; height:50px; color:white; border-style:none; background-color:#FF7F00;border-radius: 15px;"/></div>
		
		<div class=""></div>
		
</div>
<div class="content">
<div class="getir">	


<table border="0" width='800px' height='50px' align="center"> 
<td align=center colspan="5"> <font size=4 color=red > <b> ÇALIŞAN LİSTESİ</b></td>
<br>
	<tr>
		<th bgcolor="#003366"><i><font color=white>UKD</th>
		<th bgcolor="#003366"><i><font color=white>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Ad Soyad&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
		<th bgcolor="#003366"><i><font color=white>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Telefon&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
		<th bgcolor="#003366"><i><font color=white>Çalıştığı Şube</th>
		<th bgcolor="#003366"><i><font color=white>Cinsiyet</th>
	</tr>
<?php 
$baglanti=mysqli_connect("localhost","root","","ilyass");
$baglanti->set_charset("utf8");
$sql="SELECT çalışan.cal_id, çalışan.cal_ad, çalışan.cal_soyad,çalışan.cal_tel,şubeler.şubeadı,cinsiyet.cinsad
FROM çalışan,şubeler,cinsiyet
WHERE çalışan.şube_id=şubeler.şube_id AND çalışan.cins_id=cinsiyet.cins_id  
ORDER BY çalışan.cal_id ASC";
$sorgu=mysqli_query($baglanti,$sql);
$a="TL";
while( $sonuc=mysqli_fetch_array($sorgu,MYSQLI_ASSOC) ){
	echo '<tr>';
	echo "<td align='center' bgcolor=#C5CAE9>"."<font >".$sonuc["cal_id"]."</td>";
	echo "<td align='center' bgcolor=#C5CAE9>"."<font >".$sonuc["cal_ad"]." ".$sonuc["cal_soyad"]."</td>";
	echo "<td align='center' bgcolor=#C5CAE9>"."<font >".$sonuc["cal_tel"]."</td>";
	echo "<td align='center' bgcolor=#C5CAE9>"."<font >".$sonuc["şubeadı"]."</td>";
    echo "<td align='center' bgcolor=#C5CAE9>"."<font >".$sonuc["cinsad"]."</td>";	
	echo '</tr>';
	
	
	
	

 }

?>



<br>
<br>


















</html>


