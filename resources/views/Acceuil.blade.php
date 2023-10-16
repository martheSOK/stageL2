<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}" />
        <link rel="stylesheet" href="{{ asset('css/styles.css') }}" />
        <link rel="stylesheet" href="asset/fontawesome-free-6.4.0-web/css/all.min.css">
        <title>Les PROS</title>
    <head>
    <body>
        <nav
        class="navig navbar navbar-expand-lg bg-body-tertiary position-fixed w-100"
        >
        <div class="container-fluid">
            <a class="navbar-brand mx-4 py-3 fw-bold" href="#"><img  class="ig"  src="{{asset('images/logo.png')}}" alt="logo des pros" style="width: 100px; border-radius:0%;"></a>
            <button
            class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent"
            aria-expanded="false"
            aria-label="Toggle navigation"
            >
            <span class="navbar-toggler-icon "><img src="{{asset('images/pic1.jpg')}}" alt="" style="width: 80%;"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 ">
                <!--li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#"
                    >Acceuil</a
                >
                </li-->
                <li class="nav-item pe-4">
                <a class="btn btn-order rounded-0" href="#">Login</a>
                </li>

                <li class="nav-item pe-4">
                <a class="btn btn-order rounded-0">Les classiques</a>
                </li>
                <li class="nav-item pe-4">
                <a class="btn btn-order rounded-0" href="#">Register</a>
                </>
            </ul>
            </div>
        </div>
        </nav>
        <section
        class="banner pt-5 d-flex justify-content-center align-items-center"
        >
            <!--div class="container">
                <div class="row">
                <div class="col-md-6"></div>
                <div class="col-md-6">
                    <h1 class="h1">
                    Emballons l'avenir avec intelligence : Gérons, Réduisons, Préservons.
                    </h1>
                    
                </div>
                </div-->
            </div>
        </section>
        <section class="banier1 py-5">
            <div class="container">
                <div class="card mb-3 border-0 rounded-0" style="max-width: 540px">
                <div class="row g-0">
                    <div class="col-md-6">
                    <img
                        src="{{asset('images/pic2.jpg')}}"
                        class="img-fluid"
                        alt="..."
                    />
                    </div>
                    <div class="col-md-6">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">
                        This is a wider card with supporting text below as a natural
                        lead-in to additional content. This content is a little bit
                        longer.
                        </p>
                        <p class="card-text">
                        <small class="text-muted">Last updated 3 mins ago</small>
                        </p>
                    </div>
                    </div>
                </div>
                </div>
                <div
          class="card mb-3 border-0 rounded-0 offset-md-6"
          style="max-width: 540px"
        >
          <div class="row g-0">
            <div class="col-md-6">
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">
                  This is a wider card with supporting text below as a natural
                  lead-in to additional content. This content is a little bit
                  longer.
                </p>
                <p class="card-text">
                  <small class="text-muted">Last updated 3 mins ago</small>
                </p>
              </div>
            </div>
            <div class="col-md-6">
              <div
                id="carouselExampleIndicators"
                class="carousel slide"
                data-bs-ride="carousel"
              >
                <div class="carousel-indicators">
                  <button
                    type="button"
                    data-bs-target="#carouselExampleIndicators"
                    data-bs-slide-to="0"
                    class="active"
                    aria-current="true"
                    aria-label="Slide 1"
                  ></button>
                  <button
                    type="button"
                    data-bs-target="#carouselExampleIndicators"
                    data-bs-slide-to="1"
                    aria-label="Slide 2"
                  ></button>
                  <button
                    type="button"
                    data-bs-target="#carouselExampleIndicators"
                    data-bs-slide-to="2"
                    aria-label="Slide 3"
                  ></button>
                </div>
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img
                      src="{{asset('images/pic3.jpg')}}"
                      class="d-block w-100 fluid-img"
                      alt="..."
                    />
                  </div>
                  <div class="carousel-item">
                    <img
                      src="{{asset('images/pic8.jpg')}}"
                      class="d-block w-100"
                      alt="..."
                    />
                  </div>
                  <div class="carousel-item">
                    <img
                      src="{{asset('images/pic13.jpg')}}"
                      class="d-block w-100 t"
                      alt="..."
                    />
                  </div>
                </div>
                <button
                  class="carousel-control-prev"
                  type="button"
                  data-bs-target="#carouselExampleIndicators"
                  data-bs-slide="prev"
                >
                  <span
                    class="carousel-control-prev-icon"
                    aria-hidden="true"
                  ></span>
                  <span class="visually-hidden">Previous</span>
                </button>
                <button
                  class="carousel-control-next"
                  type="button"
                  data-bs-target="#carouselExampleIndicators"
                  data-bs-slide="next"
                >
                  <span
                    class="carousel-control-next-icon"
                    aria-hidden="true"
                  ></span>
                  <span class="visually-hidden">Next</span>
                </button>
              </div>
            </div>
          </div>
        </div>
        <div class="card mb-3 border-0 rounded-0" style="max-width: 540px">
          <div class="row g-0">
            <div class="col-md-6">
              <img
                src="{{asset('images/pic14.jpg')}}"
                class="img-fluid"
                alt="..."
              />
            </div>
            <div class="col-md-6">
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">
                  This is a wider card with supporting text below as a natural
                  lead-in to additional content. This content is a little bit
                  longer.
                </p>
                <p class="card-text">
                  <small class="text-muted">Last updated 3 mins ago</small>
                </p>
              </div>
            </div>
          </div>
        </div>
        </section>
        <section class="carroussel bg-dark text-center text-light py-5">
      <div class="container">
        <div class="row">
          <h1 class="text-center text-uppercase">Nos reférences</h1>
        
          <div class="col">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum maxime unde explicabo nulla soluta harum laborum aliquam accusamus architecto saepe.
            <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img src="{{asset('images/pic18.jpg')}}" class="d-block w-100" alt="...">
                  <div class="carousel-caption">
                    
                    <p class="cap" >A consommer avec modération</p>
                  </div>
                </div>
                <div class="carousel-item">
                  <img src="{{asset('images/pic16.jpg')}}" class="d-block w-100" alt="...">
                  <div class="carousel-caption">
                    
                    <p class="cap">A consommer avec modération</p>
                  </div>
                </div>
                <div class="carousel-item">
                  <img src="{{asset('images/pic13.jpg')}}" class="d-block w-100" alt="...">
                  <div class="carousel-caption">
                    
                    <p class="cap">A consommer avec modération</p>
                  </div>
                </div>
                <p>Some representative placeholder content for the first slide.</p>

              </div>
              <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
              </button>
              <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
              </button>
            </div>
            

        </div>
      </div>
    </section>
    <footer class="foot py-5 bg-dark" >
      <div class="container">
        <div class="row">
          <div class="col-3">
            <nav class="nav flex-column">
              <span class="sp">Le Bar</span>
              <a class="nav-link active" aria-current="page" href="#">Active</a>
              <a class="nav-link" href="#">Link</a>
              <a class="nav-link" href="#">Link</a>
              <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
            </nav>
          </div>
          <div class="col-3">
            <nav class="nav flex-column">
              <span class="sp">Nos partenaires</span>
              <a class="nav-link active" aria-current="page" href="#">Active</a>
              <a class="nav-link" href="#">Link</a>
              <a class="nav-link" href="#">Link</a>
              <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
            </nav>
          </div>
          <div class="col-3">
            <nav class="nav flex-column">
              <span class="sp">Liens utiles</span>
              <a class="nav-link active" aria-current="page" href="#">Active</a>
              <a class="nav-link" href="#">Link</a>
              <a class="nav-link" href="#">Link</a>
              <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
            </nav>
          </div>
          <div class="col-3">
            <nav class="nav flex-column">
              <span class="sp">A propos</span>
              <a class="nav-link active" aria-current="page" href="#">Active</a>
              <a class="nav-link" href="#">Link</a>
              <a class="nav-link" href="#">Link</a>
              <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
            </nav>
          </div>
        </div>
        
      </div>


        <script src="{{ asset('js/bootstrap.bundle.min.js')}}"></script>  
    </body>
