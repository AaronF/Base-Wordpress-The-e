<?php
/**
 * @package WordPress
 * @subpackage AF-Theme
 */
get_header();

get_sidebar("ttt");

  ?>
		<?php if ( have_posts() ) : ?>
            <div class="col-md-8 col-sm-8 content">
                <h2 class="title">
    				<?php printf( __( 'Search Results for: %s', 'mb' ), '<span>' . get_search_query() . '</span>' ); ?>
    			</h2>
        		<?php while ( have_posts() ) : the_post(); ?>

            		<article itemscope itemtype="http://schema.org/Article" id="post-<?php the_ID(); ?>">
            			<div class="article-title">
            				<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
                                <?php the_title('<h2 itemprop="name">', '</h2>'); ?>
                            </a>
            			</div>
            			<div class="article-meta" itemprop="datePublished" content="<?php echo get_the_date(); ?>">
            				<?php echo get_the_date(); ?>
            			</div>

            			<div class="article-body" itemprop="articleBody">
            				<?php the_content("Continue reading " . the_title('', '', false)); ?>
            			</div>
            		</article>

        		<?php endwhile; ?>

        		<?php if($wp_query->max_num_pages > 1):?>
            		<nav id="nav-below">
            			<div class="nav-previous"><?php next_posts_link(); ?></div>
            			<div class="nav-next"><?php previous_posts_link(); ?></div>
            		</nav>
        		<?php endif; ?>

        		<?php /* Only load comments on single post/pages*/ ?>
        		<?php if(is_page() || is_single()) : comments_template( '', true ); endif; ?>
            </div>

		<?php else : ?>
            <div class="col-md-8 col-sm-8 content no-results">
                <p><?php _e( 'Sorry, but nothing matched your search criteria. Please try again with some different keywords.', 'twentyten' ); ?></p>
            </div>
		<?php endif; ?>
<?php get_footer(); ?>
