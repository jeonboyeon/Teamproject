<?php
    include "../connect/connect.php";

    $sql = "CREATE TABLE userMember (";
    $sql .= "userMemberID int(10) unsigned NOT NULL auto_increment,";
    $sql .= "userID varchar(40) NOT NULL,";
    $sql .= "userEmail varchar(40) NOT NULL,";
    $sql .= "userName varchar(10) NOT NULL,";
    $sql .= "userPass varchar(40) NOT NULL,";
    $sql .= "userNickName varchar(10) NOT NULL,";
    $sql .= "userPhone varchar(20) NOT NULL,";
    $sql .= "regTime int(20) NOT NULL,";
    $sql .= "PRIMARY KEY (userMemberID)";
    $sql .= ") charset=utf8;";

    $connect -> query($sql);
?>