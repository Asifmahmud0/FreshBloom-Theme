<?php
// Theme Title
add_theme_support('title-tag');

// Thumbnil Image Area
add_theme_support( 'post-thumbnails' , array( 'post',  'page' )  );
add_image_size('post-thumbnails', 970, 350, true  );