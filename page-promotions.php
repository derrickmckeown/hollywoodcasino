<?php /* Template Name: Promotions */ ?>
<?php get_header(); ?>

<div class="col-lg-2 col-md-2"></div>
<div id="main" class="<?php echo $main_class;?> col-lg 10 col-md-10 clearfix" role="main">
    <?php query_posts('post_type=promotions') ?>
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <article id="post-<?php the_ID(); ?>" <?php post_class('clearfix col-lg-4 col-md-4'); ?> role="article">
        <div class="promotion">
            <header class="article-header">
                <h1 class="entry-title page-title">
                    <?php the_title(); ?>
                </h1>
            </header>
            <section class="entry-content clearfix">
                <?php 
if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
	the_post_thumbnail('600');
} 
?>
                <?php wp_link_pages( array(
								'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'scaffolding' ) . '</span>',
								'after'       => '</div>',
								'link_before' => '<span>',
								'link_after'  => '</span>',
							) ); ?>
            </section>
            <footer class="article-footer">
                <?php the_tags('<p class="tags"><span class="tags-title">Tags:</span> ', ', ', '</p>'); ?>
            </footer>
        </div>
    </article>
    <?php endwhile; ?>
    <?php else : ?>
    <?php get_template_part('includes/template','error'); // WordPress template error message ?>
    <?php endif; ?>
</div>
<?php //END #main ?>
<?php get_footer();
