<footer>
  <main class="redesocial">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-md-3 col-12 text-center text-sm-left">
          <h4 class="redesocial__title">Acompanhe nossas redes e assista à aulas gratuitas</h4>
        </div>
        <div class="col-md-3 col-4 text-center">
          <div class="d-flex align-items-center">
            <a href="">
              <img src="<?php echo U?>src/img/icons/icon-youtube.png" alt="">
              <span class="redesocial__link">@neojus</span>
            </a>
          </div>
        </div>
        <div class="col-md-3 col-4 text-center">
          <div class="d-flex align-items-center">
            <a href="">
              <img src="<?php echo U?>src/img/icons/icon-linkedin.png" alt="">
              <span class="redesocial__link">@neojus</span>
            </a>
          </div>
        </div>
        <div class="col-md-3 col-4 text-center">
          <div class="d-flex align-items-center">
            <a href="">
              <img src="<?php echo U?>src/img/icons/icon-instagram.png" alt="">
              <span class="redesocial__link">@neojus</span>
            </a>
          </div>
        </div>
      </div>
    </div>
  </main>
  <main class="contato">
    <div class="container">
      <div class="row">
        <div class="col-md-6 col-12">
          <h5 class="contato__title">Deixe seu contato e receba dicas jurídicas que farão diferença no seu dia-a-dia,
            além de informações sobre
            nossos cursos de direto.</h5>
        </div>
        <div class="col-md-6 col-12">
          <form action="" method="post">
            <div class="form-group">
              <input type="text" name="Nome" placeholder="Digite seu nome"
                class="form-control form-control-lg form__default" id="">
            </div>
            <div class="row">
              <div class="col-md-8 col-12">
                <div class="form-group">
                  <input type="mail" name="Nome" placeholder="Digite seu E-mail"
                    class="form-control form-control-lg form__default" id="">
                </div>
              </div>
              <div class="col-md-4 col-12">
                <div class="form-group">
                  <input type="mail" name="Nome" placeholder="Celular"
                    class="form-control form-control-lg form__default" id="">
                </div>
              </div>
            </div>
            <div class="form-group">
              <button type="submit" class="btn btn__enviar float-right">Enviar <img
                  src="<?php echo U?>src/img/icons/icon-enviar.png" alt=""></button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </main>

  <main class="parceiros">
    <div class="container">
      <div class="row align-items-center justify-content-center">
        <div class="col-md-3">
          <h4 class="parceiros__title">Parceiros <br> NeoJus</h4>
        </div>
        <div class="col-md-3 col-4 text-center">
          <div class="parceiros__imagem">
            <img src="https://via.placeholder.com/150" class="" alt="">
          </div>
        </div>
        <div class="col-md-3 col-4 text-center">
          <div class="parceiros__imagem">
            <img src="https://via.placeholder.com/150" class="" alt="">
          </div>
        </div>
        <div class="col-md-3 col-4 text-center">
          <div class="parceiros__imagem border-0">
            <img src="https://via.placeholder.com/150" class="" alt="">
          </div>
        </div>
      </div>
    </div>
  </main>

  <main class="informacoes">
    <div class="container">
      <div class="row">
        <div class="col-md-6 col-12">
          <h5 class="informacoes__title">Sobre a Neo Jus</h5>
          <p class="informacoes__text">Cursos de extensão para a área jurídica, certificados pelo Centro Universitário,
            Instituição de
            ensino, NEO
            JUS. Organização educacional privada, válido em todo território nacional.</p>
        </div>
        <div class="col-md-3 col-12 text-center">
          <h5 class="informacoes__title">Metodo de Pagamento</h5>
          <img src="<?php echo U?>src/img/pagseguro.png" alt="">
        </div>
        <div class="col-md-3 col-12  text-center">
          <h5 class="informacoes__title">Fale Conosco</h5>
          <div class="informacoes__contatos">
            <div class="informacoes__email">
              <a href="">
                <img src="<?php echo U?>src/img/icons/icon-email.png" alt="">
              </a>
            </div>
            <div class="informacoes__telefone">
              <a href="">
                <img src="<?php echo U?>src/img/icons/icon-telefone.png" alt="">
                <span class="inforcoes__telefone--numero">(15) 0000-0000</span>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>
  <main>
    <div class="container copy">
      <div class="row">
        <div class="col-md-6 col-12">
          <span class="d-block"> NEO JUS S/A | 00.000.000/0000-00 | Rua Santa Quitéria, 1171 - Vila Irene - São
            Roque/SP</span>
          <span class="d-block"> NEO JUS ® 2020 | Escola de Direito. Todos os direitos reservados.</span>
        </div>
        <div class="col-md-6 col-12 text-right text-md-text">
          <a href="">Desenvolvido por Agência Kombi</a>
        </div>
      </div>
    </div>
  </main>
</footer>


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.css" />
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

<!-- Initialize Swiper -->
<script>
  var swiper = new Swiper('.swiper-container', {
    slidesPerView: 1,
    spaceBetween: 30,
    freeMode: true,
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
    // Responsive breakpoints
    breakpoints: {
      // when window width is >= 320px
      320: {
        slidesPerView: 1,
        spaceBetween: 20
      },
      // when window width is >= 480px
      480: {
        slidesPerView: 1,
        spaceBetween: 20
      },
      // when window width is >= 640px
      640: {
        slidesPerView: 2,
        spaceBetween: 40
      },
      // when window width is >= 640px
      976: {
        slidesPerView: 4,
        spaceBetween: 40
      }
    }
  });

  var swiper = new Swiper('.publicacoes', {
    slidesPerView: 1,
    spaceBetween: 30,
    freeMode: true,
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
    z
    // Responsive breakpoints
    breakpoints: {
      // when window width is >= 320px
      320: {
        slidesPerView: 1,
        spaceBetween: 20
      },
      // when window width is >= 480px
      480: {
        slidesPerView: 1,
        spaceBetween: 20
      },
      // when window width is >= 640px
      640: {
        slidesPerView: 1,
        spaceBetween: 40
      },
      // when window width is >= 97px
      976: {
        slidesPerView: 2,
        spaceBetween: 40
      }
    }
  });
</script>


</body>

</html>