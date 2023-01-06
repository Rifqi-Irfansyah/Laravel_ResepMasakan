@extends('pengguna.beranda')
@section('sidebar')

            @if (auth()->user()->level=="admin")
            <li class="nav-item">
            <a href="{{route('editresep')}}" class="nav-link bg-dark">
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
<div class="content-wrapper">
    <div class="card-body"><br><br>
        <h3 class="text-center my-3"><strong>Ubah Data</strong></h3>
        <div class="col-lg-8 mx-auto my-5">
        @if (count($errors) > 0)
                <div class="alert alert-danger">
                    @foreach ($errors->all() as $error)
                        {{ $error }} <br />
                    @endforeach
                </div>
            @endif
            <form method="post" action="/editresep/update/{{ $resep->id }}" enctype="multipart/form-data">
                {{ csrf_field() }}
                {{ method_field('PUT') }}
                <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Nama Makanan</label>
                    <div class="col-sm-9">
                        <input type="text" name="nama"  value="{{$resep->nama}}"class="form-control" required=""
                            onkeypress="return event.charCode < 48 || event.charCode  >57">
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Bahan Makanan</label>
                    <div class="col-sm-9">
                        <textarea class="form-control" name="bahan" required="">{{$resep->bahan}}</textarea>
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Resep Makanan</label>
                    <div class="col-sm-9">
                        <textarea class="form-control" name="cara" required="">{{$resep->cara}}</textarea>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="kategori" class="col-sm-3 col-form-label">Kategori Resep</label>
                    <div class="col-sm-9">    
                        <select class="form-control" name="kategori" id="kategori" required="" >
                            <option value="makanan-berat" <?php if($resep['kategori']=='makanan-berat') echo 'selected'?>>
                                makanan berat
                            </option>
                            <option value="makanan-ringan" <?php if($resep['kategori']=='makanan-ringan') echo 'selected'?>>
                                makanan ringan
                            </option>
                            <option value="minuman" <?php if($resep['kategori']=='minuman') echo 'selected'?>>
                                minuman
                            </option>
                        </select>     
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Masukkan Gambar</label>
                    <div class="col-sm-9">
                        <input type="file" name="gambar"required="">
                        <script>
                            // Get a reference to our file input
                            const fileInput = document.querySelector('input[type="file"]');

                            // Create a new File object
                            const myFile = new File(['Hello World!'], '{{$resep->namagambar}}', {
                                type: 'image|jpg,jpeg,png',
                                lastModified: new Date(),
                            });

                            // Now let's create a DataTransfer to get a FileList
                            const dataTransfer = new DataTransfer();
                            dataTransfer.items.add(myFile);
                            fileInput.files = dataTransfer.files;
                        </script>
                    </div>
                </div>

                <input type="submit" value="Upload" class="btn btn-dark ">
            </form>
        </div>
    </div>
</div>
@endsection