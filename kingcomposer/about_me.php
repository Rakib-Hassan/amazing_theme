<div class="homeAbout">
    <div class="homeimgBox">
        <div class="homeimgBoxIn">
        	<amp-img width="838" height="838" layout="responsive" src="<?php echo wp_get_attachment_image_src($atts['about_me_image'], 'full')[0] ?>" alt="Image"></amp-img> </div>
    </div>
    <div class="hometxtBox">
        <h3><?php echo $atts['about_me_title'] ?></h3>
        <p><?php echo $atts['about_me_discription'] ?></p>
    </div>
</div>