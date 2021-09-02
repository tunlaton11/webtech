

function addTable() {
    var id = document.getElementById('id').value;
    var fname = document.getElementById('fname').value;
    var lname = document.getElementById('lname').value;

    if (id.length == 0 || fname.length == 0 || lname.length == 0) {
        alert('Your information is not complete');
        return false;
    }

    var table = document.getElementById('tableList');
    var row = table.insertRow(-1);
    var arr = [row.rowIndex, id, fname, lname];
    for (var i = 0; i < 4; i++) {
        var cell = row.insertCell(i);
        cell.innerHTML = arr[i];

    }


}
