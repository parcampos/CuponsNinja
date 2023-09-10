<?php
include 'includes/header.php'
?>
<!-- Begin Caroussel -->
<?php
include 'includes/carrossel.php'
?>
<!-- End Caroussel -->
<!-- begin parceiros -->
<?php
include 'includes/parceiros.php'
?>
<!-- end parceiros -->
<!-- begin footer-->
<?php
include 'includes/cupons.php'
?>
<!-- end footer-->
<?php
include 'includes/projetos.php'
?>
<!-- pre footer --> 
<?php 
include 'includes/pre-footer.php'
?>
<?php
include 'includes/footer.php'
?>
<!-- Modal -->
<div class="modal" id="exampleModal" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-center">Escolha sua categoria de Usuário!</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row justify-content-center">
                    <div class="col-md-6 text-center">Cliente
                        <a href="forms/login_form_cliente.php"><img src="./img/ninjabox.png" class="img-thumbnail" alt="..." style="border: 0;"></a>                    
                    </div>
                    <div class="col-md-6 text-center">Parceiro
                    <a href="forms/login_form_parceiro.php"><img src="./img/ninja-desk.svg" class="img-thumbnail" alt="..." style="border: 0;"></a>                    
                    </div>
                </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Fechar</button>
                
            </div>
        </div>
    </div>
</div>