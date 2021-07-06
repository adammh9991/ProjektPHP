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
				
					<div class="content">
						
					
						
							<h2>Tytuł</h2><br></br>
							<p>{$form->title}</p><br></br>
							<h2>sławni aktorzy</h2><br></br>
							<a>{$form->famous_actors}</a><br></br>
							<h2>opis</h2><br></br>
							<a>{$form->description}</a><br></br>
							<h2>długość</h2><br></br>
							<a>{$form->length}</a><br></br>
							<h2>gatunek</h2><br></br>
							<a>{$form->genre}</a><br></br>							
							
							<h2>Komentarze</h2><br></br>
						
						



							<input type="submit" value="Register"></input><br></br>
					
					</div>
				
{/block}