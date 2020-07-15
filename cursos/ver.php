<!DOCTYPE html>
<html lang="pt-br">
<!-- Required meta tags -->
<title>NeoJus | Agenda</title>

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
        <div class="col-md-6 text-left">
          <h3 class="paginas__title">Nome do curso</h3>
          <h6 class="paginas__subitle">Nome do Instrutor</h6>
        </div>
        <div class="col-md-6 text-right">
          <h3 class="paginas__valor">Por apenas <strong>R$ 999,00</strong></h3>
          <a href="" class="btn btn__comprar">Comprar</a>
        </div>
      </div>
      <!-- OUTROS CURSOS -->
      <div class="col-md-12">
        <h3 class="paginas__title mb-4">Outros cursos deste instrutor</h3>
        <div class="row">

          <!-- CARD CURSOS -->
          <div class="col-md-3">
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
          </div>
          <!-- CARD CURSOS -->
        </div>
      </div>
      <!-- //OUTROS CURSOS -->
    </div>
  </article>

  <!-- Include Footer -->
  <?php include_once(U . 'includes/footer.php'); ?>
  <!-- Include Footer -->