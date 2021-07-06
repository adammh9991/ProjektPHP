{extends file="main.tpl"}

{block name=top} 

			<!-- Header -->
				<header id="header">
					<div class="logo container">
						<div>
							<h1><a>Ustawienia</a></h1>
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

				<form style="margin:40px" method="post" action="{$conf->action_root}ChangePass">
					<label>Zmień hasło</label>
					<input type="password" placeholder="Podaj Stare hasło" name="password" "></input><br></br>
					<input type="password" placeholder="Podaj Nowe hasło" name="newpassword" "></input><br></br>
					<input type="submit" value="Zmień"></input><br></br>
				</form>

				<form style="margin:40px" method="post" action="{$conf->action_root}ChangeEmail">
					<label>Zmień email</label>
					<input type="email" placeholder="Stary E-mail" name="email" "></input><br></br>
					<input type="email" placeholder="Nowy E-mail" name="newemail" "></input><br></br>
					<input type="submit" value="Zmień"></input><br></br>
				</form>
				{foreach $msgs->getMessages() as $msg}
							<div class="alert {if $msg->isInfo()}alert-success{/if}
								 {if $msg->isWarning()}alert-warning{/if}
								 {if $msg->isError()}alert-danger{/if}" role="alert">
								{$msg->text}
							</div>
				{/foreach}				
{/block}