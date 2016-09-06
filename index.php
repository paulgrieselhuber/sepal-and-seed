<?php get_header(); ?>

			<div id="content">

				<div id="inner-content" class="wrap row">

						<main id="main" class="col-xs-12 col-sm-8 col-md-8 col-lg-8" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">

							<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

							<article id="post-<?php the_ID(); ?>" <?php post_class( 'cf' ); ?> role="article">

								<header class="article-header">

									<h1 class="h2 entry-title"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h1>

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

									<?php bones_page_navi(); ?>

							<?php else : ?>

									<article id="post-not-found" class="hentry cf">
											<header class="article-header">
												<h1><?php _e( 'Oops, Post Not Found!', 'bonestheme' ); ?></h1>
										</header>
											<section class="entry-content">
												<p><?php _e( 'Uh Oh. Something is missing. Try double checking things.', 'bonestheme' ); ?></p>
										</section>
										<footer class="article-footer">
												<p><?php _e( 'This is the error message in the index.php template.', 'bonestheme' ); ?></p>
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
