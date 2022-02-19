<!doctype html>
<html lang="en">
  <head>
    <title>โปรไฟล์</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/global.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/bootstrap.css') }}">

  </head>
  <body class="question-template">
    <div class="container-fluid" style="margin-bottom:20%">
      @include('navbar')

      <div class="row">
        <div class="col-lg-4 mt-5 ml-5"><h1 style="color:#F77100">โปรไฟล์</h1></div>
        <div class="col-lg-4"></div>
        <div class="col-lg-4"></div>
      </div>

      <div class="row" style="background-color:#FFFFFF">
        <div class="col-lg-3 mt-2 ">
        </div>
        <div class="col-lg-3 mt-2 d-flex justify-content-center">
          <div class="grid">
              <div class="row mt-5">
                <div class="col">
                  <img src="https://mdbootstrap.com/img/new/avatars/2.jpg" class="rounded w-100" alt="...">
                </div>
              </div>
              <div class="row mt-2 mb-2">
                <div class="col">
                  <button type="button" class="btn btn-primary">เปลี่ยนภาพโปรไฟล์</button>
                  <button type="button" class="btn btn-danger">ลบภาพโปรไฟล์</button>
                </div>
              </div>
              <div class="row mt-2 mb-2">
                <div class="col">
                  <label for="">สถานะบัญชี</label>
                    <input type="text" class="form-control" name="id_role" id="id_role" value="{{auth()->user()->id_role}}" disabled>
                </div>
              </div>
          </div>
        </div>
        <div class="col-lg-3 mt-2 ">
          <div class="grid">

              <div class="row">
                <div class="form-row w-100  mt-2">
                  <div class="col">
                    <label for="">ชื่อ</label>
                    <input type="text" class="form-control" name="Fname" id="Fname" aria-describedby="helpId" placeholder="" value="{{auth()->user()->Fname}}">
                  </div>
                  <div class="col">
                    <label for="">นามสกุล</label>
                    <input type="text" class="form-control" name="Lname" id="Lname" aria-describedby="helpId" placeholder="" value="{{auth()->user()->Lname}}">
                  </div>
                </div>
              </div>

              <div class="row mt-2">
                <div class="form-group w-100">
                  <label for="">Email</label>
                  <input type="text" class="form-control" name="email" id="email" aria-describedby="helpId" placeholder="" value="{{auth()->user()->email}}">
                </div>
              </div>

              <div class="row">
                <div class="form-group w-100">
                  <label for="">เบอร์โทรศัพท์</label>
                  <input type="text" class="form-control" name="phone" id="phone" aria-describedby="helpId" placeholder="" value="{{auth()->user()->phone}}">
                </div>
              </div>

              <div class="row">
                <div class="form-group w-100">
                  <label for="">รหัสผ่านเดิม</label>
                  <input type="text" class="form-control" name="" id="" aria-describedby="helpId" placeholder="">
                </div>
              </div>

              <div class="row">
                <div class="form-group w-100">
                  <label for="">รหัสผ่านใหม่</label>
                  <input type="text" class="form-control" name="" id="" aria-describedby="helpId" placeholder="">
                </div>
              </div>

              <div class="row">
                <div class="form-group w-100">
                  <label for="">ยืนยันรหัสผ่านใหม่</label>
                  <input type="text" class="form-control" name="" id="" aria-describedby="helpId" placeholder="">
                </div>
              </div>

              <div class="row">
                <div class="form-group w-100">
                   <button type="button" class="btn btn-primary w-100 mt-2">บันทึกข้อมูล</button>
                   <button type="button" class="btn btn-danger w-100 mt-2">ยกเลิก</button>
                </div>
              </div>

          </div>
        </div>
        <div class="col-lg-3 mt-2"></div>
      </div>

    <!-- Modal -->
<div class="modal fade" id="videoModal" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header bg-dark border-dark">
                <button type="button" class="close text-white" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body bg-dark p-0">
                <div class="embed-responsive embed-responsive-16by9">
                  <iframe class="embed-responsive-item" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </div>
</div>

    </div>
    @include('footer')
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="{{ asset('/js/jquery.slim.min.js') }}"></script>
    <script src="{{ asset('/js/popper.min.js') }}"></script>
    <script src="{{ asset('/js/all.min.js') }}"></script>
    <script src="{{ asset('/js/bootstrap.js')}}"></script>

    <script>
$(document).ready(function() {
    // Set iframe attributes when the show instance method is called
    $("#videoModal").on("show.bs.modal", function(event) {
        let button = $(event.relatedTarget); // Button that triggered the modal
        let url = button.data("video");      // Extract url from data-video attribute
        $(this).find("iframe").attr({
            src : url,
            allow : "accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
        });
    });

    // Remove iframe attributes when the modal has finished being hidden from the user
    $("#videoModal").on("hidden.bs.modal", function() {
        $("#videoModal iframe").removeAttr("src allow");
    });
});
</script>

  </body>
</html>
