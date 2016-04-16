<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>update</title>
    </head>
    <body>
        <?php
        // put your code here
        require_once 'mydb.php';
            $pdo = db_connect();
            
            $last_name = $_POST['last_name'];
            $first_name = $_POST['first_name'];
            $age = $_POST['age'];
            $id = $_POST['id'];
            
            $count = update_member_info(
                    $pdo, $id, $last_name, $first_name, $age);
            
            print $count . "件を更新しました";
        ?>
    </body>
</html>
