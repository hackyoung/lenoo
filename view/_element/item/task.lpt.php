<?php
/**
 * task_item
 * @param author [
 *      'portrait' => '',
 *      'name' => '',
 *      'id' => ''
 * ]
 *
 * @param task [
 *      'title' => '',
 *      'overview' => '',
 *      'bidding' => '',
 *      'comment' => '',
 *      'published' => ''
 * ]
 */
$author = $author ?? [
    'portrait' => 'https://avatars1.githubusercontent.com/u/3030341?v=3&s=460',
    'name' => 'hackyoung',
    'id' => ''
];
$task = $task ?? [
    'title' => 'hello world',
    'overview' => 'The latest generation of the world\'s most popular database, Oracle Database 12c Release 12.1.0.2, complete with innovative Multitenant architecture, new In-Memory column store and support for JSON documents, is now available. Designed for the cloud, Oracle Database 12c helps customers make more efficient use of their IT resources while continuing to improve their users\' service levels and further reduce IT costs.',
    'bidding' => 0,
    'comment' => 10,
    'low_price' => 1000,
    'high_price' => 2000,
    'published' => '2016-04-05'
]
?>
<div class="item task">
    <div class="cover-wrapper">
        <img src="{$author.portrait}" />
        <div>{$author.name}</div>
    </div>
    <div class="wrapper">
        <div class="task-header">
            <h2>{$task.title}</h2>
            <span class="price">{$task.low_price}.00-{$task.high_price}.00(元)</span>
        </div>
        <div class="task-section">{$task.overview}</div>
        <div class="task-footer">
            <span>{$task.published}</span>
            <span class="over">
                <span class="zmdi zmdi-thumb-up">({$task.bidding})</span>
                <span class="zmdi zmdi-comment">({$task.comment})</span>
            </span>
        </div>
    </div>
</div>
<style>
.task {
    display: flex;
    display: -webkit-flex;
}

.task .cover-wrapper {
    width: 100px;
}

.task .cover-wrapper img {
    margin-top: 10px;
    width: 100px;
}

.task .wrapper {
    padding-left: 10px;
}

.task .task-header,
.task .task-footer {
    display: flex;
    display: -webkit-flex;
    justify-content: space-between;
    padding: 5px 0px;
}

.task .task-header {
    align-items: center;
    margin-bottom: 20px;
}

.task .task-header .price {
    color: red;
    font-size: 20px;
}

.task .task-footer {
    align-items: flex-end;
}

.task .task-header>h2 {
    margin: 0px;
}

.task .task-footer>span.over>span {
    margin: 0px 10px;
}

.task .task-footer img {
    width: 40px;
    height: 40px;
}
</style>
