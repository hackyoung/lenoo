<?php
    /**
     * worker_item
     *
     * @param name 
     * @param portrait 
     * @param bio
     * @param working 
     * @param worked 
     * @param article 
     * @param group 
     * @param level 
     */
    $name = $name ?? 'hackyoung';
    $portrait = $portrait ?? 'https://avatars1.githubusercontent.com/u/3030341?v=3&s=460';
    $bio = '用HELLO WORLD谱写软件史诗';
    $working = $working ?? 100;
    $worked = $worked ?? 100;
    $article = $article ?? 100;
    $group = $group ?? 100;
    $level = $level ?? 100;
    $value = $value ?? 100.00;
?>
<div class="worker">
    <img src="{$portrait}" />
    <div>
        <div class="info">
            <div>
                <span class="name">{$name}</span>
                <span>({$level}级)</span>
                <span class="zmdi zmdi-nature">重庆</span>
            </div>
            <div class="bio">{$bio}</div>
            <div>
                <span class="tag">Javascript</span>
                <span class="tag">PHP</span>
                <span class="tag">HTML</span>
            </div>
        </div>
        <div class="value">
            {$value}元/小时
        </div>
    </div>
</div>
<div class="hr"></div>
<style>
    .worker {
        display: flex;
        display: -webkit-flex;
        align-items: flex-begin;
        width: 100%;
        margin: 10px 0px;
    }
    .worker>img {
        width: 50px;
        height: 50px;
        vertical-align: top;
        border: 1px solid #aaa;
    }
    .worker>div {
        display: flex;
        display: -webkit-flex;
        justify-content: space-between;
        align-items: center;
        width: 100%;
    }
    .worker div.info {
        padding-left: 20px;
    }
    .worker div.info>div:first-child {
        margin-bottom: 5px;
        font-size: 13px;
        justify-content: space-between;
    }
    .worker div.info .bio {
        font-size: 12px;
    }
    .worker div.info>div>span {
        margin-left: 5px;
    }
    .worker .tag {
        font-size: 12px;
        background-color: #ddd;
        padding: 2px 5px;
    }
    .worker .name {
        font-weight: bold;
    }
    .worker .value {
        color: red;
        font-size: 17px;
    }
</style>
