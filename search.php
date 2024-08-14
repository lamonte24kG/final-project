<?php get_header();
?>
<!-- search page is assigned to search -->  
<!-- index pages is assigned to blog page-->
<!-- the index.php is assigned to the blog page!!!--> 
<!--if we have post or pages show them-->

<div id="wrapper">
    <!-- we will add picture here -->
<main>
<?php if(have_posts()) : ?>
<!--show post by using a php while loop-->

<h2>Search Results For: <?php echo get_search_query();?>
<!-- show how many matching post found -->

<p>Our findings for
<?php /* Search Count */
$allsearch = new WP_Query("s=$s&showposts=-1"); $key = wp_specialchars($s, 1); $count = $allsearch->post_count; _e(''); _e('<span class="search-terms">'); echo $key; _e('</span>'); _e(' &mdash; '); echo $count . ' '; _e('articles/pages'); wp_reset_query(); ?></p>
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
<?php if(has_post_thumbnail()) : ?>
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
    No Content For:
    <?php echo get_search_query();?>
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



