@extends('layouts.header')
@section('content')


@if(session('sukses'))
<script>
Swal.fire({
title: 'Data Absen Berhasil Di Input',
type: 'success',
showCloseButton: true
            })
</script>
@endif
    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">
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
            <h1 class="h3 mb-0 text-gray-800">Add Absen</h1>
          </div>

          <!-- Content Row -->
          <div class="row">

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-12 col-lg-7">
              <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Add Absen</h6>
                  
                </div>
                <!-- Card Body -->
                <div class="card-body">
                    <form method="POST" action="/admin/abs/addabs">
                      @csrf
 <div class="form-group">
    <label for="exampleFormControlInput1"><font color="black">Nama</font></label>
    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="nama" name="nama" required>
  </div>

  <div class="form-group">
    <label for="exampleFormControlSelect1"><font color="black">Kelas</font></label>
    <select class="form-control" id="exampleFormControlSelect1" name="kelas">
      <option value="XA">XA</option>
      <option value="XB">XB</option>
      <option value="XC">XC</option>
      <option value="XD">XD</option>
      <option>--</option>
      <option value="XIA">XIA</option>
      <option value="XIB">XIB</option>
      <option value="XIC">XIC</option>
      <option value="XID">XID</option>
      <option>--</option>
      <option value="XIIA">XIIA</option>
      <option value="XIIB">XIIB</option>
      <option value="XIIC">XIIC</option>
      <option value="XIID">XIID</option>
    </select>
  </div>


 <div class="form-group">
    <label for="exampleFormControlSelect1"><font color="black">Hari</font></label>
    <select class="form-control" id="exampleFormControlSelect1" name="hari">
      <option value="Senin">Senin</option>
      <option value="Selasa">Selasa</option>
      <option value="Rabu">Rabu</option>
      <option value="Kamis">Kamis</option>
      <option value="Jum'at">Jum'at</option>
      <option value="Sabtu">Sabtu</option>
      <option value="Minggu">Minggu</option>
    </select>
  </div>





 <div class="form-group">
    <label for="exampleFormControlSelect1"><font color="black">Tanggal</font></label>
    <select class="form-control" id="exampleFormControlSelect1" name="tanggal">
      <option value="1">1</option>
      <option value="2">2</option>
      <option value="3">3</option>
      <option value="4">4</option>
      <option value="5">5</option>
      <option value="6">6</option>
      <option value="7">7</option>
      <option value="8">8</option>
      <option value="9">9</option>
      <option value="10">10</option>
      <option value="11">11</option>
      <option value="12">12</option>
      <option value="13">13</option>
      <option value="14">14</option>
      <option value="15">15</option>
      <option value="16">16</option>
      <option value="17">17</option>
      <option value="18">18</option>
      <option value="19">19</option>
      <option value="20">20</option>
      <option value="21">21</option>
      <option value="22">22</option>
      <option value="23">23</option>
      <option value="24">24</option>
      <option value="25">25</option>
      <option value="26">26</option>
      <option value="27">27</option>
      <option value="28">28</option>
      <option value="29">29</option>
      <option value="30">30</option>
      <option value="31">31</option>
    </select>
  </div>



 <div class="form-group">
    <label for="exampleFormControlSelect1"><font color="black">Bulan</font></label>
    <select class="form-control" id="exampleFormControlSelect1" name="bulan">
      <option value="Januari">Januari</option>
      <option value="Februari">Februari</option>
      <option value="Maret">Maret</option>
      <option value="April">April</option>
      <option value="Mei">Mei</option>
      <option value="Juni">Juni</option>
      <option value="Juli">Juli</option>
      <option value="Agustus">Agustus</option>
      <option value="September">September</option>
      <option value="Oktober">Oktober</option>
      <option value="November">November</option>
      <option value="Desember">Desember</option>
    </select>
  </div>



 <div class="form-group">
    <label for="exampleFormControlSelect1"><font color="black">Tahun</font></label>
    <select class="form-control" id="exampleFormControlSelect1" name="tahun">
      <option value="2019">2019</option>
      <option value="2020">2020</option>
      <option value="2021">2021</option>
      <option value="2022">2022</option>
    </select>
  </div>

 <div class="form-group">
    <label for="exampleFormControlSelect1"><font color="black">Alasan</font></label>
    <select class="form-control" id="exampleFormControlSelect1" name="kehadiran">
      <option value="Alfa">Alfa</option>
      <option value="Izin">Izin</option>
      <option value="Sakit">Sakit</option>
      <option value="Masuk">Masuk</option>
    </select>
  </div>
  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
        </form>
                </div>
              </div>
            </div>

            <!-- Pie Chart -->
            
          </div>

          <!-- Content Row -->

@endsection