<div class="left-topbar-item flex-wr-s-c">
    <span id="location">Mencari lokasi...</span>
    <img class="m-b-1 m-rl-8" src="{{ asset('/public/news_portal/images/icons/icon-night.png') }}" alt="IMG">
    <span id="temperature">Suhu °</span>
    <span id="wind" class="left-topbar-item">Angin Km/jam</span>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>
    $(function() {
        // Melakukan pengecekan browser support /
        if (!navigator.geolocation) {
            return $('#location').text('Browser yang gunakan Tidak support lokasi.');
        }

        navigator.geolocation.getCurrentPosition(({ coords: { latitude: lat, longitude: lon } }) => {
            // Mengambil data lokasi pengguna (Bigdata)
            $.ajax({
                url: `https://api-bdc.net/data/reverse-geocode-client?latitude=${lat}&longitude=${lon}&localityLanguage=id`,
                success: ({
                    city,
                    principalSubdivision
                }) => {
                    $('#location').text(`${city}, ${principalSubdivision}`);
                }
            });

            // Menggunakan Ajax untuk mengambil data suhu (openweather)
            $.ajax({
                url: `https://api.openweathermap.org/data/2.5/weather?lat=${lat}&lon=${lon}&appid=ec59957460e7adc37595b30e9e57f489&units=metric`,
                success: ({
                    main, wind
                }) => {
                    $('#temperature').text(`Suhu: ${main.temp} °C`);
                    $('#wind').text(`Angin: ${wind.speed} km/jam`);
                }
            });
        });
    });
</script>
