
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>{{config('app.name')}}</title>

<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700%7CVarela+Round" rel="stylesheet">

<link type="text/css" rel="stylesheet" href="https://colorlib.com/etc/creative-agency/css/bootstrap.min.css" />

<link type="text/css" rel="stylesheet" href="https://colorlib.com/etc/creative-agency/css/owl.carousel.css" />
<link type="text/css" rel="stylesheet" href="https://colorlib.com/etc/creative-agency/css/owl.theme.default.css" />

<link type="text/css" rel="stylesheet" href="https://colorlib.com/etc/creative-agency/css/magnific-popup.css" />

<link rel="stylesheet" href="https://colorlib.com/etc/creative-agency/css/font-awesome.min.css">

<link type="text/css" rel="stylesheet" href="https://colorlib.com/etc/creative-agency/css/style.css" />
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/8.11.8/sweetalert2.min.js"></script>


<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>
<body>

<header id="home">

<div class="bg-img" style="background-image: url('https://colorlib.com/etc/creative-agency/img/background1.jpg');">
<div class="overlay"></div>
</div>


<nav id="nav" class="navbar nav-transparent">
<div class="container">
<div class="navbar-header">

<div class="navbar-brand">
<a href="/">
<img class="logo" src="{{asset('images/icon/logo.png')}}" alt="logo">
<img class="logo-alt" src="{{asset('images/icon/logo2.png')}}" alt="logo">
</a>
</div>


<div class="nav-collapse">
<span></span>
</div>

</div>

<ul class="main-nav nav navbar-nav navbar-right">
<li><a href="#home">Home</a></li>
<li><a href="#about">About</a></li>
<li><a href="#team">Team</a></li>
<li><a href="#abs">Absen</a>
<li><a href="#contact">Contact</a></li>
<li><a href="/admin">Login</a></li>
</ul>

</div>
</nav>

@yield('content')


<div class="col-md-8 col-md-offset-2">
</div>

</div>

</div>

</div>


<footer id="footer" class="sm-padding bg-dark">

<div class="container">

<div class="row">
<div class="col-md-12">

<div class="footer-logo">
<a href="index.html"><img class="logo-alt" src="{{asset('images/icon/logo2.png')}}" alt="logo"></a>
</div>


<ul class="footer-follow">
<li><a href="https://web.facebook.com/uhuy.kun"><i class="fa fa-facebook"></i></a></li>
<li><a href="https://github.com/arifarhan16"><i class="fa fa-github"></i></a></li>
<li><a href="https://youtube.com/bekasisec"><i class="fa fa-youtube"></i></a></li>
</ul>


<div class="footer-copyright">
<p><span>Copyright &copy; {{config('app.name')}} Make With <font color="red">❤</font> @ {{date('Y')}} By Arikun </span></p>
</div>

</div>
</div>

</div>

</footer>


<div id="back-to-top"></div>


<div id="preloader">
<div class="preloader">
<span></span>
<span></span>
<span></span>
<span></span>
</div>
</div>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.js"></script>

<script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script type="4d6a2880458d6526b5148568-text/javascript" src="https://colorlib.com/etc/creative-agency/js/jquery.min.js"></script>
<script type="4d6a2880458d6526b5148568-text/javascript" src="https://colorlib.com/etc/creative-agency/js/bootstrap.min.js"></script>
<script type="4d6a2880458d6526b5148568-text/javascript" src="https://colorlib.com/etc/creative-agency/js/owl.carousel.min.js"></script>
<script type="4d6a2880458d6526b5148568-text/javascript" src="https://colorlib.com/etc/creative-agency/js/jquery.magnific-popup.js"></script>
<script type="4d6a2880458d6526b5148568-text/javascript" src="https://colorlib.com/etc/creative-agency/js/main.js"></script>
<script src="https://ajax.cloudflare.com/cdn-cgi/scripts/7089c43e/cloudflare-static/rocket-loader.min.js" data-cf-settings="4d6a2880458d6526b5148568-|49" defer=""></script></body>



<script>


    $(document).ready(function(){
        $('#tabel-data-index').DataTable();
    });

</script>
</html>