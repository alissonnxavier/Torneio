<?php if(!class_exists('Rain\Tpl')){exit;}?><br>
<br><br><br><br><br>


<div class="container" style="width: 20rem" style="font-family: Impact, Charcoal, sans-serif;"><br>

	<form action="/slim/cadastrado" method="post" enctype="multipart/form-data" style="font-family: Impact, Charcoal, sans-serif;">

		<div class="input-group flex-nowrap">
			  <div class="input-group-prepend">
			    <span class="input-group-text bg-danger text-white" id="addon-wrapping">Email</span>
			  </div>
			  <input type="text" class="form-control" placeholder="Digite um email valido" aria-label="Username" aria-describedby="addon-wrapping" required="" name="email">
		</div><br>

		<div class="input-group flex-nowrap">
			  <div class="input-group-prepend">
			    <span class="input-group-text bg-danger text-white" id="addon-wrapping">Nome</span>
			  </div>
			  <input type="text" class="form-control" placeholder="Digite o seu nome" aria-label="Username" aria-describedby="addon-wrapping" required="" name="nome">
		</div><br>

		<div class="input-group flex-nowrap">
			  <div class="input-group-prepend">
			    <span class="input-group-text bg-danger text-white" id="addon-wrapping">Senha</span>
			  </div>
			  <input type="password" class="form-control" placeholder="Crie uma senha" aria-label="Username" aria-describedby="addon-wrapping" required="" name="password">
		</div><br>

		<div class="input-group flex-nowrap">
			  <div class="input-group-prepend">
			    <span class="input-group-text bg-danger text-white" id="addon-wrapping">#Tag</span>
			  </div>
			  <input type="text" class="form-control" placeholder="Tag do perfil" aria-label="Username" aria-describedby="addon-wrapping" required="" name="tag">
		</div><br>

		<div class="input-group flex-nowrap">
			  <div class="input-group-prepend">
			    <span class="input-group-text bg-danger text-white" id="addon-wrapping">Nivel do CV</span>
			  </div>
			  <input type="text" class="form-control" placeholder="Insira o nivel do cv" aria-label="Username" aria-describedby="addon-wrapping" required="" name="cv">
		</div><br>

		<button type="submit" class="btn btn-outline-danger" >Cadastrar</button> </br></br>

	</form>

	<h5><a href="/slim"> Voltar </a></h5>

</div>