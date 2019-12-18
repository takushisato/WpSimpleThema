<?php

//タイトルの文字数を２０文字に制限

if(mb_strlen($post->post_title)>20) {
	$title= mb_substr($post->post_title,0,20) ;
	echo $title . '...';
} else {
	echo $post->post_title;
	}




//メニューバー表示

add_theme_support('menus');

register_nav_menus(
array(
'place_global' => 'グローバル'
));





//ウィジェットエリア表示

register_sidebar(
array(
    'before_widget' => '<div class="widget">',
    'after_widget' => '</div>',
    'bafore_title' => '<h3>',
    'after_title' => '</h3>',
));





//アイキャッチ画像の指定

add_theme_support('post-thumbnails');

