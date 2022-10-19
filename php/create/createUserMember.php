<?php
    include "../connect/connect.php";

    $sql = "CREATE TABLE userMember (";
    $sql .= "userMemberID int(10) unsigned NOT NULL auto_increment,";
    $sql .= "userID varchar(40) NOT NULL,";
    $sql .= "userName varchar(10) NOT NULL,";
    $sql .= "userEmail varchar(40) NOT NULL,";
    $sql .= "userPass varchar(40) NOT NULL,";
    $sql .= "userNickName varchar(10) DEFAULT NULL,";
    $sql .= "userBirth varchar(40) DEFAULT NULL,";
    $sql .= "userGender enum('남자', '여자') DEFAULT NULL,";
    $sql .= "userPhoto varchar(10) DEFAULT NULL,";
    $sql .= "userPhone varchar(20) DEFAULT NULL,";
    $sql .= "regTime int(20) NOT NULL,";
    $sql .= "PRIMARY KEY (userMemberID)";
    $sql .= ") charset=utf8;";

    $connect -> query($sql);
?>