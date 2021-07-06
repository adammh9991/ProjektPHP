{extends file="main.tpl"}
{block name=top}
					<!-- Header -->
				<header id="header">
					<div class="logo container">
						<div>
							<h1><a>Lista  Filmów do Zatwierdzenia</a></h1>
						</div>
					</div>
				</header>
{/block}
{block name=content}




			<!-- Nav -->
				<nav id="nav">
					<ul>
						<li class="current"><a href="index.php">Strona Główna</a></li>		
						<li><a href="{$conf->action_root}movieEditShow">Zarządzanie</a></li>
						<li><a href="{$conf->action_root}movieList">Lista filmów</a></li>
						<li><a href="{$conf->action_root}logout">Wyloguj się</a></li>
					</ul>
				</nav>
				
<table id="tab_people" class="default">
<thead>
	<tr>
		<th>tytuł</th>
		<th>opis</th>
		<th>aktorzy</th>
		<th>gatunek</th>
		<th>długość</th>
		<th>decyzja</th>

	</tr>
</thead>
<tbody>
{foreach $movie as $m}
{strip}
	<tr>
		<td>{$m["title"]}</td>
		<td>{$m["description"]}</td>
		<td>{$m["famous_actors"]}</td>
		<td>{$m["genre"]}</td>
		<td>{$m["length"]}</td>
		<td>
			<a href="{$conf->action_root}movieEdit/{$m["idmovie"]}">Edytuj</a>
			&nbsp;
			<a href="{$conf->action_root}movieCheck/{$m["idmovie"]}">Zatwierdź</a>
			&nbsp;
			<a href="{$conf->action_root}movieDelete/{$m["idmovie"]}">Usuń</a>
		</td>

	</tr>
{/strip}
{/foreach}
</tbody>
</table>

{/block}
