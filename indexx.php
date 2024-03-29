<?php
require __DIR__ . '/parts/connect_db.php'; ?>
<?php include __DIR__ . '/parts/html-head.php' ?>
<?php include __DIR__ . '/parts/1.css.php' ?>
<?php include __DIR__ . '/parts/2.css.php' ?>
<?php include __DIR__ . '/parts/3.css.php' ?>
<?php include __DIR__ . '/parts/4.css.php' ?>
<?php include __DIR__ . '/parts/5.css.php' ?>
<?php include __DIR__ . '/parts/navbar.php' ?>
<?php
$title = '首頁';
$pageSid = 1;
?>
</header>
<!-- section1 -->
<section>
    <div class=" mxsec1 ">
        <div id="carouselExampleIndicators" class="carousel slide " data-bs-ride="carousel">
            <div class="carousel-indicators flex-column">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>

            </div>
            <div class="carousel-inner ">


                <div class="carousel-item active  ">

                    <div class="maincont ">
                        <div class="maintopic ">
                            <h2 class="topic">
                                <a href="#" class="text-decoration-none text-black"> ▸ 生活節</a>
                            </h2>
                            <div class="descwrapper">
                                <p class="desc">
                                    在嘉義20公頃的花海中，全新年度大型主題活動即將登場，稻田休耕期間盛開的花海生活節，即將於十二月第二週在嘉義市西區綻放，將生活中不同的樣貌呈現在花海，漫步在藝術裝置、獨立樂團、花海餐桌、互動工作坊的花海浪潮中。
                                </p>
                            </div>

                            <div class="timehold">2023.07.10 14:00 - 2023.07.11 20:00</div>
                            <div class="place">地點：xxx</div>
                            <a href="#" class=" read">Read <span class="more">More</span></a>


                        </div>
                        <div class="topicpic">
                            <a href="#">
                                <img class="pic w-100" src="./img/MED_IMG/BANNER1.webp" alt="花海生活節">
                            </a>
                        </div>
                    </div>



                    <div class="date">
                        <div class="datetxt ">

                            <span class="day d-inline ">食</span>
                            <span class="month d-inline "></span>

                        </div>
                        <span class="year d-inline-block">Vol. xxx</span>


                    </div>


                    <div class="num">CH.01
                    </div>

                </div>

                <div class="carousel-item  ">

                    <div class="maincont ">
                        <div class="maintopic ">
                            <h2 class="topic">
                                <a href="#" class="text-decoration-none text-black">11.19 – 11.20 ▸ 艸藥祭 -
                                </a>
                            </h2>
                            <div class="descwrapper">
                                <p class="desc">
                                    跟著全台料理職人一起探索蔬食<br>
                                    <br>
                                    蔬食成為一種時尚潮流的生活態度，<br>
                                    前兩場《艸食祭》在中南部引起熱烈迴響 ，<br>
                                    第三場《是我的菜》將首次移師台北。<br>
                                    <br>
                                    橫跨各式異國料理與期間限定料理<br>
                                    從早.午餐、甜點、冰品、飲品到晚餐，<br>
                                    讓你飽足一整天，賴著不走！ <br>
                                    <br>
                                    艸食男女一起出門。
                                </p>
                            </div>
                            <div class="timehold">2022.11.19 14:00 - 2022.11.20 21:00</div>
                            <div class="place">地點：xxx</div>
                            <a href="#" class="read">Read <span class="more">More</span></a>


                        </div>
                        <div class="topicpic">
                            <a href="#">
                                <img class="pic w-100" src="./img/MED_IMG/BANNER2.webp" alt="高雄草食">
                            </a>
                        </div>
                    </div>



                    <div class="date">
                        <div class="datetxt ">

                            <span class="day d-inline ">藥</span>
                            <span class="month d-inline "></span>

                        </div>
                        <span class="year d-inline-block">Vol. xxx</span>


                    </div>


                    <div class="num">CH.02
                    </div>

                </div>











            </div>





        </div>



    </div>


</section>
<!-- section2品牌故事 -->
<section>
    <div class="container">
        <div class="row mb-4 mb-md-0 px-2 align-items-center">
            <div class="col-12 col-md-6">
                <img src="./img/MED_IMG/leon-gao-ooX-lfJqzhE-unsplash.jpg" class="img-fluid mb-2" alt="34" />
            </div>
            <div class="col-12 col-md-6 order-md-1 d-md-flex flex-md-column align-items-md-end">
                <div class="text-decoration-none text-black fw-bold">安心食材<div>
                        <p class="text-decoration-none text-black fw-bold">高純度材料 | 研磨</p>
                        <p>多款進口食材</p>
                        <button type="button" class="btn btn-outline-dark">
                            看品牌故事<i class="fa-solid fa-arrow-right"></i>
                        </button>
                    </div>
                </div>


            </div>
</section>
<?php include __DIR__ . '/parts/scripts.php' ?>
<?php include __DIR__ . '/parts/html-foot.php' ?>