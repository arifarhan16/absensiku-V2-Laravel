@extends('layouts.header')
@section('content')
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
            <h1 class="h3 mb-0 text-gray-800">Edit Siswa</h1>
          </div>

          <!-- Content Row -->
          <div class="row">

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-12 col-lg-7">
              <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Edit Siswa</h6>
                  
                </div>
                <!-- Card Body -->
                <div class="card-body">
                    <form method="POST" action="/admin/{{$data->id}}/updatesiswa">
                      @csrf
 <div class="form-group">
    <label for="exampleFormControlInput1"><font color="black">Nama</font></label>
    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="nama" value="{{$data->nama}}" name="nama" required>
  </div>

  <div class="form-group">
    <label for="exampleFormControlSelect1"><font color="black">Kelas</font></label>
    <select class="form-control" id="exampleFormControlSelect1" name="kelas">
      <option value="XA" @if($data->kelas == 'XA' ) selected @endif>XA</option>
      <option value="XB" @if($data->kelas == 'XB' ) selected @endif>XB</option>
      <option value="XC" @if($data->kelas == 'XC' ) selected @endif>XC</option>
      <option value="XD" @if($data->kelas == 'XD' ) selected @endif>XD</option>
      <option>--</option>
      <option value="XIA" @if($data->kelas == 'XIA' ) selected @endif>XIA</option>
      <option value="XIB" @if($data->kelas == 'XIB' ) selected @endif>XIB</option>
      <option value="XIC" @if($data->kelas == 'XIC' ) selected @endif>XIC</option>
      <option value="XID" @if($data->kelas == 'XID' ) selected @endif>XID</option>
      <option>--</option>
      <option value="XIIA" @if($data->kelas == 'XIIA' ) selected @endif>XIIA</option>
      <option value="XIIB" @if($data->kelas == 'XIIB' ) selected @endif>XIIB</option>
      <option value="XIIC" @if($data->kelas == 'XIIC' ) selected @endif>XIIC</option>
      <option value="XIID" @if($data->kelas == 'XIID' ) selected @endif>XIID</option>
    </select>
  </div>


 <div class="form-group">
    <label for="exampleFormControlSelect1"><font color="black">Hari</font></label>
    <select class="form-control" id="exampleFormControlSelect1" name="hari">
      <option value="Senin"  @if($data->hari == 'Senin' ) selected @endif>Senin</option>
      <option value="Selasa" @if($data->hari == 'Selasa' ) selected @endif>Selasa</option>
      <option value="Rabu" @if($data->hari == 'Rabu' ) selected @endif>Rabu</option>
      <option value="Kamis" @if($data->hari == 'Kamis' ) selected @endif>Kamis</option>
      <option value="Jum'at" @if($data->hari == "Jum'at" ) selected @endif>Jum'at</option>
      <option value="Sabtu" @if($data->hari == 'Sabtu' ) selected @endif>Sabtu</option>
      <option value="Minggu" @if($data->hari == 'Minggu' ) selected @endif>Minggu</option>
    </select>
  </div>





 <div class="form-group">
    <label for="exampleFormControlSelect1"><font color="black">Tanggal</font></label>
    <select class="form-control" id="exampleFormControlSelect1" name="tanggal">
      <option value="1" @if($data->tanggal == '1' ) selected @endif>1</option>
      <option value="2" @if($data->tanggal == '2' ) selected @endif>2</option>
      <option value="3" @if($data->tanggal == '3' ) selected @endif>3</option>
      <option value="4" @if($data->tanggal == '4' ) selected @endif>4</option>
      <option value="5" @if($data->tanggal == '5' ) selected @endif>5</option>
      <option value="6" @if($data->tanggal == '6' ) selected @endif>6</option>
      <option value="7" @if($data->tanggal == '7' ) selected @endif>7</option>
      <option value="8" @if($data->tanggal == '8' ) selected @endif>8</option>
      <option value="9" @if($data->tanggal == '9' ) selected @endif>9</option>
      <option value="10" @if($data->tanggal == '10' ) selected @endif>10</option>
      <option value="11" @if($data->tanggal == '11' ) selected @endif>11</option>
      <option value="12" @if($data->tanggal == '12' ) selected @endif>12</option>
      <option value="13" @if($data->tanggal == '13' ) selected @endif>13</option>
      <option value="14" @if($data->tanggal == '14' ) selected @endif>14</option>
      <option value="15" @if($data->tanggal == '15' ) selected @endif>15</option>
      <option value="16" @if($data->tanggal == '16' ) selected @endif>16</option>
      <option value="17" @if($data->tanggal == '17' ) selected @endif>17</option>
      <option value="18" @if($data->tanggal == '18' ) selected @endif>18</option>
      <option value="19" @if($data->tanggal == '19' ) selected @endif>19</option>
      <option value="20" @if($data->tanggal == '20' ) selected @endif>20</option>
      <option value="21" @if($data->tanggal == '21' ) selected @endif>21</option>
      <option value="22" @if($data->tanggal == '22' ) selected @endif>22</option>
      <option value="23" @if($data->tanggal == '23' ) selected @endif>23</option>
      <option value="24" @if($data->tanggal == '24' ) selected @endif>24</option>
      <option value="25" @if($data->tanggal == '25' ) selected @endif>25</option>
      <option value="26" @if($data->tanggal == '26' ) selected @endif>26</option>
      <option value="27" @if($data->tanggal == '27' ) selected @endif>27</option>
      <option value="28" @if($data->tanggal == '28' ) selected @endif>28</option>
      <option value="29" @if($data->tanggal == '29' ) selected @endif>29</option>
      <option value="30" @if($data->tanggal == '30' ) selected @endif>30</option>
      <option value="31" @if($data->tanggal == '31' ) selected @endif>31</option>
    </select>
  </div>



 <div class="form-group">
    <label for="exampleFormControlSelect1"><font color="black">Bulan</font></label>
    <select class="form-control" id="exampleFormControlSelect1" name="bulan">
      <option value="Januari" @if($data->bulan == 'Januari' ) selected @endif>Januari</option>
      <option value="Februari" @if($data->bulan == 'Februari' ) selected @endif>Februari</option>
      <option value="Maret" @if($data->bulan == 'Maret' ) selected @endif>Maret</option>
      <option value="April" @if($data->bulan == 'April' ) selected @endif>April</option>
      <option value="Mei" @if($data->bulan == 'Mei' ) selected @endif>Mei</option>
      <option value="Juni" @if($data->bulan == 'Juni' ) selected @endif>Juni</option>
      <option value="Juli" @if($data->bulan == 'Juli' ) selected @endif>Juli</option>
      <option value="Agustus" @if($data->bulan == 'Agustus' ) selected @endif>Agustus</option>
      <option value="September" @if($data->bulan == 'September' ) selected @endif>September</option>
      <option value="Oktober" @if($data->bulan == 'Oktober' ) selected @endif>Oktober</option>
      <option value="November" @if($data->bulan == 'November' ) selected @endif>November</option>
      <option value="Desember" @if($data->bulan == 'Desember' ) selected @endif>Desember</option>
    </select>
  </div>



 <div class="form-group">
    <label for="exampleFormControlSelect1"><font color="black">Tahun</font></label>
    <select class="form-control" id="exampleFormControlSelect1" name="tahun">
      <option value="2019" @if($data->tahun == '2019' ) selected @endif>2019</option>
      <option value="2020" @if($data->tahun == '2020' ) selected @endif>2020</option>
      <option value="2021" @if($data->tahun == '2021' ) selected @endif>2021</option>
      <option value="2022" @if($data->tahun == '2022' ) selected @endif>2022</option>
    </select>
  </div>

 <div class="form-group">
    <label for="exampleFormControlSelect1"><font color="black">Alasan</font></label>
    <select class="form-control" id="exampleFormControlSelect1" name="kehadiran">
      <option value="Alfa" @if($data->kehadiran == 'Alfa' ) selected @endif>Alfa</option>
      <option value="Izin" @if($data->kehadiran == 'Izin' ) selected @endif>Izin</option>
      <option value="Sakit" @if($data->kehadiran == 'Sakit' ) selected @endif>Sakit</option>
      <option value="Masuk" @if($data->kehadiran == 'Masuk' ) selected @endif>Masuk</option>
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
