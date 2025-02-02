<div class="result">
    <div class="container">
        
        <?php
        if(!empty($page_title)){
            echo '<div class="result_title"><h1>'.$page_title.'</h1></div>';
        }
        if(!empty($page_description)){
            echo '<p class="lead">'.$page_description.'</p>';
        }

        if(is_array(@$post_ids2)){
            $args2 = array(
                'post_type' => 'estimates',
                'posts_per_page' => 100,
                'post__in' => $post_ids2,
                'orderby' => 'post__in',
                'order'   => 'ASC',
            );
            $the_query2 = new WP_Query( $args2 );
            $count = 1;
            if ( $the_query2->have_posts() ) {
                echo '<ul class="list">';
                while ( $the_query2->have_posts() ) {
                    $the_query2->the_post();
                    include get_template_directory().'/parts/estimate_result_loop.php';
                }
                echo '</ul>';
                wp_reset_postdata();
            }
        }
        ?>
    </div>
</div>