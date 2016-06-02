<?php
/**
 * menu
 * @param list [
 *      ['title' => '', 'url' => ''],
 * ]
 *
 * @param title
 */
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
.menu>ul>li>a {
    color: #666;
}
</style>
