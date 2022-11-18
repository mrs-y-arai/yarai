<ul class="breadcrumb lg-font fadeIn">
    <li>
        <a href="<?php echo home_url(); ?>" class="md-font letter-spacing">Home</a>
    </li>
    <li class="breadcrumb__separation">
        <p class="md-font">&gt;</p>
    </li>

    <?php if( is_page() ) {?>    
    <li class="md-font">
        <p class="md-font"><?php the_title(); ?></p>
    </li>


    <?php }elseif( is_archive() ) {?>    
    <li class="md-font">
        <p class="md-font">Works</p>
    </li>

    <?php }elseif( is_single() ) {?>    
    <li class="md-font">        
        <a href="<?php echo home_url(); ?>/works" class="md-font letter-spacing">Works</a>
    </li>
    <li class="breadcrumb__separation">
        <p class="md-font">&gt;</p>
    </li>
    <li>
        <p class="md-font"><?php the_title(); ?></p>    
    </li>
    
    <?php }elseif( is_404() ) {?>    
    <li class="md-font">        
        <a href="<?php echo home_url(); ?>/works" class="md-font">ページが見つかりません</a>
    </li>
    <?php } ?>
</ul>