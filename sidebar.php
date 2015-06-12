<?php if(is_page(62)) { ?>
<aside id="sidebar clearfix" role="complementary" style="margin-top: 100px;">
<?php } else { ?>
<aside id="sidebar clearfix" role="complementary">    
<?php } ?>    
<?php if ( is_active_sidebar( 'primary-widget-area' ) ) : ?>
<div id="primary" class="widget-area">
<ul class="xoxo">
<?php dynamic_sidebar( 'primary-widget-area' ); ?>
</ul>
</div>
<?php endif; ?>
</aside>