<?php
/**
 * @param portrait 
 * @param 
 */
$name = 'young';
$email = 'hackyoung@163.com';
$account = 'hackyoung';
$address = '重庆 江北';
$portrait = 'https://avatars1.githubusercontent.com/u/3030341?v=3&s=460';
?>
<style>
.user-profile {
    display: flex;
    display: -webkit-flex;
    align-items: flex-end;
    padding-bottom: 3px;
    box-shadow: 0px -3px 3px -3px rgba(0, 0, 0, 0.5) inset;
}
.user-profile>img {
    width: 200px;
    height: 200px;
}

.user-profile>div {
    padding-left: 10px;
    width: 100%;
}

.user-profile>div .line {
    display: flex;
    display: -webkit-flex;
    align-items: flex-end;
}

.user-profile>div .line>div {
    width: 20px;
    margin-right: 10px;
}

.user-profile>div .oper {
    display: flex;
    display: -webkit-flex;
    justify-content: space-between;
}
</style>
<div class="user-profile">
    <img src="{$portrait}" />
    <div>
        <div class="line">
            <div class="zmdi zmdi-square-o"></div>
            <span>{$name}</span>
        </div>
        <div class="line">
            <div class="zmdi zmdi-email"></div>
            <span>{$email}</span>
        </div>
        <notempty name="{$account}">
            <div class="line">
                <div class="zmdi zmdi-account"></div>
                <span>{$account}</span>
            </div>
        </notempty>
        <div class="line">
            <div class="zmdi zmdi-nature"></div>
            <span>{$address}</span>
        </div>
        <div class="oper">
            <a href="/setting/profile">修改资料</a>
            <a href="/article/editor">写文章</a>
            <a href="">发布任务</a>
            <a href="">创建团队</a>
        </div>
    </div>
</div>
