<style>
    .final {
        display: flex;
        display: -webkit-flex;
        justify-content: space-between;
        align-items: center;
    }
    .final .tag {
        margin: 5px;
        padding: 5px;
    }
    .final .tag:hover {
        text-decoration: underline;
        color: green;
        cursor: pointer;
    }
    .final .more {
        text-decoration: underline;
    }
</style>
<script>
    $(document).ready(function() {
        new leno.editor({ id: 'edit', toolbarFixedHeight: 80, operation: [{
            label: '保存为模板',
            click: function() {
                console.log('click');
            }
        }]});
    });
</script>
<extend name="global._layout.two_columns">
    <fragment name="one">
        <div class="edit-article">
            <div class="input-line">
                <input type="text" style="width: 100%; text-align: center" placeholder="在这里输入标题" class="leno-input" />
            </div>
            <div class="input-line">
                <textarea type="text" style="width: 100%; text-align: center" placeholder="在这里任务描述" class="leno-input"></textarea>
            </div>
            <div class="input-line">
                <div id="edit">在这里输入需求</div>
            </div>
            <div class="input-line final">
                <div>
                    <span class="tag">PHP</span>
                    <span class="tag">Javascript</span>
                    <span class="tag">HTML5</span>
                    <a href="#" class="more">更多</a>
                </div>
                <button class="leno-btn">保存草稿</button>
                <button class="leno-btn">发布</button>
            </div>
        </div>
    </fragment>
    <fragment name="two">
    </fragment>
</extend>
