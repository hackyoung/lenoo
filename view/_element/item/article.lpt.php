<?php
/**
 * article_item
 * @param author [
 *      'portrait' => '',
 *      'name' => '',
 *      'id' => ''
 * ]
 *
 * @param article [
 *      'cover' => '',
 *      'title' => '',
 *      'overview' => '',
 *      'like' => '',
 *      'comment' => '',
 *      'published' => ''
 * ]
 */
$author = $author ?? [
    'portrait' => 'https://avatars1.githubusercontent.com/u/3030341?v=3&s=460',
    'name' => 'hackyoung',
    'id' => ''
];
$article = $article ?? [
    'cover' => 'http://s.qdcdn.com/cl/13682051,800,450.jpg',
    'title' => 'hello world',
    'overview' => 'The latest generation of the world\'s most popular database, Oracle Database 12c Release 12.1.0.2, complete with innovative Multitenant architecture, new In-Memory column store and support for JSON documents, is now available. Designed for the cloud, Oracle Database 12c helps customers make more efficient use of their IT resources while continuing to improve their users\' service levels and further reduce IT costs.',
    'like' => 0,
    'comment' => 10,
    'published' => '2016-04-05'
]
?>
<div class="item article">
    <notempty name="{$article.cover}">
    <div class="cover-wrapper">
        <img src="{$article.cover}" />
    </div>
    </notempty>
    <div class="wrapper">
        <div class="article-header">
            <h2>{$article.title}</h2>
            <span class="over">
                <span class="zmdi zmdi-thumb-up">({$article.like})</span>
                <span class="zmdi zmdi-comment">({$article.comment})</span>
            </span>
        </div>
        <div class="article-section">{$article.overview}</div>
        <div class="article-footer">
            <span>{$article.published}</span>
            <span class="article-author-info">
                {$author.name}
                <img src="{$author.portrait}" data-id="{$author.id}" />
            </span>
        </div>
    </div>
</div>
<style>
.article {
    display: flex;
    display: -webkit-flex;
}

.article .cover-wrapper {
    width: 100px;
}

.article .cover-wrapper img {
    margin-top: 10px;
    width: 100px;
}

.article .wrapper {
    padding-left: 10px;
}

.article .article-header,
.article .article-footer {
    display: flex;
    display: -webkit-flex;
    justify-content: space-between;
    padding: 5px 0px;
}

.article .article-header {
    align-items: center;
    margin-bottom: 20px;
}

.article .article-footer {
    align-items: flex-end;
}

.article .article-header>h2 {
    margin: 0px;
}

.article .article-header>span.over>span {
    margin: 5px 10px;
}

.article .article-footer img {
    width: 40px;
    height: 40px;
}
</style>
