<?php
/*
 * Plugin Name: Редактор аттрибутов внешних ссылок
 * Description: добавляет rel='nofollow' и target='_blank' к внешним ссылкам в the_content()
 * Version: 0.2
 * Author: Yevheniy Sokolov
 * Author URI: https://vk.com/sokolov_e_i
 */
include 'settings.php';
add_filter('the_content','LinkEdit');

function LinkEdit($content)
{
    $options = get_option('LinkAttrOptions');
    if($options['enOption'] != '1') return $content;
    $postType = get_post_type();
    if($options['postType'.$postType] != '1') return $content;

    $DOM = new DOMDocument();
    $DOM->encoding = "UTF-8";
    $DOM -> loadHTML($content);
    $xpath = new DOMXPath($DOM);
    $a = $xpath -> query('//a');

    foreach ($a as $a)
    {
        $href = substr($a -> getAttribute('href'),0,4);
        if($href == 'http'){
            $rel = $a -> getAttribute('rel');
            $target = $a -> getAttribute('target');
            if($target != '_blank')
            {
                $a -> setAttribute('target','_blank');
            }
            if($rel != 'nofollow')
            {
                $a -> setAttribute('rel','nofollow');
            }
        }
    }
    $html = utf8_decode($DOM->saveHTML($DOM -> documentElement));
    return $html;
}
?>