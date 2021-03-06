<?php

$currentSection = function () use ($APPLICATION) {
    $url_page           = $APPLICATION->GetCurPage(false);

    $url_page_cut       = substr($url_page, 1, -1);
    $url_page_explode   = explode('/', $url_page_cut);

    $name_section_level_0 = reset($url_page_explode);

    switch ($url_page) {
        case '/personal/cart/':
        case '/personal/order/make/':
            return $url_page;
    }

    switch ($name_section_level_0) {
        case 'catalog':
        case 'personal':
        case 'about':
            return '/' . $name_section_level_0 . '/';
    }

    return $url_page;
};

switch ($currentSection()) {
    case '/':
        $page_template_name = 'custom/1';
        break;
    case '/catalog/':
        $page_template_name = '.default';
        break;
    case '/personal/':
        $page_template_name = 'custom/3';
        break;
    case '/about/':
        $page_template_name = 'custom/1';
        break;
    default:
        $page_template_name = '.default';
        break;
}
define('PAGE_TEMPLATE_NAME', $page_template_name);
