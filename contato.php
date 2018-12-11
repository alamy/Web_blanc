<?php include 'header.php' ?>


	  <div class="container">
    <div class="row">
      <p class="title-head hidden-md-down">Estética, ortodontia, odontopediatria.</p>
    </div>
  </div>
  
  <div class="container mt-5 mb-8">
    <div class="row featurette contato">
      <div class="col col-md-12 col-lg-5 col-mobil-map">
        <!-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3950.6038013791153!2d-34.9226561858657!3d-8.039718994210823!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x7ab190f28f19c9f%3A0xcc17c0be88d4391d!2sRua+do+Chacon%2C+274+-+Po%C3%A7o+da+Panela%2C+Recife+-+PE%2C+52061-400!5e0!3m2!1spt-BR!2sbr!4v1542811627448" width="100%" height="85%" frameborder="0" style="border:0" allowfullscreen></iframe> -->
        <div id="googleMap" style="width:555;height:470px;"></div>
        <a href="https://www.google.com.br/maps" class="bnt btn-primary btn-map btn-sm">ver no maps</a>
      </div>
      <div class="col-md-1 col-sm-0 hidden-md-down"></div>
      <div class="col-md-12 col-lg-6 col-sm-12">
        <div class="adress adress-cont-mobil">
          <h2 class="featurette-heading">Contato</h2>
          <p>Rua Desembargador Nunes, 278 <br>
            CEP 54.410-280 <br>
            81 3040.2225 <br>
            email@exemplo.com.br</p>
          </div>
        </div>
      </div>
    </div>
    
    <div class="container mobil-contato">
      <div class="row featurette form">
        <div class="col col-md-12 col-lg-5">
          <h2 class="title-row">fale com a gente</h2>
          <form action="mail.php" method="post" class="contact-form wpcf7-form" enctype="multipart/form-data">
            <div class="form-group">
              <input type="text" class="form-control" name="nome" id="nome" required=""  placeholder="nome">
              <small id="nome" class="form-text text-muted d-none">Erro aqui</small>
            </div>
            <div class="form-group">
              <input type="email" class="form-control" name="email-fron" id="email" required=""  placeholder="email">
              <small id="email" class="form-text text-muted d-none">Erro aqui</small>
            </div>
            <div class="form-group">
              <input type="text" class="form-control" name="telefone" id="celular" required="" data-mask="(00)00000-0000" placeholder="celular">
              <small id="celular" class="form-text text-muted d-none">Erro aqui</small>
            </div>
            <div class="form-group">
              <input type="text" class="form-control" name="mensagem" id="msg" required=""  placeholder="mensagem">
              <small id="msg" class="form-text text-muted d-none">Erro aqui</small>
            </div>
            <button type="submit" name="submit" type="submit" id="submit" value="ENVIAR" class="btn btn-primary btn-contato">enviar</button>
          </form>
        </div>
        <div class="col-md-1 hidden-md-down"></div>
        <div class="col-md-6 hidden-md-down">
          <img class="featurette-image img-fluid mx-auto" data-src="holder.js/555x416/auto" alt="Generic placeholder image">
        </div>
      </div>
    </div>
    
    <hr class="featurette-divider">
    
    <!-- /END THE FEATURETTES -->
    



<?php include 'footer.php' ?>