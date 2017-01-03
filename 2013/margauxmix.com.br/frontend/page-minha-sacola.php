<?php include "header.php"?>
<div id="main" role="main">
  <div class="container_16 clearfix">
    <!-- breadcrumb -->
    <div class="breadcrumb">
      <a href="#">Home</a>
      »
      <a href="#">Minha Sacola</a>
    </div>
    <!-- /breadcrumb -->
    <div class="clear">
    </div>
    <!-- SACOLA -->
    <div class="grid_16 faixa alpha omega">
      <h4>Minha sacola</h4>
    </div>
    <form action="" method="post" enctype="multipart/form-data">
      <div class="cart-info grid_16 clearfix">
        <table>
          <thead>
            <tr>
              <th class="image">Imagem</th>
              <th class="name">Nome do Produto</th>
              <th class="model">Modelo</th>
              <th class="quantity">Quantidade</th>
              <th class="price">Preço Unidade</th>
              <th class="total">Total</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td class="image"><a href="#"><img class="img" src="http://placehold.it/60x55/" /></a></td>
              <td class="name"><a href="#">Bolsa Modelo el</a></td>
              <td class="model">product 21</td>
              <td class="quantity"><div class="qtd">
                  <input type="text" name="quantity[40]" value="1" size="1">
                  <input type="image" src="catalog/view/theme/default/image/update.png" alt="Update" title="Update">
                  <a href=""><img src="catalog/view/theme/default/image/remove.png" alt="Remove" title="Remove"></a>
                </div></td>
              <td class="price">R$1500,00</td>
              <td class="total">R$1500,00</td>
            </tr>
            <tr>
              <td class="image"><a href="#"><img class="img" src="http://placehold.it/60x55/" /></a></td>
              <td class="name"><a href="#">Bolsa Modelo Tal</a></td>
              <td class="model">product 11</td>
              <td class="quantity"><div class="qtd">
                  <input type="text" name="quantity[40]" value="1" size="1">
                  <input type="image" src="catalog/view/theme/default/image/update.png" alt="Update" title="Update">
                  <a href=""><img src="catalog/view/theme/default/image/remove.png" alt="Remove" title="Remove"></a>
                </div></td>
              <td class="price">R$1500,00</td>
              <td class="total">R$1500,00</td>
            </tr>
          </tbody>
        </table>
      </div>
    </form>
    <!-- /SACOLA -->
    <div class="cart-total grid_16 clearfix">
      <table id="total">
        <tbody>
          <tr>
            <td width="92%" class="right"><b>Sub-Total:</b></td>
            <td width="8%" class="right">R$3000,00</td>
          </tr>
          <tr>
            <td class="right"><b>Eco Tax (-2.00):</b></td>
            <td class="right">R$2.00</td>
          </tr>
          <tr>
            <td class="right"><b>VAT (17.5%):</b></td>
            <td class="right">R$17.68</td>
          </tr>
          <tr>
            <td class="right"><b>Total:</b></td>
            <td class="right">$3019.68</td>
          </tr>
        </tbody>
      </table>
    </div>
    <div class="buttons grid_16 clearfix">
      <div class="right">
        <a href="#" class="button comprar">Checkout <span class="ir">
          >
        </span>
        </a>
      </div>
      <div class="right">
        <a href="#" class="button comprar continue">Continue Comprando <span class="ir"> > </span>
        </a>
      </div>
    </div>
  </div>
  <div class="sombra">
  </div>
</div>
<?php include "footer.php"?>