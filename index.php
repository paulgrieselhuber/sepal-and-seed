<?php get_header(); ?>

			<div id="content">

				<div id="inner-content" class="wrap row">

					<div class="hero">

						<div class="hero-inner">

							<img src="<?php echo get_template_directory_uri() . '/home-featured-image.jpg'; ?>" alt="" />

							<div class="peer-buttons">

								<a href="https://sepalandseed.com/documentation" class="secondary-btn btn">View Documentation</a>
								<a href="https://wordpress.org/themes/sepal-and-seed/" class="primary-btn btn">Download Theme</a>

							</div>

							<h1>Sepal and Seed</h1>

							<p>Sepal and Seed is a responsive theme designed from the ground up to be <em>extremely</em> fast and lightweight. It is ideal for either for organizations whose audience is in the developing world with low bandwith connections, or those who just want a really fast site and don't need lots of bells and whistles to get the job done.</p>

							<p>Page sizes are under 50kb out of the box, compared to more than 350kb (<em>more than <strong>7 times</strong> that number</em>) for most Wordpress themes (including the TwentyXX series). It uses flexbox for layout to allow for a small code footprint, and while minimal, is ultra-modern in every way. Read about the inspiration for the theme <a href="https://www.paulgrieselhuber.com/sepal-and-seed-wordpress-for-the-developing-world">here</a>.</p>

						</div>

					</div>

					<main id="main" class="col-xs-12 col-sm-8 col-md-8 col-lg-8" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">

						<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

						<article id="post-<?php the_ID(); ?>" <?php post_class( 'cf' ); ?> role="article">

							<header class="article-header">

								<h2 class="h2 entry-title"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>

							</header>

							<section class="entry-content">
								<?php the_excerpt(); ?>

								<p class="byline entry-meta vcard">
   								<time class="updated entry-time" datetime="<?php get_the_time('Y-m-d'); ?>" itemprop="datePublished"><i class="icon-clock"></i><?php the_time(get_option('date_format')); ?></time>
   								<span itemprop="interactionCount" itemscope itemptype="http://schema.org/commentCount"><i class="icon-comment-empty"></i><?php comments_number( '', '1 comment', '% comments' ); ?></span>
								</p>
							</section>

						</article>

						<?php endwhile; ?>

								<?php sepal_and_seed_page_navi(); ?>

						<?php else : ?>

								<article id="post-not-found" class="hentry cf">
										<header class="article-header">
											<h1><?php _e( 'Oops, Post Not Found!', 'sepalandseedtheme' ); ?></h1>
									</header>
										<section class="entry-content">
											<p><?php _e( 'Uh Oh. Something is missing. Try double checking things.', 'sepalandseedtheme' ); ?></p>
									</section>
									<footer class="article-footer">
											<p><?php _e( 'This is the error message in the index.php template.', 'sepalandseedtheme' ); ?></p>
									</footer>
								</article>

						<?php endif; ?>

					</main>

					<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
						<?php get_sidebar(); ?>
					</div>

				</div>

			</div>


<?php get_footer(); ?>
