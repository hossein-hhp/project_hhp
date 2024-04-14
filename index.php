<?php
// header("Location: login.php");exit;
?>
<!DOCTYPE html>
<html lang="fa">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- custom css -->
    <link rel="stylesheet" href="style.css">

    <title>Document</title>
</head>

<body>

    <!-- <div class="container bg-index"> -->
    <div class="container position-relative">
        <img src="img\png\bg_index.png" class="bg-index" alt="bg-index">
        <!-- NAV IS HERE -->
        <nav class="navbar navbar-expand-lg">
            <div class="w-100 d-flex justify-content-between">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <img class="navbar-brand" src="img\png\headerLogo 6.png" />
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="#">بیمه‌ها</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">شعب ما</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">بلاگ</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">همکاری با ما</a>
                    </li>
                </ul>
                <!-- </div> -->

                <a href="#" class="btn btn-outline-darkblue btn-size">
                    ورود/ ثبت‌نام
                </a>
            </div>
        </nav>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>

        <!-- CATEGORY IS HERE -->
        <div class="container">
            <div class="d-flex justify-content-between column-gap-3 categorys">
                <a href="#">
                    <img src="img/png/briefcase-portfolio-black-outline-21045.png" alt="مسئولیت">
                    <h5>مسئولیت</h5>
                </a>
                <a href="#">
                    <img src="img/png/box-9154.png" alt="باربری">
                    <h5>باربری</h5>
                </a>
                <a href="#">
                    <img src="img/png/Mohandesi 2.png" alt="مهندسی">
                    <h5>مهندسی</h5>
                </a>
                <a href="#">
                    <img src="img/png/laptop-and-smartphone-12627.png" alt="موبایل">
                    <h5>موبایل</h5>
                </a>
                <a href="#">
                    <img src="img/png/Sales.png" alt="ثالث">
                    <h5>ثالث</h5>
                </a>
                <a href="#">
                    <img src="img/png/badaneh 2.png" alt="بدنه ماشین">
                    <h5>بدنه ماشین</h5>
                </a>
            </div>
        </div>

        <!-- FIELDS IS HERE -->
        <div class="w-100" style="position: relative;">
            <div class="container d-flex">
                <div class="index_felis">
                    <div class="row">
                        <div class="form-group mb-3 justify-content-space col">
                            <label class="darkblue floating-label mb-2" for="property_type">نوع ملک</label>
                            <select class="form-control p-2 border-darkblue" id="property_type">
                                <option value=""></option>
                            </select>
                        </div>

                        <div class="form-group mb-3 justify-content-space col">
                            <label class="darkblue floating-label mb-2" for="home_appliances_value">ارزش لوازم
                                منزل</label>
                            <input type="text" class="form-control p-2 border-darkblue" id="home_appliances_value">
                        </div>
                    </div>

                    <div class="row">
                        <div class="form-group mb-3 justify-content-space col">
                            <label class="darkblue floating-label mb-2" for="structure_type">نوع سازه</label>
                            <select class="form-control p-2 border-darkblue" id="structure_type">
                                <option value=""></option>
                            </select>
                        </div>

                        <div class="form-group mb-3 justify-content-space col">
                            <label class="darkblue floating-label mb-2" for="price_per_square_meter">قیمت هر متر
                                مربع</label>
                            <select class="form-control p-2 border-darkblue" id="price_per_square_meter">
                                <option value=""></option>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group mb-3 justify-content-space col">
                            <label class="darkblue floating-label mb-2" for="property size">متراژ ملک</label>
                            <input type="text" class="form-control p-2 border-darkblue" id="property size">
                        </div>

                        <div class="form-group mb-3 justify-content-space col">
                            <label class="darkblue floating-label mb-2" for="Type of structure">نوع سازه</label>
                            <input type="text" class="form-control p-2 border-darkblue" id="Type of structure">
                        </div>
                    </div>
                </div>
            </div>

            <div class="bluearea bg-danger"
                style="width: 27.5rem; heihgt:20.625rem; position: absolute;top: 0;left: 0;">
                <div>
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Repudiandae et quae possimus corrupti!
                    Veritatis,
                    quasi ipsam hic iure asperiores aspernatur obcaecati necessitatibus adipisci illo, perferendis aut
                    corrupti
                    eaque sunt impedit.
                </div>
            </div>
        </div>
    </div>

    <!-- More -->
    <div class="text-center more_insurance">
        <h4 class="darkblue">بیمه‌های بیشتر</h4>
        <img src="img\png\Frame 32.png" alt="more_insurance">
    </div>

    <!-- question_answers -->
    <div class="text-center position-relative">
        <img src="img\png\bg-question_answers.png" class="bg-question_answers" alt="bg-question_answers">
        <div class="container">
            <h3>موضوع بیمه‌ات رو انتخاب کن و سوالت رو بنویس</h3>

            <div class="d-flex justify-content-between column-gap-3 mx-auto choose">
                <a href="#">
                    <h5>بدنه ماشین</h5>
                    <div class="border-darkblue">
                        <img src="img/png/badaneh 2.png" alt="بدنه ماشین">
                    </div>
                </a>
                <a href="#">
                    <h5>ثالث</h5>
                    <div class="border-darkblue">
                        <img src="img/png/Sales.png" alt="ثالث">
                    </div>
                </a>
                <a href="#">
                    <h5>مسئولیت</h5>
                    <div class="border-darkblue">
                        <img src="img/png/briefcase-portfolio-black-outline-21045.png" alt="مسئولیت">
                    </div>
                </a>
                <a href="#">
                    <h5>باربری</h5>
                    <div class="border-darkblue">
                        <img src="img/png/box-9154.png" alt="باربری">
                    </div>
                </a>
                <a href="#">
                    <h5>مهندسی</h5>
                    <div class="border-darkblue">
                        <img src="img/png/Mohandesi 2.png" alt="مهندسی">
                    </div>
                </a>
                <a href="#">
                    <h5>موبایل</h5>
                    <div class="border-darkblue">
                        <img src="img/png/laptop-and-smartphone-12627.png" alt="موبایل">
                    </div>
                </a>
                <a href="#">
                    <h5>آتش سوزی</h5>
                    <div class="border-darkblue">
                        <img src="img/png/Atash.png" alt="آتش سوزی">
                    </div>
                </a>
            </div>

            <form action="#" method="GET">
                <input type="search" name="question_search" id="question_search" class="border-darkblue"
                    placeholder="سوالی که داری رو بنویس تا بتونیم کمکت کنیم">
            </form>

            <div id="question_answers">

                <div class="item_of_que_ans">
                    <a class="d-flex justify-content-between align-items-center" data-bs-toggle="collapse"
                        href="#collapseExample1" role="button" aria-expanded="false" aria-controls="collapseExample1">
                        چرا بیمه تجارت برتری دارد؟
                        <img src="img/png/Frame 37.png" alt="">
                    </a>
                    <div class="collapse" id="collapseExample1">
                        <div class="p-4 pt-0">
                            <hr />
                            لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است
                            چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی
                            تکنولوژی
                            مورد نیاز لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان
                            گرافیک است چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط
                            فعلی
                            تکنولوژی مورد نیاز
                        </div>
                    </div>
                </div>
                <div class="item_of_que_ans">
                    <a class="d-flex justify-content-between align-items-center" data-bs-toggle="collapse"
                        href="#collapseExample2" role="button" aria-expanded="false" aria-controls="collapseExample2">
                        چرا بیمه تجارت برتری دارد؟
                        <img src="img/png/Frame 37.png" alt="">
                    </a>
                    <div class="collapse" id="collapseExample2">
                        <div class="p-4 pt-0">
                            <hr />
                            لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است
                            چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی
                            تکنولوژی
                            مورد نیاز لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان
                            گرافیک است چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط
                            فعلی
                            تکنولوژی مورد نیاز
                        </div>
                    </div>
                </div>
                <div class="item_of_que_ans">
                    <a class="d-flex justify-content-between align-items-center" data-bs-toggle="collapse"
                        href="#collapseExample3" role="button" aria-expanded="false" aria-controls="collapseExample3">
                        چرا بیمه تجارت برتری دارد؟
                        <img src="img/png/Frame 37.png" alt="">
                    </a>
                    <div class="collapse" id="collapseExample3">
                        <div class="p-4 pt-0">
                            <hr />
                            لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است
                            چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی
                            تکنولوژی
                            مورد نیاز لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان
                            گرافیک است چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط
                            فعلی
                            تکنولوژی مورد نیاز
                        </div>
                    </div>
                </div>
                <div class="item_of_que_ans">
                    <a class="d-flex justify-content-between align-items-center" data-bs-toggle="collapse"
                        href="#collapseExample4" role="button" aria-expanded="false" aria-controls="collapseExample4">
                        چرا بیمه تجارت برتری دارد؟
                        <img src="img/png/Frame 37.png" alt="">
                    </a>
                    <div class="collapse" id="collapseExample4">
                        <div class="p-4 pt-0">
                            <hr />
                            لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است
                            چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی
                            تکنولوژی
                            مورد نیاز لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان
                            گرافیک است چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط
                            فعلی
                            تکنولوژی مورد نیاز
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>

    <!-- Why -->
    <div class="container">
        <h2 class="text-center darkblue">چرا بیمه تجارت</h2>

        <div class="custom_cart">
            <div class="image">
                <img src="img/png/calendar.png" alt="">
            </div>
            <div class="content">
                <h3>امکان خرید اقساطی</h3>
                <p>
                    لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است چاپگرها
                    و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز لورم
                    ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است چاپگرها و
                    متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز
                </p>
            </div>

        </div>
    </div>

    <!-- CTA -->
    <div class="d-flex justify-content-between CTA">
        <div class="right_side d-flex align-items-center">
            <div>
                <h3>همین الان بیمه‌ات رو بخر</h3>
                <h4>خرید بیمه آتش‌سوزی و رهایی از خسات‌های جبران ناپذیر</h4>
            </div>
            <img src="img/png/Frame 17.png" alt="خرید بیمه آتش‌سوزی و رهایی از خسات‌های جبران ناپذیر">
        </div>
        <div class="left_side d-flex align-items-center">
            <a href="#" class="btn btn-white btn-size">
                خرید بیمه
            </a>
        </div>
    </div>


    <br><br><br><br><br>

</body>

</html>