@extends('admin.template')
@section('sidebar')
<li class="nav-item">
    <a href="{{route('editresep')}}" class="nav-link">
        <i class="far fa fa-cog nav-icon"></i>
        <p>Edit Resep</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{route('resepadmin')}}" class="nav-link bg-dark">
        <i class="fas fa-file-alt nav-icon"></i>
        <p>Resep Makanan</p>
    </a>
</li>
@endsection
@section('konten')
<div class="content-wrapper">
    <div class="container"><br><br>

        <div class="row">
            <div class="col-sm-2">
                <a href="{{ redirect()->back()->getTargetUrl() }}" class="nav-link">
                    <br><i class="fas fa-arrow-circle-left nav-icon fa-2x"></i>
                </a>
            </div>
            <div class="col-sm-8">
                <h3 class="text-center my-3"><strong>Resep Membuat<br>{{ $resep->nama }}</strong></h3>
            </div>
            <div class="col-sm-2"></div>
        </div>

        {{ csrf_field() }}
        {{ method_field('PUT') }}
        <p></p>
        <div class="row">
            <div class="col-sm-1"></div>
            <div class="col-sm-4 resep">
                <div class="container">
                    <div class="card bg-success">
                        <div class="card-body">
                            <img class="rounded" width="100%" src="{{ asset('storage/Gambar/'.$resep->namagambar) }}"
                                alt="" srcset="">
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="card bg-success">
                        <div class="card-body">
                            <p>
                            <h4 align="center">Bahan-bahan:</h4><br>
                            <h5 class="card-title ml-2" style="white-space:pre-wrap">{{ $resep->bahan }}</h5><br>
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-sm-6 resep">
                <div class="container">
                    <div class="card bg-success">
                        <div class="card-body">
                            <p>
                            <h4 align="center">Cara Memasak</h4><br>
                            <h5 class="card-title ml-2 text-justify" style="white-space:pre-wrap">{{ $resep->cara }}
                            </h5><br>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection