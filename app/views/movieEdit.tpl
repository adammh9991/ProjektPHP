{extends file="main.tpl"}
{block name=top} 

			<!-- Header -->
				<header id="header">
					<div class="logo container">
						<div>
							<h1><a>Edycja Filmu</a></h1>
						</div>
					</div>
				</header>

{/block}

{block name=content}

<form action="{$conf->action_root}movieSave" method="post" >


		<div>
            <label for="title">tytuł</label>
            <input id="title" type="text" placeholder="tytuł" name="title" value="{$form->title}">
        </div>
		<div>
            <label for="description">opis</label>
            <input id="description" type="text" placeholder="description" name="description" value="{$form->description}">
        </div>
		<div>
            <label for="famous_actors">sławni aktorzy</label>
            <input id="famous_actors" type="text" placeholder="famous_actors" name="famous_actors" value="{$form->famous_actors}">
        </div>
		<div>
            <label for="genre">gatunek</label>
            <input id="genre" type="text" placeholder="Wprowadź gatunek" name="genre" value="{$form->genre}">
		
        </div>		
		<div>
            <label for="length">dlugość</label>
            <input id="length" type="text" placeholder="length" name="length" value="{$form->length}">
        </div>
						{foreach $msgs->getMessages() as $msg}
							<div class="alert {if $msg->isInfo()}alert-success{/if}
								 {if $msg->isWarning()}alert-warning{/if}
								 {if $msg->isError()}alert-danger{/if}" role="alert">
								{$msg->text}
							</div>
						{/foreach}		
		<div>
			<input type="submit" class="" value="Zapisz"/>
			<a class="" href="{$conf->action_root}movieEditShow">Powrót</a>
		</div>
		<input type="hidden" name="idmovie" value="{$form->idmovie}">
	
</form>	

{/block}