<?php
    $this->set('title', '用户设置');
    $this->set('list', [
        [
            'title' => '基本信息',
            'url' => '/setting/profile'
        ], [
            'title' => '帐号设置',
            'url' => '/setting/account'
        ], [
            'title' => '头部图片设置',
            'url' => '/setting/cover'
        ]
    ]);
?>
<extend name="global._element.menu">
</extend>
