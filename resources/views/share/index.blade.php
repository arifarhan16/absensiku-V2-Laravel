@extends('layouts.header2')
@section('content')
<div class="home-wrapper">
<div class="container">
<div class="row">

<div class="col-md-10 col-md-offset-1">
<div class="home-content">
<h1 class="white-text">{{config('app.name')}}</h1>
<p class="white-text">Aplikasi Absensi Sederhana V2
</p>
<a href="#contact"><button class="white-btn">Get Started!</button></a>
<a href="#about"><button class="main-btn">Learn more</button></a>
</div>
</div>

</div>
</div>
</div>
<style type="text/css">
    /* scroller browser */
::-webkit-scrollbar {
    width: 5px;
}

/* Track */
::-webkit-scrollbar-track {
    -webkit-box-shadow: inset 0 0 5px rgba(0,0,0,0.1); 
    -webkit-border-radius: 5px;
    border-radius: 5px;
}

/* Handle */
::-webkit-scrollbar-thumb {
    -webkit-border-radius: 5px;
    border-radius: 5px;
    background: #a6a5a5;
    -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.1); 
}
::-webkit-scrollbar-thumb:window-inactive {
    background: rgba(0,0,0,0.4); 
}
</style>
</header>


<div id="about" class="section md-padding">

<div class="container">

<div class="row">

<div class="section-header text-center">
<h2 class="title">About</h2>
</div>


<div class="col-md-4">
<div class="about">
<i class="fa fa-cogs"></i>
<h3>Cepat</h3>
<p>Katakan Tidak Pada Keleletan !</p>
</div>
</div>


<div class="col-md-4">
<div class="about">
<i class="fa fa-magic"></i>
<h3>Fitur</h3>
<p>Aplikasi Absen V2 Memiliki Fitur Baru</p>
</div>
</div>


<div class="col-md-4">
<div class="about">
<i class="fa fa-mobile"></i>
<h3>Responsive</h3>
<p>Bisa Digunakan Untuk Segala Perangkat</p>
</div>
</div>

</div>

</div>

</div>



</div>

</div>

</div>

<div id="features" class="section md-padding bg-grey">

<div class="container">

<div class="row">

<div class="col-md-6">
<div class="section-header">
<h2 class="title">Keuntungan</h2>
</div>
<p>Menggunakan Aplikasi Ini Dapat Mendapat Keuntungan Yaitu : </p>
<div class="feature">
<i class="fa fa-check"></i>
<p>Kemudahan Kegiatan Absensi.</p>
</div>
<div class="feature">
<i class="fa fa-check"></i>
<p>Kemudahan Menyimpan File.</p>
</div>
<div class="feature">
<i class="fa fa-check"></i>
<p>Kemudahan Mengingat Materi</p>
</div>
<div class="feature">
<i class="fa fa-check"></i>
<p>Gratis</p>
</div>
</div>


<div class="col-md-6">
<div id="about-slider" class="owl-carousel owl-theme">
<img class="img-responsive" src="{{asset('images/ss/ss1.png')}}" alt="">
<img class="img-responsive" src="{{asset('images/ss/ss2.png')}}" alt="">
<img class="img-responsive" src="{{asset('images/ss/ss3.png')}}" alt="">
</div>
</div>

</div>

</div>

</div>


<div id="numbers" class="section sm-padding">

<div class="bg-img" style="background-image: url('https://colorlib.com/etc/creative-agency//img/background2.jpg');">
<div class="overlay"></div>
</div>


<div class="container">

<div class="row">
@foreach ($datake3 as $jumsis)
<div class="col-sm-6 col-xs-6">
<div class="number">
<i class="fa fa-users"></i>
<h3 class="white-text"><span class="counter">{{$jumsis->jumsis}}</span></h3>
<span class="white-text">Siswa Yang Mengikuti</span>
@endforeach
</div>
</div>


@foreach($datake2 as $materi)
<div class="col-sm-6 col-xs-6">
<div class="number">
<i class="fa fa-file"></i>
<h3 class="white-text"><span class="counter">{{$materi->materi}}</span></h3>
<span class="white-text">Materi Yang Diajarkan</span>
</div>
@endforeach
</div>

