<?php 
	$header_title='Products\' Details:';
	require_once('header.php');
?>
<?php 

require_once('include/bootstrap.php');


$one_product = products_get($_GET['id']);

$one_product_images = products_images_get_all($_GET['id']); // get all products_images for a product 



?>
<h1>
<class="important"><?=$one_product['title']?>
</h1>
<h3>Cena:</h3>
				<class="important"><?=$one_product['price']?>
<html>
<head>
	
	<link rel="stylesheet" href="styles.css">
</head>
<body>
	
			
		<section id="products">
		<article>
		
			<div class="content">
				<a href="products.php?id=<?=$one_product['id'];?>">
				<?php foreach ($one_product_images as $key => $value) {?>
					<img src="admin/products_images/<?=$value['title']?>" class="">
				<?php } ?>
				</a>
				
				<p>
				<a href="orders.php?id=<?=$one_product['id']?>"><button type="search">Buy Now</button></a>
				</p>
			</div>
			<h3><p>Kratko opisanie:</p></h3>
			<p class="comment"><?=$one_product['content']?></p>
			<br>
		
			
			</div>
			
		</article>
	</section>
	</fieldset>
	<?php require_once('includes/footer.php'); ?>
</body>

</html>

