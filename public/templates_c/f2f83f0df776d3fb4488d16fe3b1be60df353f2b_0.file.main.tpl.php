<?php
/* Smarty version 3.1.34-dev-7, created on 2020-06-29 11:09:16
  from 'C:\xampp\htdocs\projekt\app\views\templates\main.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5ef9afbc9a5cb2_95818560',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f2f83f0df776d3fb4488d16fe3b1be60df353f2b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\projekt\\app\\views\\templates\\main.tpl',
      1 => 1593421755,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ef9afbc9a5cb2_95818560 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>

<!DOCTYPE HTML>
<!--
	TXT by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Zobacz Teraz!</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/assets/css/main.css">
	</head>
	<body class="homepage is-preload">
		<div id="page-wrapper">
		
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_882972385ef9afbc98a988_12340431', 'top');
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
movieEdit">Historia</a></li>
							</ul>
						</li>
						<?php }?>						
						<?php if (\core\RoleUtils::inRole("admin") || \core\RoleUtils::inRole("mod") || \core\RoleUtils::inRole("user")) {?>
						<li><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
logout">Wyloguj się</a></li>
						<?php }?>					
						<li><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
login">Zaloguj się</a></li>
					</ul>
				</nav>
				
				<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11904446785ef9afbc9a0922_98901857', 'content');
?>

				
				


		</div>

			<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/assets/js/jquery.min.js"><?php echo '</script'; ?>
>
			<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/assets/js/jquery.dropotron.min.js"><?php echo '</script'; ?>
>
			<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/assets/js/jquery.scrolly.min.js"><?php echo '</script'; ?>
>
			<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/assets/js/browser.min.js"><?php echo '</script'; ?>
>
			<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/assets/js/breakpoints.min.js"><?php echo '</script'; ?>
>
			<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/assets/js/util.js"><?php echo '</script'; ?>
>
			<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/assets/js/main.js"><?php echo '</script'; ?>
>

	</body>
</html><?php }
/* {block 'top'} */
class Block_882972385ef9afbc98a988_12340431 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'top' => 
  array (
    0 => 'Block_882972385ef9afbc98a988_12340431',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 <?php
}
}
/* {/block 'top'} */
/* {block 'content'} */
class Block_11904446785ef9afbc9a0922_98901857 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_11904446785ef9afbc9a0922_98901857',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
przykladaowa zawartosc<?php
}
}
/* {/block 'content'} */
}
