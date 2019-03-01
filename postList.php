<?php
$postList = get_posts();

foreach($postList as $post){
    the_post();
    get_template_part( 'single', 'post');
}
