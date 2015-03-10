<?php
/********************************************************
Name: frmGesNoticias-Listar.php
Autor name: Ángel Odilón Sierra González
Modification autor name: 
Creation date: 30/01/2015
Modification date:
Description: this is a Admin/GestiondeNoticias-Listar, form to restautant project, here list dates of differents news 
********************************************************/
?>
<!doctype html>
<html lang="en">

<head>
	<meta charset="utf-8"/>
	<title>Admin PWS-</title>
	
	<link rel="stylesheet" href="view/css/layout.css" type="text/css" media="screen" />
	<!--[if lt IE 9]>
	<link rel="stylesheet" href="css/ie.css" type="text/css" media="screen" />
	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
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
	
		<hr/>
		<h3>Menú</h3>
		<ul class="toggle">
			<li class="icn_categories"><a href="#">Listar</a></li>
           	<li class="icn_new_article"><a href="frmNewMenu.php">Agregar</a></li>
			
			
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
	
		<article class="module width_3_quarter">
		<header><h3 class="tabs_involved">Listado Noticias</h3>
		<ul class="tabs">
   			<li><a href="#tab1">1</a></li>
    		<li><a href="#tab2">2</a></li>
		</ul>
		</header>

		<div class="tab_container" >
			<div id="tab1" class="tab_content">
				<table class="tablesorter" cellspacing="0"> 
			<thead> 
			<tr> 
   					<th>id</th> 
    				<th>Titulo</th> 
    				<th>Fecha</th> 
    				<th>Lecturas</th> 
    				<th>Acción</th> 
				</tr> 
			</thead> 
			<tbody> 
				<tr> 
   					<td>1</td> 
    				<td>MEJORES CUALIDADES ORGANOLÉPTICAS SI SE COCINAN A GRAN ALTITUD</td> 
    				<td>25/09/2014</td> 
    				<td>102</td> 
    				<td><input type="image" src="view/images/icn_edit.png" title="Edit"><input type="image" src="view/images/icn_trash.png" title="Trash"></td> 
				</tr> 
<tr> 
   					<td>2</td> 
    				<td>ENCUESTA DE SALUD Y BIENESTAR GLOBAL</td> 
    				<td>27/09/2014</td> 
    				<td>106</td> 
    				<td><input type="image" src="view/images/icn_edit.png" title="Edit"><input type="image" src="view/images/icn_trash.png" title="Trash"></td> 
				</tr>
                
				<tr> 
   					<td>3</td> 
    				<td>LOS CONSUMIDORES CHINOS DESCONFÍAN DEL ARROZ QUE PRODUCE SU PAÍS</td> 
    				<td>27/01/2015</td> 
    				<td>104</td> 
    				<td><input type="image" src="view/images/icn_edit.png" title="Edit"><input type="image" src="view/images/icn_trash.png" title="Trash"></td> 
				</tr> 
			
            	<tr> 
   					<td>4</td> 
    				<td>MEJORES CUALIDADES ORGANOLÉPTICAS SI SE COCINAN A GRAN ALTITUD</td> 
    				<td>25/09/2014</td> 
    				<td>102</td> 
    				<td><input type="image" src="view/images/icn_edit.png" title="Edit"><input type="image" src="view/images/icn_trash.png" title="Trash"></td> 
				</tr> 
<tr> 
   					<td>5</td> 
    				<td>ENCUESTA DE SALUD Y BIENESTAR GLOBAL</td> 
    				<td>27/09/2014</td> 
    				<td>106</td> 
    				<td><input type="image" src="view/images/icn_edit.png" title="Edit"><input type="image" src="view/images/icn_trash.png" title="Trash"></td> 
				</tr>
			</tbody> 
			</table>
			</div><!-- end of #tab1 -->
			
			<div id="tab2" class="tab_content">
			<table class="tablesorter" cellspacing="0"> 
			<thead> 
				<tr> 
   					<th>id</th> 
    				<th>Titulo</th> 
    				<th>Fecha</th> 
    				<th>Lecturas</th> 
    				<th>Acción</th> 
				</tr> 
			</thead> 
			<tbody> 
				<tr> 
   					<td>6</td> 
    				<td>MEJORES CUALIDADES ORGANOLÉPTICAS SI SE COCINAN A GRAN ALTITUD</td> 
    				<td>25/09/2014</td> 
    				<td>102</td> 
    				<td><input type="image" src="view/images/icn_edit.png" title="Edit"><input type="image" src="view/images/icn_trash.png" title="Trash"></td> 
				</tr> 
<tr> 
   					<td>7</td> 
    				<td>ENCUESTA DE SALUD Y BIENESTAR GLOBAL</td> 
    				<td>27/09/2014</td> 
    				<td>106</td> 
    				<td><input type="image" src="view/images/icn_edit.png" title="Edit"><input type="image" src="view/images/icn_trash.png" title="Trash"></td> 
				</tr>
                
				<tr> 
   					<td>8</td> 
    				<td>LOS CONSUMIDORES CHINOS DESCONFÍAN DEL ARROZ QUE PRODUCE SU PAÍS</td> 
    				<td>27/01/2015</td> 
    				<td>104</td> 
    				<td><input type="image" src="view/images/icn_edit.png" title="Edit"><input type="image" src="view/images/icn_trash.png" title="Trash"></td> 
				</tr> 
			
            	<tr> 
   					<td>9</td> 
    				<td>MEJORES CUALIDADES ORGANOLÉPTICAS SI SE COCINAN A GRAN ALTITUD</td> 
    				<td>25/09/2014</td> 
    				<td>102</td> 
    				<td><input type="image" src="view/images/icn_edit.png" title="Edit"><input type="image" src="view/images/icn_trash.png" title="Trash"></td> 
				</tr> 
<tr> 
   					<td>10</td> 
    				<td>ENCUESTA DE SALUD Y BIENESTAR GLOBAL</td> 
    				<td>27/09/2014</td> 
    				<td>106</td> 
    				<td><input type="image" src="view/images/icn_edit.png" title="Edit"><input type="image" src="view/images/icn_trash.png" title="Trash"></td> 
				</tr>
               
			</tbody> 
			</table>

			</div><!-- end of #tab2 -->
            	
		</div><!-- end of .tab_container -->
		
		</article><!-- end of content manager article -->
		
</body>

</html>