<?php
include 'includes/header.php'
?>
<!-- Wrapper container -->
<div class="container py-4">
<div class="row">
                <div class="col-6 offset-md-3">
                    <div class="intro">                       
                        <h1>Fale com a nossa equipe!</h1>
                        <p class="mx-auto">Veja tudo que podemos fazer pelo seu negócio.</p>
                    </div>
                </div>
            </div>

  <!-- Bootstrap 5 starter form -->
  <form id="contactForm" class="offset-md-3">

    <!-- Name input -->
    <div class="mb-3 col-sm-7">
      <label class="form-label" for="name">Nome</label>
      <input class="form-control" id="name" type="text" placeholder="Nome" />
    </div>

    <!-- Email address input -->
    <div class="mb-3 col-sm-7">
      <label class="form-label" for="emailAddress">Email</label>
      <input class="form-control" id="emailAddress" type="email" placeholder="Email" />
    </div>

    <!-- Message input -->
    <div class="mb-3 col-sm-7">
      <label class="form-label" for="message">Mensagem</label>
      <textarea class="form-control" id="message" type="text" placeholder="Mensagem" style="height: 10rem;"></textarea>
    </div>

    <!-- Form submit button -->
    <div class="d-grid gap-2 d-md-block">
      <button class="btn btn-danger btn-lg" type="submit">Enviar</button>
      <button class="btn btn-secondary btn-lg" type="submit">Limpar</button>
    </div>

  </form>

</div>
<?php
include 'includes/footer.php'
?>