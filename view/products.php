	<link rel="stylesheet" href="view/css/products.css">
	<link rel="stylesheet" href="view/css/form.css">
	<script src="view/js/form.js"></script>

	<body>
		<div id="products-wrapper">
			<div class="product" id="avg-product">
				<h1 class="avg">Vengadores. Gira mundial</h1>
				<p class="avg">Si pensabas que conocías el origen del Universo Marvel...
					estabas equivocado! Odín y sus Vengadores representan un periodo que nunca antes ha sido explorado.</p>
				<p class="avg">13.30€</p>
			</div>
			<div class="product" id="dd-product">
				<h1 class="dd">Daredevil. Conoce el miedo</h1>
				<p class="dd">¡El comienzo de una de las mejores etapas de Daredevil!
					Después de una experiencia cercana a la muerte, el diablo guardián ha vuelto a las calles, pero ¿es suficiente?</p>
				<p class="dd">9.50€</p>
			</div>
			<div class="product" id="spd-product">
				<h1 class="spd">Spiderman.<br> Toda una vida</h1>
				<p class="spd">¡Un nuevo comienzo para el asombroso Spiderman! La vida de Peter Parker está del revés,
					después de que toda su vida como Peter Parker sea puesta en peligro.</p>
				<p class="spd">10.45€</p>
			</div>
		</div>
		<div id="form-bottom">
			<label for="comics">Elige un cómic</label>
			<form autocomplete="off" name="products-form" id="products-form" target="_blank" action="?c=payments&a=confirmPayment" method="POST">
				<input type="hidden" name="product-data" id="product-data" value="">
				<select name="comic-select" id="comic-select">
					<option id="option-avg-product" value="avg-product">Vengadores</option>
					<option id="option-dd-product" value="dd-product">Daredevil</option>
					<option id="option-spd-product" value="spd-product">Spiderman</option>
				</select><br>
				<input type="submit" value="Comprar">
			</form>
		</div>
	</body>

	</html>
