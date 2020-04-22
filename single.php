<?php get_header(); ?>
<!-- Header area end -->

<!-- Banner start -->
<div class="banner blogBnr">
    <div class="bnrIn">
        <div class="bnrTxt">
        	<h2>Blog</h2>
        </div>
    </div>
</div>
<!-- Banner end -->

<!-- Blog start -->
<div class="blogCont">
    <?php if (have_posts()) {
    while (have_posts()) {
        the_post();
        wpb_set_post_views(get_the_ID());
         gt_set_post_view();
        $blog_contents = get_the_content();
       // $avatar = get_avatar(get_the_author_meta('ID')); ?>
	<div class="single-blog">
    	<div class="posted">
            <div class="pPersonPhoto">
            	<amp-img width="75" height="75" layout="intrinsic" src="<?php echo get_avatar_url( get_the_author_meta( 'ID'));?>" alt="image"></amp-img>
            </div>
            <div class="pPersonName"><?php the_author( ); ?></div>
            <div class="pDate"><?php the_date( ); ?></div>
        </div>
    	<h1><?php the_title( ); ?></h1>
         <amp-img width="1067" height="562" layout="responsive" src="<?php echo get_the_post_thumbnail_url(  ); ?>" alt="single image"><a href=""></a></amp-img>
           <?php the_content( ) ?>
        <div class="sbBtm">
            <ul class="socialLink">
            	<li class="facebook"><a class="facebook" href="http://www.facebook.com/sharer.php?u=<?php the_permalink();?>&t=<?php the_title(); ?>" title="Share this post on Facebook!" onclick="window.open(this.href); return false;"></a></li>
            	<li class="twitter"><a class="twitter" href="https://twitter.com/intent/tweet?text<?php echo urlencode(get_the_title()); ?>&url=<?php echo urlencode(get_the_permalink()); ?>" title="Share this post on Twitter!" target="_blank"></a></li>
            	<li class="linkedin"><a class="linkedin" href="https://www.linkedin.com/sharing/share-offsite/?<?php the_permalink(); ?>" title="Share this post on Twitter!" target="_blank"></a></li>
            	<li class="link"><a href="#"></a></li>
             <!-- <li class="heart pp_unlike"><a href="#"></a></li>  -->
            	<div class="heart_header">
                     
                   
                </div>
            </ul>
            <div class="sbBtmBtn">
                <div>
                	<a class="btn" href="#">See All</a>
                </div>
                <div class="sb-prevNext">
                	<a class="btn" href="#">Prev</a>
                	<a class="btn" href="#">Next</a>
                </div>
            </div>
        </div>
    </div>
<?php };
}
 ?>
</div>
<!-- Blog end -->
<?php $data = array(
    $template_path = get_template_directory_uri(),
    $id = get_the_ID()
) ?>
<?php wp_localize_script( 'post_like', 'post_info', $data ); ?>

<?php get_footer(); ?>
