<!doctype html>
<html lang="en">
  <head>
    <title>สมัครสมาชิก</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/global.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/bootstrap.css') }}">
  </head>
  <body class="question-template">
    <div class="container">
        <div class="col-xl-4"></div>
        <div class="col-xl-auto d-flex justify-content-center">
          <div class="jumbotron w-75" style="margin-top:10%;margin-bottom:15%;background-color:white">

          <h3 class="text-center">สมัครสมาชิก</h3><br>
              <form>

              <div class="grid">
            
            <div class="row">
              <div class="form-row w-100  mt-2">
                <div class="col">
                  <label for="">ชื่อ</label>
                  <input type="text" class="form-control" name="" id="" aria-describedby="helpId" placeholder="">
                </div>
                <div class="col">
                  <label for="">นามสกุล</label>
                  <input type="text" class="form-control" name="" id="" aria-describedby="helpId" placeholder="">
                </div>
              </div>
            </div>

            <div class="row mt-2">
              <div class="form-group w-100">
                <label for="">Email</label>
                <input type="text" class="form-control" name="" id="" aria-describedby="helpId" placeholder="">
              </div>
            </div>

            <div class="row">
              <div class="form-group w-100">
                <label for="">เบอร์โทรศัพท์</label>
                <input type="text" class="form-control" name="" id="" aria-describedby="helpId" placeholder="">
              </div>
            </div>

            <div class="row">
              <div class="form-group w-100">
                <label for="">รหัสผ่าน</label>
                <input type="text" class="form-control" name="" id="" aria-describedby="helpId" placeholder="">
              </div>
            </div>

            <div class="row">
              <div class="form-group w-100">
                <label for="">ยืนยันรหัสผ่าน</label>
                <input type="text" class="form-control" name="" id="" aria-describedby="helpId" placeholder="">
              </div>
            </div>

            <div class="row">
                <button type="submit" class="btn btn-primary form-control w-100">สมัครสมาชิก</button>
            </div>

            <div class="row">
                <a href="login" class="btn btn-outline-dark mt-2 w-100">กลับสู่หน้าเข้าสู่ระบบ <i class="fas fa-sign-in-alt"></i></a>
            </div>

        </div>
  
                  
              </form>
          </div>
        </div>
        <div class="col-xl-4"></div>
    </div>

    @include('footer')
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="{{ asset('/js/jquery.slim.min.js') }}" ></script>
    <script src="{{ asset('/js/popper.min.js') }}"></script>
    <script src="{{ asset('/js/all.min.js') }}"></script>
    <script src="{{ asset('/js/bootstrap.js')}}"></script>
  </body>
</html>