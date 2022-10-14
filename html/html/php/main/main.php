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

        <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
        <script type="text/javascript">
            $(document).ready(function () {
                $(".btn-sidebar").click(function () {
                    $(".sidebar").toggleClass("active");
                    $(".btn-sidebar").toggleClass("toggle");
                });
            });
        </script>
    </head>
    <body>
        <?php include "../include/header.php" ?>
        <!-- header -->
        <main id="main">
            <div class="main_wrap">
                <div class="main_inner">
                    <section class="main_banner">
                        <div class="banner_inner">
                            <div class="banner"></div>
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
        <script>
            $(document).ready(function () {
                $("#search").focus(function () {
                    $(".search-box").addClass("border-searching");
                    $(".search-icon").addClass("si-rotate");
                });
                $("#search").blur(function () {
                    $(".search-box").removeClass("border-searching");
                    $(".search-icon").removeClass("si-rotate");
                });
                $("#search").keyup(function () {
                    if ($(this).val().length > 0) {
                        $(".go-icon").addClass("go-in");
                    } else {
                        $(".go-icon").removeClass("go-in");
                    }
                });
                $(".go-icon").click(function () {
                    $(".search-form").submit();
                });
            });
        </script>
        <!-- 스크립트 -->
    </body>
</html>
