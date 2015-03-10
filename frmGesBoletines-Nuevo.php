<?php
/********************************************************
Name: frmGestBoletines-Nuevo.php
Autor name: Ángel  Odilón Sierra González
Modification autor name: 
Creation date: 30/01/2015
Modification date:
Description: this is a newslatter manager, form to restautant project, here send a eMail to users.
********************************************************/
?>
<!doctype html>
<html lang="en">

<head>
	<meta charset="utf-8"/>
	<title>gesBoletines</title>
	
	<link rel="stylesheet" href="view/css/layout.css" type="text/css" media="screen" />
	<script src="view/js/jquery-1.5.2.min.js" type="text/javascript"></script>
	<script src="view/js/hideshow.js" type="text/javascript"></script>
	<script src="view/js/jquery.tablesorter.min.js" type="text/javascript"></script>
	<script type="text/javascript" src="view/js/jquery.equalHeight.js"></script>
    <script type="text/javascript" src="view/js/gestion.js"></script>
	
</head>
<body>

	<header id="header">
		<hgroup>
			<h1 class="site_title"><a href="index.html">Administrador</a></h1>
			<h2 class="section_title">PWS_Restaurante</h2><div class="btn_view_site"><a href="logout.php">salir</a></div>
		</hgroup>
	</header> <!-- end of header bar -->

	<section id="secondary_bar">
		<div class="user">
			<p>Bienvenido: Admin</p>
			<!-- <a class="logout_user" href="#" title="Logout">Logout</a> -->
		</div>
		<div class="breadcrumbs_container">

			<article class="breadcrumbs"><a href="index3.html">Login</a> <div class="breadcrumb_divider"></div> <a class="current">Admin</a></article>

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
	
			
		</ul>
		<h3>Galeria</h3>
        	<ul class="toggle">
			<li class="icn_categories"><a href="#">Listar</a></li>
            <li class="icn_new_article"><a href="#">Agregar</a></li>
	
		</ul>
        
	<h3>Noticias</h3>
		<ul class="toggle">
		<ul class="toggle">
			<li class="icn_categories"><a href="#">Listar</a></li>
            <li class="icn_new_article"><a href="#">Agregar</a></li>
			
		</ul>
        
        <h3>Boletines</h3>
		<ul class="toggle">
			<ul class="toggle">
			<li class="icn_categories"><a href="#">Listar</a></li>
            <li class="icn_new_article"><a href="#">Nuevo</a></li>
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
		
        	<header><h3>Enviar Boletín</h3></header>
		
        		<div class="module_content">
						<fieldset>
							<label>Asunto</label>
							<input type="text" name="txtIssue" id="txtIssue">
						</fieldset>
                        
                        	<fieldset>
							<label>Link</label>
							<input type="text"  name="txtLink" id="txtLink">
						</fieldset>
                        
                        <fieldset>
							<label>Fotografía</label>
							<input type="file"  name="fldPhoto" id="fldPhoto">
						</fieldset>
					<div class="clear"></div>
				</div>
			<footer>
				<div class="submit_link">
					<input type="submit" value="Enviar" class="alt_btn" name="btnSend" id="btnSend">
					<input type="submit" value="Reset" name="btnSend" btn="btnSend">
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