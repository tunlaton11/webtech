
function reply(elem) {
    var parent = document.getElementById(elem.parentNode.id);
    var inp = document.createElement("input");
    inp.className = 'form-control mt-3';
    if (parent.id == 'q1') {
        inp.id = 'ip1';
    }
    else if (parent.id == 'q2') {
        inp.id = 'ip2';
    }
    else if (parent.id == 'q3') {
        inp.id = 'ip3';
    }
    parent.appendChild(inp);
}

function showAns() {
    var ans1 = document.getElementById('ip1').value;
    var ans2 = document.getElementById('ip2').value;
    var ans3 = document.getElementById('ip3').value;
    document.getElementById('ip1').value = '';
    document.getElementById('ip2').value = '';
    document.getElementById('ip3').value = '';

    var parent = document.getElementById('ans'); 
    var sub_parent = document.createElement('div');
    sub_parent.className = 'col-sm-4 mb-2';
    var card = document.createElement('div');
    card.className = 'card bg-success p-2';
    var card_body = document.createElement('card-body');

    card_body.innerHTML = "Name: " + ans1 + "<br>Age: " + ans2 + "<br>Hobby: " + ans3;

    parent.appendChild(sub_parent).appendChild(card).appendChild(card_body);
}