<?php
    if(isset($_POST["id"]))
    {
        $answer="";
        $db = mysqli_connect("localhost", "u67295", "9463358", "u67295");
        if (!$db) {
            die('Error connecting to database: ' . mysqli_connect_error());
        }
        mysqli_set_charset($db, 'utf8');
        $id=$_POST["id"];
        $db->query("DELETE FROM newUser_lengs WHERE user_id = '$id'");
        $db->query("DELETE FROM newUsers WHERE id = '$id'");
        $answer="Успешно удалено";
        header("Location: admin.php");
    }
?>
