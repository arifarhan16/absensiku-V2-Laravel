@extends('layouts.header')
@section('content')
    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">
@if(session('Hapusimg'))
<script>
Swal.fire({
title: 'Dokumen Berhasil Di hapus',
type: 'error',
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
            <h1 class="h3 mb-0 text-gray-800">Galeriku</h1>
          </div>

          <!-- Content Row -->
          <div class="row">

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-12 col-lg-7">
              <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Galeriku</h6>
                  
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
            <th> Option </th>
        </tr>
    </thead>
    <tbody>
        <?php $no = 1;?>
            @foreach($data as $gambar)
        <tr>
            
            <td> {{$no++}} </td>
            <td><img src="{{asset('images/'.$gambar->images)}}" alt="" width="100" height="100" class="rounded-circle"></td>
            <td>{{$gambar->images}}</td>
            <td>

        <a href="lookimg/{{$gambar->images}}" class="btn btn-warning"><i class="fa fa-download"></i></a>
        <a href="lookimg/{{$gambar->id}}/hapus" class="btn btn-danger"><i class="fa fa-trash"></i></a> 
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

            <!-- Pie Chart -->
            
          </div>

          <!-- Content Row -->

@endsection
