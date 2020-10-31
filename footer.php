
 <?php $theme_opts = get_option('lgmac_opts'); global $redux_demo; ?>

<div class="position-absolute top-0 left-0 w-100">
			<svg width="100%" height="60" viewBox="0 0 500 70" preserveAspectRatio="none" style="margin-top: -70px;">
					<path d="M0,70 L0,40 Q250,-40 500,40 L580,70 Z" fill="<?php echo $redux_demo['Firstbgclor'];?>"></path>
				</svg>
</div>

<footer class="main-footer" style ="background: <?php echo $redux_demo['Firstbgclor'];?>;color:<?php echo $redux_demo['ftextcolor']?>;" >
      <!-- First Footer widget-->
      
        <div class="container">
          <div class="row">
            
              <?php if (is_active_sidebar('widgetized-footer')) : ?>
					   <?php dynamic_sidebar('widgetized-footer'); ?>
					<?php else: ?>
				  <?php endif ?>
            

            	
              <?php if (is_active_sidebar('widgetized-footer2')) : ?>
					   <?php dynamic_sidebar('widgetized-footer2'); ?>
					<?php else: ?>
				  <?php endif ?>
          


            
              <?php if (is_active_sidebar('widgetized-footer3')) : ?>
					   <?php dynamic_sidebar('widgetized-footer3'); ?>
					<?php else: ?>
				  <?php endif ?>
    

           
              <?php if (is_active_sidebar('widgetized-footer4')) : ?>
					   <?php dynamic_sidebar('widgetized-footer4'); ?>
					<?php else: ?>
				  <?php endif ?>
         


          </div>
        </div>
      


      <!-- Copyright section of the footer-->
      <div class="py-4 font-weight-light bg-gray-800 text-gray-300  " style="background:<?php echo $redux_demo['secondfbclor']?>;margin-top: 30px;" >
        <div class="container">
          <div class="row align-items-center">
            <div class="col-md-6 text-center text-md-left">
              <p class="mb-md-0" style ="color:<?php echo $redux_demo['copyrighttcolor']?>;"> <?php echo $redux_demo['copyright'];?></p>
            </div>
         </div>
		</div>
	  </div>
    </footer>

	
	
	<?php wp_footer(); ?>
	</body>
	 
</html>

 