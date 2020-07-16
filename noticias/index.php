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

  <aside>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="col-md-12 mb-4">
            <h3 class="paginas__title">Notícias</h3>
          </div>
        </div>

        <div class="col-md-8 order-2 order-md-1">
          <div class="row">
            <!-- CARD -->
            <div class="col-md-6 col-12 mb-3">
              <div class="paginas__card">
                <div class="paginas__card--descricao">
                  <h6 class="paginas__card--descricao--title">Título de notícia</h6>
                  <p class="paginas__card--descricao--text">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                    Ducimus natus veritatis odit eligendi
                    voluptates praesentium ullam dignissimos, eos modi necessitatibus placeat quam consectetur in.
                    Omnis,
                    repellat! Suscipit commodi necessitatibus accusantium!</p>
                  <a href="" class="btn btn__default">Ver mais</a>
                </div>
              </div>
            </div>
            <!-- //CARD -->
            <!-- CARD -->
            <div class="col-md-6 col-12 mb-3">
              <div class="paginas__card">
                <div class="paginas__card--descricao">
                  <h6 class="paginas__card--descricao--title">Título de notícia</h6>
                  <p class="paginas__card--descricao--text">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                    Ducimus natus veritatis odit eligendi
                    voluptates praesentium ullam dignissimos, eos modi necessitatibus placeat quam consectetur in.
                    Omnis,
                    repellat! Suscipit commodi necessitatibus accusantium!</p>
                  <a href="" class="btn btn__default">Ver mais</a>
                </div>
              </div>
            </div>
            <!-- //CARD -->
          </div>
        </div>

        <!-- NAVBAR LATERAL -->
        <div class="col-md-4 order-md-2 order-1">
          <div class="pesquisar">
            <form action="" method="post">
              <div class="form-group">
                <span class="icon--pesquisar"></span>
                <input type="search" name="Pesquisar" class="form-control form-control-lg form__default form--search"
                  placeholder="Pesquise seu Interesse" id="">
              </div>
            </form>
          </div>
          <div class="assuntos py-3">
            <h5 class="paginas__title">Assuntos</h5>
            <ul class="nav paginas__nav flex-column">
              <li class="nav-item">
                <a class="nav-link" href="#">link (1)</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">link (1)</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">link (1)</a>
              </li>
            </ul>
          </div>
          <!--  -->
          <div class="docentes py-3">
            <h5 class="paginas__title">Docentes</h5>
            <ul class="nav paginas__nav flex-column">
              <li class="nav-item">
                <a class="nav-link" href="#">link (1)</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">link (1)</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">link (1)</a>
              </li>
            </ul>
          </div>
        </div>
        <!-- NAVBAR LATERAL -->
      </div>
  </aside>



  <!-- Include Footer -->
  <?php include_once(U . 'includes/footer.php'); ?>
  <!-- Include Footer -->