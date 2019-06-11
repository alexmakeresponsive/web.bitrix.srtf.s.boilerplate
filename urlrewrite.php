<?php
$arUrlRewrite=array (
  1 =>
  array (
    'CONDITION' => '#^/online/([\\.\\-0-9a-zA-Z]+)(/?)([^/]*)#',
    'RULE' => 'alias=$1',
    'ID' => NULL,
    'PATH' => '/desktop_app/router.php',
    'SORT' => 100,
  ),
  2 =>
  array (
    'CONDITION' => '#^\\/?\\/mobileapp/jn\\/(.*)\\/.*#',
    'RULE' => 'componentName=$1',
    'ID' => NULL,
    'PATH' => '/bitrix/services/mobileapp/jn.php',
    'SORT' => 100,
  ),
  3 =>
  array (
    'CONDITION' => '#^/bitrix/services/ymarket/#',
    'RULE' => '',
    'ID' => '',
    'PATH' => '/bitrix/services/ymarket/index.php',
    'SORT' => 100,
  ),
  4 =>
  array (
    'CONDITION' => '#^/online/(/?)([^/]*)#',
    'RULE' => '',
    'ID' => NULL,
    'PATH' => '/desktop_app/router.php',
    'SORT' => 100,
  ),
  5 =>
  array (
    'CONDITION' => '#^/stssync/calendar/#',
    'RULE' => '',
    'ID' => 'bitrix:stssync.server',
    'PATH' => '/bitrix/services/stssync/calendar/index.php',
    'SORT' => 100,
  ),
  6 =>
  array (
    'CONDITION' => '#^/rest/#',
    'RULE' => '',
    'ID' => NULL,
    'PATH' => '/bitrix/services/rest/index.php',
    'SORT' => 100,
  ),
  21 =>
  array (
    'CONDITION' => '#^/personal/order/#',
    'RULE' => '',
    'ID' => 'bitrix:sale.personal.order',
    'PATH' => '/local/templates/eshop_bootstrap_black/include/page/personal/order/make/index.php',
    'SORT' => 100,
  ),
  22 =>
  array (
    'CONDITION' => '#^/personal/cart/#',
    'RULE' => '',
    'ID' => 'bitrix:sale.personal.cart',
    'PATH' => '/local/templates/eshop_bootstrap_black/include/page/personal/cart/index.php',
    'SORT' => 100,
  ),
  23 =>
  array (
    'CONDITION' => '#^/personal/#',
    'RULE' => '',
    'ID' => 'bitrix:sale.personal.section',
    'PATH' => '/local/templates/eshop_bootstrap_black/include/page/personal/index.php',
    'SORT' => 100,
  ),
  41 =>
  array (
    'CONDITION' => '#^/catalog/#',
    'RULE' => '',
    'ID' => 'bitrix:catalog',
    'PATH' => '/local/templates/eshop_bootstrap_black/include/page/catalog/index.php',
    'SORT' => 100,
  ),
  61 =>
  array (
    'CONDITION' => '#^/store/#',
    'RULE' => '',
    'ID' => 'bitrix:catalog.store',
    'PATH' => '/store/index.php',
    'SORT' => 100,
  ),
  81 =>
  array (
    'CONDITION' => '#^/news/#',
    'RULE' => '',
    'ID' => 'bitrix:news',
    'PATH' => '/local/templates/eshop_bootstrap_black/include/page/news/index.php',
    'SORT' => 100,
  ),
  101 =>
  array (
    'CONDITION' => '#^/login/#',
    'RULE' => '',
    'ID' => NULL,
    'PATH' => '/local/templates/eshop_bootstrap_black/include/page/login/index.php',
    'SORT' => 100,
  ),
  121 =>
  array (
    'CONDITION' => '#^/about/contacts/#',
    'RULE' => '',
    'ID' => NULL,
    'PATH' => '/local/templates/eshop_bootstrap_black/include/page/about/contacts/index.php',
    'SORT' => 100,
  ),
  122 =>
  array (
    'CONDITION' => '#^/about/delivery/#',
    'RULE' => '',
    'ID' => NULL,
    'PATH' => '/local/templates/eshop_bootstrap_black/include/page/about/delivery/index.php',
    'SORT' => 100,
  ),
  123 =>
  array (
    'CONDITION' => '#^/about/guaranty/#',
    'RULE' => '',
    'ID' => NULL,
    'PATH' => '/local/templates/eshop_bootstrap_black/include/page/about/guaranty/index.php',
    'SORT' => 100,
  ),
  124 =>
  array (
    'CONDITION' => '#^/about/howto/#',
    'RULE' => '',
    'ID' => NULL,
    'PATH' => '/local/templates/eshop_bootstrap_black/include/page/about/howto/index.php',
    'SORT' => 100,
  ),
  125 =>
  array (
    'CONDITION' => '#^/about/#',
    'RULE' => '',
    'ID' => NULL,
    'PATH' => '/local/templates/eshop_bootstrap_black/include/page/about/index.php',
    'SORT' => 100,
  ),
);
