<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
function db_connect()
{
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

    return $pdo;
}

function get_member_info( $pdo, $id ){
    $sql = "select * from member where id = :id";
    $stmh = $pdo->prepare($sql);
    $stmh->bindValue(":id", $id, PDO::PARAM_INT);
    $stmh->execute();
    $row = $stmh->fetch(PDO::FETCH_ASSOC);
    return $row;
}

function update_member_info( $pdo, $id, $last_name, $first_name, $age){
    try{
        $pdo->beginTransaction();
        $sql = "update member set
                    first_name = :first_name,
                    last_name = :last_name,
                    age = :age
                    where id = :id";
        $stmh = $pdo->prepare($sql);
        $stmh->bindValue(":first_name", $first_name, PDO::PARAM_STR);
        $stmh->bindValue(":last_name", $last_name, PDO::PARAM_STR);
        $stmh->bindValue(":age", $age, PDO::PARAM_INT);
        $stmh->bindValue(":id", $id, PDO::PARAM_INT);
        $stmh->execute();
        $pdo->commit();
        return $stmh->rowCount();
    }
    catch( PDOException $ex ){
        print "更新エラー発生:" . $ex->getMessage();
    }
    
}

?>
