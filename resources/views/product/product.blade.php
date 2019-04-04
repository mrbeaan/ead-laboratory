@extends('header-footer')
@section('content')

<section id="contact" class="mt-5">
    <div class="container">
        <div class="section-header">
            <h3 class="section-title">Product</h3>
            <span class="section-divider"></span>
            <p class="section-description">
                Everything should be made as simple as possible, but not simpler.
            </p>
        </div>

        <div class="row justify-content">
          @foreach($produk as $produk)
            <div class="col-md-6 wow fadeInUp">
                <div class="card mb-3 mt-3 bg-light">
                    <a href="{{$produk->link_produk}}"><img class="img-fluid card-img-top" src="{{$produk->gambar}}" alt="Card image cap"></a>
                    <div class="card-body">
                        <h5 class="card-title">{{$produk->nama_produk}}</h5>
                        <p class="card-text">{{$produk->deskripsi}}</p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>

    </div>
</section>

@endsection
