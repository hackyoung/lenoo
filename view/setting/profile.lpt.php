<style>
    .a-item {
        margin: 20px 0px;
    }
    .a-item>h4 {
        margin: 5px;
    }
    
    .a-item>.leno-input {
        width: 80%;
        border: none;
    }
    .portrait-fix {
        display: flex;
        display: -webkit-flex;
        align-items: flex-end;
    }
    .portrait-fix>img {
        width: 150px;
        height: 150px;
        border: 1px solid #999;
        box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.6) inset;
        -moz-box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.6) inset;
        margin-right: 10px;
        vertical-align: bottom;
    }
</style>
<extend name="global._layout.setting">
    <fragment name="setting">
        <h3>修改个人信息</h3>
        <div class="portrait-fix">
            <img src="https://avatars1.githubusercontent.com/u/3030341?v=3&s=460" />
            <div>
                <div>可以修改头像的哦，亲！！！</div>
                <button class="leno-btn">+修改头像</button>
            </div>
        </div>
        <div class="a-item">
            <h4>姓名</h4>
            <input type="text" class="leno-input" placeholder="输入你的姓名" />
        </div>
        <div class="a-item">
            <h4>邮箱</h4>
            <input type="text" class="leno-input" placeholder="输入你的邮箱" />
        </div>
        <div class="a-item">
            <h4>手机号</h4>
            <input type="text" class="leno-input" placeholder="输入你的手机号码" />
        </div>
        <div class="a-item">
            <h4>介绍</h4>
            <textarea class="leno-input" placeholder="说说你自己"></textarea>
        </div>
        <div class="a-item">
            <h4>个人主页</h4>
            <input type="text" class="leno-input" placeholder="你的个人主页" />
        </div>
        <div class="a-item">
            <h4>居住地</h4>
            <input type="text" class="leno-input" placeholder="居住地址" />
        </div>
    </fragment>
</extend>
