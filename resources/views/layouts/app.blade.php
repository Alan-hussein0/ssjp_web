<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>SSJP</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
{{-- 
  <link rel="apple-touch-icon" href="apple-icon.png">
  <link rel="shortcut icon" href="favicon.ico">

  <link rel="stylesheet" href="assets1/css/normalize.css">
  <link rel="stylesheet" href="assets1/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets1/css/font-awesome.min.css">
  <link rel="stylesheet" href="assets1/css/themify-icons.css">
  <link rel="stylesheet" href="assets1/css/flag-icon.min.css">
  <link rel="stylesheet" href="assets1/css/cs-skin-elastic.css">
  <!-- <link rel="stylesheet" href="assets/css/bootstrap-select.less"> -->
  <link rel="stylesheet" href="assets1/scss/style.css"> --}}

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: EstateAgency - v3.0.0
  * Template URL: https://bootstrapmade.com/real-estate-agency-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

  <body>
    {{-- <div class="d-flex flex-column"> --}}
      @include('frontend.search')

      @include('frontend.header_navbar')

      @yield('content')


    
    {{-- </div> --}}

    @include('frontend.section_footer')

    <footer>
      @include('frontend.footer')
    </footer>



    <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
    <div id="preloader"></div>
  
    <!-- Vendor JS Files -->
    <script src="assets/vendor/jquery/jquery.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>
    <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
    <script src="assets/vendor/scrollreveal/scrollreveal.min.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>
   
    {{-- <script src="assets/js/vendor/jquery-2.1.4.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/main.js"></script> --}}

    <script>
      $(document).ready(function(){
        // console.log($('a').hasClass('active').toString());
        // console.log($('.active').attr('id'));
          $(".active").removeClass("active");
        // $('a').find('.active').removeClass('active');
        // console.log($('a').hasClass('active').toString());
        let key = $(location).attr('pathname').toString();
        // console.log($(location).attr('pathname').toString());
        switch (key) {
          case '/':
              $('#main').addClass('active')
              break;
          case '/journal':
              $('#journal').addClass('active')
              break;
          case '/createJournal':
              $('#create_journal').addClass('active')
              break;
          case '/login':
              $('#login').addClass('active')
              break;
          case '/contact':
              $('#contact').addClass('active')
            break;
            case '/register':
              $('#register').addClass('active')
            break;
          default:
            break;
        }
      });
    </script>  
    
  </body>

</html>
