<?php
    session_start();
    include('connection.php');

    if(isset($_POST['login_user'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];

        $sql="SELECT * FROM user WHERE  username='".$username."' AND  password='".$password."' ";
        $result = mysqli_query($conn,$sql);
            
        if (mysqli_num_rows($result) == 1) {
            $row = mysqli_fetch_array($result);

            $_SESSION["user_id"] = $row["user_id"];
            $_SESSION["name"] = $row["name"];
            $_SESSION["lastname"] = $row["lastname"];
            $_SESSION["ID"] = $row["ID"];
            $_SESSION["year"] = $row["year"];
            $_SESSION["train_status"] = $row["train_status"];
            $_SESSION["advisor"] = $row["advisor"];
            $_SESSION["type_id"] = $row["type_id"];
            $_SESSION["petition_id"] = $row["petition_id"];

            if($_SESSION["type_id"]=="1"){
                header("location: index.php");
            }
            if($_SESSION["type_id"]=="2"){
                header("location: index_teacher.php");
            }
            if($_SESSION["type_id"]=="3"){
                header("location: index_admin.php");
            }
        } else{
            echo "<script>";
                echo "alert(\" user or  password is wrong!\");"; 
                echo "window.history.back()";
            echo "</script>";
        }
    
    } else {
        header("location: login.php");
    }
?>