
function random() {
    var prize1 = Math.random().toString().substr(2, 6);
    var prize2 = Math.random().toString().substr(2, 3);
    var prize3 = Math.random().toString().substr(2, 2);
    var prize4 = Math.random().toString().substr(2, 3);
    document.getElementById('p1').innerHTML = prize1;
    document.getElementById('p2').innerHTML = prize2;
    document.getElementById('p3').innerHTML = prize3;
    document.getElementById('p4').innerHTML = prize4;

}