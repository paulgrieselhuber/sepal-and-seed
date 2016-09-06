<?php get_header(); ?>

			<div id="content">

				<div id="inner-content" class="wrap row">

						<main id="main" class="col-xs-12 col-sm-8 col-md-8 col-lg-8" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">

							<?php
							the_archive_title( '<h1>', '</h1>' );
							the_archive_description( '<div class="taxonomy-description">', '</div>' );
							?>

							<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

							<article id="post-<?php the_ID(); ?>" <?php post_class( 'cf' ); ?> role="article">

								<header class="entry-header article-header">

									<h2 class="search-title entry-title"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>

															<p class="byline entry-meta vcard">
																	<?php printf( __( 'Posted %1$s by %2$s', 'bonestheme' ),
																		/* the time the post was published */
																		'<time class="updated entry-time" datetime="' . get_the_time('Y-m-d') . '" itemprop="datePublished">' . get_the_time(get_option('date_format')) . '</time>',
																				/* the author of the post */
																				'<span class="by">by</span> <span class="entry-author author" itemprop="author" itemscope itemptype="http://schema.org/Person">' . get_the_author_link( get_the_author_meta( 'ID' ) ) . '</span>'
																	); ?>
															</p>

								</header>

								<section class="entry-content">
										<?php the_excerpt( '<span class="read-more">' . __( 'Read more &raquo;', 'bonestheme' ) . '</span>' ); ?>

								</section>

								<footer class="article-footer">

									<?php if(get_the_category_list(', ') != ''): ?>
														<?php printf( __( 'Filed under: %1$s', 'bonestheme' ), get_the_category_list(', ') ); ?>
														<?php endif; ?>

													<?php the_tags( '<p class="tags"><span class="tags-title">' . __( 'Tags:', 'bonestheme' ) . '</span> ', ', ', '</p>' ); ?>

								</footer> <!-- end article footer -->
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
												<p><?php _e( 'This is the error message in the archive.php template.', 'bonestheme' ); ?></p>
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
