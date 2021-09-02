function sum() {
    var v1 = document.getElementById('value1').value;
    var v2 = document.getElementById('value2').value;
    document.getElementById('result').innerHTML =  "Results: " + (parseInt(v1) + parseInt(v2)).toString();

    var ptag = document.createElement("p");
    var sum = v1 + " + " + v2 + " = " + (parseInt(v1) + parseInt(v2)).toString();
    var txt = document.createTextNode(sum);
    ptag.appendChild(txt);
    var parent1 = document.getElementById('history');
    parent1.appendChild(ptag);
}