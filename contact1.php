
<?php 
        $name = ""; 
		$email = ""; 
		$message = ""; 
		
		
        $nameErr = ""; 
		$emailErr = ""; 
		$messageErr = ""; 

      


		
    if(isset($_POST['submit'])) {
		
		
		if(!empty($_POST['name'])) {
           
              $name = $_POST['name'];		   
		
			 
		}
		else {
			
			  $nameErr .= "<span class='name-error'> What's your name? </span>";
			
		}
		
		if(!empty($_POST['email'])) {
			
			if(filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
				
				
				$email = $_POST['email'];
		
			}
			else {
				$emailErr .= "<span class='email-error'> Please, type in a valid email adress. </span>";
				
			}		
		}
		else {
			
			
			$emailErr .= "<span class='email-error'> Please, type in your email adress. </span>";
		}
		
		if(!empty($_POST['message'])) {
			
			
			$message = $_POST['message'];
		
			
		}
		else {
			
			$messageErr .= "<span class='message-error'> Please, type your message. </span>";
		}
		
       
			
		 
	   
		
		
		if($nameErr == "" && $emailErr == "" && $messageErr == "") {
         
		
	 
		require "PHPMejl/PHPMailerAutoload.php";
		
		$mejl = new PHPMailer(); 
		
		$mejl->isSMTP(); 
		$mejl->SMTPDebug = 0; 
		$mejl->Debugoutput = "html"; 

        $mejl->Host = "smtp.gmail.com";
        $mejl->Port = 587; 
        $mejl->SMTPAuth = true; 
        $mejl->SMTPSecure = "tls"; 

        $mejl->Username = "emsodino07@gmail.com";
        $mejl->Password = "softver12345";

        $mejl->setFrom($email , $name);
        $mejl->addReplyTo("emsodino07@gmail.com" ,"Dino");
        $mejl->addAddress("emsodino07@gmail.com","Dino");
		

        $mejl->Subject = " Poruka sa kontakt forme";
        $mejl->Body = $message; 
        $mejl->isHTML(true);
		
		if($mejl->send()) {
			
			 echo "<span class='form-success'> Your message has been sent. </span>"; 
			
		}
		
	   
		
}
		else {
			
			
			echo $nameErr; 
			echo $messageErr; 
			echo $emailErr; 
			
		}
		
	}
?>
<script type="text/javascript">
    
   
  
   
    $("#contact-name, #contact-email, #contact-message, #contact-company").removeClass("input-error");
	 $("#contact-name, #contact-email, #contact-message, #contact-company").removeClass("input-success");
	 

     var errorName = "<?php echo $nameErr; ?>" ; 
	 var errorEmail = "<?php echo $emailErr; ?>"; 
	 var errorMessage = "<?php echo $messageErr; ?>";
	 

	 
	
	 if(errorName != "") {
		 
		 $("#contact-name").addClass("input-error");
		 
	 }	 
	else if(errorName == ""){
		 
		  $("#contact-name").addClass("input-success");
		  $("#contact-name").removeClass("input-error");
		 
	 }
	
	  if(errorEmail != "") {
		 
		 $("#contact-email").addClass("input-error");
		 
	 }
	 else if(errorEmail == ""){
		 
		  $("#contact-email").addClass("input-success");
		  $("#contact-email").removeClass("input-error");
		 
	 }
	  if(errorMessage != "") {
		 
		 $("#contact-message").addClass("input-error");
		
		 
	 }
	 else if(errorMessage == ""){
		 
		  $("#contact-messaage").addClass("input-success");
		  $("#contact-message").removeClass("input-error");
		 
		 
	 }
	 if(errorName == "" && errorEmail == "" && errorMessage == "") {
	
		  $("#contact-name, #contact-email, #contact-message, #contact-company").addClass("input-success");
		  $("#contact-name, #contact-email, #contact-message, #contact-company").removeClass("input-error");
		 $("#contact-name, #contact-email, #contact-message, #contact-company").val("");
		 
		 	  

	 }
	
	 
</script>