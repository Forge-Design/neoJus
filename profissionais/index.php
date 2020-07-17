<!DOCTYPE html>
<html lang="pt-br">
<!-- Required meta tags -->
<title>NeoJus | Profissionais</title>

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
        <div class="col-md-12 mb-3">
          <h3 class="paginas__title">Profissionais</h3>
        </div>
        <!-- CARD -->
        <div class="col-md-3 col-12">
          <div class="paginas__card">
            <div class="paginas__card--imagem">
              <img src="https://via.placeholder.com/200x100" class="w-100" alt="">
            </div>
            <div class="paginas__card--descricao">
              <h6 class="paginas__card--descricao--title">Nome Docente </h6>
              <p class="paginas__card--descricao--text">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                Ducimus natus veritatis odit eligendi
                voluptates praesentium ullam dignissimos, eos modi necessitatibus placeat quam consectetur in. Omnis,
                repellat! Suscipit commodi necessitatibus accusantium!</p>
            </div>
          </div>
        </div>
        <!-- //CARD -->
      </div>
    </div>
  </article>

  <!-- Include Footer -->
  <?php include_once(U . 'includes/footer.php'); ?>
  <!-- Include Footer -->