<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Liverpool_FC
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info">
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'coc' ) ); ?>"><?php printf( esc_html__( 'Proudly powered by %s', 'coc' ), 'WordPress' ); ?></a>
			<span class="sep"> | </span>
		</div><!-- .site-info -->
        
		<!-- Footer -->
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <ul class="list-inline text-center">
                        <li>
                            <a href="#">
                                <span class="fa-stack fa-lg">
                                    <i class="fa fa-circle fa-stack-2x"></i>
                                    <i class="fa fa-twitter fa-stack-1x fa-inverse"></i>
                                </span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="fa-stack fa-lg">
                                    <i class="fa fa-circle fa-stack-2x"></i>
                                    <i class="fa fa-facebook fa-stack-1x fa-inverse"></i>
                                </span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="fa-stack fa-lg">
                                    <i class="fa fa-circle fa-stack-2x"></i>
                                    <i class="fa fa-github fa-stack-1x fa-inverse"></i>
                                </span>
                            </a>
                        </li>
                    </ul>
                    <p class="copyright text-muted">Copyright &copy; LFC Liverpool 2015</p>
                </div>
            </div>
        </div>
	</footer><!-- #colophon -->
	<!-- jQuery -->
    <script src="wp-content/themes/coc/assets/js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="wp-content/themes/coc/assets/js/bootstrap.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="wp-content/themes/coc/assets/js/clean-blog.min.js"></script>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
