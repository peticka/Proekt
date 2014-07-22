<?php 
	require_once('header.php');
require_once('include/bootstrap.php');
$sql = 'SELECT title FROM news';
$data = db_select($sql);
?><!DOCTYPE html>





		<h1>About us </h1>
	 <img src="about_us.jpg" class="knigi">
	     <section>
		<article>
		<div class="tekst">
			<p>
          Elephantbookstore was founded with one goal in mind: to give our customers in Bulgaria access to the best range of English language books available, along with superior customer service.  From convenient online shopping to fast, reliable delivery and after-sales service, we focus on giving our customer the best possible experience every time.
			
			
			
			We also offer great service in our bookshop here in Sofia, Bulgaria where we share our enthusiasm for books with our customers so you can choose to browse and order online, or come and do it the old-fashioned way!
			
			</p>
			<p>
			Elephant Bookstore is run by a partnership of Max Breeds, an Englishman living in Bulgaria since 2005 and Matthew Willis, author, teacher and renaissance man.  Also with Antonina Tosheva, a Bulgarian passionate about the English Language and helping others to learn and enjoy reading i
		    </p>
		</div>	
		</article>	
		
		
		



			<section id="aboutus">
				<address>
						<p>
							GSM: +359-32-473-271 
						</p>
						<p>
							phone: +359-988-230-940
						</p> 
						<p>
						e-mail: bookstore_plovdiv@abv.bg 
						</p>
						<p>
							address: Plovdiv, st. "Tsar Ivan Shishman 31" 
						</p>
						

						<?php require_once('include/footer.php'); ?>
						