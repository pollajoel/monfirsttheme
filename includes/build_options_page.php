<?php
function lgmac_build_options_page(){ 
//on recupere les options du template ci celle-ci existe préalbrement
//$themes_opts = getoption('lgmac_opts');

$theme_opts = get_option('lgmac_opts');

?> 
		
		<div class ="wrap">
		
				<div class ="container">
				
				<?php
				if(isset($_GET['status']) && $_GET['status'] == 1)
					echo '<div class ="alert alert-success">Mise à jour effectuée avec succès</div>';
				
				?>
				
				
				
					<div class = "jumbotron">
					<h1>Parmètres du site </h1>
					</div>
					
					<form id = "form-lgmac-options" class ="form-horizontal" method = "post" action = "admin-post.php">
					<input type = "hidden" name ="action" value = "lgmac_save_options" >
					
					<?php // attribut value = "fonction utlisée pour sauvegarder les options
						  // add_action('admin_post_lgmac_save_options','my_function') 
						  
						  //fonction utile pour la sécurité vérifier les droits 
						  wp_nonce_field('lgmac_options_verify');//va nous permettre de checker si la personne qui envoit le formulaire est autorisée
						  
						  ?>
						  
				    
					
					
					<div class="row">
					
  <div class="col-3">
  
    <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
      <a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">General Settings</a>
      <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">Header</a>
      <a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false">Footer</a>
      <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false">Settings</a>
    </div>
	
  </div>
  
  <div class="col-9">
    <div class="tab-content" id="v-pills-tabContent">
      <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
	  
	  

						      
						
						<div class="form-group row">

									<h1> Image du Logo en page d'accueil  ( Haut de page )</h1>

									<div class ="col-6">
                                    <img src ="<?php echo $theme_opts['image_01_url']?>"  class ='img-responsive img-thumbnail' id='img_preview_01' height="200" width="200">
                                   </div>
							
									<div class = "col-6 mt-2">

									<button "btn btn-primary btn-lg btn-select-img" type="button" id ="btn_img_012"> choisir une image pour le logo</button>
					
									</div>
							
						</div> <!--form-group-row-->



						<div class="form-group row">
							<label for = "lgmac_img_01"> your current Logo Path</label>

							<div class="col-10">
								<input type="text" id="lgmac_img_01" name="lgmac_img_01" value="<?php echo $theme_opts['image_01_url']?>" disabled> 

								<input type="hidden" id="lgmac_img_01_url" name="lgmac_img_01_url" value="<?php echo $theme_opts['image_01_url']?>" > 
								
							</div>


						</div>




							<div class="form-group row w-50">
									<label ="lgmac_slider_01" class="col-sm-10 col-form-label"> slider configuration</label>
									<div class="col-10">
											<input type="text" id="lgmac_slider_01" name="slider_shortcode" value ="
											<?php echo $theme_opts['slider_shortcode'] ?>" class ="mw-100" maxlength="40" class="form-control " aria-describedby="lgmac_sliderdescribe01" >
											
									</div>
									 <small id="lgmac_sliderdescribe01" class="text-muted">&nbsp;&nbsp;&nbsp;Your revolution slider embedding Allias</small>

									<!--col-10 -->
							</div> <!--form-group row -->
						
						
                        
                        
						
					
						
						 
						
						
						
						
						
						
						
						













						
						
						
						
						
						
						
						
						
						
						
					
					
					
	  
	  
	  </div>
	  
      <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
			<div class ="container">
				<div class ="row">
				
				<div class ="col-12">Header Type1 configuration</div>
				
				<!--- configuration du Header  de type1 ajout des images et du texte des cadres block header-->
				


					<!-- header first block -->
					<div class="form-group row">
							<label for = "lgmac_img_01"> First Block Image</label>

							<div class="col-10">
								<input type="text" id="lgmac_img_firstblock1" name="lgmac_img_firstblock1" value="<?php echo $theme_opts['lgmac_img_FirstBlock']?>" disabled> 

								<input type="hidden" id="lgmac_img_firstblock11" name="lgmac_img_firstblock11" value="<?php echo $theme_opts['lgmac_img_FirstBlock']?>" > 
								
							</div>
					</div>


					<div class = "col-6 mt-2">

					<button "btn btn-primary btn-lg btn-select-img" type="button" id ="btn_img_block1"> choisir une image pour le logo</button>
					
					</div>	
					<!-- End first block -->




					<!-- header first block -->
					<div class="form-group row">
							<label for = "lgmac_img_01"> Second block Image</label>

							<div class="col-10">
								<input type="text" id="lgmac_img_firstblock133" name="lgmac_img_013" value="<?php echo $theme_opts['lgmac_img_firstblock133']?>" disabled> 

								<input type="hidden" id="lgmac_img_firstblock133" name="lgmac_img_01_url3" value="<?php echo $theme_opts['lgmac_img_firstblock133']?>" > 
								
							</div>
					</div>


					<div class = "col-6 mt-2">

									<button "btn btn-primary btn-lg btn-select-img" type="button" id ="btn_img_113"> choisir une image pour le logo</button>
					
					</div>	
					<!-- End first block -->






					<!-- header first block -->
					<div class="form-group row">
							<label for = "lgmac_img_01"> Third Block image</label>

							<div class="col-10">
								<input type="text" id="lgmac_img_01" name="lgmac_img_01" value="<?php echo $theme_opts['image_01_url']?>" disabled> 

								<input type="hidden" id="lgmac_img_01_url" name="lgmac_img_01_url" value="<?php echo $theme_opts['image_01_url']?>" > 
								
							</div>
					</div>


					<div class = "col-6 mt-2">

									<button "btn btn-primary btn-lg btn-select-img" type="button" id ="btn_img_012"> choisir une image pour le logo</button>
					
					</div>	
					<!-- End first block -->	



















          
				<!-- end Header connfiguration de type 1 -->

				</div>
				
				
			</div>
	  
	  </div>


      <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
      	
       <div class="row">

      				<div class="row">

							<div class="col-6">
									
								<label ="lgmac_heardC" class="col-sm-10 col-form-label">First Footer text Color</label>
								<input type="text" id='color-picker2' value="<?php echo $theme_opts['FooterColor'] ?>" class ="mw-100" maxlength="40" name="FooterColor"/>
					    	</div>
					
						
							<div class="col-6">
									
							<label ="lgmac_heardC" class="col-sm-10 col-form-label">Footer Copyright Background </label>
							<input type="text" id='color-picker3' value="<?php echo $theme_opts['FooterCopyright'] ?>" class ="mw-100" maxlength="40" name="FooterCopyright"/>
					    	</div>

					

					      <div class="col-6">
							<label ="lgmac_heardC" class="col-sm-10 col-form-label">Footer background Color</label>
							<input type="text" id='color-picker' value="<?php echo $theme_opts['HeaderC'] ?>" class ="mw-100" maxlength="40" name="HeaderC"/>
					    </div>


					     <div class="col-6">
							<label ="lgmac_heardC" class="col-sm-10 col-form-label">Footer Copyright Text Color</label>
							<input type="text" id='color-picker4' value="<?php echo $theme_opts['CopyrightTextColor'] ?>" class ="mw-100" maxlength="40" name="CopyrightTextColor"/>
					    </div>




					</div>


					   
				
		</div>
					



      </div>
      <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">
      	
      

      			settings










      </div>
    </div>
  </div>
</div>
<br>
					
					
					
					 <div class="container">
					 	<div class="row">
					 		<div class="col-12">
					 		<button id = 'validator' type = 'submit' class = "btn btn-success btn-lg"> mettre à jour les les options </button> 
					 	</div>
					 	</div>
					 </div>
					
					
					
					
					
					
					
					
					
					
					
					
					
					
					
					


</form>
					
			
			
				</div> <!-- end container -->
		
		
		</div> <!-- end wrap --!>
	
	
	
	<?php } ?>