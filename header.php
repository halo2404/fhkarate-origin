<!DOCTYPE html>
<html lang="de">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
   
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
		
    <title><?php wp_title(); bloginfo('name');?></title>
	
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
	  <?php wp_head(); ?>
  </head>
  <body>
  
    <!-- Fixed navbar -->
    <nav class="navbar navbar-default navbar-fixed-top visible-md visible-sm visible-xs">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="<?php bloginfo('url') ?>"><?php wp_title(); bloginfo('name');?></a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="<?php bloginfo('url') ?>">Home</a></li>
            <li><a href="<?php bloginfo('url') ?>/news">News</a></li>
            <li><a href="<?php bloginfo('url') ?>/karate">Karate</a></li>
            <li><a href="<?php bloginfo('url') ?>/trainer">Trainer</a></li>
            <li><a href="<?php bloginfo('url') ?>/zeiten">Zeiten</a></li>
            <li><a href="<?php bloginfo('url') ?>/anfahrt">Anfahrt</a></li>
            <li><a href="<?php bloginfo('url') ?>/bilder">Bilder</a></li>
            <li><a href="<?php bloginfo('url') ?>/termine">Termine</a></li>
            <li><a href="<?php bloginfo('url') ?>/literatur">Literatur</a></li>
            <li><a href="<?php bloginfo('url') ?>/links">Links</a></li>
            <li><a href="<?php bloginfo('url') ?>/kontakt">Kontakt</a></li>
            <li><a href="<?php bloginfo('url') ?>/impressum">Impressum</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

  
  <div class="jumbotron">
	<div class="container">
		<div class="row">
			<div class="col-md-3 hidden-sm hidden-xs">
				<p><img src="<?php bloginfo('template_directory'); ?>/images/fh-karate-logo-final_006699_75_progressive.png" alt="Logo FH-Karate" class="img-responsive"></p>
			</div>
			<div class="col-md-9" id="header">
				<p>Frankfurt University of Applied Sciences <small>(Fachhochschule Frankfurt am Main)</small><br>- Hochschulsport -<br>KARATE</p>
			</div>
		</div>
	</div>
</div>
