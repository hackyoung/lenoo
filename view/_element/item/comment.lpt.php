<?php
/**
 * comment_item
 * @param author [
 *      'portrait' => '',
 *      'name' => '',
 *      'id' => ''
 * ]
 *
 * @param comment [
 *      'content' => '',
 *      'published' => ''
 * ]
 */
$author = $author ?? [
    'portrait' => 'https://avatars1.githubusercontent.com/u/3030341?v=3&s=460',
    'name' => 'hackyoung',
    'id' => ''
];
$comment = $comment ?? [
    'content' => 'The latest generation of the world\'s most popular database, Oracle Database 12c Release 12.1.0.2, complete with innovative Multitenant architecture, new In-Memory column store and support for JSON documents, is now available. Designed for the cloud, Oracle Database 12c helps customers make more efficient use of their IT resources while continuing to improve their users\' service levels and further reduce IT costs.',
    'comment' => 10,
    'like' => 10,
    'published' => '2016-04-05',
    'sub' => [
        [
            'author' => [
                'name' => 'hello',
                'portrait' => 'https://avatars1.githubusercontent.com/u/3030341?v=3&s=460',
                'id' => ''
            ],
            'comment' => [
                'title' => 'another hello world',
                'content' => 'The latest generation of the world\'s most popular database, Oracle Database 12c Release 12.1.0.2, complete with innovative Multitenant architecture, new In-Memory column store and support for JSON documents, is now available. Designed for the cloud, Oracle Database 12c helps customers make more efficient use of their IT resources while continuing to improve their users\' service levels and further reduce IT costs.',
                'published' => '2016-04-05',
                'comment' => 10,
                'like' => 10,
            ]
        ]
    ]
]
?>
<div class="item comment">
    <div class="cover-wrapper">
        <img src="{$author.portrait}" />
    </div>
    <div class="wrapper">
        <div class="comment-header">
            <h2>{$author.name}</h2>
            <span>{$comment.published}</span>
        </div>
        <div class="comment-section">{$comment.content}</div>
        <div class="comment-footer">
            <span class="over">
                <span class="zmdi zmdi-thumb-up">({$comment.like})</span>
                <span class="zmdi zmdi-comment">({$comment.comment})</span>
            </span>
        </div>
        <llist name="{$comment.sub}" id="sub_comment">
            <view name="global._element.item.comment" data="{$sub_comment}" />
        </llist>
    </div>
</div>
<style>
.comment {
    display: flex;
    display: -webkit-flex;
}
.comment .cover-wrapper {
    width: 50px;
}
.comment .cover-wrapper img {
    width: 50px;
}
.comment .wrapper {
    padding-left: 10px;
}
.comment .comment-header,
.comment .comment-footer {
    display: flex;
    display: -webkit-flex;
    justify-content: space-between;
    padding: 5px 0px;
}
.comment .comment-header {
    align-items: center;
    margin-bottom: 10px;
}
.comment .comment-header .price {
    color: red;
    font-size: 20px;
}
.comment .comment-footer {
    align-items: flex-end;
}
.comment .comment-header>h2 {
    margin: 0px;
    font-size: 16px;
}
.comment .comment-footer>span.over>span {
    margin: 0px 10px;
}
</style>
