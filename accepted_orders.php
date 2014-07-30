<?php 
	$header_title = 'Accepted Order:';
	require_once('header.php');
?>
<?php 


?>
<?php 
require_once('include/bootstrap.php');
$sql = 'SELECT id, product_title, product_price FROM orders WHERE id='.$_GET['id'].';';
$data = db_select($sql);

?>

<html>
<head>
	<title>accepted_order</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	
		<section  id="content">
			<article>
			<div>
			<?php foreach ($data as $key => $value):?>
			<p><strong>BLAGODARIM VI!</strong></p>
			
			<p>
				Tuko shto porychaxte: - <strong><?php echo $data[0]['product_title']?></strong>
			</p>
			<p>
			    Za da potvyrdite porychkata, molq izpratete sumata ot <strong><?php echo $data[0]['product_price']?></strong> leva na posochenata smetka: IBANBG482947 <strong><?php echo $data[0]['id']?></strong>.
			</p>
			<?php endforeach; ?>
			</div>
			</article>
		</section>
	</fieldset>
	<?php require_once('includes/footer.php'); ?>
</body>
</html>
