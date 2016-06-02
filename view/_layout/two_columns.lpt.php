<extend name="global._layout.default">
    <fragment name="body">
        <view name="global._element.header" />
        <div class="tccc">
            <section class="two-columns-container">
                <div class="one">
                    <fragment name="one" show="true"></fragment>
                </div>
                <div class="two">
                    <fragment name="two" show="true"></fragment>
                </div>
            </section>
        </div>
        <style>
            .tccc {
                display: flex;
                display: -webkit-flex;
                justify-content: center;
            }
            .two-columns-container {
                display: flex;
                display: -webkit-flex;
                width: 90%;
                max-width: 1000px; 
                align-content: flex-start;
                align-items: flex-start;
                justify-content: space-around;
            }
            .two-columns-container>.one {
                width: 60%;
            }
            .two-columns-container>.two {
                width: 30%;
            }
        </style>
        <view name="global._element.footer" />
    </fragment>
</extend>
