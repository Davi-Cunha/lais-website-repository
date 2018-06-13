<footer class="footer-container">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <ul class="footer-menu-list">
                    <li class="footer-menu-list-item"><a href="#">Home</a></li>
                    <li class="footer-menu-list-item"><a href="#">About</a></li>
                    <li class="footer-menu-list-item"><a href="#">Projects</a></li>
                    <li class="footer-menu-list-item"><a href="#">Career</a></li>
                    <li class="footer-menu-list-item"><a href="#">Contact</a></li>
                </ul>
            </div>
            <div class="col-md-4">
                <div class="footer-address-list">
                    <strong>Head Office</strong>
                    <p>Minas Gerais</p>
                    <p>Belo Horizonte</p>
                    <p>Sion</p>
                    <p>Rua Patagônia, nº 983</p>
                    <p>Brazil</p>
                    <p>Phone: +55 (31) 9 9937 9709</p>
                </div>
            </div>
            <div class="col-md-4">
                <div id="map"></div>
                <script>
                    function initMap() {
                        //Map options
                        var options = {
                            zoom: 18,
                            center: {lat: -19.927181114576015, lng: -43.92238616567613}
                        };

                        //New map
                        var map = new google.maps.Map(document.getElementById('map'), options);

                        //Add marker
                        var marker = new google.maps.Marker({
                            position: {lat: -19.927181114576015, lng: -43.92238616567613},
                            map: map
                        });

                        //Info window
                        var infoWindow = new google.maps.InfoWindow({
                            content: '<p>Direcional Engenharia</p>'
                        });

                        marker.addListener('click', function () {
                           infoWindow.open(map, marker);
                        });
                    }
                </script>
                <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAXw8FcvoDc3NMoqHEF-supPaplpYYk-DU&callback=initMap"
                        async defer></script>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="designed-by">
                    <p>Designed by <a href="http://davicunhasilva.me/" target="_blank">davicunhasilva</a></p>
                </div>
            </div>
        </div>
    </div>
</footer>