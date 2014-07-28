<?php 
	$header_title='Catalog Search Result';
	require_once('includes/header.php');

require_once('include/bootstrap.php');
global $db_connection;
$sql = '
	SELECT a.title, a.price, a.content, b.title as image
	FROM products a
	LEFT JOIN images b ON a.id = b.products_id
	GROUP BY a.id 
	ORDER BY a.price ASC
	WHERE a.title = '.$_POST['catalog'];
$data = db_select($sql);

$one_product = products_get($_GET['id']);

$one_product_images = products_images_get_all($_GET['id']); // get all products_images for a product 

?>
	
		
<html>
<head>
	<title>catalog_search_result</title>
	<link rel="stylesheet" href="styles_frigo.css">
</head>
<body>
	<?php foreach($data as $key => $value) {
			//$products_id=$value['id'];
			?>
		<br>
	<fieldset>
			
		<section id="content">
		<article>
		
			<div class="column">
				<a href="catalog.php?id=<?=$one_product['id'];?>">
				<?php foreach ($one_product_images as $key => $value) {?>
					<img src="admin/products_images/<?=$value['title']?>" class="frigo_part_img">
				<?php } ?>
				</a>
			</div>
			<div class="column">
				<h2 class="important"><?=$one_product['title']?></h2>
				<br>
				<p class="important"><?=$one_product['price']?></p>
				<br>
				<br>
				<button type="search">Buy Now</button>
			</div>
			<p class="comment"><?=$one_product['content']?></p>
			<br>
		
	</fieldset>
		<?php }; ?>	
		</article>
	</section>
	</fieldset>
	<?php require_once('includes/footer.php'); ?>
</body>

</html>
