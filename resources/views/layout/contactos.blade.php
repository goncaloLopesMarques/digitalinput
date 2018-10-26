<section class="contactos-header pt-4">



<h1 class="section-title h1-responsive ml-5 mt-5 pl-5 pt-5">
      <b>C</b>ontactos
</h1>



 <h2>Em que podemos ajudar</h2>

 <h3>Qual é o seu objetivo?</h3>
 <p>"Tendo por base os seus objetivos, analisamos dados e tendências no mercado onde atua. Este é o ponto de partida para definirmos uma estratégia, uma equipa e planearemos a sua execução."</p>

@if(Session::has('message'))
 <div class="container">
    <h2 style="color: #1369a7;" class="text-center alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('message') }}</h2>
 </div>
@endif
 
</section> 



<!-- Section: Contact v.3 -->
<section class="contact-section mt-5">

  <!-- Form with header -->
  <div class="card">

    <!-- Grid row -->
    <div class="row m-0">

      <!-- Grid column -->
      <div class="col-lg-8">

        <div class="card-body form">

          <!-- Header -->
          <h3 class="mt-4"><i class="fa fa-envelope pr-2"></i>Entrar em contacto:</h3>

          <form id="contact_form" method="POST">
            @csrf  
            <!-- Grid row -->
            <div class="row">

              <!-- Grid column -->
              <div class="col-md-6">
                <div class="md-form mb-0">
                  <input type="text" name="form-contact-name" class="form-control" required>
                  <label for="form-contact-name" class="">Nome</label>
                </div>
              </div>
              <!-- Grid column -->

              <!-- Grid column -->
              <div class="col-md-6">
                <div class="md-form mb-0">
                  <input type="email" name="form-contact-email" class="form-control" required>
                  <label for="form-contact-email" class="">Email</label>
                </div>
              </div>
              <!-- Grid column -->

            </div>
            <!-- Grid row -->

            <!-- Grid row -->
            <div class="row">

              <!-- Grid column -->
              <div class="col-md-6">
                <div class="md-form mb-0">
                  <input type="tel" name="form-contact-phone" class="form-control">
                  <label for="form-contact-phone" class="">Telefone</label>
                </div>
              </div>
              <!-- Grid column -->

              <!-- Grid column -->
              <div class="col-md-6">
                <div class="md-form mb-0">
                  <input type="text" name="form-contact-company" class="form-control" required>
                  <label for="form-contact-company" class="">Área de Actividade</label>
                </div>
              </div>
              <!-- Grid column -->

            </div>
            <!-- Grid row -->

            <!-- Grid row -->
            <div class="row">

              <!-- Grid column -->
              <div class="col-md-12">
                <div class="md-form mb-0">
                  <textarea type="text" name="form-contact-message" class="form-control md-textarea" rows="3" style="border: 1px solid #ced4da;" required></textarea>
                  <label for="form-contact-message" style="margin-left:5px">Mensagem</label>
                  
                  <button type="submit" id="submit_button" class="btn gradient-blue">Enviar</button>

                </div>
              </div>
              <!-- Grid column -->

            </div>
            <!-- Grid row -->

          </form>

        </div>

      </div>
      <!-- Grid column -->

      <!-- Grid column -->
      <div class="col-lg-4 radial-black-grey-gradient">

        <div class="card-body contact text-center h-100 white-text">

          <h2 style="font-size: 175%;text-shadow: 1px 1px 1px black;" class="my-4 pb-2">Contactos</h2>
          <ul class="text-lg-left list-unstyled ml-4">
            <li>
              <p><i class="fa fa-map-marker pr-2"></i>Rua das Laranjeiras<br/>  lote 40, Loja B<br/>  Urbanização do Vale Verde, Marrazes<br/>  2415-773 Leiria</p>
            </li>
            <li>
              <p><a href="tel:+351919165229" class="white"><i class="fa fa-phone pr-2"></i>+351 919165229</a></p>
            </li>
            <li>
              <p><a href="mailto:info@digitalinput.pt" class="white"><i class="fa fa-envelope pr-2"></i>info@digitalinput.pt</a></p>
            </li>
          </ul>
          <hr class="hr-light my-4">
          <ul class="list-inline text-center list-unstyled">
            <li class="list-inline-item">
              <a href="https://twitter.com/Digitalinputweb" target="_blank" class="p-2 fa-lg tw-ic">
                <i class="fa fa-twitter"></i>
              </a>
            </li>
            <li class="list-inline-item">
              <a href="https://www.linkedin.com/company/digitalinput" target="_blank" class="p-2 fa-lg li-ic">
                <i class="fa fa-linkedin"> </i>
              </a>
            </li>
            <li class="list-inline-item">
              <a href="https://www.facebook.com/digitalinputwebmarketing/" target="_blank" class="p-2 fa-lg ins-ic">
                <i class="fa fa-facebook"> </i>
              </a>
            </li>
          </ul>

        </div>

      </div>
      <!-- Grid column -->

    </div>
    <!-- Grid row -->

  </div>
  <!-- Form with header -->

</section>
<!-- Section: Contact v.3 -->
<section id="section_mapa" class="map-section">

<div style="width: 100%; height: 500px;">
  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5379.6637686768345!2d-8.796949276580637!3d39.76645380080984!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd227300e6713c99%3A0x9b89ea78566f96a4!2sDigitalInput+-+Marketing+Digital!5e1!3m2!1spt-PT!2spt!4v1538061865604" width="100%" height="500" frameborder="0" style="border:0" allowfullscreen></iframe>
</div>

</section>