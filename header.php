<?php
/**
 * @package WordPress
 * @subpackage Rep_Template
 * 
 */
?>
<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>

<head>
	
	<meta http-equiv="Content-Type" content="<?php bloginfo( 'html_type' ); ?>" />
	<meta charset="<?php bloginfo( 'charset' ); ?>" />

	<title><?php wp_title( '&laquo;', true, 'right' ); ?> <?php bloginfo( 'name' ); ?></title>
	
	<link rel="stylesheet" href="<?php bloginfo( 'stylesheet_url' ); ?>" type="text/css" media="screen" />
	<link rel="stylesheet" href="<?php bloginfo( 'template_url' ); ?>/lib/custom_styles.php" type="text/css" media="screen" />

	<!--[if IE 7]>
		<link rel="stylesheet" href="<?php bloginfo( 'template_url' ); ?>/ie-style.css" type="text/css" media="screen" />
	<![endif]-->

	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
	<link rel="shortcut icon" href="<?php bloginfo( 'template_url' ); ?>/favicon.ico" />

	<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>