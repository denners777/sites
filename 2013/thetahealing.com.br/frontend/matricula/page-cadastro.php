<?php 
$header = 'header-matricula.php';
$footer = 'footer.php';
include "$header";
?>

<div role="main" class="matricula meu_carrinho">
  <div class="container_24 clearfix">
    <div class="grid_18 suffix_3 prefix_3 cr">
      <p class="alpha grid_8 suffix_1 p"> Para prosseguirmos com o processo de inscrição é necessário se cadastrar. Caso já possua cadastro acesse com o seu Email e Senha. Se ainda não possui cadastro, preencha o formulário abaixo aceitando os termos de compromisso. </p>
      <div class="grid_8 suffix_1 omega">
        <h3>Já sou cadastrado</h3>
        <hr class="grid_8" />
        <form action="" method="post" name="login">
          <label for="email">Email</label>
          <input name="email" type="email" />
          <label for="senha">Senha</label>
          <input name="senha" type="password" />
          <input name="" type="submit" value="Entrar" class="botao" />
        </form>
        <hr class="grid_8" />
      </div>
      <div class="clear"></div>
      <h3>Ainda não é cadastrado?</h3>
      <hr class="grid_18 alpha omega" />
      <form action="" method="post" name="cadastro">
        <div class="alpha grid_8 suffix_1 nao-cadastro">
          <label for="nome">Nome*</label>
          <input name="nome" type="text" />
          <label for="nome2">Nome para Certificado*</label>
          <input name="nome2" type="text" />
          <label for="cpf">CPF*</label>
          <input name="cpf" type="text" />
          <label for="end">Endereço*</label>
          <input name="end" type="text" />
          <label for="cep">CEP*</label>
          <input name="cep" type="text" />
          <label for="pais">País*</label>
          <input name="pais" type="text" />
        </div>
        <div class="grid_9 omega nao-cadastro">
          <label for="tel">Tel.Fixo*</label>
          <input name="tel" type="tel" />
          <label for="cel">Tel. Celular*</label>
          <input name="cel" type="tel" />
          <label for="email">E-mail*</label>
          <input name="email" type="email" />
          <label for="senha">Senha*</label>
          <input name="senha" type="password" />
          <label for="senha2">Confirmação de Senha*</label>
          <input name="senha2" type="password" />
          <label for="termos">
            <input name="termos" class="checked" type="checkbox" value="" />
            Li e aceito os <strong>Termos de Compromisso</strong>
          </label>
          <input name="" type="submit" value="Cadastre-se" class="botao" />
        </div>
      </form>
    </div>
  </div>
</div>
<?php include "$footer"; ?>
