@extends('header-footer')
@section('content')

<section id="contact" class="mt-5 bg-light">
    <div class="container">
        <div class="section-header">
            <h3 class="section-title">Event</h3>
            <span class="section-divider"></span>
            <p class="section-description">
                Everything should be made as simple as possible, but not simpler.
            </p>
        </div>
        @foreach($event as $event)
        <div class="card mb-3">
            <img class="card-img-top" src="{{$event->gambar}}" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">{{$event->nama_event}}</h5>
                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
            </div>
        </div>
        @endforeach
    </div>
</section>
