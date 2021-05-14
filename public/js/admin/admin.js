/**
 * CLASS UTILITES MERUPAKAN CLASS YANG MENANGANI AKTIVITAS ATAU PERILAKU UMUM DARI HALAMAN INI
 */
class utilitiesMap{
    // THE GIANT MAP
    static mymap;
    // THE NEW MARKER
    static newMarker;
    // LAYER GROUP AKAN MENAMPUNG SEMUA MARKER DI DALAM MAP
    static layergroup;



    /**
     * INISIASI MAP DAN DISIMPAN KE VARIABLE MYMAP
     */
    static initMap(){
        $('#title').click(function(){
            $('#sidenav').toggleClass('active')
        });

        utilitiesMap.mymap = L.map('map').setView([-8.54467, 115.307764], 10);

        utilitiesMap.mymap.pm.addControls({
            position: 'topleft',
            drawMarker: true,
            drawPolyline: false,
            drawCircleMarker: false,
            drawRectangle: false,
            drawPolygon: false,
            drawCircle: false,
            cutPolygon: false,
            editMode: false,
            dragMode: false,
        });

        L.tileLayer('https://api.maptiler.com/maps/streets/{z}/{x}/{y}.png?key=0VP1gMNjsi3b02UWNdXz',{
            attribution: '<a href="https://www.maptiler.com/copyright/" target="_blank">&copy; MapTiler</a> <a href="https://www.openstreetmap.org/copyright" target="_blank">&copy; OpenStreetMap contributors</a>'
        }).addTo(utilitiesMap.mymap);
    }

    // CREATE EVENT
    static setEvent(){

        // EVENT YANG BERJALAN SESAAT SETELAH MARKER DI TEMPEL
        utilitiesMap.mymap.on('pm:create', function(e) {
            utilitiesMap.newMarker = e;
            
            formCreateTempatIbadah.longtitude = e.layer.getLatLng().lat;
            formCreateTempatIbadah.latitude = e.layer.getLatLng().lng;
            // SHOW THE MODAL
            $('#basicExampleModal').modal({
                keyboard: false,
                backdrop: 'static'
            });

            $('#basicExampleModal').on('shown.bs.modal', function (e) {
                // do something with options
                utilitiesMap.mymap.removeLayer(utilitiesMap.newMarker.layer);
                $(this).off('shown.bs.modal');
            });
        });

        // EVENT YANG BERJALAN SAAT SETELAH TOMBOL REMOVE / DELETE DITEKAN
        utilitiesMap.mymap.on('pm:remove', function(e) {
            
        });

    }

    static createLineJSON(lines){
        let new_line = [];
        lines.forEach(element => {
            let coordinate = [];
            element.getLatLngs().forEach(element => {
                coordinate.push(Object.values(element));
            });
            new_line.push(coordinate);
        });
        console.log(JSON.stringify(new_line));
    }
}

$('document').ready(function(){
    utilitiesMap.initMap();
    utilitiesMap.setEvent();
});
