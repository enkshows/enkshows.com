<?php
header('Content-Type: application/json');

$t = $_GET['type'];

switch($t) {
  case 3:
    echo '{"title":"Rooftops & Outdoor Spaces","type":"marker","points":[
    {"lat":40.729324,"lon":-74.0022,  "title":"Bar Pitti",                 "html":"<h3>40/40 Club</h3><p>Lorem Ipsum..</p>","zoom":15},
    {"lat":40.703464,"lon":-74.01692, "title":"Battery Park",              "html":"<h3>Apotheke</h3><p>Lorem Ipsum..</p>","zoom":15},
    {"lat":40.75753,"lon":-73.984337, "title":"Bryant Park",               "html":"<h3>Beauty and Essex</h3><p>Lorem Ipsum..</p>","zoom":15},
    {"lat":40.783287,"lon":-73.965307, "title":"Central Park", "html":"<h3>Boathouse Bar </h3><p>Lorem Ipsum..</p>","zoom":15},
    {"lat":40.771767,"lon":-73.982824,"title":"Empire Hotel Rooftop Bar",  "html":"<h3>Del Frisco\'s Bar</h3><p>Lorem Ipsum..</p>","zoom":15},
    {"lat":40.775342,"lon":-74.008026,"title":"High Line ",                "html":"<h3>Headless Horseman </h3><p>Lorem Ipsum..</p>","zoom":15},
    {"lat":40.764251,"lon":-73.997673,"title":"Hudson Terrace",            "html":"<h3>Houston Hall</h3><p>Lorem Ipsum..</p>","zoom":15},
    {"lat":40.750768,"lon":-74.003284,"title":"La Piscine at Hotel Americano","html":"<h3>Kir Royale at Gansevoort</h3><p>Lorem Ipsum..</p>","zoom":15},
    {"lat":40.740153,"lon":-74.00587, "title":"Plunge Bar & Lounge",      "html":"<h3>Lillie\'s Victorian Establishment</h3><p>Lorem Ipsum..</p>","zoom":15},
    {"lat":40.784701,"lon":-73.9888,  "title":"Refinery Hotel Rooftop Bar","html":"<h3>Mamasita</h3><p>Lorem Ipsum..</p>","zoom":15},
    {"lat":40.754084,"lon":-73.97541, "title":"Standard Biergarten",       "html":"<h3>Pegu Club on Houston Street</h3><p>Lorem Ipsum..</p>","zoom":15},
    {"lat":40.754019,"lon":-73.985195,"title":"Strand Hotel",             "html":"<h3>Raines Law Room</h3><p>Lorem Ipsum..</p>","zoom":15},
    {"lat":40.776967,"lon":-73.969059,"title":"The Boathouse in Central Park","html":"<h3>Rare View</h3><p>Lorem Ipsum..</p>","zoom":15},
    {"lat":40.748094,"lon":-73.986558,"title":"Vu Rooftop Bar",           "html":"<h3>Spice Market</h3><p>Lorem Ipsum..</p>","zoom":15},
    {"lat":40.731104,"lon":-73.99734, "title":"Washington Square Park",    "html":"<h3>The Roylton</h3><p>Lorem Ipsum..</p>","zoom":15}]}';
    break;
  case 2:
    echo '{"title":"Leisure","type":"marker","points":[
    {"lat":40.733397,"lon":-74.005269,  "title":"Avalon Salon ",            "html":"<h3>40/40 Club</h3><p>Lorem Ipsum..</p>","zoom":15},
    {"lat":40.725169,"lon":-74.003005,  "title":"Chelsea Girl ",            "html":"<h3>Apotheke</h3><p>Lorem Ipsum..</p>","zoom":15},
    {"lat":40.736072,"lon":-74.002903,  "title":"Duplex",                   "html":"<h3>Beauty and Essex</h3><p>Lorem Ipsum..</p>","zoom":15},
    {"lat":40.703871,"lon":-73.990924,  "title":"Galapagos Artspace ",      "html":"<h3>Boathouse Bar </h3><p>Lorem Ipsum..</p>","zoom":15},
    {"lat":40.768322,"lon":-73.981805,  "title":"Museum of Arts and Design","html":"<h3>Del Frisco\'s Bar</h3><p>Lorem Ipsum..</p>","zoom":15},
    {"lat":40.741925,"lon":-73.981075,  "title":"New York Comedy Club",     "html":"<h3>Headless Horseman </h3><p>Lorem Ipsum..</p>","zoom":15},
    {"lat":40.752166,"lon":-73.981708,  "title":"New York Public Library",  "html":"<h3>Houston Hall</h3><p>Lorem Ipsum..</p>","zoom":15},
    {"lat":40.742542,"lon":-74.003545,  "title":"No. 8",                    "html":"<h3>Kir Royale at Gansevoort</h3><p>Lorem Ipsum..</p>","zoom":15},
    {"lat":40.736324,"lon":-74.001921,  "title":"Rattlestick Theater",      "html":"<h3>Lillie\'s Victorian Establishment</h3><p>Lorem Ipsum..</p>","zoom":15},
    {"lat":40.735064,"lon":-74.002858,  "title":"Smalls Jazz Club",         "html":"<h3>Mamasita</h3><p>Lorem Ipsum..</p>","zoom":15},
    {"lat":40.787893,"lon":-73.83689,   "title":"Spa Castle in Queens",     "html":"<h3>Pegu Club on Houston Street</h3><p>Lorem Ipsum..</p>","zoom":15},
    {"lat":40.771385,"lon":-73.967171,  "title":"The Frick Collection",     "html":"<h3>Raines Law Room</h3><p>Lorem Ipsum..</p>","zoom":15},
    {"lat":40.726868,"lon":-74.001321,  "title":"Thompson St Nails",        "html":"<h3>Rare View</h3><p>Lorem Ipsum..</p>","zoom":15},
    {"lat":40.756864,"lon":-73.974177,  "title":"Waldorf Spa",              "html":"<h3>Spice Market</h3><p>Lorem Ipsum..</p>","zoom":15},
    {"lat":40.722925,"lon":-74.00323,   "title":"What Goes Around Comes Around","html":"<h3>The Roylton</h3><p>Lorem Ipsum..</p>","zoom":15}]}';
    break;
  case 1:
    echo '{"title":"Dine","type":"marker","points":[
    {"lat":40.72299,"lon":-73.998209,  "title":"Balthazar",             "html":"<h3>40/40 Club</h3><p>Lorem Ipsum..</p>","zoom":15},
    {"lat":40.729568,"lon":-73.986397, "title":"Beauty & Essex",        "html":"<h3>Apotheke</h3><p>Lorem Ipsum..</p>","zoom":15},
    {"lat":40.742185,"lon":-73.997812, "title":"Cafeteria",             "html":"<h3>Beauty and Essex</h3><p>Lorem Ipsum..</p>","zoom":15},
    {"lat":40.762861,"lon":-73.986397, "title":"Carmine\'s",            "html":"<h3>Boathouse Bar </h3><p>Lorem Ipsum..</p>","zoom":15},
    {"lat":40.745956,"lon":-73.992577, "title":"City Crab",             "html":"<h3>Del Frisco\'s Bar</h3><p>Lorem Ipsum..</p>","zoom":15},
    {"lat":40.74794,"lon":-73.973737,  "title":"El Pote",               "html":"<h3>Headless Horseman </h3><p>Lorem Ipsum..</p>","zoom":15},
    {"lat":40.708491,"lon":-74.017467, "title":"Gigino at Wagner Park", "html":"<h3>Houston Hall</h3><p>Lorem Ipsum..</p>","zoom":15},
    {"lat":40.764941,"lon":-73.974552, "title":"Goodman\'s Café",       "html":"<h3>Kir Royale at Gansevoort</h3><p>Lorem Ipsum..</p>","zoom":15},
    {"lat":40.729047,"lon":-73.996353, "title":"La Esquina",            "html":"<h3>Lillie\'s Victorian Establishment</h3><p>Lorem Ipsum..</p>","zoom":15},
    {"lat":40.738657,"lon":-73.985807, "title":"Maialino",              "html":"<h3>Mamasita</h3><p>Lorem Ipsum..</p>","zoom":15},
    {"lat":40.731901,"lon":-74.004518, "title":"Milk & Cookies",        "html":"<h3>Pegu Club on Houston Street</h3><p>Lorem Ipsum..</p>","zoom":15},
    {"lat":40.742835,"lon":-73.991944, "title":"Rickshaw Dumplings",    "html":"<h3>Raines Law Room</h3><p>Lorem Ipsum..</p>","zoom":15},
    {"lat":40.735356,"lon":-73.989401, "title":"The Forth",             "html":"<h3>Rare View</h3><p>Lorem Ipsum..</p>","zoom":15},
    {"lat":40.761301,"lon":-73.969574, "title":"Tulsi",                 "html":"<h3>Spice Market</h3><p>Lorem Ipsum..</p>","zoom":15},
    {"lat":40.730023,"lon":-74.001675, "title":"Villa Mosconi",         "html":"<h3>The Roylton</h3><p>Lorem Ipsum..</p>","zoom":15}]}';
    break;
  case 0:
  default:
    echo '{"title":"Drink", "type":"marker","points":[
    {"lat":40.743095,"lon":-73.989422,  "title":"40/40 Club",               "html":"<h3>40/40 Club</h3><p>Lorem Ipsum..</p>","zoom":15},
    {"lat":40.714615,"lon":-73.998091,  "title":"Apotheke",                 "html":"<h3>Apotheke</h3><p>Lorem Ipsum..</p>","zoom":15},
    {"lat":40.720583,"lon":-73.986794,  "title":"Beauty and Essex",         "html":"<h3>Beauty and Essex</h3><p>Lorem Ipsum..</p>","zoom":15},
    {"lat":40.775252,"lon":-73.96878,   "title":"Boathouse Bar ",           "html":"<h3>Boathouse Bar </h3><p>Lorem Ipsum..</p>","zoom":15},
    {"lat":40.761236,"lon":-73.9779,    "title":"Del Frisco\'s Bar",        "html":"<h3>Del Frisco\'s Bar</h3><p>Lorem Ipsum..</p>","zoom":15},
    {"lat":40.735844,"lon":-73.989058,  "title":"Headless Horseman ",       "html":"<h3>Headless Horseman </h3><p>Lorem Ipsum..</p>","zoom":15},
    {"lat":40.729015,"lon":-74.004746,  "title":"Houston Hall",             "html":"<h3>Houston Hall</h3><p>Lorem Ipsum..</p>","zoom":15},
    {"lat":40.740348,"lon":-74.005923,  "title":"Kir Royale at Gansevoort", "html":"<h3>Kir Royale at Gansevoort</h3><p>Lorem Ipsum..</p>","zoom":15},
    {"lat":40.737763,"lon":-73.991214,  "title":"Lillie\'s Victorian Establishment","html":"<h3>Lillie\'s Victorian Establishment</h3><p>Lorem Ipsum..</p>","zoom":15},
    {"lat":40.829658,"lon":-73.890438,  "title":"Mamasita",                 "html":"<h3>Mamasita</h3><p>Lorem Ipsum..</p>","zoom":15},
    {"lat":40.726974,"lon":-73.999829,  "title":"Pegu Club on Houston Street","html":"<h3>Pegu Club on Houston Street</h3><p>Lorem Ipsum..</p>","zoom":15},
    {"lat":40.739323,"lon":-73.994272,  "title":"Raines Law Room",          "html":"<h3>Raines Law Room</h3><p>Lorem Ipsum..</p>","zoom":15},
    {"lat":40.74898,"lon":-73.977985,   "title":"Rare View",                "html":"<h3>Rare View</h3><p>Lorem Ipsum..</p>","zoom":15},
    {"lat":40.740632,"lon":-74.006052,  "title":"Spice Market",             "html":"<h3>Spice Market</h3><p>Lorem Ipsum..</p>","zoom":15},
    {"lat":40.755823,"lon":-73.982384,  "title":"The Roylton",              "html":"<h3>The Roylton</h3><p>Lorem Ipsum..</p>","zoom":15}]}';
    break;
}





