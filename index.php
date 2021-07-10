<?php get_header(); ?>
<?php $wpc_course = new WPC_Courses(); ?>
<div class="wpc-container">
    <div class="wpc-row">
        <div class="wpc-sidebar wpc-left-sidebar">
            <?php echo $wpc_course->get_course_category_list(); ?>
        </div>
        <div id="courses-wrapper" class="wpc-sidebar-content">
            <?php
                $course_args = array(
                    'post_type'         => 'course',
                    'nopaging'          => true,
                    'order'             => 'ASC',
                    'orderby'           => 'menu_order',
                    'post_status'       => 'publish',
                );
                $course_query = new WP_Query($course_args);
                if($course_query->have_posts()){
                    echo '<div class="row">';
                    while($course_query->have_posts()){
                        $course_query->the_post();
                        echo '<div id="wpc-archive-course-' . get_the_ID() . '" class="course-container wpc-light-box">';
                            echo '<div class="wpc-video-wrapper">';
                                include 'template-parts/course-video.php';
                            echo '</div>';
                            include 'template-parts/course-details.php';
                            include 'template-parts/course-meta.php';
                        echo '</div>';
                    }
                    wp_reset_postdata();
                    echo '</div>';
                    echo '<br><div class="wpc-paginate-links">' . paginate_links() . '</div>';
                }
            ?>
        </div>
    </div>
</div>
<?php get_footer(); ?>