const facebook = document.querySelector('.facebook');
const closebtn = document.querySelector('.close');
const modal = document.getElementById('myModal');
const span = document.getElementsByClassName("close")[0];


// listen for modal clicks 
facebook.addEventListener('click', popup);
closebtn.addEventListener('click', close);


function popup(){
    modal.style.display = "block";
}

function close(){
    modal.style.display = "none";
}