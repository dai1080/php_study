 <!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>登録</title>
    </head>
    <body>
        <?php
        // put your code here
            $hostname = "localhost";
            $username = "dai";
            $password = "dai1226";
            $dbtype = "mysql";
            $dbname = "sampledb";
            
            $dsn = "$dbtype:host=$hostname;dbname=$dbname;charset=utf8";
            
            try{
                $pdo = new PDO($dsn, $username, $password);
                $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
            } catch (Exception $ex) {
                die( 'コネクションエラー:' . $ex->getMessage());
            }
            
            try{
                $pdo->beginTransaction();
                $sql = "INSERT INTO member( last_name, first_name, age)"
                        . " VALUES( :last_name, :first_name, :age)";
                $stmh = $pdo->prepare($sql);
                $stmh->bindValue(':last_name', $_POST['last_name'],
                        PDO::PARAM_STR);
                $stmh->bindValue(':first_name', $_POST['first_name'],
                        PDO::PARAM_STR);
                $stmh->bindValue(':age', $_POST['age'],
                        PDO::PARAM_INT);
                $stmh->execute();
                $pdo->commit();
                print "データを" . $stmh->rowCount() . "件 挿入完了";
                
            } catch (Exception $ex) {
                $pdo->rollBack();
                print "エラー発生：" . $ex->getMessage();
            }
            
        ?>
    </body>
</html>
