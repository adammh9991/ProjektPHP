{extends file="main.tpl"}
{block name=top}
					<!-- Header -->
				<header id="header">
					<div class="logo container">
						<div>
							<h1><a>Lista  Filmów</a></h1>
							
						</div>
					</div>
					<form style="margin-top:50px"methot="post" action="{$conf->action_root}addmovieShow">
						<input type="submit" value="+ Dodaj" ></input><br></br>	
					</form>	
				</header>
				
{/block}
{block name=content}




			<!-- Nav -->
				<nav id="nav">
					<ul>
						<li class="current"><a href="index.php">Strona Główna</a></li>
						{if \core\RoleUtils::inRole("mod")}
						<li><a href="{$conf->action_root}movieEditShow">Zarządzanie</a></li>
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
				
				
<!--<form style="text-align:center"  action="{$conf->action_url}movieList">
	<legend>Opcje wyszukiwania</legend>
	
		<input type="text" placeholder="tutuł" name="title" value="{$searchForm->title}" /><br />
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
{foreach $movie as $m}
{strip}
	<tr class="default">
		<td><a href="{$conf->action_root}historyAdd/{$m["idmovie"]}">{$m["title"]}</a></td>
		<td>{$m["description"]}</td>
		<td>{$m["famous_actors"]}</td>
		<td>{$m["genre"]}</td>
		<td>{$m["length"]}min</td>

	</tr>
{/strip}
{/foreach}
</tbody>
</table>

{/block}


<br /><b>Notice</b>:  Undefined index: searchForm in <b>C:\xampp\htdocs\projekt\public\templates_c\340e6919d7e019a1ddc91435c7d12e1d99043417_0.file.movielist.tpl.php</b> on line <b>117</b><br /><br /><b>Notice</b>:  Trying to get property 'value' of non-object in <b>C:\xampp\htdocs\projekt\public\templates_c\340e6919d7e019a1ddc91435c7d12e1d99043417_0.file.movielist.tpl.php</b> on line <b>117</b><br /><br /><b>Notice</b>:  Trying to get property 'title' of non-object in <b>C:\xampp\htdocs\projekt\public\templates_c\340e6919d7e019a1ddc91435c7d12e1d99043417_0.file.movielist.tpl.php</b> on line <b>117</b><br />
<br /><b>Notice</b>:  Undefined index: MovieSearchForm in <b>C:\xampp\htdocs\projekt\public\templates_c\340e6919d7e019a1ddc91435c7d12e1d99043417_0.file.movielist.tpl.php</b> on line <b>120</b><br /><br /><b>Notice</b>:  Trying to get property 'value' of non-object in <b>C:\xampp\htdocs\projekt\public\templates_c\340e6919d7e019a1ddc91435c7d12e1d99043417_0.file.movielist.tpl.php</b> on line <b>120</b><br /><br /><b>Notice</b>:  Trying to get property 'title' of non-object in <b>C:\xampp\htdocs\projekt\public\templates_c\340e6919d7e019a1ddc91435c7d12e1d99043417_0.file.movielist.tpl.php</b> on line <b>120</b><br />
<br /><b>Notice</b>:  Undefined index: form in <b>C:\xampp\htdocs\projekt\public\templates_c\340e6919d7e019a1ddc91435c7d12e1d99043417_0.file.movielist.tpl.php</b> on line <b>119</b><br /><br /><b>Notice</b>:  Trying to get property 'value' of non-object in <b>C:\xampp\htdocs\projekt\public\templates_c\340e6919d7e019a1ddc91435c7d12e1d99043417_0.file.movielist.tpl.php</b> on line <b>119</b><br /><br /><b>Notice</b>:  Trying to get property 'title' of non-object in <b>C:\xampp\htdocs\projekt\public\templates_c\340e6919d7e019a1ddc91435c7d12e1d99043417_0.file.movielist.tpl.php</b> on line <b>119</b><br />