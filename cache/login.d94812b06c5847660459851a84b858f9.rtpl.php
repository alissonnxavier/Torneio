<?php if(!class_exists('Rain\Tpl')){exit;}?><br>
<br><br><br><br><br>


<div class="container" style="width: 20rem" style="font-family: Impact, Charcoal, sans-serif;">

	<?php if( $var["0"]==10 ){ ?>
		<div class="alert alert-success"  style="font-family: Impact, Charcoal, sans-serif;">
	  		Cadastro efetuado com Sucesso!
		</div>
	<?php } ?>

	<?php if( $var["1"]==5 ){ ?>
		<div class="alert alert-danger"  style="font-family: Impact, Charcoal, sans-serif;">
	  		Email ou Senha incorretos!
		</div>
	<?php } ?>

	<?php if( $var["2"]==2 ){ ?>
		<div class="alert alert-warning"  style="font-family: Impact, Charcoal, sans-serif;">
	  		Fassa login para continuar!
		</div>
	<?php } ?>


	<form action="/slim/logado" method="post" enctype="multipart/form-data" style="font-family: Impact, Charcoal, sans-serif;">
	  

	  <div class="form-group">
		    <label for="exampleInputEmail1">Endereço de Email</label>
		    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required="" name="email">
		    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
	  </div>

	  <div class="form-group">
		    <label for="exampleInputPassword1">Senha</label>
		    <input type="password" class="form-control" id="exampleInputPassword1" required="" name="password">
	  </div>

	  <div class="form-group form-check">
		    <input type="checkbox" class="form-check-input" id="exampleCheck1">
		    <label class="form-check-label" for="exampleCheck1">Check me out</label>
	  </div>

	  		<button type="submit" class="btn btn-outline-success">Entrar</button> <br> <div> ou se ainda nao é membro</div>

	</form><br> 

	  		<button type="button" class="btn btn-outline-info" style="font-family: Impact, Charcoal, sans-serif;"><a href="/slim/cadastro">Cadastre-se </a></button>

	  		</br></br>

	  		<h5><a href="/slim"> Voltar </a></h5>
	



</div>