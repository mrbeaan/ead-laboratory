@extends('header-footer')
@section('content')

<section id="contact" class="mt-5 bg-light">
    <div class="container">
        <div class="section-header">
            <h3 class="section-title">Gallery</h3>
            <span class="section-divider"></span>
            <p class="section-description">
                Everything should be made as simple as possible, but not simpler.
            </p>
        </div>

        <div class="row justify-content">
          @foreach($gallery as $gallery)
            <div class="col-md-4 wow fadeInUp">
                <div class="card mb-2 mt-3 rounded">
                    <a href="{{$gallery->link}}"><img class="img-fluid card-img-top" src="{{$gallery->gambar}}" alt="Card image cap"></a>
                    <div class="card-body">
                        <h6 class="card-title text-center"><strong>{{$gallery->nama_event}}</strong></h6>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
      </div>
    </section>

@endsection
