<?php
/*
 * 
 * 
 * 
*/
get_header();
?>



<div class="container">
    <div class="row">
        <div class="col-md-12">
            <?php           
         


            
            while(have_posts()):the_post() ;
            ?>


            <h1><?php the_title();?>></h1>
            <p><?php 
            
            $readmore = '<p><a href="'.get_permalink ().'">Read more</a></p>';
            
           echo wp_trim_words( get_the_content(), 20,$readmore ); ?></p>
           

              <p>Tags : <?php
                $tags = get_the_terms( get_the_id(), 'movie-tag');

                foreach($tags as $tag) 
                {
                        $tag_name = $tag->name;
                        
                        $link = get_term_link($tag);
                        echo "<a href='".$link."'>".$tag_name."</a";
                
                }          
                ?></p>






            <?php 
            endwhile;
            ?>



        </div>
    </div>
</div>



<?php 
get_footer();
?>