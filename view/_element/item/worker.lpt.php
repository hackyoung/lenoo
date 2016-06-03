<?php
    /**
     * worker_item
     *
     * @param name 
     * @param portrait 
     * @param working 
     * @param worked 
     * @param article 
     * @param group 
     * @param level 
     */
    $name = $name ?? 'hackyoung';
    $portrait = $portrait ?? 'https://avatars1.githubusercontent.com/u/3030341?v=3&s=460';
    $working = $working ?? 100;
    $worked = $worked ?? 100;
    $article = $article ?? 100;
    $group = $group ?? 100;
    $level = $level ?? 100;
?>
<div class="worker">
    <img src="{$portrait}" />
    <div>{$name}</div>
    <div>({$level}级)</div>
    <div>
        <span class="zmdi zmdi-crop-din" title="正在工作的项目">{$working}</span>
        <span class="zmdi zmdi-crop-din" title="完成过的项目">{$worked}</span>
        <span  class="zmdi zmdi-blogger" title="TA的文章">{$article}</span>
        <span class="zmdi zmdi-group" title="TA参加的工作组">{$group}</span>
    </div>
</div>
<style>
    .worker {
        width: 200px;
        height: 280px;
        margin: 5px 2px;
    }
    .worker>img {
        width: 200px;
        height: 200px;
    }
    .worker>div {
        text-align: center;
        margin: 3px 0px;
    }
    .worker>div:nth-child(4) {
        bottom: 0px;
        display: flex;
        display: -webkit-flex;
        justify-content: space-around;
        align-content: center;
    }
    .worker>div:nth-child(4) span {
        font-size: 13px;
    }
    .worker>div:nth-child(4) span:hover {
        font-size: 13px;
        cursor: pointer;
    }
</style>
