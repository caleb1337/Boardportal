
const redactBtn = document.querySelector('#redactAdvert');
const deleteBtn = document.querySelector('#deleteAdvert');
const container = document.querySelector('.adverts-container');

container.addEventListener('click',deleteAdvert);

function deleteAdvert(event) {
    let target = event.target;
    
    if(target.matches('#deleteAdvert')){
        while(target = target.parentElement){
            if(target.matches('.advert')){
                let id = target.dataset.id;
                const data = new FormData;
                data.set('id', id);
                void function () {
                    let path = './php/controllers/delete-advert.php';
                   
                    fetch(path,{
                        method: 'POST',
                        body: data,
                    });
                    
                    location.reload();
                }();
            }
        }
    }
    else if(target.matches('.redactAdvert')){
        while(target = target.parentElement){
            if(target.matches('.advert')){
                let id = target.dataset.id;
                let redactArea = document.querySelector('#advertArea');
                let idInput = document.querySelector('#advertId');
                let advertText = target.querySelector('.advert-text-content').textContent;

                redactArea.value = advertText;
                idInput.value = id;
                
            }
        }
    }
}