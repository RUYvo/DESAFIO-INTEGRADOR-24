// @ts-nocheck
// Vercel deve ignorar este arquivo e não tentar executá-lo no servidor

if (typeof window !== 'undefined') {
    document.addEventListener("DOMContentLoaded", function() {
        const apiKey = '108f5895';
        let weatherPieChart = null;
        let rainBarChart = null;

        const searchButton = document.getElementById('searchButton');
        const cityInput = document.getElementById('cityInput');

        searchButton.addEventListener('click', function() {
            const city = cityInput.value;
            console.log('Searching for city:', city);
            fetch(`https://api.hgbrasil.com/weather?format=json-cors&key=${apiKey}&city_name=${city}`)
            .then(response => {
                console.log('Response status:', response.status); 
                if (!response.ok) throw new Error('Network response was not ok');
                return response.json();
            })
            .then(data => {
                    console.log('Data received:', data); 
                    if (data && data.results) {
                        updateWeatherInfo(data.results);
                    } else {
                        console.error('City not found.');
                        alert('Cidade não encontrada.');
                    }
                });
        });

        function updateWeather(city) {
            console.log('Updating weather for city:', city);
            fetch(`https://api.hgbrasil.com/weather?format=json-cors&key=${apiKey}&city_name=${city}`)
            .then(response => {
                console.log('Response status:', response.status);
                if (!response.ok) throw new Error('Network response was not ok');
                return response.json();
            })
            .then(data => {
                    console.log('Data received:', data);
                    if (data && data.results) {
                        updateWeatherInfo(data.results);
                    } else {
                        console.error('City not found.');
                        alert('Cidade não encontrada.');
                    }
                });
        }
        updateWeather('Guarapuava');

        function updateWeatherInfo(weather) {
            console.log('Weather Info:', weather);
            try {
                if (document.getElementById('city')) document.getElementById('city').textContent = weather.city;
                if (document.getElementById('temp')) document.getElementById('temp').textContent = weather.temp + 'º';
                if (document.getElementById('description')) document.getElementById('description').textContent = weather.description;
                if (document.getElementById('sunrise')) document.getElementById('sunrise').textContent = weather.sunrise;
                if (document.getElementById('sunset')) document.getElementById('sunset').textContent = weather.sunset;
                if (document.getElementById('weatherImage')) document.getElementById('weatherImage').src = `https://assets.hgbrasil.com/weather/icons/conditions/${weather.condition_slug}.svg`;
                if (document.getElementById('weatherImage')) document.getElementById('weatherImage').alt = `Imagem do clima: ${weather.description}`;
                if (document.getElementById('moonPhaseImage')) document.getElementById('moonPhaseImage').src = `https://assets.hgbrasil.com/weather/icons/moon/${weather.moon_phase}.png`;
                if (document.getElementById('time')) document.getElementById('time').textContent = weather.time;
                if (document.getElementById('date')) document.getElementById('date').textContent = weather.date;
                if (document.getElementById('humidity')) document.getElementById('humidity').textContent = weather.humidity + '%';
                if (document.getElementById('cloudiness')) document.getElementById('cloudiness').textContent = weather.cloudiness + '%';
                if (document.getElementById('rain')) document.getElementById('rain').textContent = weather.rain + ' mm';
                if (document.getElementById('wind_speedy')) document.getElementById('wind_speedy').textContent = weather.wind_speedy;
                if (document.getElementById('wind_direction')) document.getElementById('wind_direction').textContent = weather.wind_direction + '°';
                if (document.getElementById('wind_cardinal')) document.getElementById('wind_cardinal').textContent = weather.wind_cardinal;
                if (document.getElementById('moon_phase')) document.getElementById('moon_phase').textContent = weather.moon_phase;
                if (document.getElementById('condition_slug')) document.getElementById('condition_slug').textContent = weather.condition_slug;
        
                const forecastCards = weather.forecast.map((day, index) => {
                    if (index >= 6) return ''; 
                    console.log('Forecast Day:', day);
                    return `
                    <div style="width: 200px;">
                        <div class="card rounded-4 h-100">
                            <div class="card-body text-center">
                                <p class="card-title"><h3>${day.weekday}</h3></p>
                                <p class="card-text">${day.date}</p>
                                <p class="card-text">Máx: ${day.max}ºC</p>
                                <p class="card-text">Mín: ${day.min}ºC</p>
                                <p class="card-text">Chuva: ${day.rain_probability}%</p>
                                <img class="img-fluid w-50" src="https://assets.hgbrasil.com/weather/icons/conditions/${day.condition}.svg" alt="Imagem do clima: ${day.description}">
                            </div>
                        </div>
                    </div>`;
                }).join('');
        
                updateBackground(weather);
                if (document.getElementById('forecast-cards')) document.getElementById('forecast-cards').innerHTML = forecastCards;
            } catch (error) {
                console.error('Error updating weather info:', error);
            }
            
            const ctxPie = document.getElementById('weatherPieChart').getContext('2d');
            const humidity = weather.humidity;
            const cloudiness = weather.cloudiness;

            const dataPie = {
                labels: ['Umidade', 'Nebulosidade'],
                datasets: [{
                    data: [humidity, cloudiness],
                    backgroundColor: ['#36A2EB', '#FF6384']
                }]
            };
            const optionsPie = {
                responsive: true,
                maintainAspectRatio: false
            };

            if (weatherPieChart) {
                weatherPieChart.destroy();
            }
            weatherPieChart = new Chart(ctxPie, {
                type: 'pie',
                data: dataPie,
                options: optionsPie
            });

            const ctxLine = document.getElementById('rainBarChart').getContext('2d');
            const rain = weather.rain;

            const dataLine = {
                labels: ['Volume de chuva'],
                datasets: [{
                    label: 'Volume de chuva (mm)',
                    data: [rain],
                    backgroundColor: ['#36A2EB']
                }]
            };

            const optionsLine = {
                responsive: true,
                maintainAspectRatio: false,
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            };

            if (rainBarChart) {
                rainBarChart.destroy();
            }
            rainBarChart = new Chart(ctxLine, {
                type: 'bar',
                data: dataLine,
                options: optionsLine
            });
        }
        
        function updateBackground(weather) {
            const backgrounds = {
                'rain':'./src/ChuvaBackground.png',
                'clear_day':'./src/EnsolaradoBackground.jpg',
                'clear_night':'./src/NoiteLimpaBackground.png',
                'hail':'./src/GranizoBackground.jpg',
                'snow':'./src/NeveBackground.jpg',
                'cloud':'./src/NubladoBackground.jpg',
                'cloudly_day':'./src/NubladoBackground.jpg',
                'cloudly_night':'./src/NoiteNubladaBackground.jpg',
                'storm':'./src/TempestadeBackground.png',
                'fog':'./src/NeblinaBackground.jpg'
            };

            let condition_slug = weather.condition_slug;
            console.log('Background Condition Slug:', condition_slug);
            if (backgrounds.hasOwnProperty(condition_slug)) {
                document.body.style.backgroundImage = `url(${backgrounds[condition_slug]})`;
            } else {
                console.error('Invalid condition slug:', condition_slug); 
            }
        }
    });
}
else {
    console.error("Este script deve ser executado no navegador e não no servidor.");
}