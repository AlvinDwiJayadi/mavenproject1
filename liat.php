<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <style>
    .logo {
        width: 100px;
        margin-top: 50px;
    }

    .divlogo {
        text-align: center;
    }

    .tengah {
        margin-left: calc(50% - 50px);
    }

    .divlogin {
        text-align: center;
        font-size: 36px;
        font-family: tahoma;
        font-weight: bold;
        color: #0111D6;
    }

    .divform {
        background-color: #0297DA;
        width: 400px;
        padding: 20px;
        margin-left: calc(50% - 220px);
        margin-top: 20px;
        height: 300px;
        border-radius: 10px;
    }

    .txtlogin {
        font-weight: bold;
        font-family: tahoma;
    }

    .divlabel {
        margin-top: 20px;
    }

    .field {
        width: 100%;
        padding: 12px 12px;
        margin: 8px 0;
        display: inline-block;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
    }

    .tombol {
        width: 100%;
        background-color: #0111D6;
        color: white;
        padding: 14px 20px;
        margin: 8px 0;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    }
</style>
</head>
<body>
    <div class="divlogin">
       <h3> Login</h3>
        <?php
            // $servername = "localhost";
            // $username = "root";
            // $password = "";
            // $dbname = "db_mi1ap";
            
            include "koneksi.php";
            
            // Create connection
            $conn = new mysqli($servername, $username, $password, $dbname);
            // Check connection
            if ($conn->connect_error) {
              die("Connection failed: " . $conn->connect_error);
            }
            
            $sql = "SELECT * FROM admin where username='".$_POST["username"]."' and password='".$_POST["password"]."'";
            $result = $conn->query($sql);
            
            if ($result->num_rows > 0) {
                // output data of each row
                while ($row = $result->fetch_assoc()) {
                   // echo "id_admin: ". $row["id_admin"]. " - Username: ". $row["username"]. " - Password: ". $row["password"]. " - No Telp: ". $row["no_telp"]. " - Email: ". $row["email"]. "<br>";
                    echo "<script>
                    window.location.replace('dashboard.php');
                    </script>
                    ";
                }
            } else {
                echo " 
                <script>
                    Swal.fire({
                    title: 'Perhatian!',
                    text: 'Periksa Kembali Username / Password Anda !',
                    icon: 'question'
                  }).then((result) => {
                    if (result.isConfirmed) {
                     window.location.replace('login.html');
                    }
                })
        
                </script>
                ";
            }
            $conn->close();     
        ?>
    </div>    
</body>
</html>