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
            $hostname = "localhost";
            $username = "dai";
            $password = "dai1226";
            $dbtype = "mysql";
            $dbname = "sampledb";
            
            $dsn = "$dbtype:host=$hostname;dbname=$dbname;charset=utf8";
            
            $search_key = "%" . $_POST["search_key"] . "%";
            
            try{
                $pdo = new PDO($dsn, $username, $password);
                $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
            } catch (Exception $ex) {
                die( 'コネクションエラー:' . $ex->getMessage());
            }
            
            try{
                $sql = "select * from member where last_name like :last_name or first_name like :first_name";
                $stmh = $pdo->prepare($sql);
                $stmh->bindValue(":first_name", $search_key, PDO::PARAM_STR);
                $stmh->bindValue(":last_name", $search_key, PDO::PARAM_STR);
                $stmh->execute();
                $count = $stmh->rowCount();
                print "検索結果は" . $count . "件です" . "<br>";
                
            } catch (PDOException $ex) {
                print "けん作エラー: " . $ex->getMessage();
            }
            if( $count == 0){
                print "検索結果がありません";
            }
            else{
        ?>
        <form name='update_target' method='post' action='updateform.php'>
            <table id="search_result">
                <tbody>
                    <tr>
                        <th>番号</th>
                        <th>氏</th>
                        <th>名</th>
                        <th>年齢</th>
                    
                    </tr>
        <?php
                $i = 0;
                while( $row = $stmh->fetch(PDO::FETCH_ASSOC)){
                    $member = "member[" . $i . "]";
                    $id = "id[" . $i . "]";
        ?>
                    <tr>
                        <td>
                            <?= htmlspecialchars($row['id']) ?>
                        </td>
                        <td>
                            <?=                htmlspecialchars($row['last_name']) ?>
                        </td>
                        <td>
                            <?=                htmlspecialchars($row['first_name']) ?>
                        </td>
                        <td>
                            <?=                htmlspecialchars($row['age']) ?>
                        </td>
                        <td>
                            <input type="submit" name="<?=$member?>" value ="変更">
                            <input type="hidden" name="<?=$id?>" value="<?=$row['id']?>">
                        </td>
        <?php
                    $i++;
                }
        ?>
                    </tbody>
            </table>
        </form>
        <?php
            }
        ?>
    </body>
</html>
