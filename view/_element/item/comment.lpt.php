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
        'published' => '2016-04-05 12:33:33',
    ]
?>
<div class="item comment">
    <div class="cover-wrapper">
        <img src="{$author.portrait}" />
    </div>
    <div class="wrapper">
        <div class="comment-header">
            <h2>{$author.name}</h2>
        </div>
        <div class="comment-section">{$comment.content}</div>
        <div class="comment-footer">
            <span>{$comment.published}</span>
            <span class="over">
                <span class="zmdi zmdi-thumb-up">({$comment.like})</span>
                <span class="zmdi zmdi-comment">({$comment.comment})</span>
            </span>
        </div>
    </div>
</div>
<div class="hr"></div>
<style>
    .comment {
        display: flex;
        display: -webkit-flex;
    }
    .comment .cover-wrapper {
        width: 50px;
    }
    .comment .cover-wrapper img {
        width: 40px;
        height: 40px;
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
    }
    .comment .comment-header .price {
        color: red;
        font-size: 20px;
    }
    .comment .comment-footer {
        align-items: flex-end;
        font-size: 12px;
        text-shadow: 1px 1px 1px rgba(0, 0, 0, 0.4);
    }
    .comment .comment-header>h2 {
        margin: 0px;
        font-size: 16px;
    }
    .comment .comment-footer>span.over>span {
        margin: 0px 10px;
    }
</style>
