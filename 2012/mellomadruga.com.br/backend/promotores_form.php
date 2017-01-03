<form action="forms_acoes.php" method="post" id="cad_promotores" class="promotores" target="promo_form" enctype="multipart/form-data">
					<input type="hidden" name="modo" value="promo" />
                    <fieldset class="box_esq">
                      <ul>
                        <li><label for="nome">Nome completo: *</label><input type="text" name="nome" id="nome" /></li>
                        <li><label for="nome_art">Nome artístico: *</label><input type="text" name="nome_art" id="nome_art" /></li>
                        <li class="col2"><label for="cpf">CPF: *</label><input type="text" name="cpf" id="cpf" /><label for="rg" class="lbx">RG: *</label><input type="text" name="rg" id="rg" /></li>
                        <li class="col2"><label for="pis">PIS:</label><input type="text" name="pis" id="pis" /></li>
                        <li><label for="endereco">Endereço:</label><input type="text" name="endereco" id="endereco" /></li>
                        <li class="col2"><label for="cidade">Cidade/UF: *</label><input type="text" name="cidade" id="cidade" /><label for="bairro" class="lbx">Bairro:</label><input type="text" name="bairro" id="bairro" /></li>
                        <li><label for="tel1_ddd">Telefone fixo: *</label><input type="text" name="tel1_ddd" id="tel1_ddd" maxlength="2" /> <input type="text" name="tel1" id="tel1" /><label for="tel2_ddd" class="lbx">Celular:</label><input type="text" name="tel2_ddd" id="tel2_ddd" maxlength="2" /> <input type="text" name="tel2" id="tel2" /></li>
                        <li class="col2"><label for="tel3_ddd">Nextel:</label><input type="text" name="tel3_ddd" id="tel3_ddd" maxlength="2" /> <input type="text" name="tel3" id="tel3" /><label for="tel3_id" class="lbx">ID:</label><input type="text" name="tel3_id" id="tel3_id" /></li>
                        <li>
                          <label for="dia_nasc">Nascimento:</label>
                          <select name="dia_nasc" id="dia_nasc">
                              <?php
                                    for ($i=1;$i<=31;$i++) {
										if(strlen($i)==1) { $i = "0".$i; }
										$dados = '<option value="'.$i.'">'.$i.'</option>'."\n";
										echo $dados;
									}
								?>
                          </select><span>dia</span>
                          <select name="mes_nasc" id="mes_nasc">
                              <?php
                                    for ($i=1;$i<=12;$i++) {
										if(strlen($i)==1) { $i = "0".$i; }
										$dados = '<option value="'.$i.'">'.$i.'</option>'."\n";
										echo $dados;
									}
								?>
                          </select><span>mês</span>
                          <select name="ano_nasc" id="ano_nasc">
                              <?php
									$ano = date('Y');
									$anoi = $ano-18;
									$anof = $ano-60;
                                    for ($i=$anof;$i<=$anoi;$i++) {
										$dados = '<option value="'.$i.'">'.$i.'</option>'."\n";
										echo $dados;
									}
								?>
                          </select><span>ano</span>
                        </li>
                        <li>
                          <label for="sexo">Sexo:</label>
                          <select name="sexo" id="sexo">
                              <option value="0">escolha</option>
                              <option value="M">M</option>
                              <option value="F">F</option>
                          </select>
                          <label for="altura_m" class="lbx">Altura:</label>
                          <select name="altura_m" id="altura_m">
                              <option value="1">1</option>
                              <option value="2">2</option>
                          </select><span>m</span>
                          <select name="altura_cm" id="altura_cm">
                              <?php
                                    for ($i=0;$i<=99;$i++) {
										if(strlen($i)==1) { $i = "0".$i; }
										$dados = '<option value="'.$i.'">'.$i.'</option>'."\n";
										echo $dados;
									}
								?>
                          </select><span>cm</span>
                        </li>
                        <li>
                          <label for="uniforme">Uniforme:</label>
                          <select name="uniforme" id="uniforme">
                              <option value="0">escolha</option>
                              <option value="PP">PP</option>
                              <option value="P">P</option>
                              <option value="M">M</option>
                              <option value="G">G</option>
                              <option value="GG">GG</option>
                          </select>
                          <label for="pele" class="lbx">Pele:</label>
                          <select name="pele" id="pele">
                              <option value="0">escolha</option>
                              <?php promotores_opt(1,''); ?>
                          </select>
                        </li>
                        <li>
                          <label for="olhos">Olhos:</label>
                          <select name="olhos" id="olhos">
                              <option value="0">escolha</option>
                              <?php promotores_opt(2,''); ?>
                          </select>
                          <label for="oculos" class="lbnw lbx">Usa Óculos/Lente de grau?</label>
                          <select name="oculos" id="oculos">
                              <option value="N">não</option>
                              <option value="S">sim</option>
                          </select>
                        </li>
                        <li>
                        <label for="cabelo">Cabelo:</label>
                          <select name="cabelo" id="cabelo">
                              <option value="0">escolha</option>
                              <?php promotores_opt(3,''); ?>
                          </select>
                          <label for="cabelo_t" class="lbnw lbx">Tipo de Cabelo:</label>
                          <select name="cabelo_t" id="cabelo_t">
                            <option value="0">escolha</option>
                            <?php promotores_opt(4,''); ?>
                          </select>
                        </li>
                        <li>
                          <label for="tatuagem">Tatuagem:</label>
                          <select name="tatuagem" id="tatuagem">
                              <option value="0">escolha</option>
                              <?php promotores_opt(5,''); ?>
                          </select>
                          <label for="piercing" class="lbx">Piercing:</label>
                          <select name="piercing" id="piercing">
                              <option value="0">escolha</option>
                              <?php promotores_opt(6,''); ?>
                          </select>
                        </li>
                        <li>
                          <label for="escolaridade">Escolaridade:</label>
                          <select name="escolaridade" id="escolaridade">
                              <option value="0">escolha</option>
                              <?php promotores_opt(7,''); ?>
                          </select>
                          <label for="curso" class="lbx">Curso:</label>
                          <select name="curso" id="curso">
                              <option value="0">Escolha</option>
                              <?php promotores_opt(8,''); ?>
                          </select>
                        </li>
                        <li>
                          <label>Idiomas:</label>
                          <label class="lbx lbid" for="ingles">Inglês: </label>
                          <select name="ingles" id="ingles">
                              <option value="0">escolha o nível</option>
                              <?php promotores_opt(10,''); ?>
                          </select>
                          <label class="lbx lbid2" for="espanhol">Espanhol: </label>
                          <select name="espanhol" id="espanhol">
                              <option value="0">escolha o nível</option>
                              <?php promotores_opt(10,''); ?>
                          </select>
                        </li>
                        <li>
                          <label>&nbsp;</label>
                          <label class="lbx lbid" for="frances">Francês: </label>
                          <select name="frances" id="frances">
                              <option value="0">escolha o nível</option>
                              <?php promotores_opt(10,''); ?>
                          </select>
                          <label class="lbx lbid2" for="alemao">Alemão: </label>
                          <select name="alemao" id="alemao">
                              <option value="0">escolha o nível</option>
                              <?php promotores_opt(10,''); ?>
                          </select>
                        </li>
                        <li>
                          <label>&nbsp;</label>
                          <label class="lbx lbid" for="japones">Japonês: </label>
                          <select name="japones" id="japones">
                              <option value="0">escolha o nível</option>
                              <?php promotores_opt(10,''); ?>
                          </select>
                        </li>
                      </ul>
                    </fieldset>
                    <fieldset class="box_dir">
                      <ul class="pt2">
                        <li>
                          <strong>Disponibilidade de Horário:</strong>
                          <input type="checkbox" name="horario[]" id="horario_manha" value="51" /><label for="horario_manha">Manhã</label>
                          <input type="checkbox" name="horario[]" id="horario_tarde" value="52" /><label for="horario_tarde">Tarde</label>
                          <input type="checkbox" name="horario[]" id="horario_noite" value="53" /><label for="horario_noite">Noite</label>
                        </li>
                        <li class="notit">
                          <input type="checkbox" name="horario[]" id="horario_fds" value="54" /><label for="horario_fds" class="duplo">Final de semana e feriado</label>
                          <input type="checkbox" name="horario[]" id="horario_todos" value="55" /><label for="horario_todos" class="auto">Qualquer horário</label>
                        </li>
                        <li>
                          <strong>Disponibilidade para Viagem:</strong>
                          <input type="checkbox" name="viagem[]" id="viagem_sim" value="61" /><label for="viagem_sim">Sim</label>
                          <input type="checkbox" name="viagem[]" id="viagem_nao" value="62" /><label for="viagem_nao">Não</label>
                          <input type="checkbox" name="viagem[]" id="viagem_fds" value="63" /><label for="viagem_fds" class="auto">Só fim de semana e feriado</label>
                        </li>
                        <li>
                          <strong>Restrição ao uso de:</strong>
                          <input type="checkbox" name="restricao[]" id="restricao_tabaco" value="71" /><label for="restricao_tabaco">Tabaco</label>
                          <input type="checkbox" name="restricao[]" id="restricao_acucar" value="72" /><label for="restricao_acucar">Açucar</label>
                          <input type="checkbox" name="restricao[]" id="restricao_bebida" value="73" /><label for="restricao_bebida" class="auto">Bebida alcoólica</label>
                        </li>
                        <li>
                          <strong>Possibilidade de atuação:</strong>
                          <input type="checkbox" name="atuacao[]" id="atuacao_promotor" value="81" /><label for="atuacao_promotor">Promotor(a)</label>
                          <input type="checkbox" name="atuacao[]" id="atuacao_apoio" value="82" /><label for="atuacao_apoio">Apoio</label>         
                          <input type="checkbox" name="atuacao[]" id="atuacao_supervisor" value="83" /><label for="atuacao_supervisor" class="duplo">Supervisor(a)</label>
                        </li>
                        <li class="notit">        
                          <input type="checkbox" name="atuacao[]" id="atuacao_sampling" value="84" /><label for="atuacao_sampling">Sampling</label>
                          <input type="checkbox" name="atuacao[]" id="atuacao_receptivo" value="85" /><label for="atuacao_receptivo">Receptivo</label>
                          <input type="checkbox" name="atuacao[]" id="atuacao_recreacao" value="86" /><label for="atuacao_recreacao">Recreação</label>
                          <input type="checkbox" name="atuacao[]" id="atuacao_seguranca" value="87" /><label for="atuacao_seguranca">Segurança</label>
                        </li>
                        <li class="notit">
                          <input type="checkbox" name="atuacao[]" id="atuacao_desfile" value="88" /><label for="atuacao_desfile">Desfile</label>
                          <input type="checkbox" name="atuacao[]" id="atuacao_bilheteria" value="89" /><label for="atuacao_bilheteria">Bilheteria</label>
                          <input type="checkbox" name="atuacao[]" id="atuacao_garcon" value="90" /><label for="atuacao_garcon">Garçon</label>
                          <input type="checkbox" name="atuacao[]" id="atuacao_circo" value="91" /><label for="atuacao_circo" class="auto">Art. Circense</label>
                        </li>
                        <li class="notit">
                          <input type="checkbox" name="atuacao[]" id="atuacao_barman" value="92" /><label for="atuacao_barman">Barman</label>
                          <input type="checkbox" name="atuacao[]" id="atuacao_barwoman" value="93" /><label for="atuacao_barwoman">Barwoman</label>
                          <input type="checkbox" name="atuacao[]" id="atuacao_troca" value="94" /><label for="atuacao_troca" class="auto">Troca de Brindes</label>
                        </li>
                        <li class="notit">
                          <input type="checkbox" name="atuacao[]" id="atuacao_garconete" value="95" /><label for="atuacao_garconete">Garçonete</label>
                          <input type="checkbox" name="atuacao[]" id="atuacao_motorista" value="96" /><label for="atuacao_motorista">Motorista</label>
                          <input type="checkbox" name="atuacao[]" id="atuacao_danca" value="97" /><label for="atuacao_danca" class="auto">Dançarino(a)</label>
                        </li>
                        <li>
                          <strong>Habilitação para veículo:</strong>         
                          <input type="checkbox" name="habilitacao[]" id="habilitacao_a" value="101" /><label for="habilitacao_a">Categoria A</label>
                          <input type="checkbox" name="habilitacao[]" id="habilitacao_b" value="102" /><label for="habilitacao_b">Categoria B</label>
                          <input type="checkbox" name="habilitacao[]" id="habilitacao_c" value="103" /><label for="habilitacao_c">Categoria C</label>
                          <input type="checkbox" name="habilitacao[]" id="habilitacao_d" value="104" /><label for="habilitacao_d">Categoria D</label>
                        </li>
                        <li class="notit">
                          <input type="checkbox" name="habilitacao[]" id="habilitacao_nave" value="105" /><label for="habilitacao_nave">Aeronave</label>
                          <input type="checkbox" name="habilitacao[]" id="habilitacao_embarca" value="106" /><label for="habilitacao_embarca">Embarcação</label>
                        </li>
                        <li>
                          <strong>Pagamento de Cachê:</strong>
                          <select name="cache" id="cache">
                              <option value="0">escolha</option>
                              <?php promotores_opt(9,''); ?>
                          </select>
                        </li>
                        <li id="fotos_promo">
                          <span id="fotoctrl">2</span>
                          <label class="lbl_fotos">*Enviar fotos:</label> Envie até 5 fotos. Procure enviar pelo menos uma foto de rosto e de corpo.
                          <input type="file" name="arquivo_promo[]" class="file" id="arquivo_promo1" />
                          <input type="file" name="arquivo_promo[]" class="file" id="arquivo_promo2" />
                        </li>
                        <li>
                          <input type="button" value="Adicionar outra foto +" class="botao" id="fotoadd" />
                        </li>
                      </ul>
                      <label id="retorno_promo" class="retorno">&nbsp;</label><input type="submit" value="Enviar cadastro" class="botao" id="bt_promo" />
                      <p class="obr"><small>*campos obrigatórios</small></p>
                    </fieldset>
                    <div class="clear"><!--//--></div>
                </form>