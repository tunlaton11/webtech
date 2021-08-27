
function validation() {
    let nId = document.forms["myForm"]["n-id"].value;
    if (nId.length !== 13 ) {
        alert("เลขบัตรประชนต้องมี 13 หลัก");
        return false;
    }

    let front = document.forms["myForm"]["front"].value;
    if (front == "-") {
        alert("โปรดเลือกคำนำหน้า");
        return false;
    }

    let fname = document.forms["myForm"]["fname"].value;
    if (fname.length < 2 || fname.length > 20) {
        alert("ชื่อต้องมีความยาว 2-20 ตัวอักษร");
        return false;
    }

    let lname = document.forms["myForm"]["lname"].value;
    if (lname.length < 3 || lname.length > 30) {
        alert("นามสกุลต้องมีความยาว 3-30 ตัวอักษร");
        return false;
    }

    let address = document.forms["myForm"]["address"].value;
    if (address.length < 5) {
        alert("ที่อยู่ต้องมีความยาวไม่ต่ำกว่า 5 ตัวอักษร");
        return false;
    }

    let tambon = document.forms["myForm"]["tambon"].value;
    if (tambon.length < 2) {
        alert("ตำบลต้องมีความยาวไม่ต่ำกว่า 2 ตัวอักษร");
        return false;
    }

    let amp = document.forms["myForm"]["amp"].value;
    if (amp.length < 2) {
        alert("ิอำเภอต้องมีความยาวไม่ต่ำกว่า 2 ตัวอักษร");
        return false;
    }

    let pro = document.forms["myForm"]["pro"].value;
    if (pro == "-") {
        alert("โปรดเลือกจังหวัด");
        return false;
    }

    let post = document.forms["myForm"]["post"].value;
    if (post.length != 5) {
        alert("รหัสไปรษณีย์ต้องมี 5 หลัก");
        return false;
    }

    let tel = document.forms["myForm"]["tel"].value;
    if (tel.length < 9 || tel.length > 10) {
        alert("หมายเลขโทรศัพท์ต้องมี 9-10 หลัก");
        return false;
    }


}