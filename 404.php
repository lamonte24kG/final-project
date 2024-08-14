<?php get_header();
?>
<!-- index pages is assigned to blog page-->
<!-- the index.php is assigned to the blog page!!!--> 
<!--if we have post or pages show them-->

<div id="wrapper">
<!-- add wrong page image-->
<main>
<h2>Uh Oh!
</h2>
<p>Nothing was found in this location. Maybe try a different search?
</p>
<?php get_search_form(); ?>
<h3>Or please browse our pages
</h3>
<?php wp_list_pages();?>
</main>

</div>
<!--close wrapper-->  

<?php get_footer();
?>



