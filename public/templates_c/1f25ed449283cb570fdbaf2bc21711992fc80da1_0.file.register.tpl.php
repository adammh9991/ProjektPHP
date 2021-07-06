<?php
/* Smarty version 3.1.34-dev-7, created on 2020-06-29 20:36:05
  from 'C:\xampp\htdocs\projekt\app\views\register.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5efa3495590037_94657776',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1f25ed449283cb570fdbaf2bc21711992fc80da1' => 
    array (
      0 => 'C:\\xampp\\htdocs\\projekt\\app\\views\\register.tpl',
      1 => 1593455763,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5efa3495590037_94657776 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1342129975efa349557d4b2_71492073', 'top');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3368363275efa349557e237_89302723', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'top'} */
class Block_1342129975efa349557d4b2_71492073 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'top' => 
  array (
    0 => 'Block_1342129975efa349557d4b2_71492073',
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
class Block_3368363275efa349557e237_89302723 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_3368363275efa349557e237_89302723',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

				<section id="banner">
					<div class="content">
						
					
						<form method="post" action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
register">
							<h2>Rejestracja</h2><br></br>

						
							<input type="text" placeholder="Username" name="login" "></input><br></br>
							<input type="text" placeholder="Nickname" name="nick" "></input><br></br>						
							<input type="email" placeholder="E-mail" name="email" "></input><br></br>
							<input type="password" placeholder="Password" name="password" "></input><br></br>
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
							<input type="submit" value="Register"></input><br></br>
						</form>
					</div>
				</section>
<?php
}
}
/* {/block 'content'} */
}
