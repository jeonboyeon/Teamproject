<?php
include "../connect/connect.php";
include "../connect/session.php";
?>
<header id="header">
            <div class="header__wrap">
                <div class="header__inner">
                    <!-- ham -->
                    <div class="toggle">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>

                    <!-- header__top -->
                    <div class="header__top">
                        <div class="headerTop__inner container">
                            <!-- logo -->
                            <div class="logo">
                                <h1>
                                    <a href="../main/main.php">IT.<em>D</em></a>
                                </h1>
                            </div>

                            <!-- nav -->
                            <nav class="header__nav">
                                <?php 
                                    ob_start();

                                    $url = "aaa";
                                    $url .= basename($_SERVER['PHP_SELF']);

                                    if(strpos($url,"boardSearch")){
                                        $url = "aaa";
                                        $url .= $_GET['searchBoard'];
                                    }

                                    if(strpos($url,"bookMark")){
                                        $urlwhy = "bookMark";
                                    } else if(strpos($url,"category")){
                                        $urlwhy = "category";
                                    }  else if(strpos($url,"wallpaper")){
                                        $urlwhy = "wallpaper";
                                    }  else if(strpos($url,"notice")){
                                        $urlwhy = "notice";
                                    }  else if(strpos($url,"feedBack")){
                                        $urlwhy = "feedBack";
                                    } 
                                    // echo $urlTrue;
                                    // echo $urlwhy;
                                    
                                    echo '<ul>
                                            <li class="bookMark"><a href="#c">Bookmark</a></li>
                                            <li class="category"><a href="#c">Category</a></li>
                                            <li class="wallpaper"><a href="#c">Wallpaper</a></li>
                                            <li class="notice"><a href="../board/noticeBoard.php">Notice</a></li>
                                            <li class="feedBack"><a href="../board/feedBackBoard.php">Feedback</a></li>
                                      </ul>';
                                    
                                    $output = ob_get_clean();
                                    $pattern = '~<li class="'.$urlwhy.'">~';
                                    $replacement = '<li class="active '.$urlwhy.' ">';
                                    echo preg_replace($pattern, $replacement, $output);
                                ?>
                                <!-- <ul>
                                    <li class="active"><a href="#c">Bookmark</a></li>
                                    <li><a href="#c">Category</a></li>
                                    <li><a href="#c">Wallpaper</a></li>
                                    <li><a href="../board/noticeBoard.php">Notice</a></li>
                                    <li><a href="../board/feedBackBoard.php">Feedback</a></li>
                                </ul> -->
                            </nav>
                                <?php if( isset($_SESSION['userMemberID']) ){ ?>
                                    <div class="profile">
                                        <figure class="profile__img">
                                            <img src="/assets/image/main_image01.jpg" alt="????????? ?????????" />
                                        </figure>
                                        <div class="profile__nav">
                                            <ul>
                                                <li><a href="#c">?????????</a></li>
                                                <li><a href="#c">?????????</a></li>
                                                <li><a href="../login/logout.php">????????????</a></li>
                                            </ul>
                                    </div>
                                <?php } else { ?>
                                    <a href='../login/userLogin.php'>Log In</a>
                                <?php } ?>
                        </div>
                    </div>
                    <!-- //header__top -->
                    <div class="header__bottom">
                        <div class="headerBottom__inner container">
                            <div class="header__search">
                                <input type="text" placeholder="???????????? ??????????????????." />
                            </div>
                            <button>??????</button>
                        </div>
                    </div>
                </div>
            </div>
        </header>
         <!-- jquery -->
         <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <!-- ham -->
        <script>
            // header script
            $('.toggle').click(function () {
                $(this).toggleClass('active');
            });

            const hamBtn = document.querySelector('.toggle');
            const nav = document.querySelector('.headerTop__inner nav');

            hamBtn.addEventListener('click', () => {
                nav.classList.toggle('show');
            });

            const profileBox = document.querySelector('.profile'); // ????????? ??????
            const profileImg = document.querySelector('.profile__img'); // ????????? ?????????
            if( document.querySelector('.profile')){
                const profileNav = profileBox.querySelector('.profile__nav'); // ????????? ?????? ???????????????
                // console.log(profileNav); ????????? ??????, ????????? ?????????, ????????? ?????? ??????????????? ?????? ?????? ??????
                profileBox.addEventListener('mouseenter', () => {
                profileNav.style.display = 'inline-block';
                });
                profileNav.addEventListener('mouseleave', () => {
                    profileNav.style.display = 'none';
                });
                // header script
            }
           
        </script>