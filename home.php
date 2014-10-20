<?php get_header(); ?>

<div id="blog-main">
    <div class="col-lg-2 col-md-2"></div>
    <div id="main" class="<?php echo $main_class;?> col-lg-10 col-md-10 clearfix nomargin nopadding" role="main">
        <?php $counter = 1; //counter tracks the number of the post we're on ?>
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <div class="col-lg-4 col-md-4 clearfix <?php if ($counter % 4 == 0) { echo 'blackback';} elseif ($counter % 4 == 1) { echo 'greyback';} elseif ($counter % 4 == 2) { echo 'whiteback';} elseif ($counter % 4 == 3) { echo 'blackback';}?> blog-post nomargin">
            <article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article">
                <h1 class="entry-title h2"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>">
                    <?php the_title(); ?>
                    </a></h1>
                <div class="thumbnail">
                    <?php 
if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
	the_post_thumbnail('scaffolding-thumb-600');
} 
?>
                </div>
                <p class="byline vcard"><?php printf(__('Posted <time class="updated" datetime="%1$s" pubdate><a href="%5$s" title="%6$s">%2$s</a></time> by <span class="author">%3$s</span> <span class="amp">&</span> filed under %4$s.', 'scaffolding'), get_the_time('Y-m-j'), get_the_time(get_option('date_format')), scaffolding_get_the_author_posts_link(), get_the_category_list(', '), get_permalink(), the_title_attribute(array('echo' => false)) ); ?></p>
                <section class="entry-content clearfix">
                    <?php the_excerpt('Read More...'); ?>
                </section>
                <footer class="article-footer">
                    <p class="tags">
                        <?php the_tags('<span class="tags-title">' . __('Tags:', 'scaffolding') . '</span> ', ', ', ''); ?>
                    </p>
                </footer>
            </article>
        </div>
        <?php $counter++; // This increases the value of $counter by 1 for every loop iteration ?>
        <?php endwhile; ?>
        <?php get_template_part('includes/template','pager'); //wordpress template pager/pagination ?>
        <?php else : ?>
        <?php get_template_part('includes/template','error'); //wordpress template error message ?>
        <?php wp_reset_postdata(); ?>
        <?php endif; ?>
    </div>
</div>
<?php get_footer(); ?>
