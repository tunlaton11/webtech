
function addList(menu) {
    var li_tag = document.createElement('li');
    li_tag.className = "list-group-item d-flex justify-content-between align-items-center";
    var txt = document.createTextNode(menu);
    li_tag.appendChild(txt);

    var parent1 = document.getElementById('list');
    parent1.appendChild(li_tag);

    var span_tag = document.createElement('span');
    span_tag.className = "badge badge-secondary badge-pill";
    var txt2 = document.createTextNode("x1");
    span_tag.appendChild(txt2);

    li_tag.appendChild(span_tag);
    
}

