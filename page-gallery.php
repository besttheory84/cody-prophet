<?php get_header(); ?>
   
    <section id="content" role="main">
        <img src="<?=get_bloginfo('template_directory');?>/images/gallery.png" class="gallery-pic" />       
        <div class="galleries clearfix">
            <div class="gallery">
                <h2>Videos</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>  
                <div class="button-holder">
                    <a href="#" class="button">View</a>
                </div> 
            </div>
            <div class="gallery">
                <h2>Photos</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p> 
                <div class="button-holder">
                    <a href="#" class="button">View</a>
                </div> 
            </div>
        </div>
    </section>

<?php get_footer(); ?>