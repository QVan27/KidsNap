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
    let champDistance = document.getElementById('champ-distance')
    let valeurDistance = document.getElementById('valeur-distance')
    let adresse = document.getElementById('adresse')
    let select_adresse = document.getElementById('select_adresse')
    $('#form_map').submit(function (e) {
        e.preventDefault();
    })

    adresse.addEventListener("change", function (e) {
        if (adresse === '') {
           $('#select_adresse').css('display','none');
        }else{
            ajaxGet(`https://nominatim.openstreetmap.org/search?q=${this.value}&format=json&polygon_svg=1`)
            .then(reponse => {
                // On convertit la réponse en objet Javascript
                let data = JSON.parse(reponse)
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
                if ($('#select_adresse').has('option').length > 0) {
                    $('#select_adresse').find('option').remove().end();
                    if (data.length > 1) {
                        $('#select_adresse').css('display', 'flex');
                        $('#select_adresse').append('<option value="">Select - Adresse</option>');
                        for (let index = 0; index < data.length; index++) {
                            $('#select_adresse').append('<option value="' + data[index].display_name + '" id="test">' + data[index].display_name + '</option>');
                        }
                    } else {
                        ville = [data[0].lat, data[0].lon]

                        let marker = L.marker([data[0].lat, data[0].lon], markerOptions).addTo(carte)
                        marker.bindPopup(data[0].display_name)
                        adresse.value = ''
                        $('#select_adresse').find('option').remove().end().css('display', 'none');
                    }
                }
                else {
                    if (data.length > 1) {
                        $('#select_adresse').css('display', 'flex');
                        $('#select_adresse').append('<option value="">Select - Adresse</option>');
                        for (let index = 0; index < data.length; index++) {
                            $('#select_adresse').append('<option value="' + data[index].display_name + '" id="test">' + data[index].display_name + '</option>');
                        }
                    } else {
                        ville = [data[0].lat, data[0].lon]

                        let marker = L.marker([data[0].lat, data[0].lon], markerOptions).addTo(carte)
                        marker.bindPopup(data[0].display_name)
                        adresse.value = ''
                        $('#select_adresse').find('option').remove().end().css('display', 'none');
                    }
                }

                // On centre la carte sur la ville
                carte.panTo(ville)

            })
        }
       
    })
    select_adresse.addEventListener("change", function () {
        let selectedItem = $(this).children("option:selected").val();
        var howManyCommasDoIHave = selectedItem.replace(/,/g, '');
        ajaxGet(`https://nominatim.openstreetmap.org/search?q=${howManyCommasDoIHave}&format=json&addressdetails=1&limit=1&polygon_svg=1`)
            .then(reponse => {
                // On convertit la réponse en objet Javascript
                let data = JSON.parse(reponse)
                console.log(data)

                var iconOptions = {
                    iconUrl: 'asset/image/marker_creche.png',
                    iconSize: [45, 50]
                }

                // Creating a custom icon
                var customIcon = L.icon(iconOptions);
                var markerOptions = {
                    icon: customIcon
                }
                ville = [data[0].lat, data[0].lon]

                let marker = L.marker([data[0].lat, data[0].lon], markerOptions).addTo(carte)
                marker.bindPopup(data[0].display_name)

                carte.panTo(ville)
            })
        adresse.value = ''

        $('#select_adresse')
            .find('option')
            .remove()
            .end()
            .css('display', 'none')
            ;

    })



    champDistance.addEventListener("change", function () {
        distance = this.value

        valeurDistance.innerText = distance + " km"

        // On vérifie si on a une ville
        if (ville != "") {
            // On envoie la requête
            ajaxGet(`/mvc/Kidsnap/KidsNap/base_mvc/App/Views/map/chargeAgences.php?lat=${ville[0]}&lon=${ville[1]}&distance=${distance}`)
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

                    let donnees = JSON.parse(reponse)
                    console.log(donnees)
                    Object.entries(donnees).forEach(agence => {
                        console.log(agence)
                        // On crée le marqueur
                        let marker = L.marker([agence[1].lat, agence[1].lon]).addTo(carte)
                        marker.bindPopup(agence[1].map_nom)

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