<?php 
$header = 'header.php';
$footer = 'footer.php';
$banner = 'banner-interno.php';

include "$header";
include "$banner";
?>

<div role="main" class="galeria">
  <div class="container_24 clearfix">
    <section class="grid_15 suffix_1">
      <h3 class="grid_5 alpha">Nossas Fotos</h3>
      <hr class="grid_10 omega hr" />
      <div class="clear"></div>
      <article id="galeria">
        <nav> <a id="prev" class="ir">Prev</a> <a id="next" class="ir">Next</a> </nav>
        <div class="items clearfix"> 
          <!-- folha -->
          <ul class="item">
            <li><a href="assets/img/fotobanner/galeria.jpg" class="lightbox" rel="galeria"><figure><img src="assets/img/fotobanner/galeria.jpg" /></figure> </a></li>
            <li><a href="assets/img/fotobanner/galeria.jpg" class="lightbox" rel="galeria"><figure><img src="assets/img/fotobanner/galeria.jpg" /></figure> </a></li>
            <li><a href="assets/img/fotobanner/galeria.jpg" class="lightbox" rel="galeria"><figure><img src="assets/img/fotobanner/galeria.jpg" /></figure> </a></li>
            <li><a href="assets/img/fotobanner/galeria.jpg" class="lightbox" rel="galeria"><figure><img src="assets/img/fotobanner/galeria.jpg" /></figure> </a></li>
            <li><a href="assets/img/fotobanner/galeria.jpg" class="lightbox" rel="galeria"><figure><img src="assets/img/fotobanner/galeria.jpg" /></figure> </a></li>
            <li><a href="assets/img/fotobanner/galeria.jpg" class="lightbox" rel="galeria"><figure><img src="assets/img/fotobanner/galeria.jpg" /></figure> </a></li>
          </ul>
          <!-- /folha --> 
          <!-- folha -->
          <ul class="item">
            <li><a href="assets/img/fotobanner/galeria.jpg" class="lightbox" rel="galeria"><figure><img src="assets/img/fotobanner/galeria.jpg" /></figure> </a></li>
            <li><a href="assets/img/fotobanner/galeria.jpg" class="lightbox" rel="galeria"><figure><img src="assets/img/fotobanner/galeria.jpg" /></figure> </a></li>
            <li><a href="assets/img/fotobanner/galeria.jpg" class="lightbox" rel="galeria"><figure><img src="assets/img/fotobanner/galeria.jpg" /></figure> </a></li>
            <li><a href="assets/img/fotobanner/galeria.jpg" class="lightbox" rel="galeria"><figure><img src="assets/img/fotobanner/galeria.jpg" /></figure> </a></li>
            <li><a href="assets/img/fotobanner/galeria.jpg" class="lightbox" rel="galeria"><figure><img src="assets/img/fotobanner/galeria.jpg" /></figure> </a></li>
            <li><a href="assets/img/fotobanner/galeria.jpg" class="lightbox" rel="galeria"><figure><img src="assets/img/fotobanner/galeria.jpg" /></figure> </a></li>
          </ul>
          <!-- /folha --> 
        </div>
      </article>
      <h3 class="grid_3 alpha">Videos</h3>
      <hr class="grid_12 omega hr" />
      <div class="clear"></div>
      <article id="videos">
        <nav> <a id="prev2" class="ir">Prev</a> <a id="next2" class="ir">Next</a> </nav>
        <div class="items clearfix"> 
          <!-- video -->
          <div class="item">
            <iframe width="393" height="317" src="http://www.youtube.com/embed/9WHHsrOClTU" frameborder="0" allowfullscreen></iframe>
          </div>
          <!-- /video --> 
          <!-- video -->
          <div class="item">
            <iframe width="393" height="317" src="http://www.youtube.com/embed/9WHHsrOClTU" frameborder="0" allowfullscreen></iframe>
          </div>
          <!-- /video --> 
          <!-- video -->
          <div class="item">
            <iframe width="393" height="317" src="http://www.youtube.com/embed/9WHHsrOClTU" frameborder="0" allowfullscreen></iframe>
          </div>
          <!-- /video --> 
        </div>
      </article>
    </section>
    <aside class="grid_7 push_1">
      <section>
        <h3>Depoimentos</h3>
        <article>
          <blockquote>"Um curso muito significativo e profundo no sentido de autoconhecimento. Sinto que este é o caminho para que a vida possa fluir em todos os aspectos."</blockquote>
          <h4>Kátia Yoshiko Ohta</h4>
        </article>
        <article>
          <blockquote>"Para mim foi um salto quântico enorme. A experiência que significou muito foi a de ter consciência de que eu posso usar mais esta técnica a meu favor e em favor de outras criaturas."</blockquote>
          <h4>Ziza Jeremias</h4>
        </article>
        <article>
          <blockquote>"Uma experiência única, é um auto-conhecimento, um ato de amor consigo mesmo, libertação de muitas crenças e um encontro inesquecível."</blockquote>
          <h4>Adiovani Ortigara</h4>
        </article>
        <a href="#" class="leiamais">LEIA MAIS <div></div></a>
      </section>
    </aside>
  </div>
</div>
<?php include "$footer"; ?>
