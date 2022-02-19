<!doctype html>
<html lang="en">
  <head>
    <title>เข้าสู่ระบบ</title>
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
          <div class="jumbotron w-75" style="margin-top:10%;background-color:white">

          <h3 class="text-center">เข้าสู่ระบบ</h3><br>
              <form method="POST" name="Login" id="Login" target="k_frame" action="{{route('login.checkLogin')}}" enctype="multipart/form-data">
                @csrf
                  <div class="form-group">
                  <label>Email</label>
                    <input type="email" name="email" id="email" class="form-control" placeholder="Email">
                  </div>

                <div class="form-group">
                <label>Password</label>
                  <input type="password" name="password" id="password" class="form-control" placeholder="Password">
                </div>


                <div class="checkbox">
                  <label>
                    <input type="checkbox">
                    Remember Me
                  </label>
                </div>


                <button type="submit" class="btn btn-primary form-control " >เข้าสู่ระบบ</button>


                <hr>
                  <button type="button" class="btn btn-outline-dark w-100">เข้าสู่ระบบด้วย <img src="{{ asset('/images/google_logo.png') }}" width="15%"></button>
                  <a href="/register"><button type="button" class="btn btn-outline-dark w-100 mt-2">สมัครสมาชิก <i class="fas fa-user-plus"></i> </button></a>
              </form>
          </div>
        </div>
        <div class="col-xl-4"></div>
    </div>
    <iframe name="k_frame" id="k_frame" style="display:none;"></iframe>
    @include('footer')
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="{{ asset('/js/jquery.slim.min.js') }}" ></script>
    <script src="{{ asset('/js/popper.min.js') }}"></script>
    <script src="{{ asset('/js/all.min.js') }}"></script>
    <script src="{{ asset('/js/bootstrap.js')}}"></script>
  </body>
</html>
