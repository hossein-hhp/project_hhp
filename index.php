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
    <!-- NAV-Mobilde IS HERE -->
    <nav class="mobile_nav">
        <div class="closeMobileMenu"><img src="img/png/close.png" alt=""></div>
        <a href="#" class="btn btn-white w-50 p-3">
            ورود/ ثبت‌نام
        </a>

        <ul class="navbar-nav my-5 pb-5">
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

        <div class="d-flex justify-content-evenly">
            <a href="#"><img src="img/png/linkin.png" alt=""></a>
            <a href="#"><img src="img/png/instagram.png" alt=""></a>
            <a href="#"><img src="img/png/facebook.png" alt=""></a>
        </div>

    </nav>

    <div class="container position-relative">

        <img src="img/png/bg_index.png" class="navBg" alt="bg-index">
        <img src="img/png/navBgMobile.png" class="navBgMobile" alt="bg-index">
        <!-- NAV-DISKTOP IS HERE -->
        <nav class="navbar navbar-expand-lg" id="nav_index">
            <div class="w-100 d-flex justify-content-between">

                <!-- <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button> -->
                <div id="navbar_toggler">
                    <img class="" src="img/png/menuToggle.png" />
                </div>

                <img class="navbar-brand" src="img/png/headerLogo 6.png" />
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

                <a href="#" class="btn btn-outline-darkblue btn-size">
                    ورود/ ثبت‌نام
                </a>
            </div>
        </nav>

        <h2 class="text-center d-none mobile_top_title">تحـولی بـرای فــردا</h2>

        <!-- <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script> -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
        <script>
            // JS
            // navbar toggler
            const navbarShow = document.getElementById("navbar_toggler");
            const navbarClose = document.querySelector(".closeMobileMenu");
            const mobileNav = document.querySelector(".mobile_nav");

            navbarShow.addEventListener("click", () => {
                // alert('work');
                mobileNav.classList.remove("d-none");
                mobileNav.classList.add("d-block");
            });
            navbarClose.addEventListener("click", () => {
                // alert('work');
                mobileNav.classList.remove("d-block");
                mobileNav.classList.add("d-none");
            });
        </script>

        <!-- CATEGORY IS HERE -->
        <div class="container">
            <div class="d-flex justify-content-between gap-4 row categorys">
                <a href="#" class="sm-6" id="category-item-1">
                    <img src="img/png/briefcase-portfolio-black-outline-21045.png" alt="مسئولیت">
                    <h5>مسئولیت</h5>
                </a>
                <a href="#" class="sm-6" id="category-item-2">
                    <img src="img/png/box-9154.png" alt="باربری">
                    <h5>باربری</h5>
                </a>
                <a href="#" class="sm-6" id="category-item-3">
                    <img src="img/png/Mohandesi 2.png" alt="مهندسی">
                    <h5>مهندسی</h5>
                </a>
                <a href="#" class="sm-6" id="category-item-4">
                    <img src="img/png/laptop-and-smartphone-12627.png" alt="موبایل">
                    <h5>موبایل</h5>
                </a>
                <a href="#" class="sm-6" id="category-item-5">
                    <img src="img/png/Sales.png" alt="ثالث">
                    <h5>ثالث</h5>
                </a>
                <a href="#" class="sm-6" id="category-item-6">
                    <img src="img/png/badaneh 2.png" alt="بدنه ماشین">
                    <h5>بدنه ماشین</h5>
                </a>

                <a href="#" class="sm-6 showCateItemMobile" id="category-item-7">
                    <img src="img/png/healthcare-3607 1.png" alt="بیمه تکمیلی">
                    <h5>بیمه تکمیلی</h5>
                </a>
                <a href="#" class="sm-6 showCateItemMobile" id="category-item-8">
                    <img src="img/png/scooter-1041 1.png" alt="بیمه موتور">
                    <h5>بیمه موتور</h5>
                </a>
                <a href="#" class="sm-6 showCateItemMobile" id="category-item-9">
                    <img src="img/png/Atash.png" alt="آتیش سوزی">
                    <h5>آتیش سوزی</h5>
                </a>
                <a href="#" class="sm-6 showCateItemMobile" id="category-item-10">
                    <img src="img/png/Frame 8.png" alt="بیمه زلزله">
                    <h5>بیمه زلزله</h5>
                </a>


            </div>
        </div>

        <!-- FIELDS IS HERE -->
        <div class="container d-flex disktopMode">
            <div class="w-100" style="position: relative;">
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

            <div class="bluearea text-white d-flex flex-column"
                style="width: 27.5rem; heihgt:20.625rem; position: absolute; left: 0;">
                <h5 class="mt-4 mb-5">هزینه بیمه</h5>
                <div class="price">
                    تومان
                    0
                </div>
                <a href="#" class="btn btn-white btn-size my-5 ">خرید بیمه</a>
            </div>

        </div>
    </div>

    <!-- More -->
    <div class="text-center more_insurance">
        <h4 class="darkblue">بیمه‌های بیشتر</h4>
        <img src="img/png/Frame 32.png" alt="more_insurance">
    </div>
    <!-- ModalOfMore -->
    <div class="bgModalOfMore">
    </div>

    <div class="d-none justify-content-center align-items-center" id="parent_mainModalOfMore">
        <div class="mainModalOfMore">
            <div class="wrap">

                <div class="logo">
                    <img class="navbar-brand" src="img/png/headerLogo 6.png">
                </div>

                <form action="#" method="GET">
                    <div class="input-group question_search mx-auto mt-5" style="width:48.875rem;">
                        <input type="search" name="question_search" class="form-control border-darkblue"
                            placeholder="بیمه خود را جستجو کنید">
                        <div class="border-darkblue input-group-text">
                            <i class="submitForm">
                                <img src="img/png/searchIcon.png" alt="searchIcon">
                            </i>
                        </div>
                    </div>
                </form>

                <div class="row p-3" id="modalCategory">
                    <!-- <div class="row my-5 mx-4"> -->
                    <div class="col-3">
                        <h3 class="darkblue">بیمه مهندسی</h3>
                        <ul>
                            <li>بیمه مهندسی</li>
                            <li>بیمه شماره یک</li>
                            <li>بیمه شماره دو</li>
                            <li>بیمه شماره سه</li>
                        </ul>
                    </div>
                    <div class="col-3">
                        <h3 class="darkblue">بیمه بدنه ماشین</h3>
                        <ul>
                            <li>بیمه مهندسی</li>
                            <li>بیمه بیمه شماره یک</li>
                            <li>بیمه بیمه شماره دو</li>
                        </ul>
                    </div>
                    <div class="col-3">
                        <h3 class="darkblue">بیمه موبایل</h3>
                        <ul>
                            <li>بیمه مهندسی</li>
                            <li>بیمه شماره یک</li>
                        </ul>
                    </div>
                    <div class="col-3">
                        <h3 class="darkblue">بیمه تکمیلی</h3>
                        <ul>
                            <li>بیمه مهندسی</li>
                            <li>بیمه شماره یک</li>
                            <li>بیمه شماره دو</li>
                            <li>بیمه شماره سه</li>
                            <li>بیمه شماره چهار</li>
                        </ul>
                    </div>
                    <div class="col-3">
                        <h3 class="darkblue">بیمه آتش‌سوزی</h3>
                        <ul>
                            <li>بیمه آتش‌سوزی</li>
                            <li>بیمه شماره یک</li>
                            <li>بیمه شماره دو</li>
                            <li>بیمه شماره سه</li>

                        </ul>
                    </div>
                    <div class="col-3">
                        <h3 class="darkblue">بیمه عمر</h3>
                        <ul>
                            <li>بیمه مهندسی</li>
                            <li>بیمه شماره یک</li>
                            <li>بیمه شماره دو</li>
                        </ul>
                    </div>
                    <div class="col-3">
                        <h3 class="darkblue">بیمه زلزله</h3>
                        <ul>
                            <li>بیمه مهندسی</li>
                            <li>بیمه شماره یک</li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <script>
        // JS
        // navbar toggler
        const more_insurance = document.querySelector(".more_insurance");
        const bgModalOfMore = document.querySelector(".bgModalOfMore");
        const parent_mainModalOfMore = document.querySelector("#parent_mainModalOfMore");
        const mainModalOfMore = document.querySelector(".mainModalOfMore");

        more_insurance.addEventListener("click", () => {
            // alert('work');
            bgModalOfMore.classList.remove("d-none");
            bgModalOfMore.classList.remove("closeModal");
            parent_mainModalOfMore.classList.remove("d-none");
            parent_mainModalOfMore.classList.remove("closeMainModal");

            bgModalOfMore.classList.add("d-flex");
            parent_mainModalOfMore.classList.add("d-flex");
        });
        bgModalOfMore.addEventListener("click", () => {
            // alert('work');
            // bgModalOfMore.classList.remove("d-flex");
            bgModalOfMore.classList.add("closeModal");
            parent_mainModalOfMore.classList.add("closeMainModal");
            setTimeout(() => {
                bgModalOfMore.classList.add("d-none");
                parent_mainModalOfMore.classList.add("d-none");

                bgModalOfMore.classList.remove("d-flex");
                bgModalOfMore.classList.remove("closeModal");
            }, 450);
        });
    </script>

    <!-- END Modal -->



    <!-- question_answers -->
    <div class="text-center position-relative disktopMode">
        <img src="img/png/bg-question_answers.png" class="bg-question_answers" alt="bg-question_answers">
        <div class="container">
            <h3>موضوع بیمه‌ات رو انتخاب کن و سوالت رو بنویس</h3>

            <div class="d-flex justify-content-between column-gap-3 mx-auto choose">
                <a href="#" id="choose-item-1">
                    <h5>بدنه ماشین</h5>
                    <div class="border-darkblue">
                        <img src="img/png/badaneh 2.png" alt="بدنه ماشین">
                    </div>
                </a>
                <a href="#" id="choose-item-2">
                    <h5>ثالث</h5>
                    <div class="border-darkblue">
                        <img src="img/png/Sales.png" alt="ثالث">
                    </div>
                </a>
                <a href="#" id="choose-item-3">
                    <h5>مسئولیت</h5>
                    <div class="border-darkblue">
                        <img src="img/png/briefcase-portfolio-black-outline-21045.png" alt="مسئولیت">
                    </div>
                </a>
                <a href="#" id="choose-item-4">
                    <h5>باربری</h5>
                    <div class="border-darkblue">
                        <img src="img/png/box-9154.png" alt="باربری">
                    </div>
                </a>
                <a href="#" id="choose-item-5">
                    <h5>مهندسی</h5>
                    <div class="border-darkblue">
                        <img src="img/png/Mohandesi 2.png" alt="مهندسی">
                    </div>
                </a>
                <a href="#" id="choose-item-6">
                    <h5>موبایل</h5>
                    <div class="border-darkblue">
                        <img src="img/png/laptop-and-smartphone-12627.png" alt="موبایل">
                    </div>
                </a>
                <a href="#" id="choose-item-7">
                    <h5>آتش سوزی</h5>
                    <div class="border-darkblue">
                        <img src="img/png/Atash.png" alt="آتش سوزی">
                    </div>
                </a>
            </div>




            <form action="#" method="GET">
                <div class="input-group question_search mx-auto" style="width:48.875rem;">
                    <input type="search" name="question_search" class="form-control border-darkblue"
                        placeholder="سوالی که داری رو بنویس تا بتونیم کمکت کنیم">
                    <div class="border-darkblue input-group-text">
                        <i class="submitForm">
                            <img src="img/png/searchIcon.png" alt="searchIcon">
                        </i>
                    </div>
                </div>
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
                            لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک
                            است
                            چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی
                            تکنولوژی
                            مورد نیاز لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از
                            طراحان
                            گرافیک است چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای
                            شرایط
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
                            لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک
                            است
                            چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی
                            تکنولوژی
                            مورد نیاز لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از
                            طراحان
                            گرافیک است چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای
                            شرایط
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
                            لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک
                            است
                            چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی
                            تکنولوژی
                            مورد نیاز لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از
                            طراحان
                            گرافیک است چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای
                            شرایط
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
                            لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک
                            است
                            چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی
                            تکنولوژی
                            مورد نیاز لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از
                            طراحان
                            گرافیک است چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای
                            شرایط
                            فعلی
                            تکنولوژی مورد نیاز
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>

    <!-- Why -->
    <div class="container" id="why">
        <h2 class="text-center darkblue">چرا بیمه تجارت</h2>


        <div class="custom_cart">
            <div class="image">
                <img src="img/png/calendar.png" alt="">
            </div>
            <div class="content my-auto">
                <div class="mobleMode">
                    <img src="img/png/calendar.png" alt="">
                    <h3 class="mb-4 mobleMode darkblue ">امکان خرید اقساطی</h3>
                </div>

                <h3 class="mb-4 disktopMode darkblue">امکان خرید اقساطی</h3>
                <p>
                    لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است
                    چاپگرها
                    و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز
                    لورم
                    ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است چاپگرها و
                    متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز
                </p>
            </div>

        </div>

        <div class="custom_cart no-bg">
            <div class="image">
                <img src="img/png/clock.png" alt="">
            </div>
            <div class="content my-auto">
                <div class="mobleMode">
                    <img src="img/png/clock.png" alt="">
                    <h3 class="mb-4 mobleMode darkblue ">پشتیبانی ۲۴ ساعته</h3>
                </div>

                <h3 class="mb-4 disktopMode darkblue">پشتیبانی ۲۴ ساعته</h3>
                <p>
                    لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است
                    چاپگرها
                    و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز
                    لورم
                    ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است چاپگرها و
                    متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز
                </p>
            </div>
        </div>

        <div class="custom_cart">
            <div class="image">
                <img src="img/png/Rocket.png" alt="">
            </div>
            <div class="content my-auto">
                <div class="mobleMode">
                    <img src="img/png/Rocket.png" alt="">
                    <h3 class="mb-4 mobleMode darkblue ">ارسال سریع بیمه نامه</h3>
                </div>

                <h3 class="mb-4 disktopMode darkblue">ارسال سریع بیمه نامه</h3>
                <p>
                    لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است
                    چاپگرها
                    و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز
                    لورم
                    ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است چاپگرها و
                    متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز
                </p>
            </div>

        </div>

        <div class="custom_cart no-bg">
            <div class="image">
                <img src="img/png/booking-click-10279.png" alt="">
            </div>
            <div class="content my-auto">
                <div class="mobleMode">
                    <img src="img/png/booking-click-10279.png" alt="">
                    <h3 class="mb-4 mobleMode darkblue mobleMode">خرید راحت و آسان</h3>
                </div>

                <h3 class="mb-4 disktopMode darkblue">خرید راحت و آسان</h3>
                <p>
                    لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است
                    چاپگرها
                    و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز
                    لورم
                    ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است چاپگرها و
                    متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز
                </p>
            </div>
        </div>


        <br />


    </div>


    <!-- NEW HHP -->
    <div class="container d-none" id="question_mobile">
        <h5 class="text-center darkblue font-weight-bold">سوال بیمه‌ای خودتون رو از ما بپرسید</h5>
        <p class="text-center darkblue">ابتدا موضوع سوال خود را انتخاب کنید</p>

        <form action="#" method="GET">

            <select class="form-control p-2 border-darkblue my-4" id="property_type">
                <option value=""></option>
            </select>

            <div class="input-group question_search">
                <input type="search" name="question_search" class="form-control border-darkblue"
                    placeholder="سوالی که داری رو بنویس تا بتونیم کمکت کنیم">
                <div class="border-darkblue input-group-text">
                    <i class="submitForm">
                        <img src="img/png/searchIcon.png" alt="searchIcon">
                    </i>
                </div>
            </div>
        </form>

    </div>

    <!-- CTA and -->
    <div class="container">
        <div class="bg_img">
            <div class="d-flex justify-content-between CTA">
                <div class="right_side d-flex align-items-center">
                    <div>
                        <h3>همین الان بیمه‌ات رو بخر</h3>
                        <h4>خرید بیمه آتش‌سوزی و رهایی از خسات‌های جبران ناپذیر</h4>
                    </div>
                    <img src="img/png/Frame 17.png" alt="خرید بیمه آتش‌سوزی و رهایی از خسات‌های جبران ناپذیر">
                </div>
                <div class="left_side d-flex align-items-center">
                    <a href="#" class="btn btn-white btn-size">خرید بیمه</a>
                </div>
            </div>

            <div id="question_answers_mobile">

                <div class="item_of_que_ans">
                    <a class="d-flex justify-content-between align-items-center" data-bs-toggle="collapse"
                        href="#collapseExample1" role="button" aria-expanded="false" aria-controls="collapseExample1">
                        چقدر طول می‌کشه تا بتونم بیمه‌ رو دریافت کنم؟
                        <img src="img/png/Frame 37.png" alt="">
                    </a>
                    <div class="collapse" id="collapseExample1">
                        <div class="p-4 pt-0">
                            <hr>
                            لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک
                            است
                            چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی
                            تکنولوژی
                            مورد نیاز لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از
                            طراحان
                            گرافیک است چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای
                            شرایط
                            فعلی
                            تکنولوژی مورد نیاز
                        </div>
                    </div>
                </div>
                <div class="item_of_que_ans">
                    <a class="d-flex justify-content-between align-items-center" data-bs-toggle="collapse"
                        href="#collapseExample2" role="button" aria-expanded="false" aria-controls="collapseExample2">
                        چقدر طول می‌کشه تا بتونم بیمه‌ رو دریافت کنم؟
                        <img src="img/png/Frame 37.png" alt="">
                    </a>
                    <div class="collapse" id="collapseExample2">
                        <div class="p-4 pt-0">
                            <hr>
                            لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک
                            است
                            چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی
                            تکنولوژی
                            مورد نیاز لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از
                            طراحان
                            گرافیک است چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای
                            شرایط
                            فعلی
                            تکنولوژی مورد نیاز
                        </div>
                    </div>
                </div>
                <div class="item_of_que_ans">
                    <a class="d-flex justify-content-between align-items-center" data-bs-toggle="collapse"
                        href="#collapseExample3" role="button" aria-expanded="false" aria-controls="collapseExample3">
                        چقدر طول می‌کشه تا بتونم بیمه‌ رو دریافت کنم؟
                        <img src="img/png/Frame 37.png" alt="">
                    </a>
                    <div class="collapse" id="collapseExample3">
                        <div class="p-4 pt-0">
                            <hr>
                            لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک
                            است
                            چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی
                            تکنولوژی
                            مورد نیاز لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از
                            طراحان
                            گرافیک است چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای
                            شرایط
                            فعلی
                            تکنولوژی مورد نیاز
                        </div>
                    </div>
                </div>
                <div class="item_of_que_ans">
                    <a class="d-flex justify-content-between align-items-center" data-bs-toggle="collapse"
                        href="#collapseExample4" role="button" aria-expanded="false" aria-controls="collapseExample4">
                        چقدر طول می‌کشه تا بتونم بیمه‌ رو دریافت کنم؟
                        <img src="img/png/Frame 37.png" alt="">
                    </a>
                    <div class="collapse" id="collapseExample4">
                        <div class="p-4 pt-0">
                            <hr>
                            لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک
                            است
                            چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی
                            تکنولوژی
                            مورد نیاز لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از
                            طراحان
                            گرافیک است چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای
                            شرایط
                            فعلی
                            تکنولوژی مورد نیاز
                        </div>
                    </div>
                </div>
                <div class="item_of_que_ans">
                    <a class="d-flex justify-content-between align-items-center" data-bs-toggle="collapse"
                        href="#collapseExample4" role="button" aria-expanded="false" aria-controls="collapseExample4">
                        چقدر طول می‌کشه تا بتونم بیمه‌ رو دریافت کنم؟
                        <img src="img/png/Frame 37.png" alt="">
                    </a>
                    <div class="collapse" id="collapseExample4">
                        <div class="p-4 pt-0">
                            <hr>
                            لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک
                            است
                            چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی
                            تکنولوژی
                            مورد نیاز لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از
                            طراحان
                            گرافیک است چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای
                            شرایط
                            فعلی
                            تکنولوژی مورد نیاز
                        </div>
                    </div>
                </div>

            </div>

            <div class="darkblue d-flex align-items-center companies">
                <h3>
                    <span style="font-size: smaller;">
                        شرکت‌هایی که به
                    </span>
                    <br />
                    مـا اعـتمـاد کـرده‌اند.
                </h3>
                <div class="company_logo">
                    <img src="img/companies/41866_orig 1.png" alt="">
                    <img src="img/companies/kabl alborz.png" alt="">
                    <img src="img/companies/vezarat_keshvar.png" alt="">
                    <img src="img/companies/Parsonline_Logo-570x570.png" alt="">
                    <img src="img/companies/post bank.png" alt="">
                    <img src="img/companies/Untitl.png" alt="">
                    <img src="img/companies/Tejarat.png" alt="">
                </div>

            </div>
        </div>
    </div>

    <!-- footer -->
    <div id="footer" class="">

        <div class="container position-relative">
            <div class="d-flex flex-wrap">
                <!-- <div class="container position-relative"> -->
                <div class="col-6 col-sm-6 col-md-3">
                    <h3>
                        انواع بیمه‌ها
                    </h3>
                    <ul>
                        <li>بیمه مهندسی</li>
                        <li>بیمه مسئولیت</li>
                        <li>بیمه باربری</li>
                        <li>بیمه موبایل و تبلت</li>
                        <li>بیمه شخص ثالث</li>
                        <li>بیمه بدنه ماشین و موتور</li>
                        <li>بیمه آتش‌سوزی و زلزله</li>
                    </ul>
                </div>
                <div class="col-6 col-sm-6 col-md-3">
                    <h3>
                        قوانین‌ما

                    </h3>
                    <ul>
                        <li>درباه ما</li>
                        <li>قوانین و مقررات</li>
                        <li>تماس با ما</li>
                        <li>سوالات ما</li>
                    </ul>
                </div>
                <div class="col-6 col-sm-6 col-md-3">
                    <h3>
                        خدمات و امکانات

                    </h3>
                    <ul>
                        <li>پیگیری خرید</li>
                        <li>استعلام بیمه</li>
                        <li>نمایندگان ما</li>
                    </ul>
                </div>
            </div>

            <div class="icons d-flex justify-content-end">
                <a href="#"><img src="img/png/linkin.png" alt=""></a>
                <a href="#"><img src="img/png/instagram.png" alt=""></a>
                <a href="#"><img src="img/png/facebook.png" alt=""></a>
            </div>
        </div>
    </div>


</body>

</html>