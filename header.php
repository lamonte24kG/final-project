<!DOCTYPE html>
<html <?php language_attributes() ;?> >
<head>
<meta charset="<?php bloginfo('charset');?>">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title><?php bloginfo('name');?></title>
<link href="<?php bloginfo('stylesheet_url');?>" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Archivo Black">
<?php wp_head();  ?> 
<!--htis function will allow your plugin information i.e. stylesheet, javascript etc to display before the closing head-->
</head>
<body <?php body_class(); ?>>
<header>
<div id="top">
</div>
<!--end div top-->
<div id="inner-header">
<a href="<?php echo get_home_url() ;?>">
<img src="<?php echo get_template_directory_uri() ;?>/images/owlmainlogo.png" alt="logo" id="logo">
</a>

<!-- our main navigation  --> 

<nav id="site-navigation" class="main-navigation">
<button class="nav-button">Toggle Navigation</button>
<?php
$args_primary = array(
'theme_location' => 'primary',
'items_wrap' => '<ul class="primary-nav">%3$s</ul>'
);?>
<?php wp_nav_menu($args_primary); ?>
</nav>
</div>
<!--close div inner-header--> 

<div id="hero">


</div>
<!--end hero--> 

</header>