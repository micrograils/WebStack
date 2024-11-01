<?php
if ( ! defined( 'ABSPATH' ) ) { exit; }
// updated 2024-11-01 ---->
// See：/wp-admin/site-health.php
// 站点健康状态 - 关键问题  - PHP 默认时区无效
// PHP 的默认时区在 WordPress 载入后被 date_default_timezone_set() 函数调用修改，这可能会影响日期和时间的正确计算。
//date_default_timezone_set('Asia/Shanghai');
// <---- updated 2024-11-01
require get_template_directory() . '/inc/inc.php';

   
//登录页面的LOGO链接为首页链接
add_filter('login_headerurl',function() {return get_bloginfo('url');});
//登陆界面logo的title为博客副标题
add_filter('login_headertext',function() {return get_bloginfo( 'description' );});

//WordPress 5.0+移除 block-library CSS
add_action( 'wp_enqueue_scripts', 'fanly_remove_block_library_css', 100 );
function fanly_remove_block_library_css() {
	wp_dequeue_style( 'wp-block-library' );
}
