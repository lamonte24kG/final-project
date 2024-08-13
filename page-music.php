<?php get_header();
/* Template Name: Music Page */
?>

<!-- the index.php is assigned to the blog page!!!--> 
<!--if we have post or pages show them-->

<div id="wrapper">
<main>
<?php if(have_posts()) : ?>
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



<aside>


</aside>


</div>
<!--close wrapper-->  

<?php get_footer();
?>



