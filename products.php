<?php 
	$header_title='Catalog:';
	
 require_once('header.php');
require_once('include/bootstrap.php');
$sql = '
	SELECT a.id, a.title, a.price, b.title as image
	FROM products a
	LEFT JOIN products_images b ON a.id = b.products_id
	GROUP BY a.id
	';
$data = db_select($sql);


?>
<html>
<head>
	<h1>Books Store </h1>
	
</head>
<body>
				
	
		<article>
		<fieldset>


<?php 

$success = false;
$errors = false;

if($_SERVER['REQUEST_METHOD'] == 'POST' && $_POST['catalog'] !== '') {
    $title=$_POST['catalog'];
	/*foreach($data as $key => $value) {
		if ($title == $value['title']) { */
	$sql = '
	SELECT a.id, a.title, a.price, b.title as image
	FROM products a
	LEFT JOIN products_images b ON a.id = b.products_id
	WHERE a.title="'.$title.'"
	GROUP BY a.id 
	ORDER BY a.price ASC';

	
	$data = db_select($sql); 
            
	$success = true;

} else {
    $errors = true;
}

?>
<?php if($success == true): ?>


<!--<a href="catalog_search.php?id=<?//=$value['id']?>">Click here to see the results of your search</a>-->


<?php endif; ?>
<div class="box">

			
			<section>
				
				<form  method="post">
					<label for="search">Search:<input type="text" name="catalog" id="catalog" value=""></label>
				
					<button type="submit">Search</button>
				</form>
			
				
				<label for="order by">Order By:
					<select name="order_by" size="1">
						<option>name</option>
						<option>price</option>
					</select>			
				</label> 		
			</div>
			</section>
		</fieldset>
		
		
		<fieldset id="">

		<?php foreach($data as $key => $value) {
			//$products_id=$value['id'];
			?>
		
		<fieldset>
		
		<div class="catalogProducts">
			
				
				<a href="details.php?id=<?=$value['id']?>"><img src="admin/products_images/<?=$value['image'];?>" ></a>
						

				
				<span class="catalogTitle"><?=$value['title'];?></span>
				<span class="catalogPrice"><?=$value['price'];?></span>
				<br>
			</div>
			<p class="comment"><?=$value['content'];?></p>
			
		</fieldset>
		
		<?php }; ?>
		
		</article>
	
	</fieldset>
	<?php require_once('includes/footer.php'); ?>
</body>

</html>

		
		
		
		

	
		 
		
		
		 
		 
		 
		 
		 
		 
		 