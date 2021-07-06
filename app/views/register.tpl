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
				<section id="banner">
					<div class="content">
						
					
						<form method="post" action="{$conf->action_root}register">
							<h2>Rejestracja</h2><br></br>

						
							<input type="text" placeholder="Username" name="login" "></input><br></br>
							<input type="text" placeholder="Nickname" name="nick" "></input><br></br>						
							<input type="email" placeholder="E-mail" name="email" "></input><br></br>
							<input type="password" placeholder="Password" name="password" "></input><br></br>
						{foreach $msgs->getMessages() as $msg}
							<div class="alert {if $msg->isInfo()}alert-success{/if}
								 {if $msg->isWarning()}alert-warning{/if}
								 {if $msg->isError()}alert-danger{/if}" role="alert">
								{$msg->text}
							</div>
						{/foreach}
							<input type="submit" value="Register"></input><br></br>
						</form>
					</div>
				</section>
{/block}