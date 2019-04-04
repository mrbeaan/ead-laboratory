@extends('header-footer')
@section('content')



<!--==========================
      Our Team Section
    ============================-->
<section id="team" class="section-bg">
    <div class="container mt-5">
        <div class="section-header">
            <h3 class="section-title">Assistant</h3>
            <span class="section-divider"></span>
            <p class="section-description">Imagination is more important than knowledge. Knowledge is limited. Imagination encircles the world.</p>
        </div>

        <!-- Assistant Coordinator -->
        <div class="row mb-4">
            <div class="row wow fadeInLeft">
              @foreach($asisten as $asisten)
                <div class="col-lg-4">
                    <div class="member">
                        <div class="pic"><img class="rounded-circle bg-dark" src="{{$asisten->gambar}}" alt=""></div>
                        <h4>{{$asisten->nama_asisten}}</h4>
                        <h6>{{$asisten->kode_asisten}}</h6>
                        <span>{{$asisten->posisi}}</span>
                        <span><strong>{{$asisten->divisi}}</strong></span>
                        <div class="social">
                            <a href=""><i class="fab fa-linkedin"></i></a>
                            <a href=""><i class="fa fa-envelope"></i></a>
                            <a href=""><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
          </div>

</div>
</section><!-- #team -->

@endsection
