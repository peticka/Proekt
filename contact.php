<?php 
require_once('include/bootstrap.php');

$success = false;
$errors = false;

if($_SERVER['REQUEST_METHOD'] == 'POST' && $_POST['name'] !== '' && $_POST['email'] !== '' && $_POST['phone'] !== '' && $_POST['text'] !== '') {
    $name = $_POST['name'];
    $email = $_POST['email'];
	$phone = $_POST['phone'];
	$text = $_POST['text'];
    
	db_insert('contact_form', array(
					'name' => $name,
					'email' => $email,
					'phone' => $phone,
					'text' => $text,
                    
                ));

            $success = true;
} else {
        $errors = true;
}
	
	


require_once('header.php');


?>


	
		
		<h3>
		 The Elephant Bookstore has now moved out of the Tea House and has settled into its <br> spacious new premises on one of Plovdiv's funkiest shopping streets right in the heart of Sofia at:                
        </h3>
		
		
		<h4>
Ulitsa Tsar Ivan Shishman 31

<br>Opening hours:

10am - 9pm every day
</h4>

      <p>
	  <img src="karta.jpg" id="karta">
      </p>
			
					
		
         
	 		
				<h3>Contact Form</h3>
					<p class="name">
					


	 <form id="contactForm" action="" method="post">	
										
						<label for="name">Name</label>
						<input type="text" name="name" id="name" placeholder="Enter your name here..." />
					</p>	
					<p class="email">
						<label for="email">Email</label>
						<input type="text" name="email" id="email" placeholder="Enter your email here..." />
					</p>	
					<p class="phone">
						<label for="phone">Phone</label>
						<input type="text" name="phone" id="phone" placeholder="Enter your phone here..." />
					</p>		
					<p class="text">
						<label for="text">Contact Us</label>
						<textarea name="text" placeholder="Write something to us" id="text"/></textarea>
						
					
						<button type="submit" id="myButton">Submit </button>
					</p>
				</form>
				
			</section>

<?php require_once('include/footer.php'); ?>

		

	
						
	 
	 
	 
	 
	
		
		
			