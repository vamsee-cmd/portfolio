console.log("hello");
let agree=document.getElementById('darkmode');
agree.addEventListener('change',function(){
if(agree.checked){
    let profile=document.getElementsByClassName('profile');
    document.body.classList.add('inversed');
}
else{
    document.body.style.backgroundImage = "url('./assets/img/background.png')";
    document.body.style.color="auto";
}
});