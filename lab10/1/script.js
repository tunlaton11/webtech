const locationName = () => {
    var locate = document.getElementById("location").value;
    document.getElementById('map').src = `https://maps.google.com/maps?q=${locate}&t=&z=15&ie=UTF8&iwloc=&output=embed`;
}

const locationCo = () => {
    var lat = document.getElementById("lat").value;
    var long = document.getElementById("long").value;

    document.getElementById('map').src = `https://maps.google.com/maps?q=${lat},${long}&t=&z=15&ie=UTF8&iwloc=&output=embed`;
}
