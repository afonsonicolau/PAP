@extends('layouts.outer')

@section('content')

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container">
      <div class="header-container d-flex align-items-center justify-content-between">
        <div class="logo">
          <h1 class="text-light"><a href="index.html"><span>Olfaire</span></a></h1>
          <!-- Uncomment below if you prefer to use an image logo -->
          <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
        </div>

        <nav class="nav-menu d-none d-lg-block">
          <ul>
            <!-- <li class="active"><a href="#header">Início</a></li> -->
            <li><a href="#header">Início</a></li>
            <li><a href="#about">Sobre Nós</a></li>
            <li><a href="#portfolio">Produtos</a></li>
            <li><a href="{{route('register')}}">Loja Online</a></li>
            <li><a href="{{route('outlet_store')}}">Outlet</a></li>
            <li><a href="#team">Equipa</a></li>
            <li><a href="#contact">Contacte-nos</a></li>
            <!-- <li class="get-started"><a href="#about">Get Started</a></li> -->
          </ul>
        </nav><!-- .nav-menu -->
      </div><!-- End Header Container -->
    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">
    <div class="container text-center position-relative" data-aos="fade-in" data-aos-delay="200">
      <h1>Onde a sua loiça é feita!</h1>
      <h2>Olfaire Mendes&Nicolau</h2>
      <!-- <a href="#about" class="btn-get-started scrollto">Get Started</a> -->
    </div>
  </section><!-- End Hero -->

  <main id="main">
    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container">

        <div class="row content">
          <div class="col-lg-6" data-aos="fade-right" data-aos-delay="100">
            <h2>Sobre nós</h2>
            <h3>foto avó</h3>
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0" data-aos="fade-left" data-aos-delay="200">
            <p>
              Proseguindo uma tradição familiar, iniciada nos anos 40, Álvaro José fundou a sua própria empresa em 1970 produzindo faiança tradicional das Caldas da Rainha, criando a marca OLFAIRE.
              <br><br> 
              Inserida na política de expansão da empresa é constituída a (Mendes & Nicolau, LDA) em 1991 num novo espaço indústrial com vista a satisfazer a procura crescente de loiça de faiança para os mercados externos.
              <br><br>
              Atualmente a empresa exporta para vários mercados dos 5 continentes.                   
            </p>
            <p>
              Temos vários objetivos, e vamos tentar sempre o nosso melhor para os alcançar e superar qualquer dificuldade, tal como aconteceu no passado e acontecerá no futuro!
            </p>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Why Us Section ======= -->
    <section id="why-us" class="why-us">
      <div class="container">

        <div class="row">
          <div class="col-lg-4 d-flex align-items-stretch" data-aos="fade-right">
            <div class="content">
              <h3>Por que deveria escolher a Olfaire?</h3>
              <p>
                Oferecemos loiça de faiança de alta qualidade, a um preço acessível.
              </p>
              <!-- <div class="text-center">
                <a href="#" class="more-btn">Learn More <i class="bx bx-chevron-right"></i></a>
              </div> -->
            </div>
          </div>
          <div class="col-lg-8 d-flex align-items-stretch">
            <div class="icon-boxes d-flex flex-column justify-content-center">
              <div class="row">
                <div class="col-xl-4 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
                  <div class="icon-box mt-4 mt-xl-0">
                    <i class="bx bx-receipt"></i>
                    <h4>Corporis voluptates sit</h4>
                    <p>Consequuntur sunt aut quasi enim aliquam quae harum pariatur laboris nisi ut aliquip</p>
                  </div>
                </div>
                <div class="col-xl-4 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="200">
                  <div class="icon-box mt-4 mt-xl-0">
                    <i class="bx bx-cube-alt"></i>
                    <h4>Ullamco laboris ladore pan</h4>
                    <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt</p>
                  </div>
                </div>
                <div class="col-xl-4 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="300">
                  <div class="icon-box mt-4 mt-xl-0">
                    <i class="bx bx-images"></i>
                    <h4>Labore consequatur</h4>
                    <p>Aut suscipit aut cum nemo deleniti aut omnis. Doloribus ut maiores omnis facere</p>
                  </div>
                </div>
              </div>
            </div><!-- End .content-->
          </div>
        </div>

      </div>
    </section><!-- End Why Us Section -->

    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">
      <div class="container">

        <div class="section-title" data-aos="fade-left">
          <h2>Produtos</h2>
          <p>Muitos dos nossos produtos são feitos com base na natureza, sejam animais, plantas, frutas ou até mesmo legumes. Temos bastantes mais disponíveis na loja on-line!</p>
        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="100">
          <!--<div class="col-lg-12 d-flex justify-content-center">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">All</li>
              <li data-filter=".filter-app">App</li>
              <li data-filter=".filter-card">Card</li>
              <li data-filter=".filter-web">Web</li>
            </ul>
          </div>-->
        </div>

        <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="assets/img/products/product-1.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Cabbage</h4>
                <div class="portfolio-links">
                  <a href="assets/img/products/product-1.jpg" data-gall="portfolioGallery" class="venobox" title="App 1"><i class="bx bx-plus"></i></a>
                  <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
            <p>Cabbage</p>
          </div>

        </div>

      </div> 
    </section> <!-- End Portfolio Section -->

    <!-- ======= Team Section ======= -->
    <section id="team" class="team">
      <div class="container">

        <div class="row">
          <div class="col-lg-4">
            <div class="section-title" data-aos="fade-right">
              <h2>Equipa</h2>
              <p>A nossa empresa tem um administrador principal, como apresentado à direita, juntamente com a gerente de comércio Ibérico e conta com 18 empregados. Juntos, conseguimos alcançar qualquer objetivo.</p>
            </div>
          </div>
          <div class="col-lg-8">
            <div class="row">

              <div class="col-lg-6">
                <div class="member" data-aos="zoom-in" data-aos-delay="100">
                  <div class="pic"><img src="assets/img/team/team-1.jpg" class="img-fluid" alt=""></div>
                  <div class="member-info">
                    <h4>Fernando Nicolau</h4>
                    <span>Chefe Executivo & Gerente de Exportações</span>
                    <p>"O difícil faz-se, o impossível demora mais um bocadinho"</p>
                  </div>
                </div>
              </div>

              <div class="col-lg-6 mt-4 mt-lg-0">
                <div class="member" data-aos="zoom-in" data-aos-delay="200">
                  <div class="pic"><img src="assets/img/team/team-2.jpg" class="img-fluid" alt=""></div>
                  <div class="member-info">
                    <h4>Carla Nicolau</h4>
                    <span>Gerente Comercial Ibérico</span>
                    <p>"Só não se consegue aquilo que não se quer"</p>
                    <!-- Social Links  
                    <div class="social">
                      <a href=""><i class="ri-twitter-fill"></i></a>
                      <a href=""><i class="ri-facebook-fill"></i></a>
                      <a href=""><i class="ri-instagram-fill"></i></a>
                      <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                    </div> -->
                  </div>
                </div>
              </div>

            </div>

          </div>
        </div>

      </div>
    </section><!-- End Team Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container">
        <div class="row">
          <div class="col-lg-4" data-aos="fade-right">
            <div class="section-title">
              <h2>Contacte-nos</h2>
              <p>Caso nos queira contactar tem todos os métodos aqui disponíveis! Atendimento comercial está disponível de segunda a sexta-feira das 10:30 às 16:30.</p>
            </div>
          </div>

          <div class="col-lg-8" data-aos="fade-up" data-aos-delay="100">
            <iframe style="border:0; width: 100%; height: 270px;" src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d1870.571895895891!2d-9.129546242643082!3d39.43485719195862!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e1!3m2!1sen!2spt!4v1608726153620!5m2!1sen!2spt" frameborder="0" allowfullscreen></iframe>
            <div class="info mt-4">
              <i class="icofont-google-map"></i>
              <h4>Localização:</h4>
              <p>Estrada Nacional 8, Tornada, 2500-315</p>
            </div>
            <div class="row">
              <div class="col-lg-6 mt-4">
                <div class="info">
                  <i class="icofont-envelope"></i>
                  <h4>E-mail:</h4>
                  <p>olfaire@gmail.com</p>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="info w-100 mt-4">
                  <i class="icofont-phone"></i>
                  <h4>Telefone:</h4>
                  <p>+351 262 881 213</p>
                </div>
              </div>
            </div>

            <form action="forms/contact.php" method="post" role="form" class="php-email-form mt-4">
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Nome" data-rule="minlen:4" data-msg="Este campo tem de ter pelo menos 4 caracteres." />
                  <div class="validate"></div>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="email" class="form-control" name="email" id="email" placeholder="E-mail" data-rule="email" data-msg="Por favor, introduza um e-mail válido." />
                  <div class="validate"></div>
                </div>
              </div>
              <div class="form-group mt-3">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Assunto" data-rule="minlen:4" data-msg="Este campo tem de ter pelo menos 8 caracteres." />
                <div class="validate"></div>
              </div>
              <div class="form-group mt-3">
                <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Por favor, escreva uma mensagem." placeholder="Mensagem"></textarea>
                <div class="validate"></div>
              </div>
              <div class="mb-3">
                <div class="loading">A carregar...</div>
                <div class="error-message">Não foi possível enviar esta mensagem, por favor, tente mais tarde.</div>
                <div class="sent-message">A sua mensagem foi enviada. Obrigado!</div>
              </div>
              <div class="text-center"><button type="submit">Enviar Mensagem</button></div>
            </form>
          </div>
        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  @endsection