@extends('layouts.header')
@section('content')
    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">
@if(session('Edit'))
<script>
Swal.fire({
title: 'Data Berhasil Di Edit',
type: 'success',
  showConfirmButton: false,
  timer: 1500
            })

  </script>
@endif
@if(session('addmat'))
<script>
Swal.fire({
title: 'Materi Berhasil Di Tambahkan',
type: 'success',
  showConfirmButton: false,
  timer: 1500
            })

  </script>
@endif
@if(session('Hapus'))
<script>
Swal.fire({
title: 'Absen Berhasil Di Hapus',
type: 'error',
  showConfirmButton: false,
  timer: 1500
            })

  </script>
@endif

@if(session('jumsis'))
<script>
Swal.fire({
title: 'Jumlah Siswa Berhasil Di Tambahkan',
type: 'info',
  showConfirmButton: false,
  timer: 1500
            })

  </script>
@endif
        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>
          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">

            <!-- Nav Item - Search Dropdown (Visible Only XS) -->

            <div class="topbar-divider d-none d-sm-block"></div>

            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small">{{ Auth::user()->name }}</span>
                <img class="img-profile rounded-circle" src="{{asset('images/icon/Admin.png')}}">
              </a>
              <!-- Dropdown - User Information -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="/logout" data-toggle="modal" data-target="#logoutModal">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Logout
                </a>
              </div>
            </li>
          </ul>
        </nav>
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
          </div>

          <!-- Content Row -->
          <div class="row">

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Waktu </div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">
                        <font size="4">
                       <div id="clock"></div>
    <script type="text/javascript">
    <!--
    function showTime() {
        var a_p = "";
        var today = new Date();
        var curr_hour = today.getHours();
        var curr_minute = today.getMinutes();
        var curr_second = today.getSeconds();
        if (curr_hour < 12) {
            a_p = "AM";
        } else {
            a_p = "PM";
        }
        if (curr_hour == 0) {
            curr_hour = 12;
        }
        if (curr_hour > 12) {
            curr_hour = curr_hour - 12;
        }
        curr_hour = checkTime(curr_hour);
        curr_minute = checkTime(curr_minute);
        curr_second = checkTime(curr_second);
     document.getElementById('clock').innerHTML=curr_hour + ":" + curr_minute + ":" + curr_second + " " + a_p;
        }
 
    function checkTime(i) {
        if (i < 10) {
            i = "0" + i;
        }
        return i;
    }
    setInterval(showTime, 500);
    //-->
    </script>
  </font>
                      </div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-calendar fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Tanggal</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">
                         <font size="4">
                        <script type='text/javascript'>
      <!--
      var months = ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'];
      var myDays = ['Minggu', 'Senin', 'Selasa', 'Rabu', 'Kamis', 'Jum&#39;at', 'Sabtu'];
      var date = new Date();
      var day = date.getDate();
      var month = date.getMonth();
      var thisDay = date.getDay(),
          thisDay = myDays[thisDay];
      var yy = date.getYear();
      var year = (yy < 1000) ? yy + 1900 : yy;
      document.write(thisDay + ', ' + day + ' ' + months[month] + ' ' + year);
      //-->
    </script>
</font>
                      </div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-calendar fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>



            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                        Pengingat Materi
                      </div>
                      @foreach($datake2 as $materi)
                      <div class="h5 mb-0 font-weight-bold text-gray-800">{{$materi->materi}}</div>
                      @endforeach
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-bookmark fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Earnings (Monthly) Card Example -->
           

            <!-- Pending Requests Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Jumlah Siswa</div>
                      @foreach($datake3 as $jumsis)
                      <div class="h5 mb-0 font-weight-bold text-gray-800">{{$jumsis->jumsis}}</div>
                      @endforeach
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-users fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- Content Row -->

          <div class="row">

            <!-- Area Chart -->
            <div class="col-xl-12 col-lg-7">
              <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Daftar Hadir</h6>
                  
                </div>
                <!-- Card Body -->
                <div class="card-body">
                    <div class="table-responsive">
<table id="tabel-data" class="table table-striped table-bordered" width="100%" cellspacing="0">
    <thead>
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Kelas</th>
            <th>Tanggal</th>
            <th>Kehadiran</th>
            <th>Opt</th>
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
            <td>
              <a href="/admin/{{$absen->id}}/editsiswa" class="btn btn-warning">Edit</a>
              <a href="/admin/{{$absen->id}}/hapussiswa" class="btn btn-danger">Delete</a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
</div>
</div>

                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-xl-12 col-lg-7">
              <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Daftar Dokumen</h6>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                  <div class="table-responsive">
<table id="down" class="table table-striped table-transparent table-hover" width="100%" cellspacing="10" cellpadding="10">
      <thead>
      <tr>
        <th>No</th>
        <th>Dokumen</th>
      </tr>
      </thead>
      <?php $no=1;?>
        @foreach($datadoc as $doc)
      <tr>
        <td>{{$no++}}</td>
        <td>{{$doc->doc}}</td>
      </tr>
      @endforeach
    </table>
</table>
</div>
</div>
</div>


<div class="row">
              <div class="col-xl-12 col-lg-7">
              <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Daftar Gambar</h6>
                </div>
                <!-- Card Body -->
                <div class="card-body">
<div class="table-responsive">
<table id="gambar" class="table table-hover" width="100%" cellspacing="10" cellpadding="10">
    <thead>
        <tr>
            <th> No </th>
            <th> Gambar </th>
            <th> Nama </th>
        </tr>
    </thead>
    <tbody>
        <?php $no = 1;?>
            @foreach($dataimg as $gambar)
        <tr>
            
            <td> {{$no++}} </td>
            <td><img src="{{asset('images/'.$gambar->images)}}" alt="" width="100" height="100" class="rounded-circle"></td>
            <td>{{$gambar->images}}</td>
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

          <!-- Content Row -->

@endsection
