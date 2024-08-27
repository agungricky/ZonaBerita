<div class="left-topbar-item flex-wr-s-c">
    <span id="location">Getting location...</span>
    <img class="m-b-1 m-rl-8" src="{{ asset('/public/news_portal/images/icons/icon-night.png') }}" alt="IMG">
    <span id="temperature">Suhu °</span>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>
    $(function() {
        if (!navigator.geolocation) {
            return $('#location').text('Geolocation is not supported by this browser.');
        }

        navigator.geolocation.getCurrentPosition(({ coords: { latitude: lat, longitude: lon } }) => {
            // Get the location name
            $.ajax({
                url: 'https://api.bigdatacloud.net/data/reverse-geocode-client',
                data: { latitude: lat, longitude: lon, localityLanguage: 'id' },
                success: ({ city, principalSubdivision }) => {
                    $('#location').text(`${city}, ${principalSubdivision}`);
                }
            });

            // Get the temperature
            $.ajax({
                url: 'https://data.mhews.id/prakiraan-cuaca',
                data: { lat, lon }, // Use the correct parameters if needed
                success: (data) => {
                    // Assuming data contains temperature information
                    const temperature = data.current.temperature; // Adjust this based on the actual API response
                    $('#temperature').text(`Suhu ${temperature} °C`);
                },
                error: () => {
                    $('#temperature').text('Suhu tidak tersedia.');
                }
            });
        });
    });
</script>
