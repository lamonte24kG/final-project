<?php get_header();
/* Template Name: About Page */
?>

<!-- the index.php is assigned to the blog page!!!--> 
<!--if we have post or pages show them-->

<div id="hero">
<img src="<?php echo get_template_directory_uri() ;?>/images/owltable.png)" alt=""><!-- alt name showing on page -->
</div>

<div id="wrapper">
<main>
<?php if(have_posts()) : ?>
<?php if(has_post_thumbnail()) : ?>
<?php the_post_thumbnail(); ?>
<?php endif ?>


<!--show post by using a php while loop-->
<?php while(have_posts()) : the_post() ; ?>
<?php the_content() ; ?>
<?php endwhile ; ?>
<?php else : ?>
<h2>
<?php echo wpautop('Sorry, no posts were found!'); ?>
</h2>
<?php endif; ?>
</main>

<aside id="secondary" class="widget-area">
<?php dynamic_sidebar('sidebar-about'); ?>
</aside>


</div>
<!--close wrapper-->  

<?php get_footer();
?>



