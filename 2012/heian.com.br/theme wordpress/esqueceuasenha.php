<?php get_header(); ?>
<style type="text/css">
.esqueceu {
	margin: 0 auto;
	width: 500px;
}
.esqueceu fieldset {
	margin: 0 auto;
	border: 1px solid #999;
	-webkit-border-radius: 10px;
    border-radius: 10px;
}
.esqueceu fieldset legend {
	margin-left: 25px;
}
.esqueceu fieldset h4 {
	color: #999;
}
.esqueceu fieldset label {
	font-size: 14px;
	padding-right: 25px;
	margin-right: 10px;
}
.esqueceu fieldset .input {
	display: block;
	margin-bottom: 5px;
}
.esqueceu fieldset .submit input[type=text] {
	width: 350px;
}
.esqueceu fieldset .submit {
	float: right;
}
.esqueceu fieldset .submit input[type=submit] {
}
</style>
<div role="main" class="clearfix" >
  <div class="container_12">
    <div class="grid_12">
      <section class="clearfix sec">
        <form class="esqueceu" action="" method="post">
          <fieldset>
            <legend>
            <h4>Esqueceu sua senha?</h4>
            </legend>
            <label for="email">Digite seu e-mail.</label>
            <span class="input">
            <label for="email">E-mail
              <input id="email" name="email" type="text">
            </label>
            </span> <span class="submit">
            <input name="" type="submit" value="Enviar">
            </span> <span style="clear:both; display:block;"></span>
          </fieldset>
        </form>
      </section>
    </div>
  </div>
</div>
<?php get_footer(); ?>
