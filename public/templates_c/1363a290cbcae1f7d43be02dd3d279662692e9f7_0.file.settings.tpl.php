<?php
/* Smarty version 3.1.34-dev-7, created on 2021-07-06 13:30:07
  from 'C:\xampp\htdocs\projekt\app\views\settings.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_60e43ebf54d6d8_33907349',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1363a290cbcae1f7d43be02dd3d279662692e9f7' => 
    array (
      0 => 'C:\\xampp\\htdocs\\projekt\\app\\views\\settings.tpl',
      1 => 1625571006,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60e43ebf54d6d8_33907349 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_101397481760e43ebf535447_31851778', 'top');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8639006660e43ebf536425_78898949', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'top'} */
class Block_101397481760e43ebf535447_31851778 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'top' => 
  array (
    0 => 'Block_101397481760e43ebf535447_31851778',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 

			<!-- Header -->
				<header id="header">
					<div class="logo container">
						<div>
							<h1><a>Ustawienia</a></h1>
						</div>
					</div>
				</header>

<?php
}
}
/* {/block 'top'} */
/* {block 'content'} */
class Block_8639006660e43ebf536425_78898949 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_8639006660e43ebf536425_78898949',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


			<!-- Nav -->
				<nav id="nav">
					<ul>
						<li class="current"><a href="index.php">Strona Główna</a></li>		
						<li><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
movieList">Lista filmów</a></li>
						<li><a>Profil</a>
							<ul>
								<li><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
settShow">Ustawienia</a></li>
								<li><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
movieEdit">Historia</a></li>
							</ul>
						</li>
						<li><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
logout">Wyloguj się</a></li>
					</ul>
				</nav>

				<form style="margin:40px" method="post" action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
ChangePass">
					<label>Zmień hasło</label>
					<input type="password" placeholder="Podaj Stare hasło" name="password" "></input><br></br>
					<input type="password" placeholder="Podaj Nowe hasło" name="newpassword" "></input><br></br>
					<input type="submit" value="Zmień"></input><br></br>
				</form>

				<form style="margin:40px" method="post" action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
ChangeEmail">
					<label>Zmień email</label>
					<input type="email" placeholder="Stary E-mail" name="email" "></input><br></br>
					<input type="email" placeholder="Nowy E-mail" name="newemail" "></input><br></br>
					<input type="submit" value="Zmień"></input><br></br>
				</form>
				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['msgs']->value->getMessages(), 'msg');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['msg']->value) {
?>
							<div class="alert <?php if ($_smarty_tpl->tpl_vars['msg']->value->isInfo()) {?>alert-success<?php }?>
								 <?php if ($_smarty_tpl->tpl_vars['msg']->value->isWarning()) {?>alert-warning<?php }?>
								 <?php if ($_smarty_tpl->tpl_vars['msg']->value->isError()) {?>alert-danger<?php }?>" role="alert">
								<?php echo $_smarty_tpl->tpl_vars['msg']->value->text;?>

							</div>
				<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>				
<?php
}
}
/* {/block 'content'} */
}
