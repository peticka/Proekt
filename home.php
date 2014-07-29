<?php 
	require_once('header.php');
require_once('include/bootstrap.php');
$sql = 'SELECT title FROM news';
$data = db_select($sql);
?>
<p>
						<h1>Nai- dobriq online magazin za knigi! Tuk moje da namerite nai- novite knigi i vechnite bestselyri na vsichki vremena</h1>
				
		</p>
			<section>
			
				<div class="column">	
					<img src="kniga1.jpg">
					<div class="productsText">
						Tymnata strana na lubovta
						<p>Cena: 16<sup> 00 </sup> lv.</p>
					</div>
				
				
					
					<img src="kniga2.jpg">
					<div class="productsText">
						Dante's Antichthon
						<p>Cena: 18<sup> 90 </sup> lv.</p>
					</div>
					</div>
				
				<br>
				<br>
					<div class="border">
					<img src="vk.jpg" >
					<div class="productsText">
						 The Fault in Our Stars 
						<p>Cena: 15<sup> 50 </sup> lv.</p>
				
				</div>
				
					<img src="html.jpg">
					<div class="productsText">
						HTML 5 & CSS 3
						<p> Cena: 19<sup> 95 </sup> lv.</p>
						
					</div>
					
					
					</div>
					
					
				
				<div class="spacer"></div>
			</section>
			<section class="latestNews">
				<article>
					<h2>Latest News</h2>
					<p>
					<?php foreach($data as $key => $value) : ?>
               <li><a href=""><?=$value['title']?></a></li>
              <?php endforeach; ?> 
					</p>
					
					
					
					
				</article>
			</section>
				
<?php
require_once('include/footer.php');