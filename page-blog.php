<?php get_header(); ?>
<!-- Header area end -->

<!-- Banner start -->
<div class="banner blogBnr">
    <div class="bnrIn">
        <div class="bnrTxt">
        	<h1>Blog</h1>
        </div>
    </div>
</div>
<!-- Banner end -->

<!-- Blog start -->
<div class="blogCont">
	<h2>Top  viewed</h2>
    <div class="blogRow">
        <?php $post_query = new WP_Query( array('post_type'=>'post', 'posts_per_page' => 3, 'meta_key' => 'wpb_post_views_count', 'orderby' => 'meta_value_num', 'order' => 'DESC'  ) );?>
       
        
        <?php if ($post_query->have_posts() ):
    while ($post_query->have_posts() ): $post_query->the_post();
         wpb_set_post_views(get_the_ID());
       
        $blog_post_title= get_the_title();
        $blog_post_content= get_the_content();?>

        <a href="<?php the_permalink(); ?>">
        <div class="blogBox">
            <a class="blogImg" href="#">
                <amp-img width="366" height="207" layout="responsive" src="<?php echo the_post_thumbnail_url(); ?>" alt="Post image"></amp-img>

            </a>
            <h6><a href="<?php the_permalink(); ?>"><?php echo substr($blog_post_title,0,20); ?></a></h6>
            <p> <?php echo substr($blog_post_content,0,80); ?></p>
            <div class="postTime">
            	<span class="viewLike">
                	<span class="view"><?php echo gt_get_post_view(); ?></span>
                    <span class="like">115</span>
                </span>
            	<span class="postDate"><?php echo get_the_date(); ?></span>
            </div>
        </div>
        </a>
    <?php endwhile;
    endif; ?>
    </div>

    <?php $post_querys = new WP_Query(['post_type'=>'post', 'posts_per_page'=>3]); ?>
	<h2>Latest Posts</h2>
    <div class="blogRow">
        <?php if ($post_querys->have_posts() ):
    while ($post_querys->have_posts() ): $post_querys->the_post();
         wpb_set_post_views(get_the_ID());
        $blog_lat_post_title=get_the_title();
        $blog_lat_post_content=get_the_content();?>
        <a href="<?php the_permalink(); ?>">
        <div class="blogBox">
            <a class="blogImg" href="#">
                <amp-img width="366" height="207" layout="responsive" src="<?php echo the_post_thumbnail_url(); ?>" alt="Post image"></amp-img>
            </a>
            <h6><a href="#"><a href="<?php the_permalink(); ?>"><?php echo substr($blog_lat_post_title,0,20); ?></a></h6>
            <p><?php echo substr($blog_lat_post_content,0,80); ?></p>
            <div class="postTime">
            	<span class="viewLike">
                	<span class="view"><?php echo gt_get_post_view(); ?></span>
                    <span class="like">115</span>
                </span>
            	<span class="postDate"><?php echo get_the_date(); ?></span>
            </div>
        </div>
        </a>
         <?php endwhile;
                  endif; ?>

    </div>
    <ul class="pagination">
    <?php  the_posts_pagination() ?>
    </ul>
</div>
<!-- Blog end -->

<!-- Footer start -->
<footer class="footer">
    <div class="ftrIn">
        <div class="ftrInLft">
        	<a class="ftrLogo" href="#"><amp-img width="208" height="63" layout="responsive" src="image/ftrLogo.png" alt="Logo"></amp-img></a>
        	<span class="ftrPhone">Phone: <a href="tel:+647-694-3379">(647) 694-3379 </a></span>
        </div>
        <div class="ftrInRgt">
        	<p>&copy; 2019 All Rights Reserved</p>
        </div>
	</div>
</footer>
<!-- Footer end -->
</body>
</html>