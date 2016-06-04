<extend name="global._layout.user">
    <fragment name="user">
    <div style="display: flex; display: -webkit-flex; justify-content: space-between; flex-wrap: wrap;">
    <?php $h = [2,2,2,2,2,2,2,2,34,3,4,3];?>
        <llist name="{$h}" id="i">
            <view name="global.article.template" />
        </llist>
    </div>
    </fragment>
</extend>
