<div class="clients">
	<h2><?php echo $atts['my_client_title'] ?></h2>
    <ul>
    	<?php foreach(explode(',', $atts['our_client_logo']) as $client_single_images) : ?>
    	
        <li><a href="#"><amp-img width="200" height="100" layout="intrinsic" src="<?php echo wp_get_attachment_image_src($client_single_images, 'full')[0] ?>" alt="Image"></amp-img></a></li>
    <?php endforeach; ?>
    </ul>
</div>
<?php get_footer(); ?>