
<!DOCTYPE HTML>
<!--
	TXT by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Zobacz Teraz!</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="{$conf->app_url}/assets/css/main.css">
	</head>
	<body class="homepage is-preload">
		<div id="page-wrapper">
		
{block name=top} {/block}



			<!-- Nav -->
				<nav id="nav">
					<ul>
						<li class="current"><a href="index.php">Strona Główna</a></li>		
						{if \core\RoleUtils::inRole("mod")}
						<li><a href="{$conf->action_root}movieEdit">Zarządzanie</a></li>
						{/if}	
						<li><a href="{$conf->action_root}movieList">Lista filmów</a></li>
						{if \core\RoleUtils::inRole("user")}
						<li><a>Profil</a>
							<ul>
								<li><a href="{$conf->action_root}settShow">Ustawienia</a></li>
								<li><a href="{$conf->action_root}movieEdit">Historia</a></li>
							</ul>
						</li>
						{/if}						
						{if \core\RoleUtils::inRole("admin") || \core\RoleUtils::inRole("mod") || \core\RoleUtils::inRole("user")}
						<li><a href="{$conf->action_root}logout">Wyloguj się</a></li>
						{/if}					
						<li><a href="{$conf->action_root}login">Zaloguj się</a></li>
					</ul>
				</nav>
				
				{block name=content}przykladaowa zawartosc{/block}
				
				


		</div>

			<script src="{$conf->app_url}/assets/js/jquery.min.js"></script>
			<script src="{$conf->app_url}/assets/js/jquery.dropotron.min.js"></script>
			<script src="{$conf->app_url}/assets/js/jquery.scrolly.min.js"></script>
			<script src="{$conf->app_url}/assets/js/browser.min.js"></script>
			<script src="{$conf->app_url}/assets/js/breakpoints.min.js"></script>
			<script src="{$conf->app_url}/assets/js/util.js"></script>
			<script src="{$conf->app_url}/assets/js/main.js"></script>

	</body>
</html>