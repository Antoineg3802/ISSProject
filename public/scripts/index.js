var lat = 48.852969;
var lon = 2.349903;

var villes = {
	"Paris": { "lat": 48.852969, "lon": 2.349903 },
	"Brest": { "lat": 48.383, "lon": -4.500 },
	"Quimper": { "lat": 48.000, "lon": -4.190877 },
	"Bayonne": { "lat": 43.500, "lon": -1.467 }
};

var macarte = document.querySelector('#map');
// Fonction d'initialisation de la carte
function initMap() {
    // Créer l'objet "macarte" et l'insèrer dans l'élément HTML qui a l'ID "map"
    macarte = L.map('map').setView([lat, lon], 11);
    // Leaflet ne récupère pas les cartes (tiles) sur un serveur par défaut. Nous devons lui préciser où nous souhaitons les récupérer. Ici, openstreetmap.fr
    L.tileLayer('https://{s}.tile.openstreetmap.fr/osmfr/{z}/{x}/{y}.png', {
        // Il est toujours bien de laisser le lien vers la source des données
        attribution: '<a href="//openstreetmap.fr">OSM France</a>',
        minZoom: 1,
        maxZoom: 20
    }).addTo(macarte);

    for (ville in villes) {
		let marker = L.marker([villes[ville].lat, villes[ville].lon]).addTo(macarte);
        let popup = 'lat : ' + villes[ville].lat.toString() + ', lon : ' + villes[ville].lon.toString();
        marker.bindPopup(popup);
	}
}
window.onload = function () {
    // Fonction d'initialisation qui s'exécute lorsque le DOM est chargé
    initMap();
};