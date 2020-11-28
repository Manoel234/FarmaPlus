<?php
/* Smarty version 3.1.36, created on 2020-11-28 02:58:43
  from 'C:\xampp\htdocs\loja\view\produtos_info.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5fc1aed31f66e7_45645847',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '41c25063825d62e3712cd0061d037e31c8fd1a59' => 
    array (
      0 => 'C:\\xampp\\htdocs\\loja\\view\\produtos_info.tpl',
      1 => 1606528717,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fc1aed31f66e7_45645847 (Smarty_Internal_Template $_smarty_tpl) {
?><h3>teste</h3>

<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['PRO']->value, 'P');
$_smarty_tpl->tpl_vars['P']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['P']->value) {
$_smarty_tpl->tpl_vars['P']->do_else = false;
?>

<h3 class="center"><?php echo $_smarty_tpl->tpl_vars['P']->value['pro_nome'];?>
 - Ref:  <?php echo $_smarty_tpl->tpl_vars['P']->value['pro_ref'];?>
</h3>

<hr>

<div class="row">

<div class="col-md-6">

<img class="thumbnail" src="<?php echo $_smarty_tpl->tpl_vars['P']->value['pro_img'];?>
" alt="">

</div>

<div class="col-md-6 thumbnail">

<img src="<?php echo $_smarty_tpl->tpl_vars['TEMA']->value;?>
/images/logo.png" width="200" height="200" alt="">

<hr>

<div class="col-md-6">
<h3 class="text-center preco">R$ <?php echo $_smarty_tpl->tpl_vars['P']->value['pro_valor'];?>
</h3>

</div>

<div class="col-md-6">
<form name="carrinho" method="post" action="login.php">
<input type="hidden" name="pro_id" value="<?php echo $_smarty_tpl->tpl_vars['P']->value['pro_id'];?>
">
<input type="hidden" name="acao" value="add">
<button class="btn btn-geral btn-lg">Comprar</button>
</form>


<!-- --> 

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


<div class="row">

<hr>

<h4 class="text-center">Descrição do Produto</h4>
<?php echo $_smarty_tpl->tpl_vars['P']->value['pro_desc'];?>

</div>
<br>
<br>
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>


<?php }
}
