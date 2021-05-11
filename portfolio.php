<!DOCTYPE html>
<html>
   <head> 
   
   </head>
   <body>
   
  <!--
    <header class="header-no-session" id="navbar">
		
			<nav>
			  <ul>
			
			     <li><a href="index.php"><i class="fas fa-home"></i> HOME</a></li>
				 <li><a href="index.php?file=portfolio"><i class='icon fas fa-chart-line'></i> PORTFOLIO</a></li>
				 <li><a href="#"><i class="fas fa-tools"></i> TOOLS</a></li>
				 <li><a href="index.php?file=about"><i class="fas fa-address-card"></i> ABOUT</a></li>
				 <li><a href="index.php?file=contact"><i class="far fa-paper-plane"></i> CONTACT</a></li>
				 
			  </ul>
			   
			</nav>
			<div class="footer1_cont1" id="modal_lang">
			  
					  <div class="lang-link2"><a href="#">EN</a></div>
					   <div class="flag-img2"><a href="#"><img src="Images/flag_uk.png" width="25"/></a></div>
					  <div class="lang-link1"><a href="#">BA</a></div>
					    <div class="flag-img1"><a href="#"><img src="Images/flag_bih.png" width="25"/></a></div>
					    <div class="lang-text">LANGUAGES</div>
		    </div>
	     </header>
		 -->
<div class="portfolio-haeder-cont">	 
   <header class="portfolio-header">
            <a href="index.php"><div class="img-box1">
		        <img  src="images/me.jpg" width="200" height="200"/>
				<div  class="insider"></div>
				<div  class="insider1"></div>
		 </div>
		 </a>
   <nav id="portfolio-nav" >
      
	    <a class="active" href="#onlineproducts" data-target="on-products"><font class="portfolio-online-word">Online</font> Products</a>
		<a href="#github" data-target="github">GitHub</a>
		<a href="#freecodecamp" data-target="fcc">FreeCodeCamp</a>
		<div class="slide"></div>
	  
   </nav>
  </header>
</div>
	  <section id="portfoliobanner-1">
     <?php include("on-products.php"); ?>
	
	  </section>
	  
 
   </div>
	  </div>
   
	<script src="http://code.jquery.com/jquery-1.11.2.min.js"></script>
	 <script
			  src="https://code.jquery.com/jquery-3.4.1.js"
			  integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
			  crossorigin="anonymous"></script>
    <script src="jQuery/aos.js"></script>
	<script src="jQuery/jQuery.js"></script>
	
	<script type="text/javascript">
	AOS.init();
	
	
	
	
	</script>
	<script src="js/bootstrap.min.js"></script>
	<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
	<script type="text/javascript">
	$(document).ready(function() {
		
		$('a').on('click', function() {
			
			$(this).siblings().removeClass('active'); 
			$(this).addClass('active'); 
			
		});

	});
	
	$(document).ready(function() {
		
		var trigger = $('#portfolio-nav a'), 
        container = $('#portfoliobanner-1');
		
		
		trigger.on('click', function(){
			
			var $this = $(this)
			target = $this.data('target');
			
			container.load(target + '.php');
			
			return false; 
			
		});

	});
	
	
	
	
	
	</script>
   </body>
</html>
