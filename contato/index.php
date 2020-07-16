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

  <section id="fundo" style="background-position:top left;">
    <article class="paginas">
      <div class="container">
        <div class="row">
          <div class="col-md-12 mb-4">
            <h3 class="paginas__title">Entre em contato</h3>
            <h6 class="paginas__subitle">Preencha o Formulário abaixo com seus dados e os envie uma mensagem.</h6>
          </div>
          <div class="col-md-6 col-12">
            <div class="paginas__card">
              <!-- FORM -->
              <form action="" method="post">
                <div class="form-group">
                  <label for="">Nome completo</label>
                  <input type="text" name="Nome" class="form-control form__default" id="">
                </div>
                <div class="form-group">
                  <label for="">E-mail</label>
                  <input type="text" name="Nome" class="form-control form__default" id="">
                </div>
                <div class="form-group">
                  <label for="">Telefone</label>
                  <input type="text" name="Nome" class="form-control form__default" id="">
                </div>
                <div class="form-group">
                  <label for="">Assunto</label>
                  <input type="text" name="Nome" class="form-control form__default" id="">
                </div>
                <div class="form-group">
                  <label for="">Mensagem</label>
                  <textarea name="Mensagem" class="form-control form__default" rows="5"></textarea>
                </div>
                <div class="form-group">
                  <button type="submit" class="btn btn__mensagem">Enviar Mensagem</button>
                </div>
              </form>
              <!-- //FORM -->
            </div>
          </div>
          <!-- CONTATOS -->
          <div class="col-md-6">
            <div class="paginas__telefone">
              <h5 class="paginas__title">Telefones</h5>
              <a href="" class="paginas__numeros">(15) 3213 - 6300</a>
              <a href="" class="paginas__numeros">(15) 3313 - 1999</a>
            </div>
            <div class="paginas__redesocial my-4">
              <h5 class="paginas__title">Redes Sociais</h5>
              <a href="">
                <img src="<?php echo U?>src/img/icons/icon-youtube.png" alt="">
              </a>
              <a href="">
                <img src="<?php echo U?>src/img/icons/icon-linkedin.png" alt="">
              </a>
              <a href="">
                <img src="<?php echo U?>src/img/icons/icon-instagram.png" alt="">
              </a>
            </div>
          </div>
          <!-- CONTATOS -->
        </div>
      </div>
    </article>

  </section>

  <!-- Include Footer -->
  <?php include_once(U . 'includes/footer.php'); ?>
  <!-- Include Footer -->