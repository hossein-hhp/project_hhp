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

<body id="login" class="d-flex justify-content-center align-items-center">
    <!-- <div class="bg-white border justify-center align-center" style="width: 75%; height: 700px;"></div> -->

    <div class="auth-content">
        <div class="card p-4">
            <div class="wrap mx-auto">
                <div class="card-head my-4 text-center">
                    <img src="img\png\headerLogo 6.png" alt="" class="img-fluid mb-4">
                </div>
                <div class="card-body">

                    <p class="mb-3">نوع کاربری خود را انتخاب کنید</p>
                    <div class="d-flex justify-content-evenly">
                        <button class="btn btn-primary btn disabled w-150">کاربر</button>
                        <button class="btn btn-outline-primary  w-150">بازاریاب</button>
                    </div>
                    <div class="form-group mb-3 justify-content-space">
                        <label class="floating-label" for="phone">شماره موبایل</label>
                        <input type="text" class="form-control" id="phone" placeholder="۰۹۱۲۳۴۵۶۷۸۹">
                    </div>
                    <div class="text-center">
                        <button class="btn btn-primary btn-primary mx-auto px-4 darkblue" id="darkblue">ارسال کد تایید</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>