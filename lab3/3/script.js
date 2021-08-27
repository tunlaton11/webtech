
var img = ['1', '2', '4', '3']
function move() {
    img = [img[img.length - 1], img[0], img[1], img[2]];
    console.log(img)
}


function swap() {
    move();
    document.getElementById('img1').src = 'http://10.0.15.20/lab3/images/'+img[0]+'.png';
    document.getElementById('img2').src = 'http://10.0.15.20/lab3/images/'+img[1]+'.png';
    document.getElementById('img3').src = 'http://10.0.15.20/lab3/images/'+img[3]+'.png';
    document.getElementById('img4').src = 'http://10.0.15.20/lab3/images/'+img[2]+'.png';
}




