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
</style>
<extend name="global._layout.setting">
    <fragment name="setting">
        <h3>修改密码</h3>
        <div class="a-item">
            <h4>旧密码</h4>
            <input type="text" class="leno-input" placeholder="输入你正在使用的密码" />
        </div>
        <div class="a-item">
            <h4>新密码</h4>
            <input type="text" class="leno-input" placeholder="输入你想更换的密码" />
        </div>
        <div class="a-item">
            <h4>新密码</h4>
            <input type="text" class="leno-input" placeholder="重复新密码" />
        </div>
        <button class="leno-btn">修改</button>
        <h3>设置登陆名</h3>
        <div class="a-item">
            <h4>登录名</h4>
            <input type="text" class="leno-input" placeholder="输入一个你好记的名字作为登陆名" />
            <div>可以继续使用邮箱登陆</div>
        </div>
        <button class="leno-btn">保存</button>
    </fragment>
</extend>
