<?php get_header(); ?>
<div class="work-nav">
    <div class="link-to-work">
        <li><p><?php next_post_link('%link','<&nbsp;PREV'); ?></p></li>
        <li><p><a href="/#work">ALL</a></p></li>
        <li><p><?php previous_post_link('%link','NEXT>'); ?></p></li>
    </div>
</div>
<div>
<?php while ( have_posts() ) : the_post(); ?>
   
    <div>
         <!------Sliders------->
        <div class="sliders textbox"><?php echo get_field('work_sliders'); ?></div>
        <h1 class="worktitle"><?php the_title(); ?></h1>
        <!------View Project------->
        <div class="view-project"><?php echo get_field('work_view_project'); ?></div>
        <!------Work Content------->
        <div class="row">
            <div class="content-container">
                <!------Problem Statement------->
                <h2 class="section-title">Problem Statement</h2>
                <div class="textbox"><?php the_content(); ?></div>
                <div class="two-column">
                    <div class="left">
                        <!------Content Overview------->
                        <h2 class="section-title">Content Overview</h2>
                        <div class="textbox"><?php echo get_field('work_project_overview'); ?></div>    
                    </div>
                    <!------My Role------->
                    <div class="right">
                        <h2 class="section-title">Role & Duty</h2>
                        <div class="textbox"><?php echo get_field('work_my_role'); ?></div>       
                    </div>
                </div>
                
                <div><img src="<?php echo get_field('work_image_1'); ?>" alt=""></div>
                <!------Challenge------->
                <h2 class="section-title">Context and Challenge</h2>
                <div class="textbox"><?php echo get_field('work_context_and_challenge'); ?></div>
                <div><img src="<?php echo get_field('work_image_2'); ?>" alt=""></div>          
                        
                <!------Challenge------->
                <h2 class="section-title">Learning Summary</h2>
                <div class="textbox"><?php echo get_field('work_deliverables'); ?></div>
                <div><img src="<?php echo get_field('work_image_3'); ?>" alt=""></div>
            </div>
        </div>
    </div>

    <div class="workcontact"><a href="mailto:sereneguan@gmail.com?Subject=Hello%20Serene" target="_top"><h2>Please contact Serene Guan for more details.</h2></a></div>
<?php endwhile; ?>
</div>
<?php get_footer(); ?>