jQuery(document).ready(function($){


  /***********************************************************/
 /*            AJOUT IMAGE DANS PAGE                        */
/***********************************************************/

	var frame =  wp.media({
		'title': 'selectionnez une image',//titre de la page
		'button':{
		 'text':'utilisez ce media' //texte du bouton de selection
		},
		'multiple':false,//choix limité à une image

		});




	var frame2 =  wp.media({
		'title': 'selectionnez une image',//titre de la page
		'button':{
		 'text':'utilisez ce media' //texte du bouton de selection
		},
		'multiple':false,//choix limité à une image

		});



	var frame3 =  wp.media({
		'title': 'selectionnez une image',//titre de la page
		'button':{
		 'text':'utilisez ce media' //texte du bouton de selection
		},
		'multiple':false,//choix limité à une image

		});



//l'iframe est actif

	frame.on('select',function(){
		var ObjImg = frame.state().get('selection').first().toJSON();

		//console.log(ObjImg);

		var url = ObjImg.sizes.full.url;
        // assigner les images pour le logo
		$("img#img_preview_01").attr('src',url);
		$("input#lgmac_img_01").attr('value',url);
		$("input#lgmac_img_01_url").attr('value',url);
		//assigner les images pour le block 1
		//$("img#img_preview_01").attr('src',url);

	});

	//frame2
	frame2.on('select',function(){
		var ObjImg = frame2.state().get('selection').first().toJSON();

		var url = ObjImg.sizes.full.url;
        // assigner les images pour le logo
		$("input#lgmac_img_firstblock1").attr('value',url);
		$("input#lgmac_img_firstblock11").attr('value',url);
	});



frame3.on('select',function(){
		var ObjImg = frame3.state().get('selection').first().toJSON();

		var url = ObjImg.sizes.full.url;
        // assigner les images pour le logo
		$("input#lgmac_img_firstblock13").attr('value',url);
		$("input#lgmac_img_firstblock113").attr('value',url);
	});













// fin action du clique pour image logo


// action du clique pour l'image du logo //
	$('#btn_img_012').click(function (e) {

		e.preventDefault();
		frame.open(); //ouverture du médiaquery de wordpress
		// body...
	});



//action du clique pour l'image du block1 lgmac_img_FirstBlock
$('#btn_img_block1').click(function (e) {

		e.preventDefault();
		frame2.open(); //ouverture du médiaquery de wordpress
		// body...
	});



//action du clique pour l'image du block1 lgmac_img_FirstBlock
$('#btn_img_113').click(function (e) {
alert("bonjour");

    
		e.preventDefault();
		frame3.open(); //ouverture du médiaquery de wordpress
		// body...
	});










	
});//fin ready jquery