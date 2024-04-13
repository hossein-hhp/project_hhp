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
    <!-- <div class="bg-white border justify-center align-center" style="width: 75%; height: 700px;"></div> -->

    <div class="bg d-flex justify-content-center align-items-center">
        <div class="auth-content">
            <div class="card p-4 radius-20">
                <form class="wrap mx-auto" action="#" method="POST">
                    <div class="card-head my-2 text-center">
                        <img src="img\png\headerLogo 6.png" alt="" class="img-fluid mb-4">
                    </div>
                    <div class="card-body">

                        <p class="mb-3">نوع کاربری خود را انتخاب کنید</p>
                        <div class="d-flex justify-content-evenly">
                            <button class="btn disabled btn-darkblue btn-size">کاربر</button>
                            <button class="btn btn-outline-darkblue  btn-size">بازاریاب</button>
                        </div>
                        <div class="form-group mb-3 justify-content-space">
                            <label class="floating-label mb-2" for="phone">شماره موبایل</label>
                            <input type="text" class="form-control p-2 ltr border-darkblur" id="phone" placeholder="۰۹۱۲۳۴۵۶۷۸۹">
                        </div>
                        <div class="text-center">
                            <input type="submit" class="btn btn-darkblue btn-size" value="ارسال کد تایید" />
                        </div>
                    </div>
                </form>
            </div>
        </div>
        </div>

</body>

</html>