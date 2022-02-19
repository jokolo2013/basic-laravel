<!doctype html>
<html lang="en">

<head>
    <title>สมัครสมาชิก</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/global.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/bootstrap.css') }}">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.0/sweetalert.min.js"></script>

    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    @include('sweetalert::alert')

</head>

<body class="question-template">
    <div class="container">
        <div class="col-xl-4"></div>
        <div class="col-xl-auto d-flex justify-content-center">
            <div class="jumbotron w-75" style="margin-top:10%;margin-bottom:15%;background-color:white">

                <h3 class="text-center">สมัครสมาชิก</h3><br>
                <form method="POST" name="Register" id="Register" target="k_frame" action="{{ route('register.load') }}"
                    enctype="multipart/form-data">
                    @csrf
                    <div class="grid">

                        <div class="row">
                            <div class="form-row w-100  mt-2">
                                <div class="col">
                                    <label for="">ชื่อ</label>
                                    <input type="text" class="form-control" name="Fname" id="Fname"
                                        aria-describedby="helpId" placeholder="" required>
                                </div>
                                <div class="col">
                                    <label for="">นามสกุล</label>
                                    <input type="text" class="form-control" name="Lname" id="Lname"
                                        aria-describedby="helpId" placeholder="" required>
                                </div>
                            </div>
                        </div>

                        <div class="row mt-2">
                            <div class="form-group form-inline w-100">
                                <label for="">เพศ</label>

                                <input type="radio" id="gender1" name="gender" value="0" class="form-control ml-3"
                                    checked>
                                <label for="gender1" class="ml-2">ชาย</label><br>

                                <input type="radio" id="gender2" name="gender" value="1" class="form-control ml-3">
                                <label for="gender2" class="ml-2">หญิง</label><br>

                                <input type="radio" id="gender3" name="gender" value="2" class="form-control ml-3">
                                <label for="gender3" class="ml-2">อื่นๆ</label><br>

                            </div>
                        </div>

                        <div class="row mt-2">
                            <div class="form-group w-100">
                                <label for="">Email</label>
                                <input type="email" class="form-control" name="email" id="email"
                                    aria-describedby="helpId" placeholder="" required>
                            </div>
                        </div>

                        <div class="row">
                            <div class="form-group w-100">
                                <label for="">เบอร์โทรศัพท์</label>
                                <input type="text" class="form-control" name="phone" id="phone"
                                    aria-describedby="helpId" placeholder="" required>
                            </div>
                        </div>

                        <div class="row">
                            <div class="form-group w-100">
                                <label for="">รหัสผ่าน</label>
                                <input type="password" class="form-control" name="password" id="password"
                                    aria-describedby="helpId" placeholder="" required>
                            </div>
                        </div>

                        <div class="row">
                            <div class="form-group w-100">
                                <label for="">ยืนยันรหัสผ่าน</label>
                                <input type="password" class="form-control" name="password1" id="password1"
                                    aria-describedby="helpId" placeholder="" required>
                            </div>
                        </div>

                        <div class="row">
                            <button type="submit" class="btn btn-primary form-control w-100">สมัครสมาชิก</button>
                        </div>

                        <div class="row">
                            <a href="login" class="btn btn-outline-dark mt-2 w-100">กลับสู่หน้าเข้าสู่ระบบ <i
                                    class="fas fa-sign-in-alt"></i></a>
                        </div>

                    </div>


                </form>
            </div>
        </div>
        <div class="col-xl-4"></div>
    </div>
    <input type="hidden" id="url_webpage" value="{{ URL::to('/') }}">
    <iframe name="k_frame" id="k_frame" style="display:none;"></iframe>
    @include('footer');
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="{{ asset('/js/jquery.slim.min.js') }}"></script>
    <script src="{{ asset('/js/popper.min.js') }}"></script>
    <script src="{{ asset('/js/all.min.js') }}"></script>
    <script src="{{ asset('/js/bootstrap.js') }}"></script>
    <script src="{{ asset('/js/global.js') }}"></script>
</body>

</html>
