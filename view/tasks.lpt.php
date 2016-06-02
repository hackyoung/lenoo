<extend name="global._layout.two_columns">
    <fragment name="one">
        <?php $list = [1,1,1,1,1,1,11,1,1,1,1,1,1,1,11];?>
        <div style="display: flex; display: -webkit-flex; flex-wrap: wrap; justify-content: space-around">
        <llist name="{$list}" id="item">
            <view name="global._element.item.task" />
        </llist>
        </div>
    </fragment>
    <fragment name="two">
        hello world
    </fragment>
</extend>
