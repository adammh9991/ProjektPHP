{extends file="main.tpl"}
{block name=top}
					<!-- Header -->
				<header id="header">
					<div class="logo container">
						<div>
							<h1><a>Lista  Użytkowników</a></h1>
						</div>
					</div>
				</header>
{/block}
{block name=content}




			<!-- Nav -->
				<nav id="nav">
					<ul>
						<li class="current"><a href="index.php">Strona Główna</a></li>
						<li><a>Widoki</a>
							<ul>
								<li><a href="{$conf->action_root}usersList">Widok Admina</a></li>
								<li><a href="{$conf->action_root}movieEdit">Widok Moda</a></li>
							</ul>
						
						</li>						
						<li><a href="{$conf->action_root}movieList">Lista filmów</a></li>
						<li><a href="{$conf->action_root}logout">Wyloguj się</a></li>
					</ul>
				</nav>
				
<table id="tab_users" class="default">
<thead>
	<tr>
		<th>id</th>
		<th>email</th>
		<th>login</th>
		<th>hasło</th>
		<th>nick</th>
		<th>ranga</th>
		<th>ulubiony gatunek</th>
		<th>rola</th>
		<th>opcja</th>
	</tr>
</thead>
<tbody>
{foreach $user as $u}
{strip}
	<tr>
		<td>{$u["iduser"]}</td>
		<td>{$u["email"]}</td>
		<td>{$u["login"]}</td>
		<td>{$u["password"]}</td>
		<td>{$u["nick"]}</td>
		<td>{$u["rang"]}</td>
		<td>{$u["favourite"]}</td>
		<td>{$u["role"]}
		<td>
			<a href="{$conf->action_root}userDel/{$u["iduser"]}">Usuń</a>
		</td>
	</tr>
{/strip}
{/foreach}
</tbody>
</table>

{/block}
