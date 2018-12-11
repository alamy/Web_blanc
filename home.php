<?php include 'header.php' ?>

 <div class="container">
    <div class="row">
      <p class="title-head hidden-md-down">Estética, ortodontia, odontopediatria.</p>
    </div>
  </div>
  
  <div class="container-fluid mb-5">
    <div class="row">
      <img class="img-fluid w-100 h-25" src="https://via.placeholder.com/1200x540" alt="First slide" style="max-height: 540px">
    </div>
  </div>
  
  <div class="container historia mx-auto mb-5">
    <div class="row">
      <div class="col-12 text-center">
        <h2 class="text-center title-row">Nossa História</h2>
      </div>
    </div>
    <div class="row justify-content-center">
      <div class="col col-12 col-lg-6 align-self-center">
        <p class="text-center">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam non dignissim sapien. Pellentesque metus nulla, sollicitudin vitae pulvinar id, facilisis non purus. Etiam vestibulum pellentesque placerat. Morbi sed consequat quam. Aenean id pretium nisl. Donec id euismod libero. Mauris eu tincidunt felis, ut venenatis elit.</p>
      </div>
    </div>
    <div class="col-12 text-left text-lg-center pl-0-md">
      <a href="a-clinica">
        <button class="btn btn-md btn-primary rounded">continuar lendo</button>
      </a>
    </div>      
  </div>
</div>

<div class="container tratamentos mb-5 desktop">
  <div class="row">
    <div class="col-12 text-center">
      <h2 class="text-center title-row">NOSSOS TRATAMENTOS</h2>
    </div>
  </div>
  <div class="row cards">
    <div class="col-lg-4 card-mobile hidden-md-down">
      <div class="card text-white shadow">
        <img class="img-fluid" src="http://placekitten.com/360/300" alt="Imagem do card">
        <div class="card-img-overlay">
          <h5 class="card-title">Tratamento 1</h5>
        </div>
      </div>
    </div>
    <div class="col-lg-4 card-mobile hidden-md-down">
      <div class="card text-white shadow">
        <img class="img-fluid" src="http://placekitten.com/360/300" alt="Imagem do card">
        <div class="card-img-overlay">
          <h5 class="card-title">Tratamento 2 </h5>
        </div>
      </div>
    </div>
    <div class="col-lg-4 card-mobile">  
      <div class="card text-white shadow">
        <img class="img-fluid" src="http://placekitten.com/360/300" alt="Imagem do card">
        <div class="card-img-overlay">
          <h5 class="card-title">Tratamento 3</h5>
        </div>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col col-md-12 hidden-lg-up">
      <ul class="nav-equipe">
        <li class="active">1</li>
        <li class="">2</li>
      </ul>
    </div>
  </div>
  <div class="row">
    <div class="col-12 text-left text-lg-center mt-4">
      <a href="tratamento">
        <button class="btn btn-md btn-primary rounded">ver mais tratamentos</button>
      </a>
    </div>
  </div>
</div>

   <div class="col-md-5 offset-md-1 mobil">
     <div class="col-12 text-center">
      <h2 class="text-center title-row">NOSSOS TRATAMENTOS</h2>
    </div>
        <div id="controleCarrosel" class="carousel slide" data-ride="carousel">
             <ol class="carousel-indicators" id="pontos2">
                <li data-target="#controleCarrosel"  data-slide-to="0" class="active"></li>
                <li data-target="#controleCarrosel" data-slide-to="1"></li>
                <li data-target="#controleCarrosel" data-slide-to="2"></li>
                 <li data-target="#controleCarrosel" data-slide-to="2"></li>
              </ol>
            <div class="carousel-inner carousel-clinica" >
              <div class="carousel-item active">
                 <img class=" img-fluid mx-auto shadow ml-3 mb-5" src="assets/img/a-clinica.png" alt="Generic placeholder image">
              </div>
              <div class="carousel-item">
                 <img class=" img-fluid mx-auto shadow ml-3 mb-5" src="assets/img/a-clinica.png" alt="Generic placeholder image">
              </div>
              <div class="carousel-item">
                 <img class=" img-fluid mx-auto shadow ml-3 mb-5" src="assets/img/a-clinica.png" alt="Generic placeholder image">
              </div>
            </div>
            <ul class="controle-clinica desktop">
              <li>
                <a class="prev" href="#controleCarrosel " role="button" data-slide="prev">
                 <i class="fas fa-chevron-left black"></i>
                </a>
              </li>
            <li><p>|</p></li>
            <li>
              <a class="next" href="#controleCarrosel " role="button" data-slide="next">
              <i class="fas fa-chevron-right black"></i>
            </a>
          </li>
          </ul>
          </div>



     <!--  <img class="featurette-image img-fluid mx-auto shadow ml-3 mb-5" data-src="holder.js/650x420/auto" alt="Generic placeholder image"> -->
</div>



<hr class="featurette-divider">

<!-- /END THE FEATURETTES -->

<?php include 'footer.php' ?>