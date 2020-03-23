<?php 

$video_featurette_title     = get_field('video_featurette_title');
$video_featurette_url       = get_field('video_featurette_url');

?>


<!-- VIDEO FEATURETTE
        =================================================-->
        <section id="featurette">
            <div class="container">
                <div class="row">
                    <div class="col-sm-8 col-sm-offset-2">
                        <h2><?php echo $video_featurette_title; ?></h2>
					    <iframe width="100%" height="415" src="<?php echo $video_featurette_url; ?>" frameborder="0" allowfullscreen></iframe>
                    </div><!-- end col -->
                </div><!-- row -->
            </div><!-- container -->
        </section><!-- featurette -->