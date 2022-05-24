<link rel="stylesheet" href="view/css/confirm.css">
<link rel="stylesheet" href="view/css/form.css">
<div id="confirm-wrapper">
	<h3>Confirmación del producto</h3>
	<p style="text-decoration: underline;"><?php echo $this->model->getTitle() ?></p>
	<p><?php echo $this->model->getDescription() ?></p>
	<h3>Precio total</h3>
	<p><?php echo $this->model->getPrice() ?>€</p>
</div>
<div id="form-bottom">
	<form action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post">
		<input type="hidden" name="charset" value="utf-8">
		<input type="hidden" name="cmd" value="_xclick">
		<input type="hidden" name="business" value="sb-dip8g15417336@business.example.com">
		<input type="hidden" name="item_name" value="<?php echo $this->model->getTitle(); ?>">
		<input type="hidden" name="currency_code" value="EUR">
		<input type="hidden" name="return" value="https://umh2809.umh.es/material/practicas/implementacion-de-una-pagina-de-pago-por-paypal/compra-realizada-con-exito-return/">
		<input type="hidden" name="cancel_return" value="https://umh2809.umh.es/material/practicas/implementacion-de-una-pagina-de-pago-por-paypal/error-en-el-pago-cancel_return/">
		<input type="hidden" name="amount" value="<?php echo $this->model->getPrice(); ?>">
		<input type="submit" value="Paypal">
	</form>
</div>
