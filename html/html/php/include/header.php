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
                                <ul>
                                    <li class="active"><a href="#c">Bookmark</a></li>
                                    <li><a href="#c">Category</a></li>
                                    <li><a href="#c">Wallpaper</a></li>
                                    <li><a href="../board/noticeBoard.php">Notice</a></li>
                                    <li><a href="#c">Feedback</a></li>
                                </ul>
                            </nav>
                                <?php if( isset($_SESSION['userMemberID']) ){ ?>
                                    <a href='../login/logout.php'>Log Out</a>
                                <?php } else { ?>
                                    <a href='../login/userLogin.php'>Log In</a>
                                <?php } ?>
                        </div>
                    </div>
                    <!-- //header__top -->
                    <div class="header__bottom">
                        <div class="headerBottom__inner container">
                            <div class="header__search">
                                <input type="text" placeholder="검색어를 입력해주세요." />
                            </div>
                            <button>검색</button>
                        </div>
                    </div>
                </div>
            </div>
        </header>
         <!-- jquery -->
         <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <!-- ham -->
        <script>
            $('.toggle').click(function () {
                $(this).toggleClass('active');
            });

            const hamBtn = document.querySelector('.toggle');
            const nav = document.querySelector('.headerTop__inner nav');

            hamBtn.addEventListener('click', () => {
                nav.classList.toggle('show');
            });
        </script>