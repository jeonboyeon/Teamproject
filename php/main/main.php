<?php
include "../connect/connect.php";
include "../connect/session.php";
?>
<!DOCTYPE html>
<html lang="ko">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>IT.D | 무료 이미지 다운로드 사이트</title>

        <!-- CSS 링크 -->
        <link rel="stylesheet" href="/assets/css/common.css" />
        <link rel="stylesheet" href="/assets/css/fonts.css" />
        <link rel="stylesheet" href="/assets/css/reset.css" />
        <link rel="stylesheet" href="/assets/css/main.css" />
    </head>
    <body>
        <?php include "../include/header.php" ?>
        <!-- header -->
        <main id="main">
            <div class="main_wrap">
                <div class="main_inner">
                    <section class="main_banner">
                        <div class="banner_inner container">
                            <div class="banner">
                                <div class="banner__text">
                                    안녕하세요!<br />
                                    <em>IT.D</em> 사이트에 오신 것을 환영합니다.
                                    <p>
                                        어떤 문구를 써야할지 잘 모르겠어요.<br />
                                        문구를 잘쓸 수 있는 팀원이 있다면 이 공간을 채워주시길 바랍니다.<br />
                                        문구 쓰기 너무 힘드네요.
                                    </p>
                                </div>
                                <div class="banner__bg">
                                    <figure>
                                        <img src="../assets/image/banner_bg01.png" alt="배너 이미지" />
                                    </figure>
                                </div>
                            </div>
                        </div>
                    </section>

                    <section class="main_card container">
                        <article class="main_cardBox">
                            <div class="main_image">
                                <figure>
                                    <a href="#"><img src="/assets/image/main_image01.jpg" alt="이미지" /></a>
                                </figure>
                            </div>
                            <div class="main_info">
                                <div class="mainInfo_left">
                                    <figure>
                                        <a href="#"><img src="/assets/image/profile_ico.png" alt="프로필 이미지" /></a>
                                    </figure>
                                    <div class="mainInfo_title">
                                        <h3><a href="#">이미지 제목</a></h3>
                                        <span>크리에이터 이름</span>
                                    </div>
                                </div>

                                <div class="mainInfo_right">
                                    <figure>
                                        <img src="/assets/image/comment_ico.svg" alt="댓글뷰 이미지" />
                                    </figure>
                                    <span>20</span>
                                    <figure>
                                        <img src="/assets/image/view_ico.svg" alt="댓글뷰 이미지" />
                                    </figure>
                                    <span>12</span>
                                </div>
                            </div>
                            <img src="/assets/image/heartBasic_ico.svg" alt="공감 아이콘" />
                        </article>
                        <article class="main_cardBox">
                            <div class="main_image">
                                <figure>
                                    <a href="#"><img src="/assets/image/main_image02.jpg" alt="이미지" /></a>
                                </figure>
                            </div>
                            <div class="main_info">
                                <div class="mainInfo_left">
                                    <figure>
                                        <a href="#"><img src="/assets/image/profile_ico.png" alt="프로필 이미지" /></a>
                                    </figure>
                                    <div class="mainInfo_title">
                                        <h3><a href="#">이미지 제목</a></h3>
                                        <span>크리에이터 이름</span>
                                    </div>
                                </div>

                                <div class="mainInfo_right">
                                    <figure>
                                        <img src="/assets/image/comment_ico.svg" alt="댓글뷰 이미지" />
                                    </figure>
                                    <span>20</span>
                                    <figure>
                                        <img src="/assets/image/view_ico.svg" alt="댓글뷰 이미지" />
                                    </figure>
                                    <span>12</span>
                                </div>
                            </div>
                            <img src="/assets/image/heartBasic_ico.svg" alt="공감 아이콘" />
                        </article>
                        <article class="main_cardBox">
                            <div class="main_image">
                                <figure>
                                    <a href="#"><img src="/assets/image/main_image03.jpg" alt="이미지" /></a>
                                </figure>
                            </div>
                            <div class="main_info">
                                <div class="mainInfo_left">
                                    <figure>
                                        <a href="#"><img src="/assets/image/profile_ico.png" alt="프로필 이미지" /></a>
                                    </figure>
                                    <div class="mainInfo_title">
                                        <h3><a href="#">이미지 제목</a></h3>
                                        <span>크리에이터 이름</span>
                                    </div>
                                </div>

                                <div class="mainInfo_right">
                                    <figure>
                                        <img src="/assets/image/comment_ico.svg" alt="댓글뷰 이미지" />
                                    </figure>
                                    <span>20</span>
                                    <figure>
                                        <img src="/assets/image/view_ico.svg" alt="댓글뷰 이미지" />
                                    </figure>
                                    <span>12</span>
                                </div>
                            </div>
                            <img src="/assets/image/heartBasic_ico.svg" alt="공감 아이콘" />
                        </article>
                        <article class="main_cardBox">
                            <div class="main_image">
                                <figure>
                                    <a href="#"><img src="/assets/image/main_image04.jpg" alt="이미지" /></a>
                                </figure>
                            </div>
                            <div class="main_info">
                                <div class="mainInfo_left">
                                    <figure>
                                        <a href="#"><img src="/assets/image/profile_ico.png" alt="프로필 이미지" /></a>
                                    </figure>
                                    <div class="mainInfo_title">
                                        <h3><a href="#">이미지 제목</a></h3>
                                        <span>크리에이터 이름</span>
                                    </div>
                                </div>

                                <div class="mainInfo_right">
                                    <figure>
                                        <img src="/assets/image/comment_ico.svg" alt="댓글뷰 이미지" />
                                    </figure>
                                    <span>20</span>
                                    <figure>
                                        <img src="/assets/image/view_ico.svg" alt="댓글뷰 이미지" />
                                    </figure>
                                    <span>12</span>
                                </div>
                            </div>
                            <img src="/assets/image/heartBasic_ico.svg" alt="공감 아이콘" />
                        </article>
                        <article class="main_cardBox">
                            <div class="main_image">
                                <figure>
                                    <a href="#"><img src="/assets/image/main_image05.jpg" alt="이미지" /></a>
                                </figure>
                            </div>
                            <div class="main_info">
                                <div class="mainInfo_left">
                                    <figure>
                                        <a href="#"><img src="/assets/image/profile_ico.png" alt="프로필 이미지" /></a>
                                    </figure>
                                    <div class="mainInfo_title">
                                        <h3><a href="#">이미지 제목</a></h3>
                                        <span>크리에이터 이름</span>
                                    </div>
                                </div>

                                <div class="mainInfo_right">
                                    <figure>
                                        <img src="/assets/image/comment_ico.svg" alt="댓글뷰 이미지" />
                                    </figure>
                                    <span>20</span>
                                    <figure>
                                        <img src="/assets/image/view_ico.svg" alt="댓글뷰 이미지" />
                                    </figure>
                                    <span>12</span>
                                </div>
                            </div>
                            <img src="/assets/image/heartBasic_ico.svg" alt="공감 아이콘" />
                        </article>
                        <article class="main_cardBox">
                            <div class="main_image">
                                <figure>
                                    <a href="#"><img src="/assets/image/main_image06.jpg" alt="이미지" /></a>
                                </figure>
                            </div>
                            <div class="main_info">
                                <div class="mainInfo_left">
                                    <figure>
                                        <a href="#"><img src="/assets/image/profile_ico.png" alt="프로필 이미지" /></a>
                                    </figure>
                                    <div class="mainInfo_title">
                                        <h3><a href="#">이미지 제목</a></h3>
                                        <span>크리에이터 이름</span>
                                    </div>
                                </div>

                                <div class="mainInfo_right">
                                    <figure>
                                        <img src="/assets/image/comment_ico.svg" alt="댓글뷰 이미지" />
                                    </figure>
                                    <span>20</span>
                                    <figure>
                                        <img src="/assets/image/view_ico.svg" alt="댓글뷰 이미지" />
                                    </figure>
                                    <span>12</span>
                                </div>
                            </div>
                            <img src="/assets/image/heartBasic_ico.svg" alt="공감 아이콘" />
                        </article>
                        <article class="main_cardBox">
                            <div class="main_image">
                                <figure>
                                    <a href="#"><img src="/assets/image/main_image07.jpg" alt="이미지" /></a>
                                </figure>
                            </div>
                            <div class="main_info">
                                <div class="mainInfo_left">
                                    <figure>
                                        <a href="#"><img src="/assets/image/profile_ico.png" alt="프로필 이미지" /></a>
                                    </figure>
                                    <div class="mainInfo_title">
                                        <h3><a href="#">이미지 제목</a></h3>
                                        <span>크리에이터 이름</span>
                                    </div>
                                </div>

                                <div class="mainInfo_right">
                                    <figure>
                                        <img src="/assets/image/comment_ico.svg" alt="댓글뷰 이미지" />
                                    </figure>
                                    <span>20</span>
                                    <figure>
                                        <img src="/assets/image/view_ico.svg" alt="댓글뷰 이미지" />
                                    </figure>
                                    <span>12</span>
                                </div>
                            </div>
                            <img src="/assets/image/heartBasic_ico.svg" alt="공감 아이콘" />
                        </article>
                        <article class="main_cardBox">
                            <div class="main_image">
                                <figure>
                                    <a href="#"><img src="/assets/image/main_image08.jpg" alt="이미지" /></a>
                                </figure>
                            </div>
                            <div class="main_info">
                                <div class="mainInfo_left">
                                    <figure>
                                        <a href="#"><img src="/assets/image/profile_ico.png" alt="프로필 이미지" /></a>
                                    </figure>
                                    <div class="mainInfo_title">
                                        <h3><a href="#">이미지 제목</a></h3>
                                        <span>크리에이터 이름</span>
                                    </div>
                                </div>

                                <div class="mainInfo_right">
                                    <figure>
                                        <img src="/assets/image/comment_ico.svg" alt="댓글뷰 이미지" />
                                    </figure>
                                    <span>20</span>
                                    <figure>
                                        <img src="/assets/image/view_ico.svg" alt="댓글뷰 이미지" />
                                    </figure>
                                    <span>12</span>
                                </div>
                            </div>
                            <img src="/assets/image/heartBasic_ico.svg" alt="공감 아이콘" />
                        </article>
                        <article class="main_cardBox">
                            <div class="main_image">
                                <figure>
                                    <a href="#"><img src="/assets/image/main_image09.jpg" alt="이미지" /></a>
                                </figure>
                            </div>
                            <div class="main_info">
                                <div class="mainInfo_left">
                                    <figure>
                                        <a href="#"><img src="/assets/image/profile_ico.png" alt="프로필 이미지" /></a>
                                    </figure>
                                    <div class="mainInfo_title">
                                        <h3><a href="#">이미지 제목</a></h3>
                                        <span>크리에이터 이름</span>
                                    </div>
                                </div>

                                <div class="mainInfo_right">
                                    <figure>
                                        <img src="/assets/image/comment_ico.svg" alt="댓글뷰 이미지" />
                                    </figure>
                                    <span>20</span>
                                    <figure>
                                        <img src="/assets/image/view_ico.svg" alt="댓글뷰 이미지" />
                                    </figure>
                                    <span>12</span>
                                </div>
                            </div>
                            <img src="/assets/image/heartBasic_ico.svg" alt="공감 아이콘" />
                        </article>
                        <article class="main_cardBox">
                            <div class="main_image">
                                <figure>
                                    <a href="#"><img src="/assets/image/main_image10.jpg" alt="이미지" /></a>
                                </figure>
                            </div>
                            <div class="main_info">
                                <div class="mainInfo_left">
                                    <figure>
                                        <a href="#"><img src="/assets/image/profile_ico.png" alt="프로필 이미지" /></a>
                                    </figure>
                                    <div class="mainInfo_title">
                                        <h3><a href="#">이미지 제목</a></h3>
                                        <span>크리에이터 이름</span>
                                    </div>
                                </div>

                                <div class="mainInfo_right">
                                    <figure>
                                        <img src="/assets/image/comment_ico.svg" alt="댓글뷰 이미지" />
                                    </figure>
                                    <span>20</span>
                                    <figure>
                                        <img src="/assets/image/view_ico.svg" alt="댓글뷰 이미지" />
                                    </figure>
                                    <span>12</span>
                                </div>
                            </div>
                            <img src="/assets/image/heartBasic_ico.svg" alt="공감 아이콘" />
                        </article>
                        <article class="main_cardBox">
                            <div class="main_image">
                                <figure>
                                    <a href="#"><img src="/assets/image/main_image11.jpg" alt="이미지" /></a>
                                </figure>
                            </div>
                            <div class="main_info">
                                <div class="mainInfo_left">
                                    <figure>
                                        <a href="#"><img src="/assets/image/profile_ico.png" alt="프로필 이미지" /></a>
                                    </figure>
                                    <div class="mainInfo_title">
                                        <h3><a href="#">이미지 제목</a></h3>
                                        <span>크리에이터 이름</span>
                                    </div>
                                </div>

                                <div class="mainInfo_right">
                                    <figure>
                                        <img src="/assets/image/comment_ico.svg" alt="댓글뷰 이미지" />
                                    </figure>
                                    <span>20</span>
                                    <figure>
                                        <img src="/assets/image/view_ico.svg" alt="댓글뷰 이미지" />
                                    </figure>
                                    <span>12</span>
                                </div>
                            </div>
                            <img src="/assets/image/heartBasic_ico.svg" alt="공감 아이콘" />
                        </article>
                        <article class="main_cardBox">
                            <div class="main_image">
                                <figure>
                                    <a href="#"><img src="/assets/image/main_image12.jpg" alt="이미지" /></a>
                                </figure>
                            </div>
                            <div class="main_info">
                                <div class="mainInfo_left">
                                    <figure>
                                        <a href="#"><img src="/assets/image/profile_ico.png" alt="프로필 이미지" /></a>
                                    </figure>
                                    <div class="mainInfo_title">
                                        <h3><a href="#">이미지 제목</a></h3>
                                        <span>크리에이터 이름</span>
                                    </div>
                                </div>

                                <div class="mainInfo_right">
                                    <figure>
                                        <img src="/assets/image/comment_ico.svg" alt="댓글뷰 이미지" />
                                    </figure>
                                    <span>20</span>
                                    <figure>
                                        <img src="/assets/image/view_ico.svg" alt="댓글뷰 이미지" />
                                    </figure>
                                    <span>12</span>
                                </div>
                            </div>
                            <img src="/assets/image/heartBasic_ico.svg" alt="공감 아이콘" />
                        </article>
                    </section>
                </div>
            </div>
        </main>
        <!-- main -->
        <?php include "../include/footer.php" ?>
        <!-- footer -->
        
        <!-- // footer -->

        <!-- 스크립트 -->
        <script>
            const heartBtn = document.querySelectorAll(".main_card .main_cardBox > img");
            // console.log(heartBtn); clg 확인 완료

            heartBtn.forEach((heart, num) => {
                // console.log(num);
                heart.addEventListener("click", () => {
                    heartBtn[num].classList.toggle("show");
                });
            });
        </script>
       
    </body>
</html>
