<!DOCTYPE html>
<html lang="en">
  <head>
  <meta charset="UTF-8">
    <title>KELER SATRANÇ KLÜBÜ</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<link href="style.css" rel="stylesheet">
  </head>
  <?php
  $bağlanti = mysqli_connect("localhost", "root", "", "ilyass");

// Check connection
if (!$bağlanti) {
    die("Connection failed: " . mysqli_connect_error());
}

if (isset($_POST['giriş'])) {
    $Eposta = mysqli_real_escape_string($bağlanti, $_POST['Eposta']);
    $Şifre = mysqli_real_escape_string($bağlanti, $_POST['Şifre']);

    // Select the user's information from the database
    $query = "SELECT * FROM 'admin' WHERE Eposta = '$Eposta' AND Şifre = '$Şifre'";
    $result = mysqli_query($bağlanti, $query);

    if (mysqli_num_rows($result) == 1) {
        // Login successful, create a session variable to store the user's information
        $admin = mysqli_fetch_assoc($result);
        $_SESSION['Eposta'] = $Eposta['Eposta'];
        $_SESSION['Şifre'] = $Şifre['Şifre'];
        // Redirect the user to the protected page
        header("Location: anasayfa.php");
        exit;
    } else {
        // Login failed, display an error message
        $error = "Kullanıcı Bulunamadı";
    }
}

?>
  <body>
  <img src="images/41.png"  width="1000" height="550">
    <div class="container">
      <div class="panel">
        <h2>YÖNETİCİ GİRİŞİ</h2>
        
        <div class="form">
          <form action="anasayfa.php" method="post" >
            <input
              type="varchar"
              name="Eposta"
              class="Eposta"
              placeholder="Eposta"
            />
            <br />
            <input
              type="password"
              name="Şifre"
              class="Şifre"
              placeholder="Şifre"
            />
            <br />
            <button>Giriş</button>
            
          </form>
        </div>
      </div>
    </div>
    
  </body>
</html>
