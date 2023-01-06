@extends('pengguna.beranda')
@section('konten')
<style type="text/css">
.container {
    background: url(Gambar/corak-kayu.jpg) no-repeat center center fixed;
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    background-size: cover;
}
</style>
<section id="resep" class="konten">
    <div class="bg-image" style=" background-image: url('https://images.pexels.com/photos/4113888/pexels-photo-4113888.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1');
        height:100%;background-attachment: fixed;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;">
        <div class="container" data-aos="fade-up">
            <div class="card-body">
                <div class="row">
                    <div class="col-sm-2">
                        <a href="{{ redirect()->back()->getTargetUrl() }}" class="nav-link">
                            <br><i class="fas fa-arrow-circle-left nav-icon fa-2x"></i>
                        </a>
                    </div>
                    <div class="col-sm-8">
                        <h3 class="text-center my-3 text-dark"><strong>Resep Membuat<br>{{ $resep->nama }}</strong></h3>
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
                                    <img class="rounded" width="100%"
                                        src="{{ asset('storage/Gambar/'.$resep->namagambar) }}" alt="" srcset="">
                                </div>
                            </div>
                        </div>
                        <div class="container">
                            <div class="card bg-success">
                                <div class="card-body">
                                    <p>
                                    <h4 align="center">Bahan-bahan:</h4><br>
                                    <h5 class="card-title ml-2" style="white-space:pre-wrap">{{ $resep->bahan }}</h5>
                                    <br>
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
                                    <h4 align="center">Cara Membuat</h4><br>
                                    <h5 class="card-title ml-2 text-justify" style="white-space:pre-wrap">
                                        {{ $resep->cara }}
                                    </h5><br>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection