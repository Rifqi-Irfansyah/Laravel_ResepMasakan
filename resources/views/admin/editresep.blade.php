@extends('admin.template')
@section('sidebar')
<li class="nav-item">
    <a href="{{route('editresep')}}" class="nav-link bg-dark">
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
@section('headbarsearch')
<li class="nav-item">
    <a class="nav-link" data-widget="navbar-search" href="#" role="button">
        <i class="fas fa-search"></i>
    </a>
    <div class="navbar-search-block">
        <form action="/editresep/cari" method="GET">
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
<div class="content-wrapper "><br><br>
    <div class="card-header text-center font-weight-bold text-secondary">
        <h3><strong>Edit Resep</strong></h3>
    </div>

    @if(Session::has('success'))
    <div class="alert  text-center bg-yellow ml-5 mr-5" role="alert">
        <strong>{{{ Session::get('success') }}}</strong>
    </div>
    @endif

    <script type="text/javascript">
    window.setTimeout(function() {
        $(".alert").fadeTo(500, 0).slideUp(500, function() {
            $(this).remove();
        });
    }, 1000);
    </script>

    <div class="container" align="center">
        <div class="card mt-3 col-lg-11">
            <div class="card-body">
                <a href="/upload" class="btn btn-dark float-sm-left">Input Resep</a>
                <br><br>
                <table class="table table-secondary table-bordered table-hover table-striped text-center">
                    <thead class="bg-secondary text-white">
                        <tr>
                            <th width="10%">No</th>
                            <th width="70%">Nama Makanan</th>
                            <th width="20%">Resep</th>
                        </tr>
                    </thead>

                    <tbody class="text-center text-dark">
                        @php $no = 1; @endphp
                        @foreach($resep as $g)
                        <tr>
                            <td>{{$no++ }}</td>
                            <td class="text-left">{{ $g->nama}}</td>
                            <td>
                                <button class="bg-secondary">
                                    <a href="/editresep/ubah/{{ $g->id }}" class="text-white">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="22px" height="22px" fill="none"
                                            viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                                        </svg>
                                    </a>
                                </button>

                                <button class="bg-danger">
                                    <a href="/editresep/hapusdata/{{ $g->id }}" class="text-white"
                                        onclick="return confirm('Apakah Anda Yakin Ingin Menghapus Data?');">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="22px" height="22px" fill="none"
                                            viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                        </svg>
                                    </a>
                                </button>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div><br>
    </div>
</div>
@endsection