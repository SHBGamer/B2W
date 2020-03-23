<?php
/* Template Name : Resources Page */
get_header();

$thumbnail_url = wp_get_attachment_url( get_post_thumbnail_id ( $post->ID ) );    
$resource_image = get_field ( '$resource_image');
?>


<!-- FEATURE IMAGE
        =================================================-->
        <div> <!-- feature-image -->
        <?php if( has_post_thumbnail() ) { // check for featur image } ?>
        <section class="feature-image " style="background:url('<?php echo $thumbnail_url; ?>') no-repeat; background-size: cover;" data-type="background" data-speed="2">
            <h1 class="page-title"><?php the_title(); ?></h1>   
        </section>
        
        <?php } else { // fallback image ?>
        <section class="feature-image" style="background: url('/B2W/wp-content/themes/bootstrap2wordpress/assets/img/stuff-feature.jpg') no-repeat;" data-type="background" data-speed="2">
            <h1 class="page-title"><?php the_title(); ?></h1>   
        </section>
        <?php } ?>
        </div><!-- feature-image -->
        <!-- MAIN CONTENT
        =================================================--> 
        <div class="container">
            <div class="row" id="primary">
                <div id="content" class="col-sm-12"> 
                    <section class="main-content">
                       <div class="sd">
                       
                        <?php while ( have_posts() ) : the_post(); ?>
                        
                            <?php the_content(); ?>       
                                                         
                        <?php endwhile; // end of the loop ?>  
                        
                        <?php $loop = new WP_Query( array( 'post_type' => 'resource', 'orderby' => 'post_id' , 'order' => 'ASC' ) ); ?>                       
                        <br>
                        </div>
                        <div class="sd">
                        <div class="resource-row clearfix">
                           
                           <?php while( $loop->have_posts() ) : $loop->the_post(); ?>
                           
                           <?php 
                            
                            $resource_image  = get_field('resource_image');
                            $resource_url    = get_field('resource_url');
                            $button_text     = get_field('button_text');
                            
                            ?>
                           
                           <div class="resource">
                               
                                <img src="<?php echo $resource_image ; ?>" alt="">
                                
                                
                                <h3><a href="<?php echo $resource_url; ?>"><?php the_title(); ?></a></h3>
                                
                                <?php the_content(); ?>
                                
                                <?php if( !empty($button_text) ) : ?>
                                <a href="<?php echo $resource_url; ?>" class="btn btn-success"><?php echo $button_text; ?></a>
                                <?php endif; ?>
                                </div><!-- resource -->
                           <?php endwhile; ?>
                
                        </div><!-- resource-row -->
                       </div>
                    </section><!-- main-content -->
                    
                </div><!-- content -->
                
            </div><!-- row -->
        </div><!-- container -->
        
       <?php get_footer();?>