
// var data = ['200', '500', '600', '450', '400']

function show_score() {
    if (btn.innerText === "View chart"){
        btn.innerText = "Hide";
        var data = ['200', '500', '600', '450', '400'];
    }
    else {
        btn.innerText= "View chart";
        var data = ['100', '100', '100', '100', '100'];
    }
    for (var i = 0; i < data.length; i++) {
        var str_i = i.toString();
        document.getElementById('row'+ str_i).style.width = data[i]+'px';
    }
    
}