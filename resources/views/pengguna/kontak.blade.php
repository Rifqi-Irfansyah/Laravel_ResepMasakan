@extends('pengguna.beranda')
@section('sidebar')

            @if (auth()->user()->level=="admin")
            <li class="nav-item">
            <a href="{{route('editresep')}}" class="nav-link">
                <i class="far fa fa-cog nav-icon"></i>
                <p>Edit Resep</p>
            </a>
            </li>
            @endif

            <li class="nav-item">
            <a href="{{route('resepmasakan')}}" class="nav-link">
                <i class="fas fa-file-alt nav-icon"></i>
                <p>Resep Makanan</p>
            </a>
            </li>

    <li class="nav-item menu-open">
        <a href="#" class="nav-link ">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p>
            Kategori
            <i class="right fas fa-angle-left"></i>
            </p>
        </a>
        <ul class="nav nav-treeview">

            <li class="nav-item">
            <a href="{{route('makananBerat')}}" class="nav-link">
                <i class="fas fa-bread-slice nav-icon"></i>
                <p>Makanan Berat</p>
            </a>
            </li>
        </ul>
        <ul class="nav nav-treeview">

            <li class="nav-item">
            <a href="{{route('makananRingan')}}" class="nav-link">
                <i class="fas fa-hamburger nav-icon"></i>
                <p>Makanan Ringan</p>
            </a>
            </li>
        </ul>
        <ul class="nav nav-treeview">

            <li class="nav-item">
            <a href="{{route('minuman')}}" class="nav-link">
                <i class="fas fa-mug-hot nav-icon"></i>
                <p>Minuman</p>
            </a>
            </li>
        </ul>
    </li>
@endsection
@section('konten')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper d-flex align-items-center">
    <br><br>
    <div class="content">
      <div class="container" >
        <div class="row">
          <div class="col-lg-2"></div>
            <div class="col-lg-8">
              <div class="card">
                <div class="card-body bg-success" >

                  <div class="card-header text-center font-weight-bold">
                    <h3><strong>Kontak Saya</strong></h3>
                  </div>

                  <p class="card-text text-justify text-center">
                  Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
                  Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                   when an unknown printer took a galley of type and scrambled it to make a type specimen book
                  </p>

                </div>
              </div>
            </div>
          <div class="col-lg-2"></div>
        </div>
      </div>
    </div>
</div>
@endsection