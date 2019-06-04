var skin = 1;
var hair = 1;
var hairColor = 1;
const src = document.getElementById("dupa");
const bg = document.getElementById("avatar");

function arrow_left_skin() {
    if(skin === 1){
        skin = 3;
    }else if(skin === 2){
        skin = 1;
    }else if(skin === 3){
        skin = 2;
    }
    document.getElementById("avatar").style.backgroundImage = "url('./image/avatars/avatar" + skin +"-"+ hair +"-"+ hairColor +".png')";
    src.innerHTML=`<input type='hidden' value='${bg.style.backgroundImage}' name='avatar'>`;
}
function arrow_right_skin() {
    if (skin === 1) {
        skin = 2;
    }else if(skin === 2){
        skin = 3;
    }else if(skin === 3){
        skin = 1;
    }
    document.getElementById("avatar").style.backgroundImage = "url('./image/avatars/avatar" + skin +"-"+ hair +"-"+ hairColor +".png')";
    src.innerHTML=`<input type='hidden' value='${bg.style.backgroundImage}' name='avatar'>`;
}
function arrow_left_hair() {
    if (hair === 1) {
        hair = 2;
    }else if(hair === 2){
        hair = 1;
    }
    document.getElementById("avatar").style.backgroundImage = "url('./image/avatars/avatar" + skin +"-"+ hair +"-"+ hairColor +".png')";
    src.innerHTML=`<input type='hidden' value='${bg.style.backgroundImage}' name='avatar'>`;
}
function arrow_right_hair() {
    if (hair === 1) {
        hair = 2;
    }else if(hair === 2){
        hair = 1;
    }
    document.getElementById("avatar").style.backgroundImage = "url('./image/avatars/avatar" + skin +"-"+ hair +"-"+ hairColor +".png')";
    src.innerHTML=`<input type='hidden' value='${bg.style.backgroundImage}' name='avatar'>`;
}
function arrow_left_hairColor() {
    if (hairColor === 1) {
        hairColor = 2;
    }else if(hairColor === 2){
        hairColor = 1;
    }
    document.getElementById("avatar").style.backgroundImage = "url('./image/avatars/avatar" + skin +"-"+ hair +"-"+ hairColor +".png')";
    src.innerHTML=`<input type='hidden' value='${bg.style.backgroundImage}' name='avatar'>`;
}
function arrow_right_hairColor() {
    if (hairColor === 1) {
        hairColor = 2;
    }else if(hairColor === 2){
        hairColor = 1;
    }
    document.getElementById("avatar").style.backgroundImage = "url('./image/avatars/avatar" + skin +"-"+ hair +"-"+ hairColor +".png')";
    src.innerHTML=`<input type='hidden' value='${bg.style.backgroundImage}' name='avatar'>`;
}


