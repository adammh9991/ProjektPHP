<?php
/* Smarty version 3.1.34-dev-7, created on 2020-06-29 22:00:51
  from 'C:\xampp\htdocs\projekt\app\views\adminView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5efa4873b51c21_95226781',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6cc4fb06494c4b9f08e0a69bafee0ae4a00bd357' => 
    array (
      0 => 'C:\\xampp\\htdocs\\projekt\\app\\views\\adminView.tpl',
      1 => 1593460850,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5efa4873b51c21_95226781 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11406798495efa4873b38756_48515722', 'top');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20076164805efa4873b3a841_99255443', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'top'} */
class Block_11406798495efa4873b38756_48515722 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'top' => 
  array (
    0 => 'Block_11406798495efa4873b38756_48515722',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

					<!-- Header -->
				<header id="header">
					<div class="logo container">
						<div>
							<h1><a>Lista  Użytkowników</a></h1>
						</div>
					</div>
				</header>
<?php
}
}
/* {/block 'top'} */
/* {block 'content'} */
class Block_20076164805efa4873b3a841_99255443 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_20076164805efa4873b3a841_99255443',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>





			<!-- Nav -->
				<nav id="nav">
					<ul>
						<li class="current"><a href="index.php">Strona Główna</a></li>
						<li><a>Widoki</a>
							<ul>
								<li><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
usersList">Widok Admina</a></li>
								<li><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
movieEdit">Widok Moda</a></li>
							</ul>
						
						</li>						
						<li><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
movieList">Lista filmów</a></li>
						<li><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
logout">Wyloguj się</a></li>
					</ul>
				</nav>
				
<table id="tab_users" class="default">
<thead>
	<tr>
		<th>id</th>
		<th>email</th>
		<th>login</th>
		<th>hasło</th>
		<th>nick</th>
		<th>ranga</th>
		<th>ulubiony gatunek</th>
		<th>rola</th>
		<th>opcja</th>
	</tr>
</thead>
<tbody>
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['user']->value, 'u');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['u']->value) {
?>
<tr><td><?php echo $_smarty_tpl->tpl_vars['u']->value["iduser"];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['u']->value["email"];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['u']->value["login"];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['u']->value["password"];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['u']->value["nick"];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['u']->value["rang"];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['u']->value["favourite"];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['u']->value["role"];?>
<td><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
userDel/<?php echo $_smarty_tpl->tpl_vars['u']->value["iduser"];?>
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
