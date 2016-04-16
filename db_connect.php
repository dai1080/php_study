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
        // put your code here
            try{
                $pdo = new PDO( 'mysql:host=localhost;dbname=sampledb;charset=utf8',
                    'dai','dai1226');
                $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
            
                print "dbに接続しました";
            }
            catch( PDOException $exception){
                die('接続エラー:' . $exception->getMessage());
            }
            
            $pdo = null;
        ?>
    </body>
</html>
