<h3>Lista de Produtos</h3>
<hr>

<section id="pagincao" class="row">

<center> PAGINAS </center>

</section>

<section id="produtos" class="row">

<ul style="list-style:none">

<div class="row" id="pularliha">

{foreach from=$PRO item=P}

<li class="col-md-4">

<div class="thumbnail">

<a href="{$PRO_INFO}/{$P.pro_id}/{$P.pro_slug}">

<img src="{$P.pro_img}" width="200" height="200" alt=""></br>

<div class="caption">

<h4>{$P.pro_nome}</h4>

<h3 class="text-danger"> R$ {$P.pro_valor}</h3>
</div>

</a>

</div>

</li>

{/foreach}

</div>

</ul>

</section>

<section id="pagincao" class="row">

<center> PAGINAS </center>