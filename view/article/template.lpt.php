<?php
    /**
     * @param content
     */
// 防止用户写入js脚本上传
$content = '<div>hello world</div>';
$id = randString();
?>
<iframe id="{$id}" class="article-template">
    {$content}
</iframe>
<script>
    var id = '{$id}';
    var content = '{$content}';
    var frame = document.getElementById(id);
    var doc = frame.contentWindow.document;
    doc.write(content);
</script>
<style>
    .article-template {
        width: 600px;
        height: 300px;
        border: 1px solid #999;
        margin: 10px 0px;
    }
</style>
