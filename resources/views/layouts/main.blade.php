<!--
 // WEBSITE: https://themefisher.com
 // TWITTER: https://twitter.com/themefisher
 // FACEBOOK: https://www.facebook.com/themefisher
 // GITHUB: https://github.com/themefisher/
-->

<!--
THEME: Kross - Creative Portfolio Template
VERSION: 1.0.0
AUTHOR: Themefisher

HOMEPAGE: https://themefisher.com/products/kross-creative-portfolio-template/
DEMO: https://demo.themefisher.com/kross/
GITHUB: https://github.com/themefisher/meghna-onepage-html5-business-template

Get HUGO Version : https://gethugothemes.com/products/kross-hugo-theme/

WEBSITE: https://themefisher.com
TWITTER: https://twitter.com/themefisher
FACEBOOK: https://www.facebook.com/themefisher
-->

<!DOCTYPE html>
<html lang="en">
<head>

  <!-- Basic Page Needs
  ================================================== -->
  <meta charset="utf-8">
  <title>LAPORAN BENCANA KOTA SEMARANG</title>

  <!-- Mobile Specific Metas
  ================================================== -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="description" content="Creative Portfolio Template">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">
  <meta name="author" content="Themefisher">
  <meta name="generator" content="Themefisher Kross Template v1.0">
  <!-- Favicon -->
  <link rel="shortcut icon" type="image/x-icon" href="{{asset('temp/images/favicon.png')}}" />

  <!-- ** Plugins Needed for the Project ** -->
  <!-- Bootstrap -->
  <link rel="stylesheet" href="{{asset('temp/plugins/bootstrap/bootstrap.min.css')}}">
  <!-- slick slider -->
  <link rel="stylesheet" href="{{asset('temp/plugins/slick/slick.css')}}">
  <!-- themefy-icon -->
  <link rel="stylesheet" href="{{asset('temp/plugins/themify-icons/themify-icons.css')}}">
  <link rel="stylesheet" href="{{asset('toastr/toastr.min.css')}}">

  <!-- Main Stylesheet -->
  <link href="{{asset('temp/css/style.css')}}" rel="stylesheet">
  <script src="https://use.fontawesome.com/7fc2d8632f.js"></script>

</head>
<body>


<header>
  <nav class="navigation fixed-top navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand font-tertiary" href="index.html"><img src="{{asset('temp/images/logo3.png')}}" height="50px" alt="Myself"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation"
      aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse text-center" id="navigation">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item active">
          <a class="nav-link" href="/">Home</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/disasters">Disasters</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/contact">Contact Us</a>
        </li>
        <li class="nav-item">
            <a class="btn btn-warning btn-sm" href="/login">Login</a>
        </li>

        {{-- <li class="nav-item">
          <a class="nav-link" href="blog.html">Blog</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="portfolio.html">Portfolio</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="contact.html">Contact</a>
        </li> --}}
      </ul>
    </div>
  </nav>
</header>

@yield('content')



<!-- footer -->
<footer class="bg-dark footer-section">
  <div class="section">
    <div class="container">
      <div class="row">
        <div class="col-md-4">
          <h5 class="text-light">Email</h5>
          <p class="text-white paragraph-lg font-secondary">steve.fruits@email.com</p>
        </div>
        <div class="col-md-4">
          <h5 class="text-light">Phone</h5>
          <p class="text-white paragraph-lg font-secondary">+880 2544 658 256</p>
        </div>
        <div class="col-md-4">
          <h5 class="text-light">Address</h5>
          <p class="text-white paragraph-lg font-secondary">125/A, CA Commercial Area, California, USA</p>
        </div>
      </div>
    </div>
  </div>
  <div class="border-top text-center border-dark py-5">
    <p class="mb-0 text-light">Copyright &copy;<script>
        var CurrentYear = new Date().getFullYear()
        document.write(CurrentYear)
      </script> Designed &amp; Developed by <a class="text-white-50" href="Themefisher">Themefisher</a></p>
  </div>
</footer>
<!-- /footer -->

<!-- jQuery -->
<script src="{{asset('temp/plugins/jQuery/jquery.min.js')}}"></script>
<script src="{{asset('toastr/toastr.min.js')}}"></script>
  <script src="{{asset('toastr/toastr.min.js')}}"></script>
<!-- Bootstrap JS -->
<script src="{{asset('temp/plugins/bootstrap/bootstrap.min.js')}}"></script>
<!-- slick slider -->
<script src="{{asset('temp/plugins/slick/slick.min.js')}}"></script>
<!-- filter -->
<script src="{{asset('temp/plugins/shuffle/shuffle.min.js')}}"></script>

<!-- Main Script -->
<script src="{{asset('temp/js/script.js')}}"></script>

@if (Session::has('success'))
<script>
    $( document ).ready(function() {
        toastr.success('<?php echo Session::get('success') ?>' , 'Berhasil')
    });
</script>
@endif

</body>
</html>
