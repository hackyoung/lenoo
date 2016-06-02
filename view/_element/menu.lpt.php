<?php
/**
 * menu
 * @param list [
 *      ['title' => '', 'url' => ''],
 * ]
 *
 * @param title
 */
$title = '用户设置';
$list = [
    [
        'title' => '基本信息',
        'url' => ''
    ], [
        'title' => '帐号设置',
        'url' => ''
    ], [
        'title' => '文章',
        'url' => ''
    ], [
        'title' => '团队',
        'url' => ''
    ]
];
?>
<div class="menu">
    <h3>{$title}</h3>
    <ul>
        <llist name="{$list}" id="item">
            <li><a href="{$item.url}">{$item.title}</a></li>
        </llist>
    </ul>
</div>
<style>
.menu {
}
.menu>ul {
    margin: 0px;
    padding: 0px;
}
.menu>ul>li {
    list-style: none;
}
</style>
