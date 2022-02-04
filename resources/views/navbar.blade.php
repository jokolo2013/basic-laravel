<nav class="navbar navbar-expand-lg navbar-dark" style="background-color:#F77100">
<a class="navbar-brand" href="#">
    <img src="{{ asset('/images/Logo-Test.png') }}" width="150" height="50" class="d-inline-block align-top" alt="LoGo">
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarScroll">
    <ul class="navbar-nav mr-auto my-2 my-lg-0 navbar-nav-scroll" style="max-height: 100px;">
      <li class="nav-item dropdown active">
        <a class="nav-link dropdown-toggle" href="#" id="navbarScrollingDropdown" role="button" data-toggle="dropdown" aria-expanded="false">
          คอร์สเรียน
        </a>
        <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
          <li><a class="dropdown-item" href="#">test</a></li>
          <li><a class="dropdown-item" href="#">Another action</a></li>
          <li><a class="dropdown-item" href="#">Something else here</a></li>
        </ul>
      </li>
    </ul>

    <div class="navbar-collapse collapse" id="navbarScroll">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link" href="#">คอร์สเรียนของฉัน</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link" href="#" id="navbarDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <img
                    src="https://mdbootstrap.com/img/new/avatars/2.jpg"
                    class="rounded-circle"
                    height="30"
                    alt=""
                    loading="lazy"
                  />
                  <i class="fas fa-angle-down"></i>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="profile">Profile</a>
                    <a class="dropdown-item" href="#">Setting</a>
                    <a class="dropdown-item" href="#">Log Out</a>
                </div>
            </li>
        </ul>
    </div>
    
  </div>
</nav>