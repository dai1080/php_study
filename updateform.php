<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        require_once("mydb.php");
        $pdo = db_connect();
        // put your code here
        if(isset($_POST['member'])){
            $index = key($_POST['member']);
            $id = $_POST['id'][$index];
            $row = get_member_info($pdo, $id);
        }
            
        ?>
        
        <form name='updateinfo' action='update.php' method="post">
            氏<br>
            <input type="text" name="last_name" value="<?=$row['last_name']?>">
            <br>
            名<br>
            <input type="text" name="first_name" value="<?=$row['first_name']?>">
            <br>
            年齢<br>
            <input type="text" name="age" value="<?=$row['age']?>">
            <br>
            <input type="hidden" name="id" value="<?=$row['id']?>">
            <input type="submit" value="更新">
        </form>
        
    </body>
</html>
