<?php
/*
 * Plugin Name: Редактор аттрибутов внешних ссылок
 * Description: добавляет rel='nofollow' и target='_blank' к внешним ссылкам в the_content()
 * Version: 0.2
 * Author: Yevheniy Sokolov
 * Author URI: https://vk.com/sokolov_e_i
 */
add_filter('the_content','LinkEdit');

function LinkEdit($content)
{
    $DOM = new DOMDocument('1.0','utf-8');
    $DOM->encoding = "UTF-8";
    $content = mb_convert_encoding($content, 'HTML-ENTITIES', 'utf-8');
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
    $html = $DOM->saveHTML();
    return $html;
}
?>