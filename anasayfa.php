
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
    height: 1000px;
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
.yil{
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
<script type="text/javascript">
function pen(adres)
{
    window.open(adres, "_blank");
}
function tarih()
{
    pencereAc("tarih.php");
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

<table border="0" width='1200px' height='50px' align="center"> 
<tr>
<td> 
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
			['Task', 'Hours per Day'],
          ['Buca Şubesi',     15],
          ['Balçova',      7],
          ['Konak Şubesi ',  12],
          ['Bornova Şubesi ', 11],
          ['Çeşme Şubesi ',    9],
		  ['Çiğli Şubesi ',    8],
		  ['Urla Şubesi ',    6],
		  ['Karşıyaka Şubesi ',    10],
		  ['Güzelbahçe Şubesi ',    8]
        ]);

        var options = {
          title: 'Şubelere Göre Çalışan Sayısı',
          is3D: true,
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart_3d'));
        chart.draw(data, options);
      }
    </script>
    <div id="piechart_3d" style="width: 600px; height: 300px;"></div>
</td>
<td>
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(b);

      function b() {

        var data = google.visualization.arrayToDataTable([
			['Task', 'Hours per Day'],
          ['Buca Şubesi ',     13],
          ['Balçova',      11],
          ['Konak Şubesi ',  8],
          ['Bornova Şubesi ', 10],
          ['Çeşme Şubesi ',    12],
		  ['Çiğli Şubesi ',    14],
		  ['Urla Şubesi ',    11],
		  ['Karşiyaka Şubesi ',    15],
		  ['Güzelbahçe Şubesi ',    17]
        ]);

        var ac = {
          title: 'Şubelere Göre Üye Sayısı'
        };

        var ab = new google.visualization.PieChart(document.getElementById('piechartt'));

        ab.draw(data, ac);
      }
    </script>
  </head>
  <body>
    <div id="piechartt" style="width: 600px; height: 300px;"></div>

</td>
</tr>

</table>	   
	   
	   </div>


</body>
</table>

<table border="0" width='600px' height='50px' align="center"> 
<td align=center colspan="5"> <font size=4 color=red > <b>  İLÇELERDEKİ ŞUBE SAYISI</b></td>
<br>
	<tr>
		<th bgcolor="#003366"><i><font color=white>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;İD&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
		<th bgcolor="#003366"><i><font color=white>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;İlçe Adı&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
		<th bgcolor="#003366"><i><font color=white>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Şube Sayı&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
	</tr>
<?php 
$baglanti=mysqli_connect("localhost","root","","ilyass");
$baglanti->set_charset("utf8");
$sql="SELECT ilçe.ilçe_id, ilçe.ilçeadı, count(şubeler.şubesayısı) as şubesayısı FROM ilçe";
$sql = "SELECT * FROM `ilçe`;";
$sorgu=mysqli_query($baglanti,$sql);
$a="TL";
while( $sonuc=mysqli_fetch_array($sorgu,MYSQLI_ASSOC) ){
	echo '<tr>';
	echo "<td align='center' bgcolor=#B3C7D6>"."<font >".$sonuc["ilçe_id"]."</td>";
	echo "<td align='center' bgcolor=#B3C7D6>"."<font >".$sonuc["ilçeadı"]."</td>";
	echo "<td align='center' bgcolor=#B3C7D6>"."<font >".$sonuc["şubesayısı"]."</td>";
	echo '</tr>';
 }
?>

<table border="0" width='600px' height='50px' align="center"> 
<td align=center colspan="5"> <font size=4 color=red > <b> ŞUBELERDEKİ CİRO</b></td>
<br>
	<tr>
		<th bgcolor="#003366"><i><font color=white>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;İD&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
		<th bgcolor="#003366"><i><font color=white>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Şube Adı&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
		<th bgcolor="#003366"><i><font color=white>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Ciro&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
	</tr>
<?php 
$baglanti=mysqli_connect("localhost","root","","ilyass");
$baglanti->set_charset("utf8");
$sql="SELECT şubeler.şube_id,şubeler.şubeadı, SUM(üye.abo_id*100) AS toplams FROM şubeler,üye,abonelik WHERE şubeler.şube_id=üye.şube_id AND üye.abo_id=abonelik.abo_id GROUP BY şubeler.şube_id";

$sorgu=mysqli_query($baglanti,$sql);

while( $sonuc=mysqli_fetch_array($sorgu,MYSQLI_ASSOC) ){
	echo '<tr>';
	echo "<td align='center' bgcolor=#B3C7D6>"."<font >".$sonuc["şube_id"]."</td>";
	echo "<td align='center' bgcolor=#B3C7D6>"."<font >".$sonuc["şubeadı"]."</td>";
	echo "<td align='center' bgcolor=#B3C7D6>"."<font >".$sonuc["toplams"]." "."</td>";	
	echo '</tr>';
	
	
	
	

 }

?>


<br>
<br>


















</html>


