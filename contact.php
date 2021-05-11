<!DOCTYPE html>
<html>
   <head>
      <link rel="stylesheet" type="text/css" href="CSS/contact.css"/>
	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  
  </head>
   
   <body>

     <section class="contact-banner1" id="contact-banner">
	 
	 
	     <div class="contact-content1" >
		    <h2 class="contact-subject1" id="contact-up">Can I help you?</h2>
			<h2 class="contact-subject2">Contact me</h2>
			<h3 class="contact-subject3">If you have a question or want to work with me you can call me on <b>+387(62)831-317</b>, send an email on <a href="#">dino.emso6@hotmail.com</a> or you can fill this form below.</h3>
		 
		
		 
			
			
	        <form id="contact-form" class="form1" method="POST" action="index.php?file=contact1">
			  <div class="form-content">
			      <p id="form-message" class="results"></p>			  
			      <input id="contact-name" type="text" name="name" class="input1 inputs" placeholder="Your name"/>
				  <p id="form-message"></p>
			      <input id="contact-email" type="text" name="email" class="input2 inputs" placeholder="Your email"/>
				  <p id="form-message"></p>
				  <input id="contact-company" type="text" name="company" class="input3 inputs" placeholder="Company"/>
				  <p id="form-message"></p>
				  <textarea id="contact-message" name="message" class="input4 inputs" placeholder="Message"></textarea>
				  <p id="form-message"></p>
				  <input class="submit1 inputs" onclick="loadData()" id="contact-submit" type="submit" name="submit" value="Send Message"/>		 
			  </div>
            </form>			
		 </div> 
	 </section>
	 <script type="text/javascript">
  
	
	$(document).ready(function() {
          
		  $("#contact-form").submit(function(event) {
				
			  event.preventDefault(); 
			  
			  var name = $("#contact-name").val(); 
			  var email = $("#contact-email").val(); 
			  var company = $("#contact-company").val(); 
			  var message = $("#contact-message").val(); 
			  var submit = $("#contact-submit").val();
  				
			  $("#form-message").load("contact1.php", {
				 
				 
				 name: name , 
                 email: email , 
                 company: company, 
                 message: message, 
				 submit: submit
                			 
		  
			  });
             
			 
		
			 
			 
			 
			});
			
			/*
		   $(".submit1").on("click", function() {
          $(".loading-icon").removeClass("hide");
          $(".submit1").attr("disabled", true);
          $(".btn-txt").text("Sending");
          
            $.get("https://jsonplaceholder.typicode.com/posts", function(data) {
			$(".loading-icon").addClass("hide");
            $(".submit1").attr("disabled", false);
            $(".btn-txt").text("Send Message");
          });
		   });
			*/
		
		  
        });
      
		
     
	 $(document).ready(function() {
			
			
	
		}); 
		
		
		const toTopButton = document.querySelector("#contact-submit");
		toTopButton.addEventListener("click", backToTop); 
        function backToTop() {
			
			window.scrollTo(0, 120);
		}
	
	  /* 
	  $(document).ready(function() {
		  
		  $(".contact-submit").on("click", function() {
			  
			  $("")
			  
		  }); 
	  });
	  */
	 </script>
   </body>
</html>