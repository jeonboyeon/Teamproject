<?php 
    include "../connect/session.php";
    include "../connect/connect.php";

    if(!isset($_SESSION['userMemberID']) ){ 
        echo "<script>window.alert('잘못된접근입니다.'); location.href = '../main/main.php';</script>";
        }
    
    $comment = $_POST['comment'];
    $feedBackBoardId = $_POST['feedBackBoardID'];
    
    $comment = $connect -> real_escape_string(trim($comment));
    $feedBackBoardId = $connect -> real_escape_string(trim($feedBackBoardId));

    $regTime = time();
    $userMemberID = $_SESSION['userMemberID'];

    $sql = "INSERT INTO feedBackComment(feedBackBoardID, userMemberID, comment, regTime) VALUES('$feedBackBoardId', '$userMemberID', '$comment', '$regTime');";
    // echo $sql;
    $connect -> query($sql);  
    echo "<script>location.replace('feedBackBoardView.php?feedBackBoardID=$feedBackBoardId')</script>";
?>
