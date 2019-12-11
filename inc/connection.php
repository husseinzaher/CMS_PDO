
 <?php
 $host = 'localhost';
 $dbname = 'cms';
 $user = 'root';
 $pass = '';

 try {
  $pdo = new PDO("mysql:host=$host;dbname=$dbname;", $user, $pass);
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_SILENT);
 } catch (PDOException $err) {
  echo $err->getMessage();
 }


 ?>