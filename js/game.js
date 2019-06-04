// function showShop() {
//     document.getElementById("playground").style.backgroundImage = "url('image/shop.png')";
//     document.getElementById("playground").style.backgroundSize = "cover";
//     //document.getElementById("playground").style.backgroundImage.width = "10%";
//     document.getElementById("playground").style.backgroundRepeat = "no-repeat";

// }
// function showProfile() {
//     document.getElementById("playground").style.backgroundImage = "none";
// }

function getXMLHttpRequest(){
    try { return new XMLHttpRequest();} catch(err1) {
      try { return new ActiveXObject('Msxml2.XMLHTTP'); } catch(err2) {
        try { return new ActiveXObject('Microsoft.XMLHTTP');} catch(err3) { 
          alert("Your browser does not support Ajax");
          return false; }
      }
    }
}

var r = getXMLHttpRequest();

function processResponse() {
    document.querySelector("#playground").innerHTML=r.responseText;
}

function showProfile() {
    var login = document.querySelector("#xd").innerHTML;
    r.open("GET", "php/profil.php?login="+login, true);
    r.onreadystatechange = processResponse;
    r.send();
}

function showQuest() {
    r.open("GET", "php/quest.php", true);
    r.onreadystatechange = processResponse;
    r.send();
}
function showFizjo() {
    r.open("GET", "php/fizjo.php",true);
    r.onreadystatechange = processResponse;
    r.send();
}