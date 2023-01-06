@extends('pengguna.template')
@section('konten')
<!-- ======= Breadcrumbs ======= -->
<section id="breadcrumbs" class="breadcrumbs">
    <br>
    <div class="container">
        <ol>
            <li><a href="{{route('beranda')}}">Home</a></li>
            <li>{{$bahan}}</li>
        </ol>
        <h2>{{$bahan}}</h2>
    </div>
</section><!-- End Breadcrumbs -->
<section id="bahan" class="konten">
    <div class="container" data-aos="fade-up">
        <div class="card-body">
            <div class="section-title">
                <h2><strong>{{ $bahan }}</strong></h2>
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
                                    <img class="rounded" width="100%"
                                        src="{{ asset('storage/Gambar/'.$g->namagambar) }}" alt="default"
                                        style="object-fit:cover;">
                                    <div class="text-secondary">views: {{ $g->view }}</div>
                                    <a width="100%" href="/detailresep/{{ $g->id }}"
                                        class="btn btn-block btn-secondary">Lihat Resep</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
@endsection