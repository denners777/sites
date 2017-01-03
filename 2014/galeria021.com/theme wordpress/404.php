<?php include 'header.php'; ?>
<style>
  ::-moz-selection {
    background: #b3d4fc;
    text-shadow: none;
  }

  ::selection {
    background: #b3d4fc;
    text-shadow: none;
  }

  .main {
    padding: 30px 10px;
    font-size: 20px;
    line-height: 1.4;
    color: #737373;
    //background: #f0f0f0;
    -webkit-text-size-adjust: 100%;
    -ms-text-size-adjust: 100%;
  }

  .main input {
    font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
  }

  .bodyer {
    max-width: 500px;
    _width: 500px;
    padding: 30px 20px 50px;
    border: 1px solid #b3b3b3;
    border-radius: 4px;
    margin: 0 auto;
    box-shadow: 0 1px 10px #a7a7a7, inset 0 1px 0 #fff;
    background: #fcfcfc;
  }

  .bodyer h1 {
    margin: 0 10px;
    font-size: 50px;
    text-align: center;
  }

  .bodyer h1 span {
    color: #bbb;
  }

  .bodyer h3 {
    margin: 1.5em 0 0.5em;
  }

  .bodyer p {
    margin: 1em 0;
  }

  .bodyer ul {
    padding: 0 0 0 40px;
    margin: 1em 0;
  }

  .bodyer .container {
    max-width: 380px;
    _width: 380px;
    margin: 0 auto;
  }

  /* google search */

  #goog-fixurl ul {
    list-style: none;
    padding: 0;
    margin: 0;
  }

  #goog-fixurl form {
    margin: 0;
  }

  #goog-wm-qt,
  #goog-wm-sb {
    border: 1px solid #bbb;
    font-size: 16px;
    line-height: normal;
    vertical-align: top;
    color: #444;
    border-radius: 2px;
  }

  #goog-wm-qt {
    width: 220px;
    height: 20px;
    padding: 5px;
    margin: 5px 10px 0 0;
    box-shadow: inset 0 1px 1px #ccc;
  }

  #goog-wm-sb {
    display: inline-block;
    height: 32px;
    padding: 0 10px;
    margin: 5px 0 0;
    white-space: nowrap;
    cursor: pointer;
    background-color: #f5f5f5;
    background-image: -webkit-linear-gradient(rgba(255,255,255,0), #f1f1f1);
    background-image: -moz-linear-gradient(rgba(255,255,255,0), #f1f1f1);
    background-image: -ms-linear-gradient(rgba(255,255,255,0), #f1f1f1);
    background-image: -o-linear-gradient(rgba(255,255,255,0), #f1f1f1);
    -webkit-appearance: none;
    -moz-appearance: none;
    appearance: none;
    *overflow: visible;
    *display: inline;
    *zoom: 1;
  }

  #goog-wm-sb:hover,
  #goog-wm-sb:focus {
    border-color: #aaa;
    box-shadow: 0 1px 1px rgba(0, 0, 0, 0.1);
    background-color: #f8f8f8;
  }

  #goog-wm-qt:hover,
  #goog-wm-qt:focus {
    border-color: #105cb6;
    outline: 0;
    color: #222;
  }

  .bodyer input::-moz-focus-inner {
    padding: 0;
    border: 0;
  }
</style>
<!-- MAIN -->
<div id="main">
  <div class="main">
    <div class="bodyer">
      <div class="container">
        <h1>Não encontrado <span>:(</span></h1>
        <p>Desculpe, mas a página que você estava tentando visualizar não existe.</p>
        <p>Parece que isto foi resultado de:</p>
        <ul>
          <li>um endereço digitado incorretamente</li>
          <li>um link expirado</li>
        </ul>
        <script>
          var GOOG_FIXURL_LANG = (navigator.language || '').slice(0, 2), GOOG_FIXURL_SITE = location.host;
        </script>
        <script src="//linkhelp.clients.google.com/tbproxy/lh/wm/fixurl.js"></script>
      </div>
    </div>
  </div>
</div>
<!-- MAIN -->
</div>
<?php include 'footer.php'; ?>