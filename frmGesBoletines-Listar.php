<?php
/********************************************************
Name: frmGesBoletines-Listar.php
Autor name: Ángel Odilón Sierra González
Modification autor name: 
Creation date: 30/01/2015
Modification date:
Description: this is a newsletter manager, form to restautant project, here list dates of differents mails 
********************************************************/
?>
<!doctype html>
<html lang="en">

<head>
	<meta charset="utf-8"/>
	<title>gesBoletines</title>
	
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
		<form class="quick_search">
			<input type="text" value="Buscar" onFocus="if(!this._haschanged){this.value=''};this._haschanged=true;">
		</form>
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
		
		<h4 class="alert_info">Lista de Boletines enviados.</h4>
			
		<article class="module width_3_quarter">
		<header><h3 class="tabs_involved"></h3>
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
    				<th>Asunto</th> 
    				<th>Fecha de Envío</th> 
                    <th></th>
				</tr> 
			</thead> 
			<tbody> 
				<tr> 
   					<td>1</td> 
    				<td>Asunto 1, promoción</td> 
    				<td>25/09/2014</td> 
    				<td><input type="image" src="view/images/icn_edit.png" title="Edit"><input type="image" src="view/images/icn_trash.png" title="Trash"></td> 
				</tr> 
<tr> 
   					<td>2</td> 
    				<td>Asunto dos, ejemplo</td> 
    				<td>27/09/2014</td> 
    				<td><input type="image" src="view/images/icn_edit.png" title="Edit"><input type="image" src="view/images/icn_trash.png" title="Trash"></td> 
				</tr>
                
				<tr> 
   					<td>3</td> 
    				<td>Asunto tres, al correo</td> 
    				<td>27/01/2015</td>
    				<td><input type="image" src="view/images/icn_edit.png" title="Edit"><input type="image" src="view/images/icn_trash.png" title="Trash"></td> 
				</tr> 
			
            	<tr> 
   					<td>4</td> 
    				<td>Este es el asunto 4</td> 
    				<td>25/09/2014</td>
    				<td><input type="image" src="view/images/icn_edit.png" title="Edit"><input type="image" src="view/images/icn_trash.png" title="Trash"></td> 
				</tr> 
<tr> 
   					<td>5</td> 
    				<td>Este es el asunto cinco</td> 
    				<td>27/09/2014</td>
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
    				<th>Asunto</th> 
    				<th>Fecha de Envío</th> 
                    <th></th>
				</tr> 
			</thead> 
			<tbody> 
				<tr> 
   					<td>1</td> 
    				<td>Asunto 1, promoción</td> 
    				<td>25/09/2014</td> 
    				<td><input type="image" src="view/images/icn_edit.png" title="Edit"><input type="image" src="view/images/icn_trash.png" title="Trash"></td> 
				</tr> 
<tr> 
   					<td>2</td> 
    				<td>Asunto dos, ejemplo</td> 
    				<td>27/09/2014</td> 
    				<td><input type="image" src="view/images/icn_edit.png" title="Edit"><input type="image" src="view/images/icn_trash.png" title="Trash"></td> 
				</tr>
                
				<tr> 
   					<td>3</td> 
    				<td>Asunto tres, al correo</td> 
    				<td>27/01/2015</td>
    				<td><input type="image" src="view/images/icn_edit.png" title="Edit"><input type="image" src="view/images/icn_trash.png" title="Trash"></td> 
				</tr> 
			
            	<tr> 
   					<td>4</td> 
    				<td>Este es el asunto 4</td> 
    				<td>25/09/2014</td>
    				<td><input type="image" src="view/images/icn_edit.png" title="Edit"><input type="image" src="view/images/icn_trash.png" title="Trash"></td> 
				</tr> 
<tr> 
   					<td>5</td> 
    				<td>Este es el asunto cinco</td> 
    				<td>27/09/2014</td>
    				<td><input type="image" src="view/images/icn_edit.png" title="Edit"><input type="image" src="view/images/icn_trash.png" title="Trash"></td> 
				</tr>
			</tbody> 
			</table>
			</div><!-- end of #tab2 -->
			
		</div><!-- end of .tab_container -->
		
		</article><!-- end of content manager article -->
		<div class="clear"></div>
		
		
		<h4 class="alert_warning">A Warning Alert</h4>
		
		<h4 class="alert_error">An Error Message</h4>
		
		<h4 class="alert_success">A Success Message</h4>
		
		<article class="module width_full">
			<header><h3>Basic Styles</h3></header>
				<div class="module_content">
					<h1>Header 1</h1>
					<h2>Header 2</h2>
					<h3>Header 3</h3>
					<h4>Header 4</h4>
					<p>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Cras mattis consectetur purus sit amet fermentum. Maecenas faucibus mollis interdum. Maecenas faucibus mollis interdum. Cras justo odio, dapibus ac facilisis in, egestas eget quam.</p>

<p>Donec id elit non mi porta <a href="#">link text</a> gravida at eget metus. Donec ullamcorper nulla non metus auctor fringilla. Cras mattis consectetur purus sit amet fermentum. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum.</p>

					<ul>
						<li>Donec ullamcorper nulla non metus auctor fringilla. </li>
						<li>Cras mattis consectetur purus sit amet fermentum.</li>
						<li>Donec ullamcorper nulla non metus auctor fringilla. </li>
						<li>Cras mattis consectetur purus sit amet fermentum.</li>
					</ul>
				</div>
		</article><!-- end of styles article -->
		<div class="spacer"></div>
	</section>


</body>

</html>