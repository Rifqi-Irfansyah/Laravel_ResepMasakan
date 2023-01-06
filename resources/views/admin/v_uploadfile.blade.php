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
@section('konten')
<div class="content-wrapper"><br><br>
    <div class="card-body mx-6">
        <div class="row">
            <div class="col-sm-2">
                <a href="{{ redirect()->back()->getTargetUrl() }}" class="nav-link">
                    <i class="fas fa-arrow-circle-left nav-icon fa-2x"></i>
                </a>
            </div>
            <div class="col-sm-8">
                <h3 class="text-center my-3"><strong>Masukkan Data</strong></h3>
            </div>
            <div class="col-sm-2"></div>
        </div>

        <div class="col-lg-8 mx-auto my-5">
            @if (count($errors) > 0)
            <div class="alert alert-danger">
                @foreach ($errors->all() as $error)
                {{ $error }} <br />
                @endforeach
            </div>
            @endif
            <script type="text/javascript">
            window.setTimeout(function() {
                $(".alert").fadeTo(500, 0).slideUp(500, function() {
                    $(this).remove();
                });
            }, 1000);
            </script>
            <form action="/upload/proses" method="POST" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Nama Makanan</label>
                    <div class="col-sm-8">
                        <input type="text" name="nama" class="form-control" required=""
                            onkeypress="return event.charCode < 48 || event.charCode  >57">
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Bahan Makanan</label>
                    <div class="col-sm-8">
                        <textarea class="form-control" name="bahan" required=""></textarea>
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Resep Makanan</label>
                    <div class="col-sm-8">
                        <textarea class="form-control" name="cara" required=""></textarea>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="kategori" class="col-sm-3 col-form-label">Kategori</label>
                    <div class="col-sm-8">
                        <select class="form-control" name="kategori" id="kategori" required="">
                            <option disabled selected value="">Silahkan Pilih...</option>
                            <option value="makanan-berat">makanan berat</option>
                            <option value="makanan-ringan">makanan ringan</option>
                            <option value="minuman">minuman</option>
                        </select>
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Masukkan Gambar</label>
                    <div class="col-sm-8">
                        <input type="file" name="gambar" required="">
                    </div>
                </div>

                <input type="submit" value="Upload" class="btn btn-dark ">
            </form>
        </div>
    </div>
</div>

@endsection