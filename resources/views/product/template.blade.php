@extends('header-footer')
@section('content')

<section id="contact" class="mt-5 bg-light">
    <div class="container">
        <div class="section-header">
            <h3 class="section-title">Template</h3>
            <span class="section-divider"></span>
            <p class="section-description">
                Everything should be made as simple as possible, but not simpler.
            </p>
        </div>

        <div class="row justify-content">
          @foreach($template as $temp)
            <div class="col-md-4 wow fadeInUp">
                <div class="card mb-2 mt-3 rounded">
                    <a href="{{$temp->file}}"><img class="img-fluid card-img-top rounded" src="{{$temp->gambar}}" alt="Card image cap"></a>
                    <!-- <div class="card-body">
                        <h5 class="card-title">{{$temp->nama_template}}</h5>
                    </div> -->
                </div>
                <h6 class="mb-1"><strong>{{$temp->nama_template}}</strong></h6>
                <div class="social mb-3">
                  <a href="{{$temp->link_github}}" target="_blank"><i class="fab fa-github"> Github</i></a>
                </div>
            </div>
            @endforeach
        </div>

    </div>
</section>
