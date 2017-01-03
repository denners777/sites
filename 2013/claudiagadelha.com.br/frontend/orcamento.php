<?php include('header.php'); ?>
  <div id="main" class="main">
    <section class="fotolivro container_12 clearfix">
      <div class="grid_10 prefix_1 suffix_1">
        <article class="alpha grid_6 box2">
          <h2 class="inbox">Orçamento
            <span class="ir">e</span>
          </h2>
          <p>Preencha o formulário abaixo para solicitar o seu orçamento.</p>
          <form action="" method="">
            <ul class="form_orcamento">
              <li>
                <input name="nome" type="text" placeholder="Nome">
              </li>
              <li>
                <input name="tel" type="tel"  placeholder="Telefone">
              </li>
              <li>
                <input name="email" type="email"  placeholder="E-mail">
              </li>
              <li>
                <select name="" class="select">
                  <option value="0">Serviço</option>
                  <option value="Batizados">Batizados</option>
                  <option value="Gestantes">Gestantes</option>
                  <option value="Festas Infantis">Festas Infantis</option>
                  <option value="Natureza">Natureza</option>
                  <option value="Book Infantil">Book Infantil</option>
                  <option value="Book Teen">Book Teen</option>
                  <option value="Book Modelos">Book Modelos</option>
                  <option value="Paisagem Humana">Paisagem Humana</option>
                  <option value="Fotolivro">Fotolivro</option>
                </select>
              </li>
              <li>
                <input name="data" type="text" class="date" placeholder="Data do Evento">
              </li>
              <li>
                <textarea name="" cols="" rows="" placeholder="Mensagem"></textarea>
              </li>
              <li>
                <input name="" type="submit" value=" ">
              </li>
              <li><div class="clear"></div><div class="traco tr2"></div></li>
            </ul>
          </form>
        </article>
        <aside class="grid_4 omega">
        	<figure class="figure-orca"><img src="http://placehold.it/339x593/09f/fff.png&text=Foto" /></figure>
        </aside>
      </div>
    </section>
  </div>
  <?php include('bottom.php'); ?>
  <?php include('footer.php'); ?>