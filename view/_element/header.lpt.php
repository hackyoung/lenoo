<?php
$this->set('user', [
    'home' => '',
    'portrait' => 'https://avatars1.githubusercontent.com/u/3030341?v=3&s=460',
]);
$this->set('menu', [
    [ 'id' => 'test_1', 'title' => '任务', 'href' => '/tasks' ],
    [ 'id' => 'test_1', 'title' => '工人', 'href' => '/workers'],
    [ 'id' => 'test_1', 'title' => '文章', 'href' => '/articles'],
    [ 'id' => 'test_1', 'title' => '个人信息', 'href' => '/user/articles' ],
    [ 'id' => 'test_1', 'title' => '设置', 'href' => '/setting/profile' ],
]);
$this->set('background', 'http://s.qdcdn.com/cl/13682051,800,450.jpg');
$login = [
    'submit' => '',
    'redirect' => ''
];
$register = [
    'submit' => '',
    'redirect' => ''
];
?>
<extend name="leno._element.header">
    <fragment name="top">
        <div class="begin">
            <empty name="{$user.info}">
                <view name="leno._element.login" data="{$login}" />
                <view name="leno._element.register" data="{$register}" />
            </empty>
            <notempty name="{$user.info}">
                <div class="user-info">
                    <div class="input-line">
                        <span>姓名:</span><span>hackyoung</span>
                    </div>
                    <div class="input-line">
                        <span>年龄:</span><span>24(岁)</span>
                    </div>
                    <div class="input-line">
                        <div class="footer">
                            <span class="zmdi zmdi-blogger">(3000)</span>
                            <span class="zmdi zmdi-crop-din">(3000)</span>
                            <span class="zmdi zmdi-group">(3000)</span>
                        </div>
                    </div>
                </div>
            </notempty>
            <span class="zmdi zmdi-close close"></span>
        </div>
    </fragment>
</extend>
<script>
(function() {
    $('.leno-global-header>div.bottom>a').click(function() {
        begin.enter();
        return false;
    });
    $('.leno-global-header div.begin .close').click(function() {
        begin.leave();
    });
})();
var begin = (function() {

    var scroll_top = false;

    var enter_begin = function() {
        scroll_top = leno.scrollTop();
        leno.scrollTo($('.leno-global-header'), null, null, function() {
            $('.leno-global-header div.begin').css('left', '0px');
        });
    }

    var leave_begin = function() {
        $('.leno-global-header div.begin').css('left', '-200%');
        leno.scrollTo(scroll_top);
    }
    return {
        enter: enter_begin,
        leave: leave_begin
    }
})();

</script>
<style>
.begin {
    display: flex;
    display: -webkit-flex;
    align-items: flex-end;
    justify-content: center;
    position: relative;
    left: -200%;
    width: 100%;
    transition: all 0.5s ease-out;
    -moz-transition: all 0.5s ease-out;
    -webkit-transition: all 0.5s ease-out;
}

.begin .user-info {
    width: 400px;
}

.begin .user-info .footer {
    display: flex;
    display: -webkit-flex;
    justify-content: space-between;
}

.begin .close {
    background-color: #444;
    width: 20px;
    height: 20px;
    line-height: 20px;
    text-align: center;
    box-shadow: 0px 0px 5px rgba(0, 0, 0, 0.5);
    -moz-box-shadow: 0px 0px 5px rgba(0, 0, 0, 0.5);
    -webkit-box-shadow: 0px 0px 5px rgba(0, 0, 0, 0.5);
    border: 1px solid #eee;
}

.begin .close:hover {
    cursor: pointer;
}
</style>
