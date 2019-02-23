<?php
 $user = $_POST["username"]; 
 $pass = $_POST["password"]; 
    if ($user == "PUPUT" && $pass == "321") {     
            echo "Login Berhasil"; 
        } else {     
            echo "Login Gagal";
        } 
?> 