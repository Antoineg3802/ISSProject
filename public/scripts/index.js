function initMap(actualISSPosition, divName) {
    console.log(divName)
    macarte = L.map(divName).setView([actualISSPosition.lat, actualISSPosition.lon], 3);
    L.tileLayer('https://{s}.tile.openstreetmap.fr/osmfr/{z}/{x}/{y}.png', {
        attribution: '<a href="//openstreetmap.fr">OSM France</a>',
        minZoom: 1,
        maxZoom: 20
    }).addTo(macarte);

    marker = L.marker([actualISSPosition.lat, actualISSPosition.lon]).addTo(macarte);
    marker.setLatLng([actualISSPosition.lat, actualISSPosition.lon]).update();
    let date = new Date(); 
        let popup = "ISS à " + date.toLocaleTimeString('fr-FR');
    marker.bindPopup(popup);
}

function markerSetup() {
    let actualISSPosition = {};
    $.get('http://api.open-notify.org/iss-now.json', '', (data) => {
        actualISSPosition.lat = parseFloat(data.iss_position.latitude);
        actualISSPosition.lon = parseFloat(data.iss_position.longitude);
    }).then(()=>{
        macarte.removeLayer(marker);
        macarte.setView([actualISSPosition.lat, actualISSPosition.lon], 3);
        marker = L.marker([actualISSPosition.lat, actualISSPosition.lon]).addTo(macarte);
        let date = new Date(); 
        let popup = "ISS à " + date.toLocaleTimeString('fr-FR');
        marker.bindPopup(popup);
    })
}

function setupTrace(){
    let actualISSPosition = {};
    console.log('setuptrace')
    $.get('http://api.open-notify.org/iss-now.json', '', (data) => {
        actualISSPosition.lat = parseFloat(data.iss_position.latitude);
        actualISSPosition.lon = parseFloat(data.iss_position.longitude);
    }).then(()=>{
        marker = L.marker([actualISSPosition.lat, actualISSPosition.lon]).addTo(macarte);
        let date = new Date(); 
        let popup = "ISS le " + date.toLocaleDateString('fr-FR', { weekday: 'long', year: 'numeric', month: 'long', day: 'numeric' }) + ' à ' + date.toLocaleTimeString('fr-FR');
        marker.bindPopup(popup);
    })
}

window.onload = () => {
    let actualISSPosition = {};
    var marker;
    var macarte;
    const map = document.querySelector('#map');
    const mapConnected = document.querySelector('#map-connected');
    console.log
    $.get('http://api.open-notify.org/iss-now.json', '', (data) => {
        actualISSPosition.lat = parseFloat(data.iss_position.latitude);
        actualISSPosition.lon = parseFloat(data.iss_position.longitude);
    }).then(() => {
        if (map !== null) {
            initMap(actualISSPosition, 'map');
            console.log('map');
            setInterval(markerSetup, 5000);
        }else if (mapConnected !== null) {
            initMap(actualISSPosition, 'map-connected');
            console.log('mapConnected');
            setInterval(setupTrace, 5000);
        }else{
            console.log('nope')
        }
    });
};