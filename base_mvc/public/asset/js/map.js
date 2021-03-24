// Variables globales
let ville = distance = ""

window.onload = () => {
    // On intialise la carte
    let carte = L.map('map').setView([48.852969, 2.349903], 13)

    // On charge les "tuiles"
    L.tileLayer('https://{s}.tile.openstreetmap.fr/osmfr/{z}/{x}/{y}.png', {
        // Il est toujours bien de laisser le lien vers la source des données
        attribution: 'données © <a href="//osm.org/copyright">OpenStreetMap</a>/ODbL - rendu <a href="//openstreetmap.fr">OSM France</a>',
        minZoom: 1,
        maxZoom: 20,
        name: 'tiles' // Permettra de ne pas supprimer cette couche
    }).addTo(carte)

    // Gestion des champs
    let champVille = document.getElementById('champ-ville')
    let champDistance = document.getElementById('champ-distance')
    let valeurDistance = document.getElementById('valeur-distance')
    let adresse = document.getElementById('adresse')
    let name = document.getElementById('name')
    let select = document.getElementById('select')
    var combo = document.createElement('select');
    $('#form_map').submit(function(e){
        e.preventDefault();
    })


    champVille.addEventListener("change", function () {
        // On envoie le requête ajax vers Nominatim
        ajaxGet(`https://nominatim.openstreetmap.org/search?q=${this.value}&format=json&addressdetails=1&limit=1&polygon_svg=1`)
            .then(reponse => {
                // On convertit la réponse en objet Javascript
                let data = JSON.parse(reponse)

                // On stocke les coordonnées dans ville
                ville = [data[0].lat, data[0].lon]

                // On centre la carte sur la ville
                carte.panTo(ville)
            })
    })
    adresse.addEventListener("change", function (e) {
        ajaxGet(`https://nominatim.openstreetmap.org/search?q=${this.value}&format=json`)
            .then(reponse => {
                // On convertit la réponse en objet Javascript
                let data = JSON.parse(reponse)
                console.log(data)
                // Icon options
                var iconOptions = {
                    iconUrl: 'asset/image/marker_creche.png',
                    iconSize: [45, 50]
                }

                // Creating a custom icon
                var customIcon = L.icon(iconOptions);
                var markerOptions = {
                    icon: customIcon
                }
                $('#name').css('display', 'flex');
                if (data.length > 1) {
                    for (let index = 0; index < data.length; index++) {
                        $('#name').append('<option value="' + data[index].display_name + '" id="test">' + data[index].display_name + '</option>');

                    }

                } else {
                    $('#name').innerHTML = "";
                    ville = [data[0].lat, data[0].lon]

                    let marker = L.marker([data[0].lat, data[0].lon], markerOptions).addTo(carte)
                    marker.bindPopup(data[0].display_name)

                }
                // On stocke les coordonnées dans ville


                // On centre la carte sur la ville
                carte.panTo(ville)
            })
    })
    name.addEventListener("change", function (e) {
        let selectedItem = $(this).children("option:selected").val();
        var howManyCommasDoIHave = selectedItem.replace(/,/g, '');
        adresse.value = howManyCommasDoIHave
    })


    champDistance.addEventListener("change", function () {
        distance = this.value

        valeurDistance.innerText = distance + " km"

        // On vérifie si on a une ville
        if (ville != "") {
            // On envoie la requête
            ajaxGet(`/mvc/Kidsnap/KidsNap/base_mvc//App/Views/map/chargeAgences.php/.php?lat=${ville[0]}&lon=${ville[1]}&distance=${distance}`)
                .then(reponse => {
                    // On supprime toutes les couches de la carte
                    carte.eachLayer(function (layer) {
                        if (layer.options.name != 'tiles') carte.removeLayer(layer)
                    })

                    //On trace un cercle correspondant à la distance souhaitée
                    let circle = L.circle(ville, {
                        color: "#839c49",
                        fillColor: "#839c49",
                        fillOpacity: 0.3,
                        radius: distance * 1000
                    }).addTo(carte)

                    // On boucle sur les données
                    console.log(reponse);
                    let donnees = JSON.parse(reponse)

                    Object.entries(donnees).forEach(agence => {
                        // On crée le marqueur
                        let marker = L.marker([agence[1].lat, agence[1].lon]).addTo(carte)
                        marker.bindPopup(agence[1].nom)

                    })
                    // On centre la carte sur le cercle
                    let bounds = circle.getBounds()
                    carte.fitBounds(bounds)
                })
        }
    })
}

/**
 * Cette fonction effectue un appel Ajax vers une url et retourne une promesse
 * @param {string} url 
 */
function ajaxGet(url) {
    return new Promise(function (resolve, reject) {
        // Nous allons gérer la promesse
        let xmlhttp = new XMLHttpRequest()

        xmlhttp.onreadystatechange = function () {
            if (xmlhttp.readyState == 4) {
                if (xmlhttp.status == 200) {
                    // On "résoud" la promesse
                    resolve(xmlhttp.response)
                } else {
                    reject(xmlhttp)
                }
            }
        }

        xmlhttp.onerror = function (error) {
            reject(error)
        }

        xmlhttp.open('get', url, true)
        xmlhttp.send()
    })
}