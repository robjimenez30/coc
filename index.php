<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Liverpool_FC
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<!-- Main Content -->
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                <div class="post-preview">
                    <a href="post.html">
                        <h2 class="post-title">
                            LEAD YOUR CLAN TO VICTORY
                        </h2>
                        <h3 class="post-subtitle">
                            Raise your own army of Barbarians, Archers, Hog Riders, Wizards, Dragons and other mighty fighters
                        </h3>
                    </a>
                    <p class="post-meta">Posted by <a href="#">Robert</a> on November 10, 2015</p>
                </div>
                <hr>
                <div class="post-preview">
                    <!-- <a href="post.html"> -->
                        <h2 class="post-title">
                            Play on iPad, iPhone and Android devices
                        </h2>
                    </a>
                    <p class="post-meta">Posted by <a href="#">Anthony</a> on November 10, 2015</p>
                </div>
                <hr>
                <div class="post-preview">
                    <!-- <a href="post.html"> -->
                        <h2 class="post-title">
                            Battle with players worldwide and take their Trophies
                        </h2>
                        <h3 class="post-subtitle">
                            Many say exploration is part of our destiny, but it’s actually our duty to future generations.
                        </h3>
                    </a>
                    <p class="post-meta">Posted by <a href="#">Clash of Clan</a> on November 10, 2015</p>
                </div>
                <hr>
                <div class="post-preview">
                    <!-- <a href="post.html"> -->
                        <h2 class="post-title">
                            Failure is not an option
                        </h2>
                        <h3 class="post-subtitle">
                            Fight against rival Clans in epic Clan Wars
                        </h3>
                    </a>
                    <p class="post-meta">Posted by <a href="#">Kenny</a> on November 10, 2015</p>
                </div>
                <hr>
            </div>
        </div>
    </div>

    <hr>

		<?php if ( have_posts() ) : ?>

			<?php if ( is_home() && ! is_front_page() ) : ?>
				<header>
					<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
				</header>
			<?php endif; ?>

			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

				<?php

					/*
					 * Include the Post-Format-specific template for the content.
					 * If you want to override this in a child theme, then include a file
					 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
					 */
					get_template_part( 'template-parts/content', get_post_format() );
				?>

			<?php endwhile; ?>

			<?php the_posts_navigation(); ?>

		<?php else : ?>

			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
