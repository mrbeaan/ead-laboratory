@extends('header-footer')
@section('content')

<section id="contact" class="mt-5 bg-light">
    <div class="container">
        <div class="section-header">
          <h3 class="section-title">Priority</h3>
            <h6 class="text-center">2018</h6>
            <span class="section-divider"></span>
            <p class="section-description">
                Everything should be made as simple as possible, but not simpler.
            </p>
        </div>
        <div class="row justify-content">
          @foreach($priority_2018 as $prio)
            <div class="col-md-4 wow fadeInUp">
                <div class="card mb-2 mt-3 rounded">
                    <img class="img-fluid card-img-top" src="{{$prio->gambar}}" alt="Card image cap">
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
