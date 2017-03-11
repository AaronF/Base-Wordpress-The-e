<?php
/**
 * @package WordPress
 * @subpackage AF-Theme
 */

get_header();
?>

<div class="container">
    <div class="row">
        <div class="col-sm-9">
            <?php while ( have_posts() ) : the_post(); ?>
                <div id="post-<?php the_ID(); ?>" <?php post_class("col-md-12 col-sm-12 col-xs-12 blog-item"); ?>>
                    <div class="col-md-12 blog-title">
                        <h2 class="title entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                        <div class="posted">
                            Posted on <span class="pink updated published"><?php the_time('l, F jS, Y') ?></span> by <span class="vcard author post-author"><span class="fn"><?php the_author(); ?></span></span> in <?php the_category(', ') ?>
                        </div>
                    </div>
					<div class="col-md-12 blog-content">
						<?php the_content(); ?>
						<br><br>
						<a href="<?php the_permalink();?>" class="button blog-more">Read More &raquo;</a>
					</div>
					<div class="clearfix"></div>
                </div>
            <?php endwhile; ?>
            
    		<?php wp_reset_postdata(); ?>

    		<div class="clearfix"></div>

            <?php if (  $wp_query->max_num_pages > 1 ) : ?>

    			<nav class="navigation">
    				<span class="older right"><?php next_posts_link('Older Entries &raquo;'); ?></span>
    				<span class="newer left"><?php previous_posts_link('&laquo; Newer Entries'); ?></span>
    			</nav>

    		<?php endif; ?>
        </div>
        <div class="col-sm-3">
            <?php get_sidebar(); ?>
        </div>
	</div>
</div>

<?php get_footer(); ?>
