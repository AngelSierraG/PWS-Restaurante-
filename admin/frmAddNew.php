<!doctype html>
<html lang="en">

<head>
	<meta charset="utf-8"/>
	<title>Admin PWS-Restaurante</title>
	
	<link rel="stylesheet" href="../view/css/layout.css" type="text/css" media="screen" />
	<!--[if lt IE 9]>
	<link rel="stylesheet" href="css/ie.css" type="text/css" media="screen" />
	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	<script src="../view/js/jquery-1.5.2.min.js" type="text/javascript"></script>
	<script src="../view/js/hideshow.js" type="text/javascript"></script>
	<script src="../view/js/jquery.tablesorter.min.js" type="text/javascript"></script>
	<script type="text/javascript" src="../view/js/jquery.equalHeight.js"></script>
	<script type="text/javascript">
	$(document).ready(function() 
    	{ 
      	  $(".tablesorter").tablesorter(); 
   	 } 
	);
	$(document).ready(function() {

	//When page loads...
	$(".tab_content").hide(); //Hide all content
	$("ul.tabs li:first").addClass("active").show(); //Activate first tab
	$(".tab_content:first").show(); //Show first tab content

	//On Click Event
	$("ul.tabs li").click(function() {

		$("ul.tabs li").removeClass("active"); //Remove any "active" class
		$(this).addClass("active"); //Add "active" class to selected tab
		$(".tab_content").hide(); //Hide all tab content

		var activeTab = $(this).find("a").attr("href"); //Find the href attribute value to identify the active tab + content
		$(activeTab).fadeIn(); //Fade in the active ID content
		return false;
	});

});
    </script>
    <script type="text/javascript">
    $(function(){
        $('.column').equalHeight();
    });
</script>

</head>


<body>

	<header id="header">
		<hgroup>
			<h1 class="site_title"><a href="index.html">Administrador</a></h1>
			<h2 class="section_title">PWS_Restaurante</h2><div class="btn_view_site"><a href="../logout.php">salir</a></div>
		</hgroup>
	</header> <!-- end of header bar -->
	
	<section id="secondary_bar">
		<div class="user">
			<p>Bienvenido: Admin</p>
			<!-- <a class="logout_user" href="#" title="Logout">Logout</a> -->
		</div>
		<div class="breadcrumbs_container">
			<article class="breadcrumbs"><a href="../index3.html">Login</a> <div class="breadcrumb_divider"></div> <a class="current">Admin</a></article>
		</div>
	</section><!-- end of secondary bar -->
	
	<aside id="sidebar" class="column">
		<form class="quick_search">
			<input type="text" value="Buscar" onFocus="if(!this._haschanged){this.value=''};this._haschanged=true;">
		</form>
		<hr/>
		<h3>Menú</h3>
		<ul class="toggle">
			<li class="icn_categories"><a href="#">Listar</a></li>
            <li class="icn_new_article"><a href="#">Agregar</a></li>
			<li class="icn_edit_article"><a href="#">Editar</a></li>
			
		</ul>
		<h3>Galeria</h3>
        
        
        	<ul class="toggle">
			<li class="icn_categories"><a href="#">Listar</a></li>
            <li class="icn_new_article"><a href="#">Agregar</a></li>
			<li class="icn_edit_article"><a href="#">Editar</a></li>
			
		</ul>
	

		<h3>Noticias</h3>
		<ul class="toggle">
			<li class="icn_settings"><a href="frmAdminNews.php">Listar</a></li>
			<li class="icn_security"><a href="frmAddNew.php">Agregar</a></li>
			
		</ul>
        
        <h3>Boletines</h3>
		<ul class="toggle">
			<li class="icn_settings"><a href="frmSendNesLatter.php">Nuevo</a></li>
			
		</ul>
		
		<footer>
			<hr />
			<p><strong>Copyright &copy; PWS-Restaurante</strong></p>
			
		</footer>
	</aside><!-- end of sidebar -->
	
	<section id="main" class="column">
		
		<h4 class="alert_info">Bienvenido al panel de administración de PWS-Restaurante.</h4>
		
		
		
	
	
		</header>

	
		<div class="clear"></div>
		
		<article class="module width_full">
			<header><h3>Agregar Noticia</h3></header>
				<div class="module_content">
						<fieldset>
							<label>Titulo</label>
							<input type="text">
						</fieldset>
                        
                        <fieldset>
							<label>Fotografía</label>
							<input name="" type="file">
						</fieldset>
                        
						<fieldset>
							<label>Conrtenido</label>
							<textarea rows="12"></textarea>
						</fieldset>
					
					<div class="clear"></div>
				</div>
			<footer>
				<div class="submit_link">
					
					<input type="submit" value="Publicar" class="alt_btn">
					<input type="submit" value="Reset">
				</div>
			</footer>
		</article><!-- end of post new article -->
		
		<h4 class="alert_warning">A Warning Alert</h4>
		
		<h4 class="alert_error">An Error Message</h4>
		
		<h4 class="alert_success">A Success Message</h4>
		

		<div class="spacer"></div>
	</section>


</body>

</html>