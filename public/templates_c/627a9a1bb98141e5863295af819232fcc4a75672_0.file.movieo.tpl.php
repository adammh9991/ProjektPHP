<?php
/* Smarty version 3.1.34-dev-7, created on 2020-06-29 19:52:27
  from 'C:\xampp\htdocs\projekt\app\views\movieo.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5efa2a5b5b43f2_92937435',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '627a9a1bb98141e5863295af819232fcc4a75672' => 
    array (
      0 => 'C:\\xampp\\htdocs\\projekt\\app\\views\\movieo.tpl',
      1 => 1593453145,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5efa2a5b5b43f2_92937435 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12518313585efa2a5b5a4233_44282625', 'top');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9524569415efa2a5b5a54d8_38106716', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'top'} */
class Block_12518313585efa2a5b5a4233_44282625 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'top' => 
  array (
    0 => 'Block_12518313585efa2a5b5a4233_44282625',
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
class Block_9524569415efa2a5b5a54d8_38106716 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_9524569415efa2a5b5a54d8_38106716',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

				
					<div class="content">
						
					
						
							<h2>Tytuł</h2><br></br>
							<p><?php echo $_smarty_tpl->tpl_vars['form']->value->title;?>
</p><br></br>
							<h2>sławni aktorzy</h2><br></br>
							<a><?php echo $_smarty_tpl->tpl_vars['form']->value->famous_actors;?>
</a><br></br>
							<h2>opis</h2><br></br>
							<a><?php echo $_smarty_tpl->tpl_vars['form']->value->description;?>
</a><br></br>
							<h2>długość</h2><br></br>
							<a><?php echo $_smarty_tpl->tpl_vars['form']->value->length;?>
</a><br></br>
							<h2>gatunek</h2><br></br>
							<a><?php echo $_smarty_tpl->tpl_vars['form']->value->genre;?>
</a><br></br>							
							
							<h2>Komentarze</h2><br></br>
						
						



							<input type="submit" value="Register"></input><br></br>
					
					</div>
				
<?php
}
}
/* {/block 'content'} */
}
