<style>
.selected {
    width: 100%;
    height: 200px;
    box-shadow: 0px 0px 5px rgba(0, 0, 0, 0.5) inset;
    -moz-box-shadow: 0px 0px 5px rgba(0, 0, 0, 0.5) inset;
    -webkit-box-shadow: 0px 0px 5px rgba(0, 0, 0, 0.5) inset;
    display: flex;
    display: -webkit-flex;
    justify-content: center;
    align-items: center;
}

.cover-wrapper {
    display: flex;
    display: -webkit-flex;
    flex-wrap: wrap;
    justify-content: space-between;
    align-content: center;
    align-items: center;
}

.selected,
.cover-wrapper .item {
    background-position: center center;
}

.cover-wrapper .item {
    width: 45%;
    margin-bottom: 10px;
    height: 100px;
    overflow: hidden;
    box-shadow: 0px 0px 3px rgba(0, 0, 0, 0.4) inset;
    -moz-box-shadow: 0px 0px 3px rgba(0, 0, 0, 0.4) inset;
    -webkit-box-shadow: 0px 0px 3px rgba(0, 0, 0, 0.4) inset;
}

.cover-wrapper .item>div {
    display: flex;
    display: -webkit-flex;
    align-items: center;
    justify-content: space-around;
    color: white;
    text-shadow: 0px 0px 4px rgba(0, 0, 0, 0.5);
    width: 100%;
    height: 100%;
    position: relative;
    bottom: -100%;
    transition: all 0.1s ease-in;
    -moz-transition: all 0.1s ease-in;
    -webkit-transition: all 0.1s ease-in;
    background-color: rgba(0, 0, 0, 0.4);
}

.cover-wrapper .item>div span:hover {
    cursor: pointer;
}

.cover-wrapper .item:hover>div {
    bottom: 0px;
}
</style>
<extend name="global._layout.setting">
    <fragment name="setting">
        <h3>修改顶部图片</h3>
        <div class="selected" style="background-image: url(http://s.qdcdn.com/cl/13682051,800,450.jpg)">
            <button class="leno-btn">上传</button>
        </div>
        <h3>大家都在用</h3>
        <div class="cover-wrapper">
            <div class="item" style="background-image: url(http://s.qdcdn.com/cl/13682051,800,450.jpg)">
                <div>
                    <span>大图</span>
                    <span>设为顶图</span>
                </div>
            </div>
            <div class="item" style="background-image: url(http://s.qdcdn.com/cl/13682051,800,450.jpg)">
                <div>
                    <span>大图</span>
                    <span>设为顶图</span>
                </div>
            </div>
            <div class="item" style="background-image: url(http://s.qdcdn.com/cl/13682051,800,450.jpg)">
                <div>
                    <span>大图</span>
                    <span>设为顶图</span>
                </div>
            </div>
            <div class="item" style="background-image: url(http://s.qdcdn.com/cl/13682051,800,450.jpg)">
                <div>
                    <span>大图</span>
                    <span>设为顶图</span>
                </div>
            </div>
            <div class="item" style="background-image: url(http://s.qdcdn.com/cl/13682051,800,450.jpg)">
                <div>
                    <span>大图</span>
                    <span>设为顶图</span>
                </div>
            </div>
        </div>
    </fragment>
</extend>
