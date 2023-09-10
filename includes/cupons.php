<div>
    <div class="row  px-1 g-1">
        <div class="col-2 col-sm-3 px-5 text-center">
            <div class="card" style="width: 10rem;">
                <img src="./img/logo2.png" class="img-thumbnail rounded mx-auto d-block mt-2" alt="..." style="width: 4rem;">
                <div class="card-body">
                    <h5 class="card-title">50% de Desconto!</h5>
                    <p class="card-text mt-0">+40 cupons</p>
                    <p class="card-text">Validos até...</p>                    
                    <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#CupomModal">
                        Comprar
                    </button>
                </div>
            </div>                 
        </div>          
    </div>
<!-- Modal  Cupom-->
<div class="modal fade" id="CupomModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Lorem, ipsum 50% de desconto</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="col-md-6 mx-auto"><img src="./img/logo1.png" style="width: 14rem;" alt=""></div>
        <div class="col-md-6 mx-auto">
            <p>Lorem ipsum dolor sit amet.</p>
        </div> 
        
      </div>
      <div class="modal-footer">
      <button type="button" class="btn btn-danger mx-auto" data-bs-toggle="modal" data-bs-target="#CompraModal">Continuar a compra</button>
      </div>
    </div>
  </div>
</div>
</div>
<!-- Button trigger modal -->
<!-- Modal -->
<div class="modal  fade" id="CompraModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-fullscreen">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Cupons Ninja</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <!-- Formulário de compra --> 
        <main>
    <div class="py-5 text-center">
        <h2>Finalizar Compra</h2>
    </div>
    <div class="row g-5">
        <div class="col-md-5 col-lg-4 order-md-last">
            <h4 class="d-flex justify-content-between align-items-center mb-3">
                <span class="text-danger">Seu carrinho</span>
                <span class="badge bg-danger rounded-pill">3</span>
            </h4>
            <ul class="list-group mb-3">
                <li class="list-group-item d-flex justify-content-between lh-sm">
                    <div>
                        <h6 class="my-0">Lorem, ipsum.</h6>
                        <small class="text-muted">50% de desconto</small>
                    </div>
                    <span class="text-muted">50%</span>
                </li>
                <li class="list-group-item d-flex justify-content-between lh-sm">
                    <div>
                        <h6 class="my-0">Lorem, ipsum.</h6>
                        <small class="text-muted">50% de desconto</small>
                    </div>
                    <span class="text-muted">50%</span>
                </li>
                <li class="list-group-item d-flex justify-content-between lh-sm">
                    <div>
                        <h6 class="my-0">Lorem, ipsum.</h6>
                        <small class="text-muted">50% de desconto</small>
                    </div>
                    <span class="text-muted">50%</span>
                </li>
                <li class="list-group-item d-flex justify-content-between bg-light">
                    <div class="text-success">
                        <h6 class="my-0">Código Promocional</h6>
                        <small>SALE500</small>
                    </div>
                    <span class="text-success">-100</span>
                </li>
                <li class="list-group-item d-flex justify-content-between">
                    <span>Total (R$)</span>
                    <strong></strong>
                </li>
            </ul>

            <form class="card p-2">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Promo code">
                    <button type="submit" class="btn btn-danger">Aplicar desconto</button>
                </div>
            </form>
        </div>
        <div class="col-md-7 col-lg-8">
            <h4 class="mb-3">Endereço de cobrança</h4>
            <form class="needs-validation" novalidate>
                <div class="row g-3">
                    <div class="col-sm-6">
                        <label for="firstName" class="form-label">Nome</label>
                        <input type="text" class="form-control" id="firstName" placeholder="" value="" required>
                        <div class="invalid-feedback">
                            Digite um nome válido.
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <label for="lastName" class="form-label">Sobrenome</label>
                        <input type="text" class="form-control" id="lastName" placeholder="" value="" required>
                        <div class="invalid-feedback">
                            Digite um sobrenome válido.
                        </div>
                    </div>


                    <div class="col-12">
                        <label for="email" class="form-label">Email <span class="text-muted">(Optional)</span></label>
                        <input type="email" class="form-control" id="email" placeholder="you@example.com">
                        <div class="invalid-feedback">
                            Insira um email válido.
                        </div>
                    </div>

                    <div class="col-12">
                        <label for="address" class="form-label">Endereço</label>
                        <input type="text" class="form-control" id="address" placeholder="Plaza street" required>
                        <div class="invalid-feedback">
                            Insira seu endereço.
                        </div>
                    </div>

                    <div class="col-12">
                        <label for="address2" class="form-label">Endereço 2 <span class="text-muted">(Optional)</span></label>
                        <input type="text" class="form-control" id="address2" placeholder="Apartment or suite">
                    </div>

                    <div class="col-md-5">
                        <label for="country" class="form-label">País</label>
                        <select class="form-select" id="country" required>
                            <option value="">escolha...</option>
                            <option>Brasil</option>
                        </select>
                        <div class="invalid-feedback">
                            Selecione um país válido.
                        </div>
                    </div>

                    <div class="col-md-4">
                        <label for="state" class="form-label">Estado</label>
                        <select class="form-select" id="state" required>
                            <option value="">Escolha...</option>
                            <option>São Paulo</option>
                        </select>
                        <div class="invalid-feedback">
                            Insira um estado válido.
                        </div>
                    </div>

                    <div class="col-md-3">
                        <label for="zip" class="form-label">CEP</label>
                        <input type="text" class="form-control" id="zip" placeholder="" required>
                        <div class="invalid-feedback">
                            CEP obrigatório.
                        </div>
                    </div>
                </div>

                <hr class="my-4">

               

                <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="save-info">
                    <label class="form-check-label" for="save-info">Salvar essas informações para próxima compra</label>
                </div>

                <hr class="my-4">

                <h4 class="mb-3">Pagamento</h4>

                <div class="my-3">
                    <div class="form-check">
                        <input id="credit" name="paymentMethod" type="radio" class="form-check-input" checked required>
                        <label class="form-check-label" for="credit">Cartão de Crédito</label>
                    </div>
                    <div class="form-check">
                        <input id="debit" name="paymentMethod" type="radio" class="form-check-input" required>
                        <label class="form-check-label" for="debit">Cartão de Débito</label>
                    </div>
                    <div class="form-check">
                        <input id="paypal" name="paymentMethod" type="radio" class="form-check-input" required>
                        <label class="form-check-label" for="paypal">Boleto</label>
                    </div>
                    <div class="form-check">
                        <input id="paypal" name="paymentMethod" type="radio" class="form-check-input" required>
                        <label class="form-check-label" for="paypal">Pix</label>
                    </div>
                </div>

                <div class="row gy-3">
                    <div class="col-md-6">
                        <label for="cc-name" class="form-label">Nome no Cartão</label>
                        <input type="text" class="form-control" id="cc-name" placeholder="" required>
                        <small class="text-muted">Nome completo no cartão</small>
                        <div class="invalid-feedback">
                            Nome é requerido no cartão.
                        </div>
                    </div>

                    <div class="col-md-6">
                        <label for="cc-number" class="form-label">Número do cartão de Cre´dito</label>
                        <input type="text" class="form-control" id="cc-number" placeholder="" required>
                        <div class="invalid-feedback">
                            Número é obrigatório.
                        </div>
                    </div>

                    <div class="col-md-3">
                        <label for="cc-expiration" class="form-label">Validade</label>
                        <input type="text" class="form-control" id="cc-expiration" placeholder="" required>
                        <div class="invalid-feedback">
                            Data de validade é obrigatória
                        </div>
                    </div>

                    <div class="col-md-3">
                        <label for="cc-cvv" class="form-label">CVV</label>
                        <input type="text" class="form-control" id="cc-cvv" placeholder="" required>
                        <div class="invalid-feedback">
                            Código de segurança é requerido
                        </div>
                    </div>
                </div>

                <hr class="my-4">                
            </form>
        </div>
    </div>
</main>
      </div>
      <div class="modal-footer">
      <button class="w-100 btn btn-danger btn-lg" type="button" data-bs-toggle="modal" data-bs-target="#CupomFinalmodal">Continuar</button>
      </div>
    </div>
  </div>
</div>
<!-- Modal do cupom -->
<!-- Modal -->
<div class="modal fade" id="CupomFinalmodal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Cupons ninja</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <img src="./img/logo2.png" class="img-thumbnail rounded mx-auto d-block mt-2" alt="..." style="width: 4rem;">
       <div class="col-sm-6 mx-auto">
       <h3>CÓDIGOCUPOM50</h3>
       <P>Cupom gerado com sucesso. Leve-o até a loja e adquira seu produto com desconto!</P>
       </div>
      </div>
      <div class="modal-footer">        
        <button type="button" class="btn btn-danger mx-auto">Salvar Cupom(PDF/PNG)</button>
        <button type="button" class="btn btn-danger">Imprimir Cupom</button>
      </div>
    </div>
  </div>
</div>


</div>