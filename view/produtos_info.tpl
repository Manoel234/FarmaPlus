<h3>teste</h3>

{foreach from=$PRO item=P}

<h3 class="center">{$P.pro_nome} - Ref:  {$P.pro_ref}</h3>

<hr>

<div class="row">

{* div da esquerda imagem do protudo*}
<div class="col-md-6">

<img class="thumbnail" src="{$P.pro_img}" alt="">

</div>

{* div da direita info produtos *}
<div class="col-md-6 thumbnail">

<img src="{$TEMA}/images/logo.png" width="200" height="200" alt="">

<hr>

<div class="col-md-6">
<h3 class="text-center preco">R$ {$P.pro_valor}</h3>

</div>

<div class="col-md-6">
<form name="carrinho" method="post" action="login.php">
<input type="hidden" name="pro_id" value="{$P.pro_id}">
<input type="hidden" name="acao" value="add">
<button class="btn btn-geral btn-lg">Comprar</button>
</form>


<!-- --> 
{* listagem de imagens extras *}

<div class="row">

<hr>

<h4 class="text-center">Mais imagens</h4>

<ul style="list-style: none">

<li class="col-md-3">

<img src="" alt="" class="thumbnail">

</li>

</ul>

</div>

</div>

{* <!-- descricao do produto-->*}

<div class="row">

<hr>

<h4 class="text-center">Descrição do Produto</h4>
{$P.pro_desc}
</div>
<br>
<br>
{/foreach}


