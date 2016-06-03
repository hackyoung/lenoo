<extend name="global._layout.two_columns">
    <fragment name="one">
        <view name="global._element.user.profile" />
        <div style="margin-top: 20px">
            <fragment name="user" show="true"></fragment>
        </div>
    </fragment>
    <fragment name="two">
        <view name="global._element.user.menu" />
    </fragment>
</extend>
