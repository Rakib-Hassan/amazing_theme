<div class="freeTrial">
    <div class="fTrialCont">
    	<h2><?php echo $atts['trial_title'] ?></h2>
        <p><?php echo $atts['trial_subtitle'] ?></p>
        <div class="fTrialMid">
            <?php foreach (explode(',', $atts['trial_images']) as $single_image) : ?>
                <div class="fTrialIn">
                    <div class="fTrialImg">
                        <amp-img width="506" height="441" layout="responsive" src="<?php echo wp_get_attachment_image_src($single_image, 'full')[0] ?>" alt="Image"></amp-img>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
        <h4><?php echo $atts['trial_bottom_text'] ?></h4>
        <a class="ftBtn" href="<?php echo explode ("|",$atts['trial_button'])[0] ?>"><?php echo explode ("|",$atts['trial_button'])[1] ?></a>
    </div>
</div>
