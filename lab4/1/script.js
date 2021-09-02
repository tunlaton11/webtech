function sum() {
    var v1 = document.getElementById('value1').value;
    var v2 = document.getElementById('value2').value;
    document.getElementById('result').innerHTML =  "Results: " + (parseInt(v1) + parseInt(v2)).toString();
}