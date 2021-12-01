function locationCo() {
    var locate = document.getElementById("lo").value;
    document.getElementById('map').src = `https://maps.google.com/maps?q=${locate}&t=&z=15&ie=UTF8&iwloc=&output=embed`;
}