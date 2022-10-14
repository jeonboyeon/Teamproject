<?php
include "../connect/connect.php";
include "../connect/session.php";
if( isset($_SESSION['userMemberID']) ){ 
    echo "<script>location.href = '../main/main.php';</script>";
    }
?>
<!DOCTYPE html>
<html lang="ko">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>메일 전송</title>
    <link rel="stylesheet" href="../assets/css/common.css">
    <link rel="stylesheet" href="../assets/css/reset.css">
    <link rel="stylesheet" href="../assets/css/fonts.css" />
    <link rel="stylesheet" href="../assets/css/BY_login.css" />
</head>
<body>
<?php include "../include/header.php" ?>
<!-- header -->
        <main id="main">
            <div class="main_wrap">
                <section class="login_wrap">
                    <div class="login_inner container">
                        <?php
                            $userEmail = $_POST['youEmail'];
                            $userEmail = $connect -> real_escape_string(trim($userEmail));
                            $sql = "SELECT userId, userEmail FROM userMember WHERE userEmail ='$userEmail'";
                            $result = $connect -> query($sql);
                            if($result){
                                echo " <div class='login_Box'>
                                <figure>
                                    <img src='/assets/image/Congratulations_bg.png' alt='회원가입 축하 이미지' />
                                </figure>
                                <p>메일을 전송했습니다.</p>
                                <span>
                                    $userEmail 에 메일을 보냈습니다. <br />
                                    저희 IT.D 사이트는 <br />
                                    다양한 이미지 다운로드 기능을 무료로 제공해드리고 있습니다. <br />
                                    외에도 앞으로 다양한 기능이 추가되고 이벤트도 있으니 <br />
                                    많은 방문 부탁드립니다. <br />
                                </span>
                                <button type='button'>메인으로 이동하기</button>
                            </div>";
                            } else {
                                echo " <div class='login_Box'>
                                <figure>
                                    <img src='/assets/image/Congratulations_bg.png' alt='회원가입 축하 이미지' />
                                </figure>
                                <p>에러 발생</p>
                                <span>
                                    에러가 발생되었습니다.
                                </span>
                                <button type='button'>메인으로 이동하기</button>
                            </div>";
                            }
                        ?>
                        <!-- <div class="login_Box">
                            <figure>
                                <img src="/assets/image/Congratulations_bg.png" alt="회원가입 축하 이미지" />
                            </figure>
                            <p>회원가입을 축하합니다!</p>
                            <span>
                                *** 님의 회원가입을 축하드립니다! <br />
                                저희 IT.D 사이트는 <br />
                                다양한 이미지 다운로드 기능을 무료로 제공해드리고 있습니다. <br />
                                외에도 앞으로 다양한 기능이 추가되고 이벤트도 있으니 <br />
                                많은 방문 부탁드립니다. <br />
                                다시 한 번 회원가입을 축하드립니다!
                            </span>
                            <button type="button">메인으로 이동하기</button>
                        </div> -->
                    </div>
                </section>
            </div>
        </main>
        <!-- main -->
        <?php include "../include/footer.php" ?>
        <!-- footer -->
    </body>
</html>