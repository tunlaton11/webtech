
function generateChess() {
    document.getElementById('board').innerHTML='';
    var board = document.getElementById('board');
    var num = parseInt(document.getElementById('num').value);
    
    for (var i = 0; i < num; i++) {
        if (i % 8 == 0) {
            var row = board.insertRow(-1);
            row.insertCell(-1).style.backgroundColor = b_w(i, row);
        }
        else {
            row.insertCell(-1).style.backgroundColor = b_w(i, row);
        }
    }
}

function b_w(i, row) {
    if (row.rowIndex % 2 == 0) {
        if (i % 2 != 0) {
            return "black";
        }
        else {
            return "white"
        }
    }
    else {
        if (i % 2 == 0) {
            return "black";
        }
        else {
            return "white"
        }
    }
}