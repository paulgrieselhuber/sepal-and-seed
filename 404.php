<?php get_header(); ?>

			<div id="content">

				<div id="inner-content" class="wrap row">

					<main id="main" class="col-xs-12 col-sm-12 col-md-12 col-lg-12" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">

						<article id="post-not-found" class="hentry cf">

							<header class="article-header">

								<h1><?php _e( '404: Looks like we couldn\'t find that page', 'sepalandseedtheme' ); ?></h1>

							</header>

							<section class="entry-content">

								<p><?php _e( 'Try a quick search to see if the page may have moved.', 'sepalandseedtheme' ); ?></p>

							</section>

							<section class="search">

									<p><?php get_search_form(); ?></p>

							</section>

							<footer class="article-footer">

									<p><?php _e( 'This is the 404.php template.', 'sepalandseedtheme' ); ?></p>

							</footer>

						</article>

					</main>

				</div>

			</div>

<?php get_footer(); ?>
