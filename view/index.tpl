<!DOCTYPE html>
<html lang="pt-br">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>{$TITULO_SITE}</title>

  <link href="{$GET_TEMA}/tema/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="{$GET_TEMA}/tema/css/shop-homepage.css" rel="stylesheet">
   <link href="{$GET_TEMA}/tema/css/tema.css" rel="stylesheet">

</head>

<body>

  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
      <a class="navbar-brand" href="{$GET_HOME}">Farmácia Plus</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link" href="{$GET_HOME}">Home
              <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{$PAG_PRODUTOS}">Produtos</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{$PAG_ATENDIMENTO}">Atendimento</a>
          </li>
             <li class="nav-item">
            <a class="nav-link" href="{$PAG_CARRINHO}">Carrinho</a>
          </li>
           <li class="nav-item">
            <a class="nav-link" href="{$PAG_MINHACONTA}">Minha conta</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
teste
<!--<div class="row" id="rodape">
    <center>
    <h4>{$TITULO_SITE}</h4>
    <p>Copyright - Manoel Araujo</p>
    </center>
</div>
   Page Content 
  <div class="container">
    <div class="row">
      <div class="col-lg-3">
        <h1 class="my-4">Shop Name</h1>
        <div class="list-group">
          <a href="#" class="list-group-item">Category 1</a>
          <a href="#" class="list-group-item">Category 2</a>
          <a href="#" class="list-group-item">Category 3</a>
        </div>
      </div>
    </div>
  </div> -->



  {php}
  Rotas::get_Pagina();
  {/php}
  
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>
</html>