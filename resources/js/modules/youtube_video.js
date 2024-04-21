document.addEventListener("DOMContentLoaded", (event) => {

    /* YOUTUBE VIDEOS*/
    let activateContent = document.querySelectorAll('.activateContent');

    activateContent.forEach( (element) => {

        let content = element.getAttribute('data-content');
        let containerId = element.getAttribute('data-content-container');
        let container = document.querySelector( containerId );

        let warningId = element.getAttribute('data-warning');
        let warning = document.querySelector( warningId );

        let elementId = element.getAttribute('data-id');

        element.addEventListener('click', function()  {

            warning.style.display = 'none';
            container.innerHTML = content;

            // LOCAL STORAGE
            /*
            let grantedIds = getGrantedIdsFromStorate();
            if(!grantedIds.includes(elementId)) {
                grantedIds.push(elementId);
                localStorage.setItem('grantedIds', grantedIds.join(';'));
            }
            */

        });

        // ACTIVATE IF GRANTED
        /*
        let grantedIds = getGrantedIdsFromStorate();
        if(grantedIds.includes(elementId)) {
            warning.style.display = 'none';
            container.innerHTML = content;
        }
        */

    });
});
