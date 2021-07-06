<?php
/* Smarty version 3.1.34-dev-7, created on 2020-06-29 14:18:32
  from 'C:\xampp\htdocs\projekt\app\views\history.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5ef9dc18ef6a83_92031379',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f5ce4acc2360b837e4caf26d752c6655e3763705' => 
    array (
      0 => 'C:\\xampp\\htdocs\\projekt\\app\\views\\history.tpl',
      1 => 1593433111,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ef9dc18ef6a83_92031379 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2976051835ef9dc18ed3ff8_29476000', 'top');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20227132435ef9dc18ed5956_20085369', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'top'} */
class Block_2976051835ef9dc18ed3ff8_29476000 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'top' => 
  array (
    0 => 'Block_2976051835ef9dc18ed3ff8_29476000',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

					<!-- Header -->
				<header id="header">
					<div class="logo container">
						<div>
							<h1><a>Historia</a></h1>
							
						</div>
					</div>
				</header>
				
<?php
}
}
/* {/block 'top'} */
/* {block 'content'} */
class Block_20227132435ef9dc18ed5956_20085369 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_20227132435ef9dc18ed5956_20085369',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>





			<!-- Nav -->
				<nav id="nav">
					<ul>
						<li class="current"><a href="index.php">Strona Główna</a></li>
						<?php if (\core\RoleUtils::inRole("mod")) {?>
						<li><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
movieEdit">Zarządzanie</a></li>
						<?php }?>						
						<li><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
movieList">Lista filmów</a></li>
						<?php if (\core\RoleUtils::inRole("user")) {?>
						<li><a>Profil</a>
							<ul>
								<li><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
settShow">Ustawienia</a></li>
								<li><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
historyList">Historia</a></li>
							</ul>
						</li>
						<?php }?>

						<?php if (\core\RoleUtils::inRole("admin") || \core\RoleUtils::inRole("mod") || \core\RoleUtils::inRole("user")) {?>
						<li><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
logout">Wyloguj się</a></li>
						<?php }?>
					</ul>
				</nav>
		
<table id="tab_history" class="default">
<thead>
	<tr>
	
		<th>Tytuł</th>
		<th>data</th>

	</tr>
</thead>
<tbody>
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['history']->value, 'h');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['h']->value) {
?>
<tr class="default"><td><a href="index.php"><?php echo $_smarty_tpl->tpl_vars['h']->value["title"];?>
</a></td><td><?php echo $_smarty_tpl->tpl_vars['h']->value["hdate"];?>
</td></tr>
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
