<?php get_header(); ?>
<header>
	<?php wp_nav_menu(); ?>
</header>
<main>
	<h1><?php bloginfo("name") ?></h1>
	<?php bloginfo("description"); ?>
</main>
<?php get_footer(); ?>
