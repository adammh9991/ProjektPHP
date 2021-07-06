<?php
/* Smarty version 3.1.34-dev-7, created on 2020-06-25 12:07:33
  from 'C:\xampp\htdocs\projekt\app\views\login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5ef477657228a3_08851430',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c4111ddad377e24d15c71671e10029ed085e75ce' => 
    array (
      0 => 'C:\\xampp\\htdocs\\projekt\\app\\views\\login.tpl',
      1 => 1593079651,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ef477657228a3_08851430 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17783279825ef4776570b341_16699421', 'top');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20922425075ef4776570c8c9_00880962', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'top'} */
class Block_17783279825ef4776570b341_16699421 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'top' => 
  array (
    0 => 'Block_17783279825ef4776570b341_16699421',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 

			<!-- Header -->
				<header id="header">
					<div class="logo container">
						<div>
							<h1><a>Poznaj propozycję filmu</a></h1>
						</div>
					</div>
				</header>

<?php
}
}
/* {/block 'top'} */
/* {block 'content'} */
class Block_20922425075ef4776570c8c9_00880962 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_20922425075ef4776570c8c9_00880962',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


				<section id="banner">
					<div class="content">
						<form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
login" method="post" >
							<h2>Logowanie</h2><br></br>
							<input type="text" placeholder="Username" name="login" ></input><br></br>
							<input type="password" placeholder="Password" name="password" ></input><br></br>
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
							<input type="submit" value="Zaloguj"></input><br></br>
						</form>
						
					</div>
				</section>
<?php
}
}
/* {/block 'content'} */
}
