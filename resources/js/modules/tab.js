document.addEventListener("DOMContentLoaded", (event) => {
    let tabContainer = document.querySelectorAll('.tab-container');

    tabContainer.forEach((container) => {

        let tabs = container.querySelectorAll('.tab');
        let tabsContents = container.querySelectorAll('.tab-content');

        tabs.forEach((tab) => {

            let target = document.getElementById( tab.getAttribute('data-target') );

            tab.addEventListener('click', (element) => {
                /* DISABLE ALL */
                tabs.forEach((_this)=>{
                    _this.classList.remove('active')
                });
                tabsContents.forEach((_this)=>{
                    _this.classList.remove('active');
                });


                /* ACTIVATE CURRENT */
                tab.classList.add('active');
                target.classList.add('active');
            });

        });

    });
});
