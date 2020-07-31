<!DOCTYPE html>
<html lang="pt-br">
<!-- Required meta tags -->
<title>NeoJus | Profissionais | PESSOA</title>

<head>
  <?php
  define('U', '../');
  define('MENU', 1);
  include_once(U . 'includes/header.php');
  ?>

  <div class="header">
    <div class="container">
     <div class="row align-items-center">
       <div class="col-md-6 col-12 text-right">
        <h4 class="header__title">CORPO DOCENTE</h4>
        <ul class="list-unstyled">
          <li>
            <a href="">Home /</a>
          </li>
          <li>
            <a href="">Profissionais /</a>
          </li>
          <li>
            <a href="">Corpo Docente</a>
          </li>
        </ul>
      </div>
    </div>
  </div>
</div>



<article class="paginas">
  <div class="container" style="overflow: initial;">
    <div class="row">
      <div class="col-md-6 mb-4">
        <h3 class="paginas__title">Dr. Marthis</h3>
        <h6 class="paginas__subitle">OAB 00/00</h6>
        <h6 class="font-weight-bold">Área de Atuação</h6>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto laborum autem perferendis, aliquam culpa
          dicta, in nulla, similique voluptatem vero est minus quaerat animi ipsa voluptatum. Sint atque delectus
        maiores.</p>
        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Officiis non fuga inventore magnam nemo. Ea
          nesciunt eos magnam, eum, eaque provident autem ut libero magni accusantium veritatis voluptatibus amet.
        Accusamus!</p>
      </div>
      <div class="col-md-3 col-12 text-center">
        <div class="paginas__redesocial">
          <a href=""><img src="<?php echo U?>src/img/icons/icon-linkedin.png" alt=""></a>
          <a href=""><img src="<?php echo U?>src/img/icons/icon-instagram.png" alt=""></a>
          <a href=""><img src="<?php echo U?>src/img/icons/icon-youtube.png" alt=""></a>
        </div>
      </div>
      <div class="col-md-3 col-12">
        <div class="paginas__foto">
         <figure>
          <img src="https://via.placeholder.com/500x600" alt="" class="w-100">
        </figure>
      </div>
    </div>
  </div>
</div>
</article>

<section class="outros">
  <div class="container">
    <div class="row">
      <!-- SLIDER SWITH -->
      <div class="col-md-12">
        <div class="col-md-12 mb-3">
          <h3 class="paginas__title">Cursos Ministrados</h3>
        </div>
        <!-- Swiper -->
        <div class="swiper-container">
          <!-- WRAPPER -->
          <div class="swiper-wrapper">
            <!-- CARD CURSOS -->
            <div class="swiper-slide">
              <div class="col-md-12">
                <!-- COLOCAR LINK -->
                <a href="">
                  <!-- COLOCAR LINK -->
                  <div class="cursos__card cursos__card--white">
                    <h5 class="cursos__card--white--title">Direito penal, anticorrupção e compliance</h5>
                    <ul class="list-unstyled cursos__card--white--lista">
                      <li><i class="icone__start"></i> Aulas online, assista agora mesmo pelo NJPLAY.</li>
                      <li><i class="icone__horario"></i>Carga horária de 120 horas.</li>
                      <li><i class="icone__certificado"></i>Certificado NEOJUS.</li>
                    </ul>
                    <p class="cursos__card--white--valor">em até 6x R$350,00</p>
                    <span class="cursos__card--white--ver">+</span>
                  </div>
                </a>
              </div>
            </div>
            <!-- CARD CURSOS -->
          </div>
          <!-- WRAPPER -->
          <!-- ADD PAG -->

          <!-- If we need navigation buttons -->
          <div class="swiper-button-prev"></div>
          <div class="swiper-button-next"></div>
        </div>
        <!-- SLIDER SWITH -->
      </div>
      <div class="col-md-12 text-center">
        <a href="" class=" btn btn__default">Ver todos os cursos</a>
      </div>
    </div>
  </div>
</section>

<main class="blog">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-md-3 blog__card p-0">
        <div class="blog__card--blue">
          <ul class="list-unstyled">
            <li><a href="">Artigos</a></li>
            <li><a href="">Publicações</a></li>
            <li><a href="">Downloads</a></li>
            <li><a href="">Podcast</a></li>
          </ul>
        </div>
      </div>
      <div class="col-md-6 pl-0 my-3 mb-md-0">
        <div class="blog__card--destaque">
          <figure>
            <img src="https://via.placeholder.com/550x230" alt="" class="">
          </figure>
          <div class="blog__card--destaque--description">
            <h6 class="blog__card--destaque--description--title">Sociosqu ad litora torquet per conubia nostra. per
            inceptos himenaeos. Per conubia nostra. per inceptos himenaeos.</h6>
            <span class="blog__card--destaque--description--date">ARTIGO | 02/06/2020</span>
          </div>
        </div>
      </div>

      <div class="col-md-3 pl-0">
        <div class="blog__card">
          <div class="blog__card--outros">
            <!-- POSTAGEM -->
            <div class="blog__card--outros--postagem">
              <h6 class="blog__card--outros--title">Sociosqu ad litora torquet per conubia nostra. per inceptos
                himenaeos.
              Per conubia nostra. per inceptos himenaeos.</h6>
              <span class="blog__card--destaque--description--date">ARTIGO | 02/06/2020</span>
            </div>
            <!-- POSTAGEM -->
            <!-- POSTAGEM -->
            <div class="blog__card--outros--postagem">
              <h6 class="blog__card--outros--title">Sociosqu ad litora torquet per conubia nostra. per inceptos
                himenaeos.
              Per conubia nostra. per inceptos himenaeos.</h6>
              <span class="blog__card--destaque--description--date">ARTIGO | 02/06/2020</span>
            </div>
            <!-- POSTAGEM -->
          </div>
          <!-- VERTODOS -->

        </div>
      </div>
      <div class="col-md-12">
        <div class="blog__card--acessar">
          <a href="">ver todas publicações <img src="<?php echo U?>src/img/icons/seta.png" alt=""></a>
        </div>
      </div>
    </div>
  </div>
</main>



<!-- Include Footer -->
<?php include_once(U . 'includes/footer.php'); ?>
  <!-- Include Footer -->