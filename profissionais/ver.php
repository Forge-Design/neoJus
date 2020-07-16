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

  <main class="breadpaginas">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb p-0 m-0">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active" aria-current="page">Library</li>
            </ol>
          </nav>
        </div>
      </div>
    </div>
  </main>

  <article class="paginas">
    <div class="container">
      <div class="row">
        <div class="col-md-12 mb-4">
          <h3 class="paginas__title">Título de Notícia</h3>
          <h6 class="paginas__subitle">Assunto da notícia</h6>
        </div>
        <div class="col-md-4 col-12">
          <figure>
            <img src="https://via.placeholder.com/500x300" alt="" class="w-100">
          </figure>
        </div>
        <div class="col-md-8 col-12">
          <div class="row">
            <div class="col-md-6">
              <h3 class="paginas__title">Nome do docente</h3>
              <h6 class="paginas__subitle">OAB 0000/000</h6>
            </div>
            <div class="col-md-4">
              <div class="paginas__redesocial">
                <a href=""><img src="<?php echo U?>src/img/icons/icon-linkedin.png" alt=""></a>
                <a href=""><img src="<?php echo U?>src/img/icons/icon-instagram.png" alt=""></a>
                <a href=""><img src="<?php echo U?>src/img/icons/icon-youtube.png" alt=""></a>
              </div>
            </div>
            <div class="col-md-12 my-4">
              <h6 class="font-weight-bold">Área de Atuação</h6>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto laborum autem perferendis, aliquam culpa
                dicta, in nulla, similique voluptatem vero est minus quaerat animi ipsa voluptatum. Sint atque delectus
                maiores.</p>
              <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Officiis non fuga inventore magnam nemo. Ea
                nesciunt eos magnam, eum, eaque provident autem ut libero magni accusantium veritatis voluptatibus amet.
                Accusamus!</p>
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

  <section class="paginas">
    <div class="container">
      <div class="row justify-content-center">
        <!-- SLIDER SWITH -->
        <div class="col-md-12">
          <div class="col-md-12 mb-3 p-md-0">
            <h3 class="paginas__title">Publicações</h3>
          </div>
          <!-- Swiper -->
          <div class="publicacoes">
            <!-- WRAPPER -->
            <div class="swiper-wrapper">
              <!-- CARD CURSOS -->
              <div class="swiper-slide">
                <div class="col-md-12">
                  <div class="row">
                    <div class="col-md-4 p-0">
                      <img src="https://via.placeholder.com/150" class="w-100" alt="">
                    </div>
                    <div class="col-md-8 p-0">
                      <div class="card__publicacoes">
                        <h6 class="font-weight-bold">Titulo</h6>
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Illo fugit fuga veniam
                          exercitationem
                          asperiores officiis officia magnam, in ducimus cum quos ad ut.!</p>
                        <a href="" class=" btn btn__default">Ver Mais</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- CARD CURSOS -->
              <!-- CARD CURSOS -->
              <div class="swiper-slide">
                <div class="col-md-12">
                  <div class="row">
                    <div class="col-md-4 p-0">
                      <img src="https://via.placeholder.com/150" class="w-100" alt="">
                    </div>
                    <div class="col-md-8 p-0">
                      <div class="card__publicacoes">
                        <h6 class="font-weight-bold">Titulo</h6>
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Illo fugit fuga veniam
                          exercitationem
                          asperiores officiis officia magnam, in ducimus cum quos ad ut.!</p>
                        <a href="" class=" btn btn__default">Ver Mais</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- CARD CURSOS -->
            </div>
            <!-- WRAPPER -->
            <!-- If we need navigation buttons -->
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
          </div>
          <!-- SLIDER SWITH -->
        </div>
      </div>
    </div>
  </section>



  <!-- Include Footer -->
  <?php include_once(U . 'includes/footer.php'); ?>
  <!-- Include Footer -->