@extends('header-footer')
@section('content')

<!--==========================
  About Us Section
============================-->
<section id="about" class="section-bg mt-5">
    <div class="container">
        <div class="section-header">
            <h3 class="section-title">About Us</h3>
            <span class="section-divider"></span>
            <p class="section-description">
                Everything should be made as simple as possible, but not simpler.
            </p>
        </div>

        <div class="row">
            <!-- <div class="col-lg-5 about-img wow fadeInLeft">
        <img src="img/about-img.jpg" alt="">
      </div>

      <div class="col-lg-5 about-img wow fadeInRight">
        <img src="img/about-img.jpg" alt="alumnus-img">
      </div> -->
            <div class="row">
                <div class="col-sm-6 wow fadeInLeft">
                    <div class="card">
                      <a href="/aboutus/assistant"><img src="/img/assistant.jpg" alt="assistant-img" class="img-fluid"/>
                            <h5 class="card-title text-center text-dark mt-2">Assistant</h5>
                      </a>
                    </div>
                </div>
                <div class="col-sm-6 wow fadeInRight">
                    <div class="card">
                      <a href="/aboutus/alumnus"><img src="/img/alumnus.jpg" alt="alumnus-img" class="img-fluid"/>
                          <h5 class="card-title text-center text-dark mt-2">Alumnus</h5>
                      </a>
                    </div>
                </div>
            </div>

        </div>

    </div>
</section><!-- #about -->


@endsection
