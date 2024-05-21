<?php
$username1=$_POST["username"];
$password1=$_POST["password"];
$no_telp=$_POST["no_telp"];
$email=$_POST["email"];

include "koneksi.php";
$sql = "INSERT INTO admin (username, password, no_telp, email)
VALUES ('".$username1."', '".$password1."', '".$no_telp."', '".$email."')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
  echo "<script>
             window.location.replace('buttons.php');
        </script>
  ";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
//menyimpan ke database menggunakan perintah

?>