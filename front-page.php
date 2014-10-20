<?php get_header(); ?>

<div class="col-lg-9 col-md-9 banner-wrap nomargin nopadding">
    <div class="banner base-check"> <a class="skip-link screen-reader-text" href="#current-events"> <span>View Upcoming Events</span>
        <?php _e( '<img src="/wp-content/themes/hollywood/images/arrow.png" alt="arrow" />', 'test' ); ?>
        </a> <?php echo get_new_royalslider(1); ?>
        <div class="spacer"></div>
    </div>
</div>
<!-- end banner -->

<div class="col-lg-3 col-md-3 give-width nomargin nopadding">
    <div class="cta nomargin give-height add-class whiteback">
        <?php function_exists('dynamic_sidebar') && dynamic_sidebar('cta1') ?>
    </div>
    <div class="cta nomargin give-height add-class blackback">
        <?php function_exists('dynamic_sidebar') && dynamic_sidebar('cta2') ?>
    </div>
</div>
<div class="col-lg-2 col-md-2 redgutter check-width desktop-only give-height"> </div>
<div class="col-lg-10 col-md-10 nomargin nopadding col-wrap">
    <div class="col-lg-4 col-md-4 check-width blogpost give-height nomargin blackback" id="current-events">
        <?php
global $post;
$args = array( 'posts_per_page' => 1, 'post_type' => 'events' );
$myposts = get_posts( $args );
foreach( $myposts as $post ) :	setup_postdata($post); ?>
        <div class="date">
            <span class='month'><?php the_field('event_month') ?></span>
            <span class='day'><?php the_field('event_day'); ?></span>
        </div>
        <div class="thumbnail">
            <?php 
if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
	the_post_thumbnail('scaffolding-thumb-600');
} 
?>
        </div>
        <p class="h2"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>">
            <?php the_title(); ?>
            </a></p>
        <?php the_excerpt(); ?>
        <p class="center"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/whitearrow.png" alt="event" /></a></p>
        <?php endforeach; ?>
    </div>
    <!-- end currentevent -->
    
    <div class="col-lg-4 col-md-4 blogpost check-width give-height nomargin whiteback">
        <?php
global $post;
$args = array( 'posts_per_page' => 1, 'post_type' => 'events' );
$myposts = get_posts( $args );
foreach( $myposts as $post ) :	setup_postdata($post); ?>
        <div class="date">
            <span class='month'><?php the_field('event_month') ?></span>
            <span class='day'><?php the_field('event_day'); ?></span>
        </div>
        <div class="thumbnail">
            <?php 
if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
	the_post_thumbnail('scaffolding-thumb-600');
} 
?>
        </div>
        <p class="h2"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>">
            <?php the_title(); ?>
            </a></p>
        <?php the_excerpt(); ?>
        <p class="center"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/greyarrow.png" alt="event" /></a></p>
        <?php endforeach; ?>
    </div>
    <!-- end currentevent -->
    
    <div class="cta nomargin give-height greyback col-lg-4 col-md-4">
        <?php function_exists('dynamic_sidebar') && dynamic_sidebar('cta3') ?>
    </div>
    <!-- end cta --> 
</div>
<div class="col-lg-2 col-md-2 redgutter give-height desktop-only"> </div>
<div class="col-lg-10 nopadding" id="renovations">
    <div class="col-lg-4 countdown greyback give-height"> 
    <h1>Renovation<br/>Countdown</h1>
                <div class="digits"></div>
                <h1>Hours</h1>
    </div>
    <div class="col-lg-4 ren blackback give-height">
        <p class="h2 alert-btn">
            New Casino Construction
        </p>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris bibendum justo eu luctus accumsan. Cras placerat eros quam, tempor facilisis ex blandit sit amet. Etiam posuere dictum sem non consectetur. Sed aliquam sed nisl et ultricies. Pellentesque hendrerit elit a neque dignissim viverra. Nulla facilisi. Cras sed mi et ante mollis fermentum quis eget sem.</p>
        <p><a href="#">Read More ></a></p>
    </div>
    <div class="col-lg-4 ren redback give-height">
        <p class="h2 white-btn">
            Traffic Reports
        </p>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris bibendum justo eu luctus accumsan. Cras placerat eros quam, tempor facilisis ex blandit sit amet. Etiam posuere dictum sem non consectetur. Sed aliquam sed nisl et ultricies. Pellentesque hendrerit elit a neque dignissim viverra. Nulla facilisi. Cras sed mi et ante mollis fermentum quis eget sem.</p>
        <p><a href="#">Read More ></a></p>
    </div>
</div>
<div class="col-lg-2 desktop-only col-md-2 greygutter"> </div>
<div class="col-lg-10 nopadding" id="contactbottom">
    <div class="col-lg-4 contact darkgreyback contactbox">
        <?php function_exists('dynamic_sidebar') && dynamic_sidebar('hp-contact') ?>
    </div>
    <div class="col-lg-8 map nomargin nopadding darkgreyback contactbox">
        <div class="col-lg-5">
            <h3 class="h2 nopadding nomargin">Hollywood Park Casino</h3>
            <p>3883 W. Century Blvd.<br/>
                Los Angeles, CA 90303</p>
            <p class="verticle-align google-icon"><a href="https://www.google.com/maps/place/3883+W+Century+Blvd,+Inglewood,+CA+90303/@33.9472293,-118.3402142,17z/data=!3m1!4b1!4m2!3m1!1s0x80c2b65be2e89d21:0x5ec7536a4846f685" target="_blank">Google Maps</a></p>
        </div>
    </div>
</div>
<div class="col-lg-10 col-md-10 nopadding" id="maincontent">
<div id="main" class="<?php echo $main_class;?> clearfix" role="main">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <?php endwhile; ?>
    <?php else : ?>
    <?php get_template_part('includes/template','error'); // WordPress template error message ?>
    <?php endif; ?>
</div>
<?php //END #main ?>
<?php get_footer();

