let latitude = "";
let longitude = "";
const mymap = L.map('theMap').setView([0, 0], 1);
//making a map and tiles
const attribution =
    '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors';
const tileUrl = 'https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png';
const tiles = L.tileLayer(tileUrl, { attribution });
tiles.addTo(mymap);
let theMarkers = [];
//var marker = L.marker([51.5, -0.09]).addTo(mymap);
function countryData(data2){
  console.log(data2);
  //geographic
  $('.de-name').html(data2[0].name);
  $('.de-language').html(data2[0].languages[0].name);
  $('.de-currency').html(data2[0].currencies[0].name);
  $('.de-flag img').attr("src",data2[0].flag);
  $('.de-population').html(data2[0].population);
  //demographic
  $('.ge-capital').html(data2[0].capital);
  $('.ge-region').html(data2[0].region);
  $('.ge-subregion').html(data2[0].subregion);
  $('.ge-latitude').html(data2[0].latlng[0]);
  $('.ge-longitude').html(data2[0].latlng[1]);
  //Timezones
  let timeZones = data2[0].timezones;
  for(let x = 0; x < timeZones.length; x++){
    console.log(timeZones[x]);
    var txt1 = document.createElement("p");  // Create with DOM
    txt1.innerHTML = timeZones[x];
    $(".timezones").append(txt1);

  }
  //country codes
  $('.co-alpha2').html(data2[0].alpha2Code);
  $('.co-alpha3').html(data2[0].alpha3Code);
  $('.co-numeric').html(data2[0].numericCode);
  $('.co-cioc').html(data2[0].cioc);
  $('.co-calling').html(data2[0].callingCodes[0]);

    return data2;

}

function retreiveWeather(data){
  $.ajax({
      url: "php/weather.php",
      type: 'POST',
      dataType: 'json',
      data: {
           country: data[0].capital, alphacode: data[0].alpha2Code
      },
      success: function(data3) {
        console.log(data3);
        let weatherIcon = data3.weather[0].icon;
        $('.we-icon img').attr("src",`http://openweathermap.org/img/wn/${weatherIcon}@2x.png`);
        $('.we-temperature').html(data3.main.temp);
        $('.we-humidity').html(data3.main.humidity);
        $('.we-clouds').html(data3.clouds.all);
        $('.we-wind').html(data3.wind.speed);
          return data3;
      }
  })
}
//////////////////////////////////data based on geolocation//////////////////////////////////////////////////////
if('geolocation' in navigator){
  console.log('geolocation available');
  navigator.geolocation.getCurrentPosition(async position => {
  const lat = position.coords.latitude;
  const long = position.coords.longitude;
  $.ajax({
      url: "php/geonames.php",
      type: 'POST',
      dataType: 'json',
      data: {
          lat: lat, long: long
      },
      success: function(data) {
        console.log(data);
        let marker = L.marker([lat, long]).addTo(mymap).bindPopup(`${data.countryName}, ${data.countryCode}`).openPopup();;
        mymap.setView([lat, long], 10);

          return data;
      }
  }).then(
      function(data){
       $.ajax({
           url: "php/restcountries.php",
           type: 'POST',
           dataType: 'json',
           data: {
               country: data.countryName
           },
           success: (data2) => {
             countryData(data2);
           }
       }).then(
         (data) => {
           retreiveWeather(data);
         }
       );
    });




});
} else {
  console.log('geolocation not available');
}
///////////////////////////////////selected/////////////////////////////////////////////////////
  getSelectValue();
  function getSelectValue(){
    if(document.querySelector('select').value == "") return;
    //get country lat and longirude and plot on map
    $.ajax({
        url: "php/geocode.php",
        type: 'POST',
        dataType: 'json',
        data: {
            country: document.querySelector('select').value
        },
        success: function(data){

            latitude = data.results[0].geometry.lat;
            longitude = data.results[0].geometry.lng;
            // console.log(latitude);
            // console.log(longitude);

              mymap.eachLayer(function (layer) {
                  mymap.removeLayer(layer);
                  attribution;
                  tileUrl;
                  tiles;
                  tiles.addTo(mymap);
              });
            console.log(data);
            let marker = L.marker([latitude, longitude]).addTo(mymap).bindPopup(`${data.results[0].formatted}, ${data.results[0].components["ISO_3166-1_alpha-2"]}`).openPopup();
            mymap.setView([latitude, longitude], 5);
        }
    });

    //selected country data
    $.ajax({
        url: "php/restcountries.php",
        type: 'POST',
        dataType: 'json',
        data: {
            country: document.querySelector('select').value,
        },
        success: (data2) => {
          countryData(data2);
        }
    }).then(
      (data) => {
        retreiveWeather(data);
      }
    );


  }
  ////////////////////////////////////////////////////////////////////////////////////////
   //toggle
   let button = document.querySelector('button');
   let info = document.querySelector('.info');
   let themap = document.querySelector('.themap');

   // button.addEventListener('click', function(){
   //   // info.classList.toggle('remove');
   //   // // themap.classList.remove('col-lg-10');
   //   // // themap.classList.remove('col-md-7');
   //   // if(themap.classList.contains('col-md-9') == true){
   //   //  themap.classList.remove('col-md-9');
   //   // }else{
   //   //   themap.classList.add('col-md-9');
   //   // }
   //   // themap.classList.toggle('col-12');
   //
   // })

//jquery
$('body').css({background: 'white'});
