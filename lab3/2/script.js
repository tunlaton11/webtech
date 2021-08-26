
function validation() {
    let nId = document.forms["myForm"]["n-id"].value;
    if (nId.length !== 13 ) {
        alert("เลขบัตรประชนต้องมี 13 หลัก");
        return false;
    }

    let front = document.forms["myForm"]["front"].value;
    if (front == "-") {
        alert("โปรดกรอกคำนำหน้า");
        return false;
    }

}