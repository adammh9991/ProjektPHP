<?php
/* Smarty version 3.1.34-dev-7, created on 2020-06-29 10:03:26
  from 'C:\xampp\htdocs\projekt\app\views\home.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5ef9a04e2e1ca1_62715803',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9af458eec1000be6ca5ea79158ba9e8bbbde63fa' => 
    array (
      0 => 'C:\\xampp\\htdocs\\projekt\\app\\views\\home.tpl',
      1 => 1593417804,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ef9a04e2e1ca1_62715803 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7241513965ef9a04e2dad67_65429040', 'top');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19530049815ef9a04e2dc223_71070723', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'top'} */
class Block_7241513965ef9a04e2dad67_65429040 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'top' => 
  array (
    0 => 'Block_7241513965ef9a04e2dad67_65429040',
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
class Block_19530049815ef9a04e2dc223_71070723 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_19530049815ef9a04e2dc223_71070723',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

			<!-- Banner -->
				<section id="banner">
					<div class="content">
						<h2>Zarejestruj się już dziś</h2>
						<p color="white">Nudzisz się? Nie masz co robić? Nie czekaj! <br>Zarejestruj się i zobacz propozycję filmów dla Ciebie</br></p>
						<a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
regiShow" class="button scrolly">Zarejestruj się</a>
					</div>
				</section>
			<footer id="footer">
					<div class="container">
						<div class="row gtr-200">
							<div class="col-12">

								<!-- About -->
									<section>
										<h2 class="major"><span>Informacje</span></h2>
										<p>
											Aplikacja stworzona w ramach projektu na przedmiot Projektowanie Bazodanowych Aplikacji Webowych.<br></br>
											Polega na dopasowaniu filmu do danego uzytkownika.
										</p>
									</section>

							</div>
							<div class="col-12">

								<!-- Contact -->
									<section>
										<h2 class="major"><span>Odwiedź nas!</span></h2>
										<ul class="contact">
											<li><a class="icon brands fa-facebook-f" href="#"><span class="label">Facebook</span></a></li>
											<li><a class="icon brands fa-twitter" href="#"><span class="label">Twitter</span></a></li>
											<li><a class="icon brands fa-instagram" href="#"><span class="label">Instagram</span></a></li>
										</ul>
									</section>

							</div>
						</div>

						<!-- Copyright -->
							<div id="copyright">
								<ul class="menu">
									<li>&copy; Untitled. All rights reserved</li><li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
								</ul>
							</div>

					</div>
			</footer>
<?php
}
}
/* {/block 'content'} */
}
