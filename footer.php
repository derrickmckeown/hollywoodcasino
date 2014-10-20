<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 */
?>


	</div><?php //END #content ?>

	<footer id="colophon" class="footer clearfix" role="contentinfo">

		
<div class="col-lg-4">
			<p class="source-org copyright">&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?>. All Rights Reserved.</p>
            </div>
            <div class="col-lg-8" id="footernav">
<nav role="navigation">
				<?php scaffolding_footer_nav(); ?>
			</nav>
            </div>
		

	</footer>

	<p id="back-top">
        <a href="#top"><i class="fa fa-angle-up"></i></a>
    </p>
</div>
</div><?php //END #container ?>

<?php wp_footer(); ?>

</body>
</html>