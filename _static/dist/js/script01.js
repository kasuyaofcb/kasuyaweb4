document.addEventListener('DOMContentLoaded', function () {

//ハンバーガーメニュー
function humburgerOn(){
    document.querySelector('.headerWrapper__hum').classList.toggle('headerWrapper__hum--on');
}

document.querySelector('.headerWrapper__humTurget').addEventListener('click',()=>{
    humburgerOn();
})

function humburgerOff(){
    document.querySelector('.headerWrapper__hum').classList.toggle('headerWrapper__hum--on');
}

document.querySelector('.headerWrapper__humMenu').addEventListener('click',()=>{
    humburgerOff();
})

});
