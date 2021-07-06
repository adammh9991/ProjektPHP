<?php
/* Smarty version 3.1.34-dev-7, created on 2020-06-29 20:59:38
  from 'C:\xampp\htdocs\projekt\app\views\modView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5efa3a1a77b572_57883511',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e7577f11e4c637680e986c1cc2fd797952bfbb42' => 
    array (
      0 => 'C:\\xampp\\htdocs\\projekt\\app\\views\\modView.tpl',
      1 => 1593457109,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5efa3a1a77b572_57883511 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16489262265efa3a1a7657b1_82114680', 'top');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2986584455efa3a1a7664c5_27216653', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'top'} */
class Block_16489262265efa3a1a7657b1_82114680 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'top' => 
  array (
    0 => 'Block_16489262265efa3a1a7657b1_82114680',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

					<!-- Header -->
				<header id="header">
					<div class="logo container">
						<div>
							<h1><a>Lista  Filmów do Zatwierdzenia</a></h1>
						</div>
					</div>
				</header>
<?php
}
}
/* {/block 'top'} */
/* {block 'content'} */
class Block_2986584455efa3a1a7664c5_27216653 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_2986584455efa3a1a7664c5_27216653',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>





			<!-- Nav -->
				<nav id="nav">
					<ul>
						<li class="current"><a href="index.php">Strona Główna</a></li>		
						<li><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
movieEditShow">Zarządzanie</a></li>
						<li><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
movieList">Lista filmów</a></li>
						<li><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
logout">Wyloguj się</a></li>
					</ul>
				</nav>
				
<table id="tab_people" class="default">
<thead>
	<tr>
		<th>tytuł</th>
		<th>opis</th>
		<th>aktorzy</th>
		<th>gatunek</th>
		<th>długość</th>
		<th>decyzja</th>

	</tr>
</thead>
<tbody>
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['movie']->value, 'm');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['m']->value) {
?>
<tr><td><?php echo $_smarty_tpl->tpl_vars['m']->value["title"];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['m']->value["description"];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['m']->value["famous_actors"];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['m']->value["genre"];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['m']->value["length"];?>
</td><td><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
movieEdit/<?php echo $_smarty_tpl->tpl_vars['m']->value["idmovie"];?>
">Edytuj</a>&nbsp;<a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
movieCheck/<?php echo $_smarty_tpl->tpl_vars['m']->value["idmovie"];?>
">Zatwierdź</a>&nbsp;<a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
movieDelete/<?php echo $_smarty_tpl->tpl_vars['m']->value["idmovie"];?>
">Usuń</a></td></tr>
<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</tbody>
</table>

<?php
}
}
/* {/block 'content'} */
}
