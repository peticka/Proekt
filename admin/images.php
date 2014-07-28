<?php
require_once('include/bootstrap.php');
$products = products_images_get_all($_GET['id']);
$product = products_get($_GET['id']);



if ($_SERVER['REQUEST_METHOD'] == 'POST') {

	if (isset($_GET['action']) && $_GET['action'] == 'delete') {
		unlink('images/'.$images['name']);
		// unset($data['image']);
		$images['name'] = '';
	}
	if ($_FILES['image']['tmp_name'] != '') {

		$filename = rand(1, 10000).$_FILES['image']['name'];
		move_uploaded_file($_FILES['image']['tmp_name'], 'images/'.$filename);
		$images['name'] = $filename;

	}
	$images = array(
		'id' => $_POST['id'],
		'products_id' => $_POST['products_id'],
		'name' => $images['name']
	);
	db_update('images', $images, $_GET['id']);

	redirect('news.php');
}

	

require_once('include/header.php');

?>
<div class="content">
	<h2> Редактирай новина: <em><?php echo $images['name']?></em> </h2>
	<form action="" method="post" enctype="multipart/form-data">
		
		<?php if ($images['name'] != '' && $_GET['action'] != 'delete') { ?>
		<img src="images/<?php echo $images['image']?>" width="100"><a href="news.php?id=<?=$news['id'] ?>&action=delete" style="position: absolute;">[X]</a>
		<br>
		<?php } ?>
		<label>
			Качете нова картинка
			<input type="file" name="image">
		</label>
		<br>
		<button type="submit">Запази</button>
		<button type="reset">Изчисти</button>
	</form>
</div>

<?php
require_once('include/footer.php');