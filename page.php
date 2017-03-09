<?php
/**
 * @package WordPress
 * @subpackage AF-Theme
 */

    get_header();

    get_sidebar("ttt");
?>
    <div class="col-md-8 col-sm-8 content">
		<?php while ( have_posts() ) : the_post(); ?>

    		<article itemscope itemtype="http://schema.org/Article" id="post-<?php the_ID(); ?>">
    			<div class="article-title">
                    <?php the_title('<h2 itemprop="name">', '</h2>'); ?>
    			</div>

    			<div class="article-body" itemprop="articleBody">
    				<?php the_content("Continue reading " . the_title('', '', false)); ?>
    			</div>
                <div class="clearfix"></div>
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

<?php get_footer(); ?>
