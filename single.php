<?php get_header();
?>
<!--this is the single post, will display the whole post-->
<!-- index pages is assigned to blog page-->
<!-- the index.php is assigned to the blog page!!!--> 
<!--if we have post or pages show them-->

<div id="wrapper">
<main>
<?php if(have_posts()) : ?>
<!--show post by using a php while loop-->
<?php while(have_posts()) : the_post() ; ?>

<article class="post">
<h2 class="title">

<?php the_title() ; ?>
</a>
</h2>
<div class="meta">
<span><b>Posted By:</b><?php the_author(); ?></span>
<span><b>Posted On:</b><?php the_time('F j, Y g:i a'); ?></span>

</div>
<!-- close meta -->
<?php the_content() ; ?>

</article>
<?php endwhile ; ?>
<?php else : ?>
<h2>
<?php echo wpautop('Sorry, no posts were found!'); ?>
</h2>
<?php endif; ?>
<?php comments_template(); ?>
</main>





</div>
<!--close wrapper-->  

<?php get_footer();
?>



