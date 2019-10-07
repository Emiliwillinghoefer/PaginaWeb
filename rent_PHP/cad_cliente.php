<?php 
    include "includes/cabecalho.php";
?>
	<!-- area central com 3 colunas -->
	<div class="container">
		<?php  include "includes/menu_lateral.php";?>
		

		<section class="col-2">
			<h2>Cadastre-se</h2>
			<div>
				<form action="" method="post" id="form-cadastro">
				    <div class="form-item">
				      <label for="nome" class="rotulo">Nome:</label>
				      <input type="text" id="nome" name="nome" size="50" placeholder="Nome completo">
				      <span class="msg-erro" id="msg-nome"></span>
				    </div>
				    <div class="form-item">
				      <label for="CPF" class="rotulo">CPF:</label>
				      <input type="text" id="CPF" name="CPF" size="50" placeholder="XXX XXX XXX XX">
				      <span class="msg-erro" id="msg-CPF"></span>
				    </div>
				    <div class="form-item">
				      <label for="email" class="rotulo">E-mail:</label>
				      <input type="email" id="email" name="email" placeholder="fulano@dominio" size="50">
				      <span class="msg-erro" id="msg-email"></span>
				    </div>					    
				    <div class="form-item">
				      <label for="endereco" class="rotulo">Endereço:</label>
				      <input type="text" id="endereco" name="endereco" placeholder="Rua, número, complemento" size="50">
				      <span class="msg-erro" id="msg-endereco"></span>
				    </div>	
				    <div class="form-item">
				      <label for="bairro" class="rotulo">Bairro:</label>
				      <select name="bairro" id="bairro">
					    <option value="">Selecione o bairro</option>
					    <option>Centro</option>
					    <option>Efapi</option>
					    <option>Presidente Médici</option>
					    <option>Jardim Itália</option>
					    <option>Maria Goretti</option>
					  </select>
					  <span class="msg-erro" id="msg-bairro"></span>
				    </div>
				    <div class="form-item">
				      <label class="rotulo">Perfil:</label>
				      <label><input type="radio" name="perfil" value="c" id="perfilC">Consumidor final</label>
				      <label><input type="radio" name="perfil" value="p" id="perfilP">Prestador de serviço</label>
					  <span class="msg-erro" id="msg-perfil"></span>
				    </div>
				    <div class="form-item">
				      <label for="empresa" class="rotulo">Empresa:</label>
				      <input type="text" id="empresa" name="empresa" disabled> <span id="mensagem-empresa"></span>
				      <span class="msg-erro" id="msg-empresa"></span>
				    </div>					    
				    <div class="form-item">
				      <label for="login2" class="rotulo">Login:</label>
				      <input type="text" id="login2" name="login" placeholder="Mínimo 6 caracteres">
				      <span class="msg-erro" id="msg-login"></span>
				    </div>				    
				    <div class="form-item">
				      <label for="senha" class="rotulo">Senha:</label>
				      <input type="password" id="senha" name="senha" placeholder="Mínimo 6 caracteres">
				      <span class="msg-erro" id="msg-senha"></span>
				    </div>
				    <div class="form-item">
				      <label for="senha2" class="rotulo">Repita a Senha:</label>
				      <input type="password" id="senha2" name="senha2" placeholder="Mínimo 6 caracteres">
				      <span class="msg-erro" id="msg-senha2"></span>
				    </div>
				    <div class="form-item">
				      <label class="rotulo"></label>
				      <label><input type="checkbox" id="concordo" name="concordo"> Li e estou de acordo com os termos de uso do site</label>
				      <span class="msg-erro" id="msg-concordo"></span>
				    </div>				    
				    <div class="form-item">
				    	<label class="rotulo"></label>
				    <input type="submit" id="botao" value="Confirmar">
				    </div>
				</form>
			</div>			
		</section>

	       <?php include"includes/mais_pedidos.php";?>
	</div>
	<!-- fim area central -->
	<script src="js/cad_cliente.js"></script>
	<?php include "includes/rodape.php";?>
</body>
</html>