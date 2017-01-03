<?php include('header.php'); ?>
  <!-- MAIN -->
  <div id="main" role="main">
    <section class="container_12 clearfix contato">
    	<div class="grid_8 form">
        	<form action="" method="post">
            	<ul>
                	<li><label for="setor">*Escolha o Setor:</label>
                        <select name="setor">
                          <option value="0">Selecione um Setor</option>
                          <option value="Orçamento">Orçamento</option>
                          <option value="Informações">Informações</option>
                          <option value="Outros">Outros</option>
                        </select>
                    </li>
                    <li>
                    	<label for="nome">*Nome:</label>
                        <input name="nome" type="text">
                    </li>
                    <li>
                    	<label for="email">*E-mail:</label>
                        <input name="email" type="email">
                    </li>
                    <li>
                    	<label for="empresa">Empresa:</label>
                        <input name="empresa" type="text">
                    </li>
                    <li>
                    	<ul>
                        	<li>
                            	<label for="tel">*Telefone de Contato:</label>
                        		<input name="tel" type="text">
                            </li>
                            <li>
                            	<label for="tel">Estado:</label>
                                <select name="uf">
                                    <option value="0">SELECIONE</option>
                                    <option value="AC">ACRE</option>
                                    <option value="AL">ALAGOAS</option>
                                    <option value="AM">AMAZONAS</option>
                                    <option value="AP">AMAPÁ</option>
                                    <option value="BA">BAHIA</option>
                                    <option value="CE">CEARÁ</option>
                                    <option value="DF">DISTRITO FEDERAL</option>
                                    <option value="ES">ESPÍRITO SANTO</option>
                                    <option value="GO">GÓIAS</option>
                                    <option value="MA">MARANHÃO</option>
                                    <option value="MG">MINAS GERAIS</option>
                                    <option value="MS">MATO GROSSO DO SUL</option>
                                    <option value="MT">MATO GROSSO</option>
                                    <option value="PA">PARÁ</option>
                                    <option value="PB">PARAÍBA</option>
                                    <option value="PE">PERNAMBUCO</option>
                                    <option value="PI">PIAUÍ</option>
                                    <option value="PR">PARANÁ</option>
                                    <option value="RJ">RIO DE JANEIRO</option>
                                    <option value="RN">RIO GRANDE DO NORTE</option>
                                    <option value="RO">RONDÔNIA</option>
                                    <option value="RR">RORAIMA</option>
                                    <option value="RS">RIO GRANDE DO SUL</option>
                                    <option value="SC">SANTA CATARINA</option>
                                    <option value="SE">SERGIPE</option>
                                    <option value="SP">SÃO PAULO</option>
                                    <option value="TO">TOCANTINS</option>
                                </select>
                            </li>
                        </ul>
                    </li>
                    <li>
                    	<label for="setor">*Nome:</label>
                        <input name="nome" type="text">
                    </li>
                    <li>
                    	<label for="setor">*Nome:</label>
                        <input name="nome" type="text">
                    </li>
                    <li></li>
                    <li></li>
                </ul>
            </form>
        </div>
    	<div class="grid_4 info"></div>
    </section>
  </div>
  <!-- /MAIN -->
  <?php include('footer.php'); ?>