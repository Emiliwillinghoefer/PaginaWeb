<?php 
    include "includes/cabecalho.php";

?>
	<!-- area central com 3 colunas -->
	<div class="container">
        <?php  include "includes/menu_lateral.php";?>
		

		<section class="col-2">
			<h2>Meu Carrinho</h2>

            <div class="primeira_tabela">
                <table class="primeira">
                    <!-- <tr id="linha1">
                        <th><br></th>
                    </tr> -->
                    <tr id="linha2">
                        <th>Descrição dos produtos</th>
                        <th>Quantidade</th>
                        <th>Valor unitário</th>
                        <th>Remover</th>
                        <th>Valor total</th>
                    </tr>
                   <!--  <tr id="linha3">
                        <th><br></th>
                    </tr> -->
                    <tr>
                        <td id="produto">Serra elétrica</td>
                        <label for="produto1" class="rotulo"></label>
                        <td><input type="number" id="produto1" name="produto1" min="0" value="1" ></td>
                        <td>20,00</td>
                        <td><figure>
                                <img src="img/lixo.png" alt="Kit de ferramentas" width="40">
                            </figure>
                        </td>    
                        <td><span id="valorTotal1">20,00</span></td>
                        <span class="msg-erro" id="msg-produto1"></span>
                    </tr>
                    <tr>
                        <td id="produto">Kit de ferramentas</td>
                        <label for="produto2" class="rotulo"></label>
                        <td><input type="number" id="produto2" name="produto2" min="0" value="1"></td>
                        <td>20,00</td>
                        <td><figure>
                                <img src="img/lixo.png" alt="Kit de ferramentas" width="40">
                            </figure>
                        </td>    
                        <td><span id="valorTotal2">20,00</span></td>
                        <span class="msg-erro" id="msg-produto2"></span>
                    </tr>
                    <tr>
                        <td id="produto">Furadeira elétrica</td>
                        <label for="produto3" class="rotulo"></label>
                        <td><input type="number" id="produto3" name="produto3" min="0" value="1"></td>
                        <td>20,00</td>
                        <td><figure>
                                <img src="img/lixo.png" alt="Kit de ferramentas" width="40">
                            </figure>
                        </td>    
                        <td ><span id="valorTotal3">20,00</span></td>
                        <span class="msg-erro" id="msg-produto3"></span>
                    </tr>            
                </table>
            </div>
            <h2>Frete</h2>
            <div class="segunda_tabela">
                <table class="segunda">

                    <tr id="linha5">
                        <th>Formas de entrega</th>
                        <th>Valor total</th>
                    </tr>
                    <tr id="linha6">
                        <th><br></th>
                    </tr>
                    <tr>
                        <label for="entrega1" class="rotulo"></label>
                        <td><label><input type="radio" id="entrega1" name="frete" value="R" >Retirar no balcão</td></label>
                        <td><span id="valorTotal1">0,00</span></td>
                        <span class="msg-erro" id="msg-entrega1"></span>
                    </tr>
                    <tr>
                        <label for="entrega2" class="rotulo"></label>
                        <td><label><input type="radio" id="entrega2" name="frete" value="E">Entregar na casa</td></label>
                        <td><span id="valorTotal2">20,00</span></td>
                        <span class="msg-erro" id="msg-entrega2"></span>
                    </tr>
                </table>
            </div>    
                <table class="terceira">
                    <tr>
                        <th>Total a pagar: <span id="muda_valor">60,00</span></th>

                    </tr>
                    <tr id="botao">
                        <td><a href="index.html"><input type="submit" value="Continuar comprando" size="30"></a>
                        <a href="#"><input type="submit" value="Finalizar pedido" size="30"></a></td>
                    </tr>
                </table>
    	</section>
		    <?php include"includes/mais_pedidos.php";?>

	</div>
	<!-- fim area central -->

    <script src="js/cad_Compras.js"></script>
    <?php include "includes/rodape.php";?>
</body>
</html>
