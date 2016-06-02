<style>
.selected {
    width: 100%;
}
.cover-wrapper {
    display: flex;
    display: -webkit-flex;
    flex-wrap: wrap;
    align-content: center;
    align-items: center;
}

.cover-wrapper img {
    width: 200px;
    margin: 4px;
}
</style>
<extend name="global._layout.setting">
    <fragment name="setting">
        <h3>修改顶部图片</h3>
        <img class="selected" src="http://s.qdcdn.com/cl/13682051,800,450.jpg" />
        <button class="leno-btn">上传</button>
        <h3>大家都在用<button class="leno-btn">保存</button></h3>
        <div class="cover-wrapper">
            <div>
                <img src="http://s.qdcdn.com/cl/13682051,800,450.jpg" />
            </div>
            <div>
                <img src="http://s.qdcdn.com/cl/13682051,800,450.jpg" />
            </div>
            <div>
                <img src="http://s.qdcdn.com/cl/13682051,800,450.jpg" />
            </div>
        </div>
    </fragment>
</extend>
