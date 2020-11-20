<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <script src="https://kit.fontawesome.com/53f074244e.js" crossorigin="anonymous"></script>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css"
   integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A=="
   crossorigin=""/>
   <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"
   integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA=="
   crossorigin=""></script>
   <link rel="stylesheet" href="css/index.css">
    <title>Gazeteer</title>
  </head>
  <body>
    <div class="navInfo">
    <h1 class ="logo"> Gazeteer <img src="img/gazeeter_icon.jpeg" alt=""> </h1>
    <select class="" onchange="getSelectValue()" name="">
      <option value="">choose an option...</option>
      <option value="Afghanistan">Afghanistan</option>
      <option value="Albania">Albania</option>
      <option value="Algeria">Algeria</option>
      <option value="Andorra">Andorra</option>
      <option value="Angola">Angola</option>
      <option value="Anguilla">Anguilla</option>
      <option value="Barbuda">Antigua and Barbuda</option>
      <option value="Argentina">Argentina</option>
      <option value="Armenia">Armenia</option>
      <option value="Aruba">Aruba</option>
      <option value="Australia">Australia</option>
      <option value="Austria">Austria</option>
      <option value="Azerbaijan">Azerbaijan</option>
      <option value="Bahamas">Bahamas</option>
      <option value="Bahrain">Bahrain</option>
      <option value="Bangladesh">Bangladesh</option>
      <option value="Barbados">Barbados</option>
      <option value="Belarus">Belarus</option>
      <option value="Belgium">Belgium</option>
      <option value="Belize">Belize</option>
      <option value="Benin">Benin</option>
      <option value="Bermuda">Bermuda</option>
      <option value="Bhutan">Bhutan</option>
      <option value="Bolivia">Bolivia</option>
      <option value="Bosnia">Bosnia and Herzegovina</option>
      <option value="Botswana">Botswana</option>
      <option value="Brazil">Brazil</option>
      <option value="Brunei">Brunei Darussalam</option>
      <option value="Bulgaria">Bulgaria</option>
      <option value="BurkinaFaso">Burkina Faso</option>
      <option value="Burundi">Burundi</option>
      <option value="Cambodia">Cambodia</option>
      <option value="Cameroon">Cameroon</option>
      <option value="Canada">Canada</option>
      <option value="Chad">Chad</option>
      <option value="Chile">Chile</option>
      <option value="China">China</option>
      <option value="Colombia">Colombia</option>
      <option value="Comoros">Comoros</option>
      <option value="Congo">Congo</option>
      <option value="Croatia">Croatia</option>
      <option value="Cuba">Cuba</option>
      <option value="Cyprus">Cyprus</option>
      <option value="Denmark">Denmark</option>
      <option value="Djibouti">Djibouti</option>
      <option value="Ecuador">Ecuador</option>
      <option value="Egypt">Egypt</option>
      <option value="Salvador">El Salvador</option>
      <option value="Eritrea">Eritrea</option>
      <option value="Estonia">Estonia</option>
      <option value="Ethiopia">Ethiopia</option>
      <option value="Fiji">Fiji</option>
      <option value="Finland">Finland</option>
      <option value="France">France</option>
      <option value="Gabon">Gabon</option>
      <option value="Gambia">Gambia</option>
      <option value="Georgia">Georgia</option>
      <option value="Germany">Germany</option>
      <option value="Ghana">Ghana</option>
      <option value="Gibraltar">Gibraltar</option>
      <option value="Greece">Greece</option>
      <option value="Greenland">Greenland</option>
      <option value="Grenada">Grenada</option>
      <option value="Guadeloupe">Guadeloupe</option>
      <option value="Guam">Guam</option>
      <option value="Guatemala">Guatemala</option>
      <option value="Guinea">Guinea</option>
      <option value="Guinea-bissau">Guinea-bissau</option>
      <option value="Guyana">Guyana</option>
      <option value="Haiti">Haiti</option>
      <option value="Heard">Heard Island and Mcdonald Islands</option>
      <option value="Vatican">Vatican City</option>
      <option value="Honduras">Honduras</option>
      <option value="HongKong">Hong Kong</option>
      <option value="Hungary">Hungary</option>
      <option value="Iceland">Iceland</option>
      <option value="India">India</option>
      <option value="Indonesia">Indonesia</option>
      <option value="Iran"/>Iran</option>
      <option value="Iraq"/>Iraq</option>
      <option value="Ireland">Ireland</option>
      <option value="Israel">Israel</option>
      <option value="Italy">Italy</option>
      <option value="Jamaica">Jamaica</option>
      <option value="Japan">Japan</option>
      <option value="Jordan">Jordan</option>
      <option value="Kazakhstan">Kazakhstan</option>
      <option value="Kenya">Kenya</option>
      <option value="Kiribati">Kiribati</option>
      <option value="Kuwait">Kuwait</option>
      <option value="Kyrgyzstan">Kyrgyzstan</option>
      <option value="Laos">Laos</option>
      <option value="Latvia">Latvia</option>
      <option value="Lebanon">Lebanon</option>
      <option value="Lesotho">Lesotho</option>
      <option value="Liberia">Liberia</option>
      <option value="Libya">Libya</option>
      <option value="Liechtenstein">Liechtenstein</option>
      <option value="Lithuania">Lithuania</option>
      <option value="Luxembourg">Luxembourg</option>
      <option value="Macedonia">Macedonia</option>
      <option value="Madagascar">Madagascar</option>
      <option value="Malawi">Malawi</option>
      <option value="Malaysia">Malaysia</option>
      <option value="Maldives">Maldives</option>
      <option value="Mali">Mali</option>
      <option value="Malta">Malta</option>
      <option value="Martinique">Martinique</option>
      <option value="Mauritania">Mauritania</option>
      <option value="Mauritius">Mauritius</option>
      <option value="Mayotte">Mayotte</option>
      <option value="Mexico">Mexico</option>
      <option value="Micronesia">Micronesia</option>
      <option value="Moldova">Moldova</option>
      <option value="Monaco">Monaco</option>
      <option value="Mongolia">Mongolia</option>
      <option value="Montserrat">Montserrat</option>
      <option value="Morocco">Morocco</option>
      <option value="Mozambique">Mozambique</option>
      <option value="Myanmar">Myanmar</option>
      <option value="Namibia">Namibia</option>
      <option value="Nauru">Nauru</option>
      <option value="Nepal">Nepal</option>
      <option value="Netherlands">Netherlands</option>
      <option value="NewZealand">New Zealand</option>
      <option value="Nicaragua">Nicaragua</option>
      <option value="Niger">Niger</option>
      <option value="Nigeria">Nigeria</option>
      <option value="Niue">Niue</option>
      <option value="Norway">Norway</option>
      <option value="Oman">Oman</option>
      <option value="Pakistan">Pakistan</option>
      <option value="Palau">Palau</option>
      <option value="Palestine">Palestine</option>
      <option value="Panama">Panama</option>
      <option value="Paraguay">Paraguay</option>
      <option value="Peru">Peru</option>
      <option value="Philippines">Philippines</option>
      <option value="Pitcairn">Pitcairn</option>
      <option value="Poland">Poland</option>
      <option value="Portugal">Portugal</option>
      <option value="Qatar">Qatar</option>
      <option value="Reunion">Reunion</option>
      <option value="Romania">Romania</option>
      <option value="Russia">Russia</option>
      <option value="Rwanda">Rwanda</option>
      <option value="Nevis">Saint Kitts and Nevis</option>
      <option value="Grenadines">Saint Vincent and The Grenadines</option>
      <option value="Samoa">Samoa</option>
      <option value="Saudi">Saudi Arabia</option>
      <option value="Senegal">Senegal</option>
      <option value="Serbia">Serbia and Montenegro</option>
      <option value="Seychelles">Seychelles</option>
      <option value="Singapore">Singapore</option>
      <option value="Slovakia">Slovakia</option>
      <option value="Slovenia">Slovenia</option>
      <option value="Somalia">Somalia</option>
      <option value="SouthAfrica">South Africa</option>
      <option value="Spain">Spain</option>
      <option value="SriLanka">Sri Lanka</option>
      <option value="Sudan">Sudan</option>
      <option value="Suriname">Suriname</option>
      <option value="Swaziland">Swaziland</option>
      <option value="Sweden">Sweden</option>
      <option value="Switzerland">Switzerland</option>
      <option value="Syria">Syria</option>
      <option value="Taiwan">Taiwan</option>
      <option value="Tajikistan">Tajikistan</option>
      <option value="Tanzania">Tanzania</option>
      <option value="Thailand">Thailand</option>
      <option value="Timor-leste">Timor-leste</option>
      <option value="Togo">Togo</option>
      <option value="Tokelau">Tokelau</option>
      <option value="Tonga">Tonga</option>
      <option value="Trinidad">Trinidad and Tobago</option>
      <option value="Tunisia">Tunisia</option>
      <option value="Turkey">Turkey</option>
      <option value="Turkmenistan">Turkmenistan</option>
      <option value="Tuvalu">Tuvalu</option>
      <option value="Uganda">Uganda</option>
      <option value="Ukraine">Ukraine</option>
      <option value="Britain">United Kingdom</option>
      <option value="USA">United States Of America</option>
      <option value="Uruguay">Uruguay</option>
      <option value="Uzbekistan">Uzbekistan</option>
      <option value="Vanuatu">Vanuatu</option>
      <option value="Venezuela">Venezuela</option>
      <option value="VietNam">Vietnam</option>
      <option value="Yemen">Yemen</option>
      <option value="Zambia">Zambia</option>
      <option value="Zimbabwe">Zimbabwe</option>
    </select>
    </div>
    <div id="theMap"></div>
    <div id="accordion">
    <div class="card">
      <div class="card-header" id="headingOne">
          <div class="btn co-btn" data-toggle="collapse" data-target="#collapseOne">
            <p>Demographics</p><i class="fas fa-angle-down"></i>
          </div>
      </div>
      <div id="collapseOne" class="collapse show" data-parent="#accordion">
        <div class="card-body">
          <div class="demographic">
            <p><strong>Name: </strong><span class="de-name"></span></p>
            <p><strong>Language:</strong> <span class="de-language"></span></p>
            <p><strong>Currency:</strong> <span class="de-currency"></span></p>
            <p><strong>Flag:</strong></p>
            <div class="de-flag"><img src=""></div>
            <p><strong>Population:</strong> <span class="de-population"></span></p>
          </div>
        </div>
      </div>
    </div>
    <div class="card">
      <div class="card-header" id="headingTwo">
          <div class="btn collapsed co-btn" data-toggle="collapse" data-target="#collapseTwo">
            <p>Geographics</p><i class="fas fa-angle-down"></i>
          </div>
      </div>
      <div id="collapseTwo" class="collapse" data-parent="#accordion">
        <div class="card-body">
          <div class="Geographic">
            <p><strong>Capital:</strong> <span class="ge-capital"></span></p>
            <p><strong>Region:</strong> <span class="ge-region"></span></p>
            <p><strong>subregion:</strong> <span class="ge-subregion"></span></p>
            <p><strong>Latitude:</strong> <span class="ge-latitude"></span></p>
            <p><strong>Longitude:</strong> <span class="ge-longitude"></span></p>
          </div>
        </div>
      </div>
    </div>
    <div class="card">
      <div class="card-header" id="headingThree">
          <div class="btn collapsed co-btn" data-toggle="collapse" data-target="#collapseThree">
            <p>Weather</p><i class="fas fa-angle-down"></i>
          </div>
      </div>
      <div id="collapseThree" class="collapse" data-parent="#accordion">
        <div class="card-body">
          <div class="weather">
            <div class="we-icon"><img src=""></div>
            <p><strong>Temperature:</strong> <span class="we-temperature"></span>&deg;C</p>
            <p><strong>Humidity:</strong> <span class="we-humidity"></span></p>
            <p><strong>Clouds:</strong> <span class="we-clouds"></span>%</p>
            <p><strong>Wind:</strong> <span class="we-wind"></span>km/h</p>
          </div>
        </div>
      </div>
    </div>
    <div class="card">
      <div class="card-header" id="headingFour">
          <div class="btn collapsed co-btn" data-toggle="collapse" data-target="#collapseFour">
            <p>Time Zones</p><i class="fas fa-angle-down"></i>
          </div>
      </div>
      <div id="collapseFour" class="collapse" data-parent="#accordion">
        <div class="card-body">
          <div class="timezones">

          </div>
        </div>
      </div>
    </div>
    <div class="card">
      <div class="card-header" id="headingFive">
          <div class="btn collapsed co-btn" data-toggle="collapse" data-target="#collapseFive">
            <p>Country Codes</p><i class="fas fa-angle-down"></i>
          </div>
      </div>
      <div id="collapseFive" class="collapse" data-parent="#accordion">
        <div class="card-body">
          <div class="countrycodes">
            <p><strong>Alpha-2 code:</strong> <span class="co-alpha2"></span></p>
            <p><strong>Alpha-3 code:</strong> <span class="co-alpha3"></span></p>
            <p><strong>Calling code:+</strong><span class="co-calling"></span></p>
            <p><strong>Numeric code:</strong> <span class="co-numeric"></span></p>
            <p><strong>CIOC code: </strong><span class="co-cioc"></span></p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- <div class="container-fluid h-100">
    <div class="row h-75">
      <div class="col-2"style="background:gray"></div>
      <div class="col-10 px-0" style="background:lightblue">
         <div id="theMap"></div>
      </div>
    </div>

  </div> -->

<!-- <div class="container-fluid h-100">
  <div class="row justify-content-center h-100">
    <div class="col-4" style="background:red">
      <div class="h-100 d-flex flex-column">
        <div class="row justify-content-center"style="background:purple">
          <div class="text-white">
            <div style="height:150px">ROW 1 - fixed height</div>
          </div>
        </div>
        <div class="row justify-content-center flex-grow-1" style="background:blue">
          <div class="text-white">ROW 2 - grow remaining height</div>
        </div>
      </div>
    </div>
    <div class="col-8"style="background:gray"></div>
  </div>
</div> -->


<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script type="text/javascript" src="js/jquery-3.5.1.js"></script>
<script type="text/javascript" src="js/index.js"></script>
</body>
</html>
