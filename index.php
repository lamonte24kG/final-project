<?php get_header();
?>
<!-- index pages is assigned to blog page-->
<!-- the index.php is assigned to the blog page!!!--> 
<!--if we have post or pages show them-->

<div id="hero">
<img src="<?php echo get_template_directory_uri() ;?>/images/owlnewmain.png)" alt=""><!-- alt name showing on page -->
</div>

<div id="wrapper">
<main>
<?php if(have_posts()) : ?>
<!--show post by using a php while loop-->
<?php while(have_posts()) : the_post() ; ?>
<article class="post">
<h2 class="title">
<a href="<?php the_permalink(); ?>">
<?php the_title() ; ?>
</a>
</h2>
<div class="meta">
<span><b>Posted By:</b><?php the_author(); ?></span>
<span><b>Posted On:</b><?php the_time('F j, Y g:i a'); ?></span>

</div>
<!-- close meta -->

<div class="thumbnail">
    <?php if(has_post_thumbnail()) :?>
    <a href="<?php the_permalink() ;?>">
    <?php the_post_thumbnail(); ?>
    </a>
    <?php endif ?>
</div>
<!--end thumbnail-->  

<?php the_excerpt() ; ?>
<span class="block">
<a href="<?php the_permalink(); ?>"> Read more about
<?php the_title(); ?>
</a>
</span>


</article>

<?php endwhile ; ?>
<?php else : ?>
<h2>
    Search Results:
</h2>
<p>Sorry, no post were found matching your request. Please try searching again with different key words.
</p>
<?php get_search_form();  ?>

<?php endif; ?>
</main>



<?php get_sidebar(); ?>

</div>
<!--close wrapper-->  

<?php get_footer();
?>



