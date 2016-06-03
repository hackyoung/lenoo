<?php
    /**
     * article_item
     * @param article [
     *      'title' => '',
     *      'overview' => '',
     *      'like' => '',
     *      'comment' => '',
     *      'published' => ''
     * ]
     */
    $article = $article ?? [
        'title' => 'hello world',
        'overview' => 'The latest generation of the world\'s most popular database, Oracle Database 12c Release 12.1.0.2, complete with innovative Multitenant architecture, new In-Memory column store and support for JSON documents, is now available. Designed for the cloud, Oracle Database 12c helps customers make more efficient use of their IT resources while continuing to improve their users\' service levels and further reduce IT costs.',
        'like' => 0,
        'comment' => 10,
        'published' => '2016-04-05 00:00:00'
    ]
?>
<div class="item article">
    <div class="wrapper">
        <div class="article-header">
            <h2><a href="">{$article.title}</a></h2>
            <span>{$article.published}</span>
        </div>
        <div class="article-section">{$article.overview}</div>
        <div class="article-footer">
            <span class="zmdi zmdi-comment">(1000)</span>
            <span class="zmdi zmdi-thumb-up">(1000)</span>
            <fragment name="operates">
                <span><a class="zmdi zmdi-edit" href=""></a></span>
                <span><a href="" class="zmdi zmdi-delete"></a></span>
            </fragment>
        </div>
    </div>
</div>
<div class="hr"></div>
<style>
    .article {
        display: flex;
        display: -webkit-flex;
    }
    .article .article-header,
    .article .article-footer {
        display: flex;
        display: -webkit-flex;
        padding: 5px 0px;
    }
    .article .article-header {
        align-items: center;
        justify-content: space-between;
    }
    .article .article-header>span {
        color: #444;
        text-shadow: 0px 0px 3px rgba(0, 0, 0, 0.4);
        font-size: 12px;
    }
    .article .article-footer {
        align-items: flex-end;
    }
    .article .article-footer>span {
        margin-right: 10px;
    }
    .article .article-header>h2 {
        margin: 0px;
    }
</style>
