{extends file="main.tpl"}
{block name=top}
					<!-- Header -->
				<header id="header">
					<div class="logo container">
						<div>
							<h1><a>Historia</a></h1>
							
						</div>
					</div>
				</header>
				
{/block}
{block name=content}




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
								<li><a href="{$conf->action_root}historyList">Historia</a></li>
							</ul>
						</li>
						{/if}

						{if \core\RoleUtils::inRole("admin") || \core\RoleUtils::inRole("mod") || \core\RoleUtils::inRole("user")}
						<li><a href="{$conf->action_root}logout">Wyloguj się</a></li>
						{/if}
					</ul>
				</nav>
		
<table id="tab_history" class="default">
<thead>
	<tr>
	
		<th>Tytuł</th>
		<th>data</th>

	</tr>
</thead>
<tbody>
{foreach $history as $h}
{strip}
	<tr class="default">
		<td><a href="index.php">{$h["title"]}</a></td>
		<td>{$h["hdate"]}</td>

	</tr>
{/strip}
{/foreach}
</tbody>
</table>

{/block}
