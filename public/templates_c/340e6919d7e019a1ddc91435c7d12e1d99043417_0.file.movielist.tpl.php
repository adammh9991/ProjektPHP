<?php
/* Smarty version 3.1.34-dev-7, created on 2021-07-06 13:39:59
  from 'C:\xampp\htdocs\projekt\app\views\movielist.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_60e4410f319d15_91597508',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '340e6919d7e019a1ddc91435c7d12e1d99043417' => 
    array (
      0 => 'C:\\xampp\\htdocs\\projekt\\app\\views\\movielist.tpl',
      1 => 1625571597,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60e4410f319d15_91597508 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13150659560e4410f2edbf0_20616741', 'top');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_36145898160e4410f2f3198_89000358', 'content');
?>



<br /><b>Notice</b>:  Undefined index: searchForm in <b>C:\xampp\htdocs\projekt\public\templates_c\340e6919d7e019a1ddc91435c7d12e1d99043417_0.file.movielist.tpl.php</b> on line <b>117</b><br /><br /><b>Notice</b>:  Trying to get property 'value' of non-object in <b>C:\xampp\htdocs\projekt\public\templates_c\340e6919d7e019a1ddc91435c7d12e1d99043417_0.file.movielist.tpl.php</b> on line <b>117</b><br /><br /><b>Notice</b>:  Trying to get property 'title' of non-object in <b>C:\xampp\htdocs\projekt\public\templates_c\340e6919d7e019a1ddc91435c7d12e1d99043417_0.file.movielist.tpl.php</b> on line <b>117</b><br />
<br /><b>Notice</b>:  Undefined index: MovieSearchForm in <b>C:\xampp\htdocs\projekt\public\templates_c\340e6919d7e019a1ddc91435c7d12e1d99043417_0.file.movielist.tpl.php</b> on line <b>120</b><br /><br /><b>Notice</b>:  Trying to get property 'value' of non-object in <b>C:\xampp\htdocs\projekt\public\templates_c\340e6919d7e019a1ddc91435c7d12e1d99043417_0.file.movielist.tpl.php</b> on line <b>120</b><br /><br /><b>Notice</b>:  Trying to get property 'title' of non-object in <b>C:\xampp\htdocs\projekt\public\templates_c\340e6919d7e019a1ddc91435c7d12e1d99043417_0.file.movielist.tpl.php</b> on line <b>120</b><br />
<br /><b>Notice</b>:  Undefined index: form in <b>C:\xampp\htdocs\projekt\public\templates_c\340e6919d7e019a1ddc91435c7d12e1d99043417_0.file.movielist.tpl.php</b> on line <b>119</b><br /><br /><b>Notice</b>:  Trying to get property 'value' of non-object in <b>C:\xampp\htdocs\projekt\public\templates_c\340e6919d7e019a1ddc91435c7d12e1d99043417_0.file.movielist.tpl.php</b> on line <b>119</b><br /><br /><b>Notice</b>:  Trying to get property 'title' of non-object in <b>C:\xampp\htdocs\projekt\public\templates_c\340e6919d7e019a1ddc91435c7d12e1d99043417_0.file.movielist.tpl.php</b> on line <b>119</b><br /><?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'top'} */
class Block_13150659560e4410f2edbf0_20616741 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'top' => 
  array (
    0 => 'Block_13150659560e4410f2edbf0_20616741',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

					<!-- Header -->
				<header id="header">
					<div class="logo container">
						<div>
							<h1><a>Lista  Filmów</a></h1>
							
						</div>
					</div>
					<form style="margin-top:50px"methot="post" action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
addmovieShow">
						<input type="submit" value="+ Dodaj" ></input><br></br>	
					</form>	
				</header>
				
<?php
}
}
/* {/block 'top'} */
/* {block 'content'} */
class Block_36145898160e4410f2f3198_89000358 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_36145898160e4410f2f3198_89000358',
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
movieEditShow">Zarządzanie</a></li>
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
				
				
<!--<form style="text-align:center"  action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
movieList">
	<legend>Opcje wyszukiwania</legend>
	
		<input type="text" placeholder="tutuł" name="title" value="<?php echo $_smarty_tpl->tpl_vars['searchForm']->value->title;?>
" /><br />
		<button type="submit" >Filtruj</button>
	
</form>	-->			
				
		
<table id="tab_people" class="default">
<thead>
	<tr>
	
		<th>tytuł</th>
		<th>opis</th>
		<th>aktorzy</th>
		<th>gatunek</th>
		<th>długość</th>

	</tr>
</thead>
<tbody>
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['movie']->value, 'm');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['m']->value) {
?>
<tr class="default"><td><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
historyAdd/<?php echo $_smarty_tpl->tpl_vars['m']->value["idmovie"];?>
"><?php echo $_smarty_tpl->tpl_vars['m']->value["title"];?>
</a></td><td><?php echo $_smarty_tpl->tpl_vars['m']->value["description"];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['m']->value["famous_actors"];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['m']->value["genre"];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['m']->value["length"];?>
min</td></tr>
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
