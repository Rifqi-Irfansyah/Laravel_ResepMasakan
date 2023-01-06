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
        <a href="#" class="nav-link bg-secondary">
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
            <a href="{{route('minuman')}}" class="nav-link bg-dark">
                <i class="fas fa-mug-hot nav-icon"></i>
                <p>Minuman</p>
            </a>
            </li>
        </ul>
    </li>
@endsection
@section('headbarsearch')   
<li class="nav-item">
    <a class="nav-link" data-widget="navbar-search" href="#" role="button">
        <i class="fas fa-search"></i>
    </a>
    <div class="navbar-search-block">
    <form action="/resepmasakan/cari" method="GET">
        <div class="input-group input-group-sm">
        <input class="form-control form-control-navbar" type="text" placeholder="Search" name="cari" value="{{ old('cari') }}">
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
<div class="content-wrapper">
        <div class="card-body"><br><br>
            <div class="card-header text-center font-weight-bold">
                <h3><strong>Resep Minuman</strong></h3>
            </div>
            <div class="form-group row">
                @php $no = 1; @endphp
                @foreach($resep as $g)
                    <div class="col-sm-4">
                        <div class="container">
                            <div class="card bg-success">
                                <div class="card-body">
                                    <h5 class="card-title ml-1">{{ $g->nama }}</h5><br>
                                    <div class="">
                                        
                                        <img class="rounded" width="100%" src="{{ asset('storage/Gambar/'.$g->namagambar) }}" alt="default" style="object-fit:cover;">
                                        <div class="text-secondary">views: {{ $g->view }}</div>
                                        <a width="100%" href="/resepmasakan/detailresep/{{ $g->id }}" class="btn text-white btn-block bg-secondary">Lihat Resep</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>    
</div>
@endsection