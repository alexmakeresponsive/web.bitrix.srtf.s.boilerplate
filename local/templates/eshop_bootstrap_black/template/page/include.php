<?php

switch ($APPLICATION->GetCurPage(false)) {
    case '/':
        $page_template_name = 'custom/1';
        break;
    default:
        $page_template_name = '.default';
        break;
}
define('PAGE_TEMPLATE_NAME', $page_template_name);
