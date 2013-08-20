<!doctype html>
<html lang="en">

	<head>
		<meta charset="utf-8">

		<meta name="viewport" content="width=device-width, initial-scale=1.0">


	<title><?php wp_title(''); ?></title>

		<!-- icons & favicons (for more: http://www.jonathantneal.com/blog/understand-the-favicon/) 
		<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/favicon.png">-->

		<!-- wordpress head functions -->
		<?php wp_head(); ?>
		<!-- end of wordpress head -->

		<!-- drop Google Analytics Here -->
		<!-- end analytics -->
		<link href='http://fonts.googleapis.com/css?family=PT+Sans:400,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Lato:400,900' rel='stylesheet' type='text/css'>  
    
    <script>

jQuery(function(){
	/*
	var prefix = "#f";
	var currPrefix = null;
	
	var menuItems = ["#menu-item-8", "#menu-item-27", "#menu-item-26", "#menu-item-25", "#menu-item-24"];
	
	for (var i = 0; i < menuItems.length; i++)
	{
		currPrefix = prefix + (i+1);
		
		console.log(currPrefix);
		
		jQuery(menuItems[i]).hover(function(){
    		jQuery(currPrefix + ' #petal1').css("opacity", 1);
    		jQuery(currPrefix + ' #petal1').css("top", 3);		
			},function(){
				jQuery(currPrefix + ' #petal1').css("opacity", 0);
				jQuery(currPrefix + ' #petal1').css("top", 13);
																		
		});
		
		console.log(menuItems[i] + "" + currPrefix);
	}*/
	
	jQuery('#menu-item-8').hover(function(){
    jQuery('#f1 #petal1').css("opacity", 1);
    jQuery('#f1 #petal1').css("top", 3);
		
		jQuery('#f1 #petal2').css("opacity", 1);
    jQuery('#f1 #petal2').css("left", 35);			
    jQuery('#f1 #petal2').css("top", 13);	
		
		jQuery('#f1 #petal3').css("opacity", 1);
    jQuery('#f1 #petal3').css("left", 30);					
    jQuery('#f1 #petal3').css("top", 27);	
		
		jQuery('#f1 #petal4').css("opacity", 1);
    jQuery('#f1 #petal4').css("left", 9);					
    jQuery('#f1 #petal4').css("top", 13);	
		
		jQuery('#f1 #petal5').css("opacity", 1);
    jQuery('#f1 #petal5').css("left", 15);					
    jQuery('#f1 #petal5').css("top", 27);	
		
		jQuery('#f1 #center').css("opacity", 1);
    jQuery('#f1 #center').css("left", 20);					
    jQuery('#f1 #center').css("top", 13);
    jQuery('#f1 #center').css("width", 23);
    jQuery('#f1 #center').css("height", 23);
    jQuery('#f1 #center').css("background-color", "#FFDF40");
		
		jQuery('#f1 #branch').css("opacity", 1);
    jQuery('#f1 #branch').css("top", 40);	
		
		jQuery('#f1 #leaf').css("opacity", 1);			
				
		},function(){
			jQuery('#f1 #petal1').css("opacity", 0);
			jQuery('#f1 #petal1').css("top", 13);
			
			jQuery('#f1 #petal2').css("opacity", 0);
			jQuery('#f1 #petal2').css("left", 22);	
			jQuery('#f1 #petal2').css("top", 13);	
	
			jQuery('#f1 #petal3').css("opacity", 0);
			jQuery('#f1 #petal3').css("left", 22);	
			jQuery('#f1 #petal3').css("top", 13);		
			
			jQuery('#f1 #petal4').css("opacity", 0);
			jQuery('#f1 #petal4').css("left", 22);	
			jQuery('#f1 #petal4').css("top", 13);		
			
			jQuery('#f1 #petal5').css("opacity", 0);
			jQuery('#f1 #petal5').css("left", 22);	
			jQuery('#f1 #petal5').css("top", 13);	
			
			jQuery('#f1 #center').css("opacity", 0);
			jQuery('#f1 #center').css("left", 22);					
			jQuery('#f1 #center').css("top", 13);
			jQuery('#f1 #center').css("width", 0);
			jQuery('#f1 #center').css("height", 0);
			jQuery('#f1 #center').css("background-color", "#FFDF40");
			
			jQuery('#f1 #branch').css("opacity", 0);
			jQuery('#f1 #branch').css("top", 80);	
				
			jQuery('#f1 #leaf').css("opacity", 0);															
	});
	
	jQuery('#menu-item-27').hover(function(){
    jQuery('#f2 #petal1').css("opacity", 1);
    jQuery('#f2 #petal1').css("top", 3);
		
		jQuery('#f2 #petal2').css("opacity", 1);
    jQuery('#f2 #petal2').css("left", 35);			
    jQuery('#f2 #petal2').css("top", 13);	
		
		jQuery('#f2 #petal3').css("opacity", 1);
    jQuery('#f2 #petal3').css("left", 30);					
    jQuery('#f2 #petal3').css("top", 27);	
		
		jQuery('#f2 #petal4').css("opacity", 1);
    jQuery('#f2 #petal4').css("left", 9);					
    jQuery('#f2 #petal4').css("top", 13);	
		
		jQuery('#f2 #petal5').css("opacity", 1);
    jQuery('#f2 #petal5').css("left", 15);					
    jQuery('#f2 #petal5').css("top", 27);	
		
		jQuery('#f2 #center').css("opacity", 1);
    jQuery('#f2 #center').css("left", 20);					
    jQuery('#f2 #center').css("top", 13);
    jQuery('#f2 #center').css("width", 23);
    jQuery('#f2 #center').css("height", 23);
    jQuery('#f2 #center').css("background-color", "#FFDF40");
		
		jQuery('#f2 #branch').css("opacity", 1);
    jQuery('#f2 #branch').css("top", 40);	
		
		jQuery('#f2 #leaf').css("opacity", 1);			
				
		},function(){
			jQuery('#f2 #petal1').css("opacity", 0);
			jQuery('#f2 #petal1').css("top", 13);
			
			jQuery('#f2 #petal2').css("opacity", 0);
			jQuery('#f2 #petal2').css("left", 22);	
			jQuery('#f2 #petal2').css("top", 13);	
	
			jQuery('#f2 #petal3').css("opacity", 0);
			jQuery('#f2 #petal3').css("left", 22);	
			jQuery('#f2 #petal3').css("top", 13);		
			
			jQuery('#f2 #petal4').css("opacity", 0);
			jQuery('#f2 #petal4').css("left", 22);	
			jQuery('#f2 #petal4').css("top", 13);		
			
			jQuery('#f2 #petal5').css("opacity", 0);
			jQuery('#f2 #petal5').css("left", 22);	
			jQuery('#f2 #petal5').css("top", 13);	
			
			jQuery('#f2 #center').css("opacity", 0);
			jQuery('#f2 #center').css("left", 22);					
			jQuery('#f2 #center').css("top", 13);
			jQuery('#f2 #center').css("width", 0);
			jQuery('#f2 #center').css("height", 0);
			jQuery('#f2 #center').css("background-color", "#FFDF40");
			
			jQuery('#f2 #branch').css("opacity", 0);
			jQuery('#f2 #branch').css("top", 80);	
				
			jQuery('#f2 #leaf').css("opacity", 0);															
	});
	
	jQuery('#menu-item-26').hover(function(){
    jQuery('#f3 #petal1').css("opacity", 1);
    jQuery('#f3 #petal1').css("top", 3);
		
		jQuery('#f3 #petal2').css("opacity", 1);
    jQuery('#f3 #petal2').css("left", 35);			
    jQuery('#f3 #petal2').css("top", 13);	
		
		jQuery('#f3 #petal3').css("opacity", 1);
    jQuery('#f3 #petal3').css("left", 30);					
    jQuery('#f3 #petal3').css("top", 27);	
		
		jQuery('#f3 #petal4').css("opacity", 1);
    jQuery('#f3 #petal4').css("left", 9);					
    jQuery('#f3 #petal4').css("top", 13);	
		
		jQuery('#f3 #petal5').css("opacity", 1);
    jQuery('#f3 #petal5').css("left", 15);					
    jQuery('#f3 #petal5').css("top", 27);	
		
		jQuery('#f3 #center').css("opacity", 1);
    jQuery('#f3 #center').css("left", 20);					
    jQuery('#f3 #center').css("top", 13);
    jQuery('#f3 #center').css("width", 23);
    jQuery('#f3 #center').css("height", 23);
    jQuery('#f3 #center').css("background-color", "#FFDF40");
		
		jQuery('#f3 #branch').css("opacity", 1);
    jQuery('#f3 #branch').css("top", 40);	
		
		jQuery('#f3 #leaf').css("opacity", 1);			
				
		},function(){
			jQuery('#f3 #petal1').css("opacity", 0);
			jQuery('#f3 #petal1').css("top", 13);
			
			jQuery('#f3 #petal2').css("opacity", 0);
			jQuery('#f3 #petal2').css("left", 22);	
			jQuery('#f3 #petal2').css("top", 13);	
	
			jQuery('#f3 #petal3').css("opacity", 0);
			jQuery('#f3 #petal3').css("left", 22);	
			jQuery('#f3 #petal3').css("top", 13);		
			
			jQuery('#f3 #petal4').css("opacity", 0);
			jQuery('#f3 #petal4').css("left", 22);	
			jQuery('#f3 #petal4').css("top", 13);		
			
			jQuery('#f3 #petal5').css("opacity", 0);
			jQuery('#f3 #petal5').css("left", 22);	
			jQuery('#f3 #petal5').css("top", 13);	
			
			jQuery('#f3 #center').css("opacity", 0);
			jQuery('#f3 #center').css("left", 22);					
			jQuery('#f3 #center').css("top", 13);
			jQuery('#f3 #center').css("width", 0);
			jQuery('#f3 #center').css("height", 0);
			jQuery('#f3 #center').css("background-color", "#FFDF40");
			
			jQuery('#f3 #branch').css("opacity", 0);
			jQuery('#f3 #branch').css("top", 80);	
				
			jQuery('#f3 #leaf').css("opacity", 0);															
	});
	
	jQuery('#menu-item-25').hover(function(){
    jQuery('#f4 #petal1').css("opacity", 1);
    jQuery('#f4 #petal1').css("top", 3);
		
		jQuery('#f4 #petal2').css("opacity", 1);
    jQuery('#f4 #petal2').css("left", 35);			
    jQuery('#f4 #petal2').css("top", 13);	
		
		jQuery('#f4 #petal3').css("opacity", 1);
    jQuery('#f4 #petal3').css("left", 30);					
    jQuery('#f4 #petal3').css("top", 27);	
		
		jQuery('#f4 #petal4').css("opacity", 1);
    jQuery('#f4 #petal4').css("left", 9);					
    jQuery('#f4 #petal4').css("top", 13);	
		
		jQuery('#f4 #petal5').css("opacity", 1);
    jQuery('#f4 #petal5').css("left", 15);					
    jQuery('#f4 #petal5').css("top", 27);	
		
		jQuery('#f4 #center').css("opacity", 1);
    jQuery('#f4 #center').css("left", 20);					
    jQuery('#f4 #center').css("top", 13);
    jQuery('#f4 #center').css("width", 23);
    jQuery('#f4 #center').css("height", 23);
    jQuery('#f4 #center').css("background-color", "#FFDF40");
		
		jQuery('#f4 #branch').css("opacity", 1);
    jQuery('#f4 #branch').css("top", 40);	
		
		jQuery('#f4 #leaf').css("opacity", 1);			
				
		},function(){
			jQuery('#f4 #petal1').css("opacity", 0);
			jQuery('#f4 #petal1').css("top", 13);
			
			jQuery('#f4 #petal2').css("opacity", 0);
			jQuery('#f4 #petal2').css("left", 22);	
			jQuery('#f4 #petal2').css("top", 13);	
	
			jQuery('#f4 #petal3').css("opacity", 0);
			jQuery('#f4 #petal3').css("left", 22);	
			jQuery('#f4 #petal3').css("top", 13);		
			
			jQuery('#f4 #petal4').css("opacity", 0);
			jQuery('#f4 #petal4').css("left", 22);	
			jQuery('#f4 #petal4').css("top", 13);		
			
			jQuery('#f4 #petal5').css("opacity", 0);
			jQuery('#f4 #petal5').css("left", 22);	
			jQuery('#f4 #petal5').css("top", 13);	
			
			jQuery('#f4 #center').css("opacity", 0);
			jQuery('#f4 #center').css("left", 22);					
			jQuery('#f4 #center').css("top", 13);
			jQuery('#f4 #center').css("width", 0);
			jQuery('#f4 #center').css("height", 0);
			jQuery('#f4 #center').css("background-color", "#FFDF40");
			
			jQuery('#f4 #branch').css("opacity", 0);
			jQuery('#f4 #branch').css("top", 80);	
				
			jQuery('#f4 #leaf').css("opacity", 0);															
	});
	
	jQuery('#menu-item-24').hover(function(){
    jQuery('#f5 #petal1').css("opacity", 1);
    jQuery('#f5 #petal1').css("top", 3);
		
		jQuery('#f5 #petal2').css("opacity", 1);
    jQuery('#f5 #petal2').css("left", 35);			
    jQuery('#f5 #petal2').css("top", 13);	
		
		jQuery('#f5 #petal3').css("opacity", 1);
    jQuery('#f5 #petal3').css("left", 30);					
    jQuery('#f5 #petal3').css("top", 27);	
		
		jQuery('#f5 #petal4').css("opacity", 1);
    jQuery('#f5 #petal4').css("left", 9);					
    jQuery('#f5 #petal4').css("top", 13);	
		
		jQuery('#f5 #petal5').css("opacity", 1);
    jQuery('#f5 #petal5').css("left", 15);					
    jQuery('#f5 #petal5').css("top", 27);	
		
		jQuery('#f5 #center').css("opacity", 1);
    jQuery('#f5 #center').css("left", 20);					
    jQuery('#f5 #center').css("top", 13);
    jQuery('#f5 #center').css("width", 23);
    jQuery('#f5 #center').css("height", 23);
    jQuery('#f5 #center').css("background-color", "#FFDF40");
		
		jQuery('#f5 #branch').css("opacity", 1);
    jQuery('#f5 #branch').css("top", 40);	
		
		jQuery('#f5 #leaf').css("opacity", 1);			
				
		},function(){
			jQuery('#f5 #petal1').css("opacity", 0);
			jQuery('#f5 #petal1').css("top", 13);
			
			jQuery('#f5 #petal2').css("opacity", 0);
			jQuery('#f5 #petal2').css("left", 22);	
			jQuery('#f5 #petal2').css("top", 13);	
	
			jQuery('#f5 #petal3').css("opacity", 0);
			jQuery('#f5 #petal3').css("left", 22);	
			jQuery('#f5 #petal3').css("top", 13);		
			
			jQuery('#f5 #petal4').css("opacity", 0);
			jQuery('#f5 #petal4').css("left", 22);	
			jQuery('#f5 #petal4').css("top", 13);		
			
			jQuery('#f5 #petal5').css("opacity", 0);
			jQuery('#f5 #petal5').css("left", 22);	
			jQuery('#f5 #petal5').css("top", 13);	
			
			jQuery('#f5 #center').css("opacity", 0);
			jQuery('#f5 #center').css("left", 22);					
			jQuery('#f5 #center').css("top", 13);
			jQuery('#f5 #center').css("width", 0);
			jQuery('#f5 #center').css("height", 0);
			jQuery('#f5 #center').css("background-color", "#FFDF40");
			
			jQuery('#f5 #branch').css("opacity", 0);
			jQuery('#f5 #branch').css("top", 80);	
				
			jQuery('#f5 #leaf').css("opacity", 0);															
	});

});

    </script>
	</head>

	<body <?php body_class(); ?>>

			<div id="wrap">
      
			<div class="container">
      
        
        <header class="navbar">
            
            <!-- Top Logo -->
            <a class="navbar-brand" href="<?php echo home_url(); ?>" rel="nofollow">
            <?php xx_initiateLogo(); ?>
            </a>
            
            <!-- Top Nav -->
            <?php xx_initiateMainNav(); ?>
  
        </header> <!-- end header -->
