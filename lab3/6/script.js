
function create() {
    var name = document.forms["myForm"]["name"].value;
    var tel = document.forms["myForm"]["tel"].value;
    var email = document.forms["myForm"]["email"].value
    var company = document.forms["myForm"]["company"].value;

    if (name.length == 0 || company.length == 0 || email.length == 0 || company.length == 0) {
        alert("Your information is not complete!");
        return false
    }
    else {
        document.getElementById('user').src = 'https://image.flaticon.com/icons/png/512/149/149071.png';
        document.getElementById('showName').innerHTML = name;
        document.getElementById('showPhone').innerHTML = tel;
        document.getElementById('showMail').innerHTML = email;
        document.getElementById('showCom').innerHTML = company;
    }
    }
    