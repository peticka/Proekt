<?php
require_once('include/bootstrap.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

	if ($_POST['title'] != '' && $_POST['content'] != '' && $_POST['price'] != '') {
			$price = $_POST['price'];
			if (strpos($price, ',')) $price = str_replace(',', '.', $price);


			db_insert('products', array(
				'title' => $_POST['title'],
				'content' => $_POST['content'],
				'price' => $price
			));
	}

	redirect('products.php');
}

require_once('include/header.php');

?>
<div class="content">

	<h2> Добави продукт </h2>
	<form action="" method="post">
		<label>
			Заглавие
			<input type="text" name="title">
		</label>
		<br>
		<label>
			Съдържание
			<textarea name="content"></textarea>
		</label>
		<br>
		<label>
			Цена на продукта
			<input type="text" name="price">
		</label>
		<br>
		<button type="submit">Запази</button>
		<button type="reset">Изчисти</button>
	</form>
</div>

<?php
require_once('include/footer.php');