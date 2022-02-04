<!doctype html>
<html lang="en">
  <head>
    <title>หน้าแรก</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/global.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/bootstrap.css') }}">

  </head>
  <body class="question-template">
    <div class="container-fluid" style="margin-bottom:10%">
      @include('navbar')

      <div class="row">
        <div class="col-lg-4 mt-5 ml-5"><h1 style="color:#F77100">คอร์สเรียนใหม่ของเรา</h1></div>
        <div class="col-lg-4"></div>
        <div class="col-lg-4"></div>
      </div>

      <div class="row" style="background-color:#FFFFFF">
        <div class="col-lg-2 mt-2"></div>
        <div class="col-lg-8 mt-2">
          @include('slide')
        </div>
        <div class="col-lg-2 mt-2"></div>
      </div>

      <div class="row">
        <div class="col-lg-4 mt-5 ml-5"><h1 style="color:#F77100">คอร์สเรียน</h1></div>
        <div class="col-lg-4"></div>
        <div class="col-lg-4"></div>
      </div>

      <div class="row">
        <div class="col-lg-2 mt-2"></div>
        <div class="col-lg-8 mt-2">
          @include('courses')
        </div>
        <div class="col-lg-2 mt-2"></div>
      </div>


      
     
    </div>
    @include('footer')
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="{{ asset('/js/jquery.slim.min.js') }}"></script>
    <script src="{{ asset('/js/popper.min.js') }}"></script>
    <script src="{{ asset('/js/all.min.js') }}"></script>
    <script src="{{ asset('/js/bootstrap.js')}}"></script>
  </body>
</html>