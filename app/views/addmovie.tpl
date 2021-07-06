{extends file="main.tpl"}

{block name=top} 

			<!-- Header -->
				<header id="header">
					<div class="logo container">
						<div>
							<h1><a>Dodaj Film</a></h1>
						</div>
					</div>
				</header>

{/block}

{block name=content}

			<!-- Nav -->
				<nav id="nav">
					<ul>
						<li class="current"><a href="index.php">Strona Główna</a></li>		
						<li><a href="{$conf->action_root}movieList">Lista filmów</a></li>
						<li><a>Profil</a>
							<ul>
								<li><a href="{$conf->action_root}settShow">Ustawienia</a></li>
								<li><a href="{$conf->action_root}movieEdit">Historia</a></li>
							</ul>
						</li>
						<li><a href="{$conf->action_root}logout">Wyloguj się</a></li>
					</ul>
				</nav>

<section id="main">
			<div class="content">
				<form style="margin:60px" method="post" action="{$conf->action_root}addmovie">
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
						{foreach $msgs->getMessages() as $msg}
							<div class="alert {if $msg->isInfo()}alert-success{/if}
								 {if $msg->isWarning()}alert-warning{/if}
								 {if $msg->isError()}alert-danger{/if}" role="alert">
								{$msg->text}
							</div>
						{/foreach}						
					<input type="submit" value="Zatwierdź"></input><br></br>
				</form>
			</div>	
		</section>	
{/block}