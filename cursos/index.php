<!DOCTYPE html>
<html lang="pt-br">
<!-- Required meta tags -->
<title>NeoJus | Cursos</title>

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
      <div class="row align-items-center">
        <div class="col-md-9 col-12">
          <h3 class="paginas__title">Confira nossos cursos</h3>
        </div>
        <div class="col-md-3 col-12">
          <form action="" method="post">
            <div class="form-group">
              <span class="icon--pesquisar"></span>
              <input type="search" name="Pesquisar" class="form-control form-control-lg form__default form--search"
                placeholder="Pesquisar curso" id="">
            </div>
          </form>
        </div>

      </div>
    </div>
  </article>

  <aside>
    <div class="container">
      <div class="row">
        <div class="col-md-2">
          <ul class="nav paginas__nav flex-column">
            <li class="nav-item">
              <a class="nav-link active" href="#">Active</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Link</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Link</a>
            </li>
          </ul>
        </div>
        <div class="col-md-10">
          <div class="row">
            <!-- CARD CURSOS -->
            <div class="col-md-4">
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
      </div>
  </aside>

  <!-- Include Footer -->
  <?php include_once(U . 'includes/footer.php'); ?>
  <!-- Include Footer -->