<?php
    /**
     * @param user_id
     */
    $user_id = 'test';
    $this->set('title', '文章');
    $this->set('list', [
        [
            'title' => '所有文章',
            'url' => '/user/'.$user_id.'/articles'
        ], [
            'title' => '关注的文章',
            'url' => '/user/'.$user_id.'/articles/focused'
        ], [
            'title' => '我的文章模板',
            'url' => '/user/'.$user_id.'/articles/template'
        ], [
            'title' => '草稿箱',
            'url' => '/user/'.$user_id.'/articles/drafts'
        ]
    ]);
?>
<extend name="global._element.menu">
</extend>
<?php
    $this->set('title', '任务');
    $this->set('list', [
        [
            'title' => '发布的任务',
            'url' => '/user/'.$user_id.'/tasks'
        ], [
            'title' => '正在进行的任务',
            'url' => '/user/'.$user_id.'/tasks/working'
        ], [
            'title' => '关注的任务',
            'url' => '/user/'.$user_id.'/tasks/focused'
        ]
    ]);
?>
<extend name="global._element.menu">
</extend>
<?php
    $this->set('title', '团队');
    $this->set('list', [
        [
            'title' => '创建的团队',
            'url' => '/user/'.$user_id.'/group'
        ], [
            'title' => '加入的团队',
            'url' => '/user/'.$user_id.'/groups/joined'
        ], [
            'title' => '关注的团队',
            'url' => '/user/'.$user_id.'/groups/focused'
        ]
    ]);
?>
<extend name="global._element.menu">
</extend>
