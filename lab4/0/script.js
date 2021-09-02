var table = document.getElementById('table0');
var row = table.insertRow(-1); //Row position 0,1,2,...,n  -1 = last
var cell, text, tnode;
    
for (var i = 0; i < 3; i++) {
    // create a new column
    cell = row.insertCell(-1);
    text = 'Row ' + row.rowIndex + ', Column ' + i;
    tnode = document.createTextNode(text);
    // add TextNode to column
    cell.appendChild(tnode);
}    