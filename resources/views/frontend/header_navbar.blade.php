{{-- <section> --}}
<nav class="navbar navbar-default navbar-trans navbar-expand-lg fixed-top">
    <div class="container">
      <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarDefault" aria-controls="navbarDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span></span>
        <span></span>
        <span></span>
      </button>
      <a class="navbar-brand text-brand" href="index.html">SS<span class="color-b">JP</span></a>
      <button type="button" class="btn btn-link nav-search navbar-toggle-box-collapse d-md-none" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-expanded="false">
        <span class="fa fa-search" aria-hidden="true"></span>
      </button>
      <div class="navbar-collapse collapse justify-content-center" id="navbarDefault">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active" id="main" href="{{url('/')}}">الرئيسة</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="journal" href="{{url('/journal')}}">المجلات</a>
          </li>

          <li class="nav-item ">
            {{-- <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              إضافة مجلة
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown"> --}}
            <a class="nav-link" id="create_journal" href="{{route('create_journal')}}"> إضافة مجلة</a>

          </li>
          {{-- <li class="nav-item">
            <a class="nav-link" id="login" href="{{url('/login')}}">الدخول</a>
          </li> --}}

          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              الدخول
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" id="login" href="{{url('/login')}}"> تسجيل الدخول</a>
            <a class="dropdown-item" id="register" href="{{url('/register')}}"> انشاء حساب جديد</a>

             
          </li>

          <li class="nav-item">
            <a class="nav-link" id="contact" href="{{url('/contact')}}" id="contact">اتصل بنا</a>
          </li>
        </ul>
      </div>
      <button type="button" class="btn btn-b-n navbar-toggle-box-collapse d-none d-md-block" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-expanded="false">
        <span class="fa fa-search" aria-hidden="true"></span>
      </button>
    </div>
  </nav><!-- End Header/Navbar -->


{{-- </section> --}}
