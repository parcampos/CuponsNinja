<?php
include 'includes/header.php'
?>
 <div class="intro">
        <h1>Conheça nossos planos!</h1>           
           
</div>
<style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

      .b-example-divider {
        height: 3rem;
        background-color: rgba(0, 0, 0, .1);
        border: solid rgba(0, 0, 0, .15);
        border-width: 1px 0;
        box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
      }

      .b-example-vr {
        flex-shrink: 0;
        width: 1.5rem;
        height: 100vh;
      }

      .bi {
        vertical-align: -.125em;
        fill: currentColor;
      }

      .nav-scroller {
        position: relative;
        z-index: 2;
        height: 2.75rem;
        overflow-y: hidden;
      }

      .nav-scroller .nav {
        display: flex;
        flex-wrap: nowrap;
        padding-bottom: 1rem;
        margin-top: -1px;
        overflow-x: auto;
        text-align: center;
        white-space: nowrap;
        -webkit-overflow-scrolling: touch;
      }
    </style>    
    <!-- Custom styles for this template -->
    <link href="pricing.css" rel="stylesheet">
  </head>
  <body>
    
<svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
  <symbol id="check" viewBox="0 0 16 16">
    <title>Check</title>
    <path d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z"/>
  </symbol>
</svg>
<div class="row">
                <div class="col-12">
                    <div class="intro">                    
                        
                        <p class="mx-auto">Escolha o plano que mais atende ao seu interesse, se a dúvida aparecer 
                          entre em contato com um dos nossos consultores.</p>
                    </div>
                </div>
            </div>
<div class="container py-3">
    <main>
    <div class="row row-cols-1 row-cols-md-3 mb-3 text-center">
      <div class="col">
        <div class="card mb-4 rounded-3 shadow-sm">
          <div class="card-header py-3">
            <h4 class="my-0 fw-normal">Aprendiz</h4>
          </div>
          <img src="./img/ninja_a.png" widht="50" class="card-img-top" alt="...">
          <div class="card-body">            
            <h1 class="card-title pricing-card-title">R$100<small class="text-muted fw-light">/mês</small></h1>
            <ul class="list-unstyled mt-3 mb-4">
              <li>Cupons</li>
              <li>Consultoria</li>
              <li>Marketing Digital</li>
              <li></li>
            </ul>
            <button type="button" class="w-100 btn btn-lg btn-outline-danger">Adquirir</button>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card mb-4 rounded-3 shadow-sm border-danger">
          <div class="card-header py-3">
            <h4 class="my-0 fw-normal">Ninja</h4>
          </div>
          <img src="./img/samurai.png" widht="50" class="card-img-top" alt="...">
          <div class="card-body">
          <h1 class="card-title pricing-card-title">R$100<small class="text-muted fw-light">/mês</small></h1>
            <ul class="list-unstyled mt-3 mb-4">
            <li>Cupons</li>
              <li>Consultoria</li>
              <li>Marketing Digital</li>
              <li></li>
            </ul>
            <button type="button" class="w-100 btn btn-lg btn-danger">Adquirir</button>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card mb-4 rounded-3 shadow-sm">
          <div class="card-header py-3  ">
            <h4 class="my-0 fw-normal">Samurai</h4>
          </div>
          <img src="./img/ninja.png" widht="50" class="card-img-top" alt="...">
          <div class="card-body">
          <h1 class="card-title pricing-card-title">R$100<small class="text-muted fw-light">/mês</small></h1>
            <ul class="list-unstyled mt-3 mb-4">
            <li>Cupons</li>
              <li>Consultoria</li>
              <li>Marketing Digital</li>
              <li></li>
            </ul>
            <button type="button" class="w-100 btn btn-lg btn-outline-danger">Adquirir</button>
          </div>
        </div>
      </div>
    </div>


<?php
include 'includes/footer.php'
?>