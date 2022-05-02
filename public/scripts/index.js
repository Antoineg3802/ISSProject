function againAndAgain() {
    let actualISSPosition = {};
    $.get('http://api.open-notify.org/iss-now.json', '', (data) => {
        actualISSPosition.lat = parseFloat(data.iss_position.latitude);
        actualISSPosition.lon = parseFloat(data.iss_position.longitude);
    }).then(()=>{
        macarte.removeLayer(marker);
        marker = L.marker([actualISSPosition.lat, actualISSPosition.lon]).addTo(macarte);
        let popup = "ISS at : " + Date();
        marker.bindPopup(popup);
    })
}

function initMap(actualISSPosition) {
    console.log(actualISSPosition)
    macarte = L.map('map').setView([actualISSPosition.lat, actualISSPosition.lon], 3);
    L.tileLayer('https://{s}.tile.openstreetmap.fr/osmfr/{z}/{x}/{y}.png', {
        attribution: '<a href="//openstreetmap.fr">OSM France</a>',
        minZoom: 1,
        maxZoom: 20
    }).addTo(macarte);

    marker = L.marker([actualISSPosition.lat, actualISSPosition.lon]).addTo(macarte);
    marker.setLatLng([actualISSPosition.lat, actualISSPosition.lon]).update();
    let popup = "ISS at : " + Date.now().toString();
    marker.bindPopup(popup);
}

window.onload = () => {
    let actualISSPosition = {};
    var marker;
    var macarte;
    $.get('http://api.open-notify.org/iss-now.json', '', (data) => {
        actualISSPosition.lat = parseFloat(data.iss_position.latitude);
        actualISSPosition.lon = parseFloat(data.iss_position.longitude);
    }).then(() => {
        initMap(actualISSPosition)
    });
    setInterval(againAndAgain, 5000);
};