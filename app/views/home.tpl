{extends file="main.tpl"}

{block name=top} 

			<!-- Header -->
				<header id="header">
					<div class="logo container">
						<div>
							<h1><a>Poznaj propozycję filmu</a></h1>
						</div>
					</div>
				</header>



{/block}

{block name=content}
			<!-- Banner -->
				<section id="banner">
					<div class="content">
						<h2>Zarejestruj się już dziś</h2>
						<p color="white">Nudzisz się? Nie masz co robić? Nie czekaj! <br>Zarejestruj się i zobacz propozycję filmów dla Ciebie</br></p>
						<a href="{$conf->action_root}regiShow" class="button scrolly">Zarejestruj się</a>
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
{/block}