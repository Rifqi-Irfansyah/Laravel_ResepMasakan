@extends('admin.template')
@section('sidebar')
<li class="nav-item">
    <a href="{{route('editresep')}}" class="nav-link">
        <i class="far fa fa-cog nav-icon"></i>
        <p>Edit Resep</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{route('resepadmin')}}" class="nav-link">
        <i class="fas fa-file-alt nav-icon"></i>
        <p>Resep Makanan</p>
    </a>
</li>
@endsection
@section('konten')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper"><br><br>
    <div class="card-body mx-6 my-auto justify-content-center">
        <div class="row">
            <div class="row">
                <div class="col-lg-2"></div>
                <div class="col-lg-8">
                    <div class="card">
                        <div class="card-body bg-success">
                            <div class="card-header text-center font-weight-bold">
                                <h3><strong>Laman Admin</strong></h3>
                            </div>
                            <p class="card-text text-justify text-center">
                                Di Halaman ini anda dapat menambahkan, mengedit dan menghapus data-data di database pada
                                , pastikan data yang akan anda rubah sudah sesuai dan sudah mendapatkan ijin
                                dari atasan !!
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