<div class="banner">
    <div class="bnrIn">
        <div class="homeBnrBox">
           <div class="homeBnrImg">
                <amp-img width="294" height="294" layout="responsive" src="<?php echo wp_get_attachment_image_src($atts['banner_image'], 'full')[0] ?>" alt="Image"></amp-img>
               
            </div>
            <div class="homeBnrTxt">
                <h1><?php echo $atts['banner_title'] ?></h1>
                <p><?php echo $atts['banner_discription'] ?></p>
                <a class="bnrBtn1" href="<?php echo explode ("|",$atts['banner_left_button'])[0] ?>"><?php echo explode ("|",$atts['banner_left_button'])[1] ?></a>
               
                <a class="bnrBtn2" href="#">ZOHO TRAINING</a>
            </div>
        </div>       
    </div>
</div>
