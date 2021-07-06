<?php
/* Smarty version 3.1.34-dev-7, created on 2021-07-06 13:28:47
  from 'C:\xampp\htdocs\projekt\app\views\addmovie.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_60e43e6f989505_22600898',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd98f870244ac1435e258a316b5959e556e453cdd' => 
    array (
      0 => 'C:\\xampp\\htdocs\\projekt\\app\\views\\addmovie.tpl',
      1 => 1625570926,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60e43e6f989505_22600898 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_176175414460e43e6f970611_90724830', 'top');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_99997547460e43e6f972925_73492237', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'top'} */
class Block_176175414460e43e6f970611_90724830 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'top' => 
  array (
    0 => 'Block_176175414460e43e6f970611_90724830',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 

			<!-- Header -->
				<header id="header">
					<div class="logo container">
						<div>
							<h1><a>Dodaj Film</a></h1>
						</div>
					</div>
				</header>

<?php
}
}
/* {/block 'top'} */
/* {block 'content'} */
class Block_99997547460e43e6f972925_73492237 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_99997547460e43e6f972925_73492237',
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

<section id="main">
			<div class="content">
				<form style="margin:60px" method="post" action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
addmovie">
					<label>Tytuł :</label>
					<input type="text" placeholder="Podaj tutuł filmu" name="title" "></input><br></br>
					<label>Sławni aktorzy :</label>
					<input type="text" placeholder="Podaj aktorów" name="famous_actors" "></input><br></br>
					<label>Opis :</label>
					<input type="text" placeholder="Podaj opis" name="description" "></input><br></br>

					<label>Długość filmu :</label>
					<input type="text" placeholder="Podaj długość filmu" name="length" "></input><br></br>
					<label>Gatunek :</label>
						 <select id="genre" name="genre">
						  <option value="akcja">akcja</option>
						  <option value="dramat">dramat</option>
						  <option value="komedia">komedia</option>
						  <option value="przygodowe">przygodowe</option>
						  <option value="przyrodnicze">przyrodnicze</option>
						  <option value="sci-fi">sci-fi</option>
						  <option value="fantasy">fantasy</option>
						  <option value="horror">horror</option>
						  <option value="anime">anime</option>
						  <option value="familijny">familijny</option>
						  <option value="melodramat">melodramat</option>
						  <option value="musical">musical</option>
						  <option value="sportowy">sportowy</option>
						</select> <br></br>
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
					<input type="submit" value="Zatwierdź"></input><br></br>
				</form>
			</div>	
		</section>	
<?php
}
}
/* {/block 'content'} */
}