</div>

</div>

</div>

</div>

</div>

</div>


<div id="team" class="section md-padding">

<div class="container">

<div class="row">

<div class="section-header text-center">
<h2 class="title">Our Team</h2>
</div>


<div class="col-sm-4">
<div class="team">
<div class="team-img">
<img class="img-responsive" src="{{asset('images/ss/pp.jpg')}}" alt="">
<div class="overlay">
<div class="team-social">
<a href="https://web.facebook.com/groups/218353528886923/"><i class="fa fa-facebook"></i></a>
<a href="https://github.com/arifarhan16"><i class="fa fa-github"></i></a>
</div>
</div>
</div>
<div class="team-content">
<h3>Exercise</h3>
</div>
</div>
</div>


<div class="col-sm-4">
<div class="team">
<div class="team-img">
<img class="img-responsive" src="{{asset('images/ss/is.jpg')}}" alt="">
<div class="overlay">
<div class="team-social">
<a href="https://web.facebook.com/IndoSecOfficial/"><i class="fa fa-facebook"></i></a>
<a href="https://github.com/indosecid"><i class="fa fa-github"></i></a>

</div>
</div>
</div>
<div class="team-content">
<h3>IndoSec</h3>
</div>
</div>
</div>


<div class="col-sm-4">
<div class="team">
<div class="team-img">
<img class="img-responsive" src="{{asset('images/ss/bhr.jpg')}}" alt="">
<div class="overlay">
<div class="team-social">
<a href="https://web.facebook.com/bekasiSec"><i class="fa fa-facebook"></i></a>
<a href="https://github.com/arifarhan16"><i class="fa fa-github"></i></a>

</div>
</div>
</div>
<div class="team-content">
<h3>Bekasi Hacker Rulez</h3>
</div>
</div>
</div>

</div>

</div>

</div>


<div id="abs" class="section md-padding bg-grey">

<div class="container">

<div class="row">

<div class="section-header text-center">
<h2 class="title">Absensi</h2>
</div>

<div class="col-md-12">
              <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  
                </div>
                <!-- Card Body -->
                <div class="card-body">
                    <div class="table-responsive">
<table id="tabel-data-index" class="table table-striped table-bordered" width="100%" cellspacing="0">
    <thead>
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Kelas</th>
            <th>Tanggal</th>
            <th>Kehadiran</th>

        </tr>
    </thead>
    <tbody>
      <?php $no = 1;?>
          @foreach($dataku as $absen)
        <tr>
          
            <td> {{$no++}}</td>
            <td> {{$absen->nama}}</td>
            <td> {{$absen->kelas}}</td>
            <td> {{$absen->hari}} , {{$absen->tanggal}} {{$absen->bulan}} {{$absen->tahun}}</td>
            <td> {{$absen->kehadiran}}</td>
        </tr>
        @endforeach
    </tbody>
</table>
</div>
</div>

                </div>

</div>

</div>

</div>


<div id="contact" class="section md-padding">

<div class="container">

<div class="row">

<div class="section-header text-center">
<h2 class="title">Contact</h2>
</div>
<div class="container" align="center">
	<div class="row">
		<div class="col-md-4">
 <a href="https://wa.me/+62895372320697" target="_blank"><img src="{{asset('images/icon/wa.png')}}" class="rounded float-left img-fluid" width="200px" height="100px"></a>
 </div>
 <div class="col-md-4">
<a href="https://t.me/darbex_x" target="_blank"><img src="{{asset('images/icon/telegram.png')}}" class="rounded float-center img-fluid " width="200px" height="200px"></a>
</div>
<div class="col-md-4">
<a href="mailto:arifarhan1602@gmail.com" target="_blank"><img src="{{asset('images/icon/gmail.png')}}" class="rounded float-right img-fluid" width="190px" height="100px"></a>	
</div>
</div>
</div>
</div>
</div>
@endsection
