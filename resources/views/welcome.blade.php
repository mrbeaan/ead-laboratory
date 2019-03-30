@extends('header-footer-home')
@section('content')



<!--==========================
    Intro Section
  ============================-->
<section id="intro">
    <div class="coba">
        <div class="intro-text">
            <h2>Hello World!</h2>
            <p>Fast | Smart | Efficient</p>
            <a href="#about" class="btn-get-started scrollto">Get Deeper</a>
        </div>

        <div class="product-screens">

            <div class="product-screen-1 wow fadeInUp" data-wow-delay="0.4s" data-wow-duration="0.6s">
                <img src="img/product-screen-1.png" alt="">
            </div>

            <div class="product-screen-2 wow fadeInUp" data-wow-delay="0.2s" data-wow-duration="0.6s">
                <img src="img/product-screen-2.png" alt="">
            </div>

            <div class="product-screen-3 wow fadeInUp" data-wow-duration="0.6s">
                <img src="img/product-screen-3.png" alt="">
            </div>

        </div>
    </div>
</section><!-- #intro -->

<main id="main">

    <!--==========================
      About Us Section
    ============================-->
    <section id="about">
        <div class="container">
            <div class="section-header">
                <!-- <h3 class="section-title">About Us</h3>
          <span class="section-divider"></span>
          <p class="section-description">
            Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque<br>
            sunt in culpa qui officia deserunt mollit anim id est laborum
          </p> -->
            </div>

            <div class="row">
                <div class="col-lg-6 about-img wow fadeInLeft">
                    <img src="img/ead-2.png" alt="">
                </div>

                <div class="col-lg-6 content wow fadeInRight">
                    <h2>Apa itu EAD Laboratory ?</h2>
                    <h3>EAD Laboratory adalah ...</h3>
                    <p>
                        Merupakan salah satu laboratorium didalam jurusan Sistem Informasi, Telkom University dengan berfokus pada pengembangan serta inovasi perangkat lunak.
                    </p>
                    <h3>Sejarahnya ...</h3>
                    <p>
                        Sebelum adanya Laboratorium EAD, laboratorium yang berfokus pada perangkat lunak dikenal dengan Prodase atau Pemograman dan Database. Namun, dikarenakan
                        banyaknya jumlah praktikum yang diemban, maka beberapa praktikum dipecah dan dibentuklah dua laboratorium yakni, <strong>Enterprise Application Development</strong>
                        dan <strong>Dasar Pemograman</strong>
                    </p>

                    <!-- <ul>
              <li><i class="ion-android-checkmark-circle"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
              <li><i class="ion-android-checkmark-circle"></i> Duis aute irure dolor in reprehenderit in voluptate velit.</li>
              <li><i class="ion-android-checkmark-circle"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate trideta storacalaperda mastiro dolore eu fugiat nulla pariatur.</li>
            </ul> -->

                    <!-- <p>
              Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum Libero justo laoreet sit amet cursus sit amet dictum sit. Commodo sed egestas egestas fringilla phasellus faucibus scelerisque eleifend donec
            </p> -->
                </div>
            </div>

        </div>
    </section>

    <hr>

    <section id="gallery">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 content wow fadeInLeft">
                    <h3>Prodase itu ...</h3>
                    <p>
                        Merupakan sebuah ikatan kekeluargaan antara asisten Enterprise Application Development dengan Dasar Pemograman yang terus terjalin.
                    </p>
                    <center>
                        <div class="col">
                            <img class="img-fluid mr-2 ml-2" src="img/ead.png" />
                            <img class="img-fluid ml-2 mr-2" src="img/daspro.png" />
                        </div>
                    </center>
                </div>

                <div class="col-lg-6 about-img wow fadeInRight">
                    <img class="img-fluid" src="img/prodase.png" alt="">
                </div>
            </div>
        </div>
    </section>
    <!-- #about -->


    <!-- Praktikum -->
    <!-- <section class="section-bg mb-0">
        <div class="container">
          <div class="section-header">
            <h3 class="section-title pt-5">Praktikum</h3>
            <span class="section-divider"></span>
            <p class="section-description">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque</p>
          </div>

        </div>
    </section> -->


    <!-- End Praktikum  -->




    <!--==========================
      Gallery Section
    ============================-->
    <section id="about" class="section-bg">
        <div class="container">
            <div class="section-header">
                <h3 class="section-title wow fadeInUp">Praktikum</h3>
                <span class="section-divider"></span>
            </div>

            <div class="card-deck">
                <div class="card wow fadeInLeft">
                    <img src="/img/praktikum/oop.png" class="card-img-top img-fluid" alt="...">
                    <div class="card-body">
                        <h5 class="card-title text-center"><strong>Object Oriented Programming</strong></h5>
                        <p class="card-text">A programming style which is associated with the concepts like class, object, Inheritance, Encapsulation, Abstraction, Polymorphism.</p>
                        <!-- <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p> -->
                    </div>
                </div>
                <div class="card wow fadeInLeft">
                    <img src="/img/praktikum/laravel.png" class="card-img-top fluid" alt="...">
                    <div class="card-body">
                        <h5 class="card-title text-center"><strong>Web Application Development</strong></h5>
                        <p class="card-text">A web application framework with expressive, elegant syntax.</p>
                        <!-- <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p> -->
                    </div>
                </div>
                <div class="card wow fadeInLeft">
                    <img src="/img/praktikum/android.png" class="card-img-top img-fluid" alt="...">
                    <div class="card-body">
                        <h5 class="card-title text-center"><strong>Mobile Application Development</strong></h5>
                        <p class="card-text">An open platform that's freely available to you as an app developer.</p>
                        <!-- <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p> -->
                    </div>
                </div>
            </div>
        </div>


    </section>

    <!-- #gallery -->

    <!--==========================
      Contact Section
    ============================-->
    <section id="contact">
        <div class="container">
            <div class="row wow fadeInUp">

                <div class="col-lg-4 col-md-4">
                    <div class="contact-about">
                        <h3>EAD Laboratory</h3>
                        <p>Cras fermentum odio eu feugiat. Justo eget magna fermentum iaculis eu non diam phasellus. Scelerisque felis imperdiet proin fermentum leo. Amet volutpat consequat mauris nunc congue.</p>
                        <div class="social-links">
                            <a href="https://www.facebook.com/groups/2185302431716026/" target="_blank" class="facebook"><i class="fab fa-facebook"></i></a>
                            <a href="https://www.instagram.com/ead.fse/" target="_blank" class="instagram"><i class="fab fa-instagram"></i></a>
                            <a href="#" class="line"><i class="fab fa-line"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4">
                    <div class="info">
                        <div>
                            <i class="ion-ios-location-outline"></i>
                            <p>B-201<br>Grha W. Cacuk Sudarijanto-B, Telkom University</p>
                        </div>

                        <div>
                            <i class="ion-ios-email-outline"></i>
                            <p>ead.laboratory@gmail.com</p>
                        </div>

                        <!-- <div>
                            <i class="fab fa-line"></i>
                            <p>+1 5589 55488 55s</p>
                        </div> -->

                    </div>
                </div>

                <div class="col-lg-5 col-md-8">
                    <!-- <div class="form">
                        <div id="sendmessage">Your message has been sent. Thank you!</div>
                        <div id="errormessage"></div>
                        <form action="" method="post" role="form" class="contactForm">
                            <div class="form-row">
                                <div class="form-group col-lg-6">
                                    <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                                    <div class="validation"></div>
                                </div>
                                <div class="form-group col-lg-6">
                                    <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                                    <div class="validation"></div>
                                </div>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                                <div class="validation"></div>
                            </div>
                            <div class="form-group">
                                <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                                <div class="validation"></div>
                            </div>
                            <div class="text-center"><button type="submit" title="Send Message">Send Message</button></div>
                        </form>
                    </div> -->
                    <iframe width="100%" height="100%" src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d509.54201094616315!2d107.63096345964772!3d-6.974974256961883!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sid!4v1553950872000!5m2!1sen!2sid"
                      frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>

            </div>

        </div>
    </section><!-- #contact -->

</main>


@endsection
