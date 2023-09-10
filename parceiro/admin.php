<?php
session_start();
if (!empty($_SESSION)){
    echo "Olá, ".$_SESSION['nome']; 
    echo $_SESSION['id'];
    echo '<a href="./logout.php"> Logout</a>';
}
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  </head>
  <body>
    <h1>Cadastrar Cupons</h1>
    <!-- Button trigger modal -->
<button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">
  Cadastrar Cupom
</button>

<form action="salvar_cupom.php" method="post">
            <div class="mb-3">
                
                <input type="hidden" class="form-control" id="exampleFormControlInput1" name="id" placeholder="">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Descrição</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" name="descricao" placeholder="">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Valor</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" name="valor" placeholder="">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Validade</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" name="validade" placeholder="">
            </div>            
            <div class="mb-3">                
                <input type="hidden" class="form-control" id="exampleFormControlInput1" name="fornecedor" value="<?php $_SESSION['id']?>" placeholder="name@example.com">
            </div>
            <input type="submit" value="Salvar" name="btn-salvar-cupom">

        </form>



   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  </body>
</html>

