const form = document.querySelector('#reg-form');
const password = document.querySelector('#userPassword');
const passwordConf = document.querySelector('#userPasswordConf');
const message = document.querySelector('#warning-message');
const errorMessage = document.querySelector('#error-message');
const captchaBlock = document.querySelector('#captcha-block');

let captchaMemo = getRandomInt();

form.addEventListener('submit', validatePasswords)

function validatePasswords(e){
    e.preventDefault();
    if(password.value != passwordConf.value){
        message.classList.remove('d-none');
    }
    else{
        
        captchaBlock.classList.remove('d-none');
        captcha.value = captchaMemo; //здесь обратился напрямую к элементу через ID
        if(captchaInput.value === captcha.value){
            const path = 'php/controllers/controller-reg.php';
            let request = new FormData(form);
            fetch(path,{
                method: "POST",
                body: request,
                redirect: 'follow',
            }).then(response =>{
                if(response.status === 200){
                    location.replace('regsuccess');
                }
                else{
                    errorOutput.innerHTML = response.status;
                    errorMessage.classList.remove('d-none');
                }
            })
        }
        
    }
}
function getRandomInt(){
    return `${Math.round(10 * Math.random())}${Math.round(10 * Math.random())}${Math.round(10 * Math.random())}`
}