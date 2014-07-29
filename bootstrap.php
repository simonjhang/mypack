<?php
/**
 * Created by PhpStorm.
 * User: simonjhang
 * Date: 2014/7/29
 * Time: 下午 2:00
 */
// 添加命名空間，如果你想要自動載入器能找到類別
Autoloader::add_namespace('mypack', __DIR__.'/classes/');
// 然後添加類別，這是有用的：
// - 優化：不需要搜尋路徑
// - 它必須是能夠使用為核心的命名空間
// - 如果你想打破自動載入器的路徑搜索規則
Autoloader::add_classes(array(
    'mypack\\Generator' => __DIR__.'/classes/generator.php',
));
