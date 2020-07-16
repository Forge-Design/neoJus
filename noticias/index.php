<!DOCTYPE html>
<html lang="pt-br">
<!-- Required meta tags -->
<title>NeoJus | Notícias</title>

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
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto laborum autem perferendis, aliquam culpa
            dicta, in nulla, similique voluptatem vero est minus quaerat animi ipsa voluptatum. Sint atque delectus
            maiores.</p>
          <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Officiis non fuga inventore magnam nemo. Ea
            nesciunt eos magnam, eum, eaque provident autem ut libero magni accusantium veritatis voluptatibus amet.
            Accusamus!</p>
        </div>
        <div class="col-md-12 my-3">
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus in voluptatem nesciunt reprehenderit
            aliquam alias at commodi ullam rerum facere voluptate, quam aspernatur eligendi a quis architecto, ab
            sapiente odio.</p>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus in voluptatem nesciunt reprehenderit
            aliquam alias at commodi ullam rerum facere voluptate, quam aspernatur eligendi a quis architecto, ab
            sapiente odio.</p>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus in voluptatem nesciunt reprehenderit
            aliquam alias at commodi ullam rerum facere voluptate, quam aspernatur eligendi a quis architecto, ab
            sapiente odio.</p>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus in voluptatem nesciunt reprehenderit
            aliquam alias at commodi ullam rerum facere voluptate, quam aspernatur eligendi a quis architecto, ab
            sapiente odio.</p>
        </div>
        <!-- SLIDER SWITH -->
        <div class="col-md-12">
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
  </article>



  <!-- Include Footer -->
  <?php include_once(U . 'includes/footer.php'); ?>
  <!-- Include Footer -->