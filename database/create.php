<?php
    $servername="localhost";
    $username="root";
    $password= "";
    exit;
    ///////////////////////CONNECT///////////////////////
    // try {
    //     $conn = new PDO("mysql:host=$servername;", $username, $password);
    //     $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //     echo "CONNECTED -> OK<br>";
    // } catch(PDOException $e) {
    //     die ("Error:" . $e->getMessage());
    // }
    
    // // ///////////////////////CREATE DB///////////////////////
    // try {
    //     $sql = "CREATE DATABASE impresiones3D";
    //     $conn->exec($sql);
    //     echo "CREATED DB -> OK<br>";
    // } catch(PDOException $e) {
    //     die ("Error:" . $e->getMessage());
    // }
    

    // // ///////////////////////CONNECT DB///////////////////////
    // $conn->exec("USE impresiones3D");
    // echo "SELECT -> OK<br>";
    
    
    // // ///////////////////////CREATE TABLE///////////////////////
    // try {
    // $sql = "CREATE TABLE users (
    //     id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    //     username VARCHAR(10) NOT NULL,
    //     password VARCHAR(255) NOT NULL,
    //     count_files INT UNSIGNED DEFAULT 0,
    //     date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
    // )";
    //     $conn->exec($sql);
    //     echo "TABLE users CREATED -> OK<br>";
    // } catch(PDOException $e) {
    //     die ("Error:" . $e->getMessage());
    // }
    
    //     try {
    //     $sql = "CREATE TABLE user_telegram (
    //         id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    //         username VARCHAR(20) NOT NULL,
    //         chatid INT(11) NOT NULL,
    //         registered BOOLEAN DEFAULT FALSE,
    //         user_id INT(11) UNSIGNED UNIQUE,
    //         FOREIGN KEY (user_id) REFERENCES users(id)
    //     )";
    //     $conn->exec($sql);
    //     echo "TABLE user_telegram CREATED -> OK<br>";
    // } catch(PDOException $e) {
    //     die ("Error:" . $e->getMessage());
    // }

    // try {
    //         $sql = "CREATE TABLE files_telegram (
    //             id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    //             file_id CHAR(100) UNIQUE NOT NULL,
    //             user_id INT(11) UNSIGNED,
    //             FOREIGN KEY (user_id) REFERENCES users(id)
    //         )";
    //         $conn->exec($sql);
    //         echo "TABLE files_telegram CREATED -> OK<br>";
    //     } catch(PDOException $e) {
    //         die ("Error:" . $e->getMessage());
    //     }

    // // ///////////////////////INSERT TABLE///////////////////////
    // $sql="INSERT INTO users (username,password) VALUES (:u,:p)";
    // $query=$conn->prepare($sql);
    // if($query->execute([":u"=> "ernesto","p"=> "12345678"]))
    //     echo "CREATED ESTEBAN -> OK<br>";
    // else
    //     echo "NO CREATED ESTEBAN -> X<br>";
    
    // $sql="INSERT INTO user_telegram (username,user_id) VALUES (:un,:ui)";
    // $query=$conn->prepare($sql);
    // if($query->execute([":un"=> "@EstebanACB2","ui"=> 1]))
    //     echo "INSERT USER TELEGRAM -> OK<br>";
    // else
    //     echo "NO USER TELEGRAM -> X<br>";

    // $sql="INSERT INTO telegram_code (code,user_id) VALUES (:c,:ui)";
    // $query=$conn->prepare($sql);
    // if($query->execute([":c"=> "AC4RT","ui"=> 1]))
    //     echo "INSERT CODE -> OK<br>";
    // else
    //     echo "NO INSERT CODE -> X<br>";

    // ///////////////////////SELECT///////////////////////
    // $sql="SELECT id,username FROM users ";
    // $query=$conn->prepare($sql);
    // $query->execute([":u"=> "esteban"]);
    // if ($query->rowCount()> 0) {
    //     while($row=$query->fetch(PDO::FETCH_ASSOC)){
    //         echo $row['id'];
    //         echo $row['username'];
    //     }
    // }

    // ///////////////////////DELETE///////////////////////
    // $sql="DELETE FROM telegram_code WHERE user_id=:ui";
    // $query=$conn->prepare($sql);
    // if($query->execute(["ui"=> 1]))
    //     echo "DELETE  TELEGRAM CODE -> OK<br>";
    // else
    //     echo "NO DELETE TELEGRAM CODE -> X<br>";
    
    // ///////////////////////UPDATE///////////////////////
    // $sql="UPDATE users SET count = 0 WHERE id=:i";
    // $query=$conn->prepare($sql);
    // if($query->execute([":i"=> $file_id]))
    //     echo "UPDATE  -> OK<br>";
    // else
    //     echo "NO UPDATE  -> X<br>";

    // ///////////////////////ALLTER///////////////////////
    // $sql="ALTER TABLE users ADD count_files INT UNSIGNED DEFAULT 0";
    // $sql="ALTER TABLE mi_tabla CHANGE campo_antiguo campo_nuevo tipo_dato;";
    // $qlp="ALTER TABLE nombre_tabla MODIFY file_id CHAR(100) UNIQUE NOT NULL;"
    // $sql="ALTER TABLE mi_tabla DROP COLUMN campo_antiguo;";
    // $query=$conn->prepare($sql);
    // if($query->execute())
    //     echo "ALLTER -> OK<br>";
    // else
    //     echo "NO ALLTER -> X<br>";



    
?>