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
@section('headbarsearch')
<li class="nav-item">
    <a class="nav-link" data-widget="navbar-search" href="#" role="button">
        <i class="fas fa-search"></i>
    </a>
    <div class="navbar-search-block">
        <form action="/resepadmin/cari" method="GET">
            <div class="input-group input-group-sm">
                <input class="form-control form-control-navbar" type="text" placeholder="Search" name="cari"
                    value="{{ old('cari') }}">
                <div class="input-group-append">
                    <button class="btn btn-navbar" type="submit">
                        <i class="fas fa-search"></i>
                    </button>
                    <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                        <i class="fas fa-times"></i>
                    </button>
                </div>
            </div>
        </form>
    </div>
</li>
@endsection
@section('konten')
<div class="content-wrapper"><br><br>
    <div class="card-body mx-4">
    <h3 class="text-center my-3"><strong>Resep Makanan & Minuman</strong></h3>
        <div class="form-group row">
            @php $no = 1; @endphp
            @foreach($resep as $g)
            <div class="col-sm-4">
                <div class="container">
                    <div class="card bg-success">
                        <div class="card-body">
                            <h5 class="card-title ml-1">{{ $g->nama }}</h5><br>
                            <img class="rounded" width="100%" src="{{ asset('storage/Gambar/'.$g->namagambar) }}"
                                alt="default" style="object-fit:cover;">
                            <div class="text-secondary">views: {{ $g->view }}</div>
                            <a width="100%" href="/resepadmin/detail/{{ $g->id }}"
                                class="btn btn-block btn-secondary">Lihat
                                Resep</a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection