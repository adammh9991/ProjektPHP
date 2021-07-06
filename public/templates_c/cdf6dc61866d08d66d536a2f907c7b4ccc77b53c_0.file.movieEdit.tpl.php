<?php
/* Smarty version 3.1.34-dev-7, created on 2020-06-29 21:57:23
  from 'C:\xampp\htdocs\projekt\app\views\movieEdit.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5efa47a3daa5f8_81262325',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cdf6dc61866d08d66d536a2f907c7b4ccc77b53c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\projekt\\app\\views\\movieEdit.tpl',
      1 => 1593460639,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5efa47a3daa5f8_81262325 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7574494425efa47a3d91d42_84106022', 'top');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20827798795efa47a3d93273_09971433', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'top'} */
class Block_7574494425efa47a3d91d42_84106022 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'top' => 
  array (
    0 => 'Block_7574494425efa47a3d91d42_84106022',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 

			<!-- Header -->
				<header id="header">
					<div class="logo container">
						<div>
							<h1><a>Edycja Filmu</a></h1>
						</div>
					</div>
				</header>

<?php
}
}
/* {/block 'top'} */
/* {block 'content'} */
class Block_20827798795efa47a3d93273_09971433 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_20827798795efa47a3d93273_09971433',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
movieSave" method="post" >


		<div>
            <label for="title">tytuł</label>
            <input id="title" type="text" placeholder="tytuł" name="title" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->title;?>
">
        </div>
		<div>
            <label for="description">opis</label>
            <input id="description" type="text" placeholder="description" name="description" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->description;?>
">
        </div>
		<div>
            <label for="famous_actors">sławni aktorzy</label>
            <input id="famous_actors" type="text" placeholder="famous_actors" name="famous_actors" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->famous_actors;?>
">
        </div>
		<div>
            <label for="genre">gatunek</label>
            <input id="genre" type="text" placeholder="Wprowadź gatunek" name="genre" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->genre;?>
">
		
        </div>		
		<div>
            <label for="length">dlugość</label>
            <input id="length" type="text" placeholder="length" name="length" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->length;?>
">
        </div>
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
		<div>
			<input type="submit" class="" value="Zapisz"/>
			<a class="" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
movieEditShow">Powrót</a>
		</div>
		<input type="hidden" name="idmovie" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->idmovie;?>
">
	
</form>	

<?php
}
}
/* {/block 'content'} */
}
