
<!DOCTYPE html>
<html>
<head>
<title>KELER SATRANÇ KULÜBÜ</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script><style>
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
    background: #003366;
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
	    <div class="bune" >
		<form action="ürüngetir.php" method="POST">
		<b>
		<table align="center" border="0" width="400" height="200">
		<tr>
		<td></td>
		<td> <center>
		<font  size="4" color=#003366 > <i> ŞUBE EKLE </i></font>
		</center>
		</td>
		</tr>

		<tr>
        <td> <font  size="4" color=#003366>ŞUBE ADI:</font></td>
        <td align="right"><input type="text" name ="subeadi" style="width:200px; height:30px; border-style:none;background:#B3C7D6;"/></td>
		</tr>
		
		<tr>
		<td></td>
		<td align="right"> <input type="submit" value="Kaydet" style="width:204px; height:30px; border-style:none; background:#003366; color:white; "/> 
		</td>
		
		</table>	
		</b>
		</form>

		<form action="ürüngetir.php" method="POST">
			<input type="text" name ="subeadi"/>
			<input type="submit" value="Kaydet"/> 
		</form>
		</div>
		
		
		
		
		<div class="bune">
		<form action="calisan.php" method="POST">
		<b>
		<table align="center" border="0" width="400" height="200">
		<tr>
		<td></td>
		<td> <center>
		<font size="4" color=#003366> <i> ÇALIŞAN EKLE </i></font>
		</center>
		</td>
		</tr>
		<tr>
        <td> <font size="4" color=#003366>ÇALIŞAN UKD: </font> </td>
        <td align="right"><input type="text" name ="calisan_id" style="width:200px; height:30px; border-style:none;background:#B3C7D6;"/></td>
		</tr>
		<tr>
        <td> <font size="4" color=#003366>ÇALIŞAN AD:</font></td>
        <td align="right"><input type="text" name ="calisan_ad" style="width:200px; height:30px; border-style:none;background:#B3C7D6;"/></td>
		</tr>
		<tr>
        <td><font size="4" color=#003366>ÇALIŞAN SOYAD:</font><br></td>
        <td align="right"><input  type="text" name ="calisan_soyad" style="width:200px; height:30px; border-style:none; background:#B3C7D6;"/></td>
		</tr>
		<tr>
        <td><font size="4" color=#003366>ÇALIŞAN TEL:</font><br></td>
        <td align="right"><input  type="text" name ="calisan_tel" style="width:200px; height:30px; border-style:none; background:#B3C7D6;"/></td>
		</tr>
		<tr>
        <td><font size="4" color=#003366>ŞUBE İD:</font><br></td>
        <td align="right"><input  type="text" name ="sube_id" style="width:200px; height:30px; border-style:none; background:#B3C7D6;"/></td>
		</tr>
		<tr>
        <td><font size="4" color=#003366>CİNSİYET İD:</font><br></td>
        <td align="right"><input  type="text" name ="cinsiyet_id" style="width:200px; height:30px; border-style:none; background:#B3C7D6;"/></td>
		</tr>
		<tr>
		<td></td>
		<td align="right"> <input type="submit" value="Kaydet" style="width:204px; height:30px; border-style:none; background:#003366; color:white; "/> 
		</td>
		
		</table>	
		</b>
		</form>
		</div>
		
		
		<div class="bune">
		<form action="kontrol.php" method="POST">
		<b>
		<table align="center" border="0" width="400" height="200">
		<tr>
		<td></td>
		<td> <center>
		<font size="4" color=#003366> <i> SPORCU EKLE </i></font>
		</center>
		</td>
		</tr>
		<tr>
        <td> <font color=#003366 size="4">SPORCU UKD: </font> </td>
        <td align="right"><input type="text" name ="uye_id" style="width:200px; height:30px; border-style:none;background:#B3C7D6;"/></td>
		</tr>
		<tr>
        <td> <font color=#003366 size="4">SPORCU AD:</font></td>
        <td align="right"><input type="text" name ="uye_ad" style="width:200px; height:30px; border-style:none;background:#B3C7D6;"/></td>
		</tr>
		<tr>
        <td><font color=#003366 size="4">SPORCU SOYAD:</font><br></td>
        <td align="right"><input  type="text" name ="uye_soyad" style="width:200px; height:30px; border-style:none; background:#B3C7D6;"/></td>
		</tr>
		<tr>
        <td> <font color=#003366 size="4">ŞUBE İD:</font></td>
        <td align="right"><input type="text" name ="sube_id" style="width:200px; height:30px; border-style:none;background:#B3C7D6;"/></td>
		</tr>
		<tr>
        <td><font color=#003366 size="4">ÜCRET:</font><br></td>
        <td align="right"><input  type="text" name ="abonelik_id" style="width:200px; height:30px; border-style:none; background:#B3C7D6;"/></td>
		</tr>
		<tr>
        <td><font color=#003366 size="4">CİNSİYET İD:</font><br></td>
        <td align="right"><input  type="text" name ="cinsiyet_id" style="width:200px; height:30px; border-style:none; background:#B3C7D6;"/></td>
		</tr>
		<tr>
		<td></td>
		<td align="right"> <input type="submit" value="Kaydet" style="width:204px; height:30px; border-style:none; background:#003366; color:white; "/> 
		</td>
		
		</table>	
		</b>
		</form>
		</div>

<br>
	



<br>
<br>
</html>