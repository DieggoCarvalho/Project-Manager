// TOGGLE SHOW/HIDE
var show = () => {
    // var show = (title, txt) => {
    // document.getElementById("poptitle").innerHTML = title;
    // document.getElementById("poptext").innerHTML = txt;
    document.getElementById("popwrap").style.display = "block";
};
var hide = () => {
    document.getElementById("popwrap").style.display = "none";
};

var nshow = (tela) => {
    switch(tela) {
        case 1:
            document.getElementById("confirm").style.display = "block";
        break; 
        case 2:
            document.getElementById("save").style.display = "block";
        break; 
        case 3:
            document.getElementById("alert").style.display = "block";
        break; 
        case 4:
            document.getElementById("delete").style.display = "block"; 
    }
};

var nhide = (tela) => {
    switch(tela) {
        case 1:
            document.getElementById("confirm").style.display = "none";
        break; 
        case 2:
            document.getElementById("save").style.display = "none";
        break; 
        case 3:
            document.getElementById("alert").style.display = "none";
        break; 
        case 4:
            document.getElementById("delete").style.display = "none"; 
    }
};

