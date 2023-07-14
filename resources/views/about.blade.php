@extends('layouts.master')

@section('content')

<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs">
      <div class="page-header d-flex align-items-center" style="background-image: url('user-assets/assets/img/page-header.jpg');">
        <div class="container position-relative">
          <div class="row d-flex justify-content-center">
            <div class="col-lg-6 text-center">
              <h2>About us</h2>
              <p>
                    A little bit of us
              </p>
            </div>
          </div>
        </div>
      </div>
      <nav>
        <div class="container">
          <ol>
            <li><a href="index.html">Home</a></li>
            <li>About us</li>
          </ol>
        </div>
      </nav>
    </div><!-- End Breadcrumbs -->

    <!-- ======= About Us Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="row gy-4">
          <div class="col-lg-4 position-relative align-self-start order-lg-last order-first">
            <img src="{{ asset('user-assets/assets/img/about.jpg') }}" class="img-fluid" alt="">
            <a href="https://www.youtube.com/watch?v=LXb3EKWsInQ" class="glightbox play-btn"></a>
          </div>
          <div class="col-lg-8 content order-last  order-lg-first">
            <h3>About Us</h3>
            <p  style="text-align: justify;">
                SurveyAll Ltd is a reputable and highly regarded residen;al surveying firm opera;ng in the South East and East
                London postcode areas. As a trusted and regulated company by RICS (Royal Ins;tu;on of Chartered Surveyors),
                we offer a comprehensive range of residen;al property surveys and conveyancing searches. With our extensive
                experience and exper;se, we deliver high-quality services that are recognized and valued within the local
                community.
                <br>
                <br>
                At SurveyAll Ltd, we understand the importance of providing accurate and reliable surveying solu;ons to our
                clients. Our dedicated team of qualified surveyors ensures that every survey is conducted with me;culous
                aXen;on to detail and adherence to industry standards. We u;lize advanced technology and proven
                methodologies to assess the condi;on and poten;al risks of residen;al proper;es, enabling our clients to make
                informed decisions.
                <br>
                <br>
                While our primary focus is on the South East and East London areas, we are commiXed to mee;ng the growing
                demand for our services and occasionally extend our coverage to other regions. This flexibility allows us to cater
                to a wider clientele and assist individuals and businesses beyond our usual opera;ng areas. 
                <br>
                <br>
                Whether you require a comprehensive building survey, a thorough damp and mould inspec;on, or a detailed
                analysis of environmental factors, SurveyAll Ltd is dedicated to providing you with professional and reliable
                surveying services. We priori;ze client sa;sfac;on and strive to exceed expecta;ons by delivering accurate
                reports and ;mely results.
                <br>
                <br>
                When you choose SurveyAll Ltd, you can have confidence in our exper;se, commitment to quality, and local
                recogni;on as a trusted surveying firm regulated by RICS. We are here to support you in making informed
                decisions regarding residen;al property transac;ons, ensuring that you have a clear understanding of the
                condi;on and poten;al risks associated with your investment.

            </p>
            {{-- <ul>
              <li data-aos="fade-up" data-aos-delay="100">
                <i class="bi bi-diagram-3"></i>
                <div>
                  <h5>Ullamco laboris nisi ut aliquip consequat</h5>
                  <p>Magni facilis facilis repellendus cum excepturi quaerat praesentium libre trade</p>
                </div>
              </li>
              <li data-aos="fade-up" data-aos-delay="200">
                <i class="bi bi-fullscreen-exit"></i>
                <div>
                  <h5>Magnam soluta odio exercitationem reprehenderi</h5>
                  <p>Quo totam dolorum at pariatur aut distinctio dolorum laudantium illo direna pasata redi</p>
                </div>
              </li>
              <li data-aos="fade-up" data-aos-delay="300">
                <i class="bi bi-broadcast"></i>
                <div>
                  <h5>Voluptatem et qui exercitationem</h5>
                  <p>Et velit et eos maiores est tempora et quos dolorem autem tempora incidunt maxime veniam</p>
                </div>
              </li>
            </ul> --}}
          </div>
        </div>
      </div>
    </section><!-- End About Us Section -->

    <section id="stats-counter" class="stats-counter pt-0">
      <div class="container" data-aos="fade-up">
        <div class="row gy-4">
          <div class="col-lg-3 col-md-6">
            <div class="stats-item text-center w-100 h-100">
              <span data-purecounter-start="0" data-purecounter-end="232" data-purecounter-duration="1" class="purecounter"></span>
              <p>Clients</p>
            </div>
          </div><!-- End Stats Item -->

          <div class="col-lg-3 col-md-6">
            <div class="stats-item text-center w-100 h-100">
              <span data-purecounter-start="0" data-purecounter-end="521" data-purecounter-duration="1" class="purecounter"></span>
              <p>Projects</p>
            </div>
          </div><!-- End Stats Item -->

          <div class="col-lg-3 col-md-6">
            <div class="stats-item text-center w-100 h-100">
              <span data-purecounter-start="0" data-purecounter-end="1453" data-purecounter-duration="1" class="purecounter"></span>
              <p>Hours Of Support</p>
            </div>
          </div><!-- End Stats Item -->

          <div class="col-lg-3 col-md-6">
            <div class="stats-item text-center w-100 h-100">
              <span data-purecounter-start="0" data-purecounter-end="32" data-purecounter-duration="1" class="purecounter"></span>
              <p>Workers</p>
            </div>
          </div><!-- End Stats Item -->

        </div>

      </div>
    </section><!-- End Stats Counter Section -->

    <section id="team" class="team pt-0">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Meet Our Team</h2>
        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="100">

          <div class="col-lg-4 col-md-6 d-flex">
            <div class="member">
              <img src="{{ asset('user-assets/assets/img/team/team-1.jpg') }}" class="img-fluid" alt="">
              <div class="member-content">
                <h4>Thomas</h4>
                <span>Managing Director</span>
                
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div><!-- End Team Member -->

          <div class="col-lg-4 col-md-6 d-flex">
            <div class="member">
              <img src="assets/img/team/team-2.jpg" class="img-fluid" alt="">
              <div class="member-content">
                <h4>Sarah Jhinson</h4>
                <span>Marketing</span>
                <p>
                  Repellat fugiat adipisci nemo illum nesciunt voluptas repellendus. In architecto rerum rerum temporibus
                </p>
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div><!-- End Team Member -->

          <div class="col-lg-4 col-md-6 d-flex">
            <div class="member">
              <img src="assets/img/team/team-3.jpg" class="img-fluid" alt="">
              <div class="member-content">
                <h4>William Anderson</h4>
                <span>Content</span>
                <p>
                  Voluptas necessitatibus occaecati quia. Earum totam consequuntur qui porro et laborum toro des clara
                </p>
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div><!-- End Team Member -->

        </div>

      </div>
    </section><!-- End Our Team Section -->


  </main><!-- End #main -->

@endsection