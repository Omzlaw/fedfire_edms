<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CountrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('countries')->delete();
        $countries = array(
            array('id' => 1,'code' => 'AF' ,'title' => "Afghanistan",'phone_code' => 93),
            array('id' => 2,'code' => 'AL' ,'title' => "Albania",'phone_code' => 355),
            array('id' => 3,'code' => 'DZ' ,'title' => "Algeria",'phone_code' => 213),
            array('id' => 4,'code' => 'AS' ,'title' => "American Samoa",'phone_code' => 1684),
            array('id' => 5,'code' => 'AD' ,'title' => "Andorra",'phone_code' => 376),
            array('id' => 6,'code' => 'AO' ,'title' => "Angola",'phone_code' => 244),
            array('id' => 7,'code' => 'AI' ,'title' => "Anguilla",'phone_code' => 1264),
            array('id' => 8,'code' => 'AQ' ,'title' => "Antarctica",'phone_code' => 0),
            array('id' => 9,'code' => 'AG' ,'title' => "Antigua And Barbuda",'phone_code' => 1268),
            array('id' => 10,'code' => 'AR','title' => "Argentina",'phone_code' => 54),
            array('id' => 11,'code' => 'AM','title' => "Armenia",'phone_code' => 374),
            array('id' => 12,'code' => 'AW','title' => "Aruba",'phone_code' => 297),
            array('id' => 13,'code' => 'AU','title' => "Australia",'phone_code' => 61),
            array('id' => 14,'code' => 'AT','title' => "Austria",'phone_code' => 43),
            array('id' => 15,'code' => 'AZ','title' => "Azerbaijan",'phone_code' => 994),
            array('id' => 16,'code' => 'BS','title' => "Bahamas The",'phone_code' => 1242),
            array('id' => 17,'code' => 'BH','title' => "Bahrain",'phone_code' => 973),
            array('id' => 18,'code' => 'BD','title' => "Bangladesh",'phone_code' => 880),
            array('id' => 19,'code' => 'BB','title' => "Barbados",'phone_code' => 1246),
            array('id' => 20,'code' => 'BY','title' => "Belarus",'phone_code' => 375),
            array('id' => 21,'code' => 'BE','title' => "Belgium",'phone_code' => 32),
            array('id' => 22,'code' => 'BZ','title' => "Belize",'phone_code' => 501),
            array('id' => 23,'code' => 'BJ','title' => "Benin",'phone_code' => 229),
            array('id' => 24,'code' => 'BM','title' => "Bermuda",'phone_code' => 1441),
            array('id' => 25,'code' => 'BT','title' => "Bhutan",'phone_code' => 975),
            array('id' => 26,'code' => 'BO','title' => "Bolivia",'phone_code' => 591),
            array('id' => 27,'code' => 'BA','title' => "Bosnia and Herzegovina",'phone_code' => 387),
            array('id' => 28,'code' => 'BW','title' => "Botswana",'phone_code' => 267),
            array('id' => 29,'code' => 'BV','title' => "Bouvet Island",'phone_code' => 0),
            array('id' => 30,'code' => 'BR','title' => "Brazil",'phone_code' => 55),
            array('id' => 31,'code' => 'IO','title' => "British Indian Ocean Territory",'phone_code' => 246),
            array('id' => 32,'code' => 'BN','title' => "Brunei",'phone_code' => 673),
            array('id' => 33,'code' => 'BG','title' => "Bulgaria",'phone_code' => 359),
            array('id' => 34,'code' => 'BF','title' => "Burkina Faso",'phone_code' => 226),
            array('id' => 35,'code' => 'BI','title' => "Burundi",'phone_code' => 257),
            array('id' => 36,'code' => 'KH','title' => "Cambodia",'phone_code' => 855),
            array('id' => 37,'code' => 'CM','title' => "Cameroon",'phone_code' => 237),
            array('id' => 38,'code' => 'CA','title' => "Canada",'phone_code' => 1),
            array('id' => 39,'code' => 'CV','title' => "Cape Verde",'phone_code' => 238),
            array('id' => 40,'code' => 'KY','title' => "Cayman Islands",'phone_code' => 1345),
            array('id' => 41,'code' => 'CF','title' => "Central African Republic",'phone_code' => 236),
            array('id' => 42,'code' => 'TD','title' => "Chad",'phone_code' => 235),
            array('id' => 43,'code' => 'CL','title' => "Chile",'phone_code' => 56),
            array('id' => 44,'code' => 'CN','title' => "China",'phone_code' => 86),
            array('id' => 45,'code' => 'CX','title' => "Christmas Island",'phone_code' => 61),
            array('id' => 46,'code' => 'CC','title' => "Cocos (Keeling) Islands",'phone_code' => 672),
            array('id' => 47,'code' => 'CO','title' => "Colombia",'phone_code' => 57),
            array('id' => 48,'code' => 'KM','title' => "Comoros",'phone_code' => 269),
            array('id' => 49,'code' => 'CG','title' => "Congo",'phone_code' => 242),
            array('id' => 50,'code' => 'CD','title' => "Congo The Democratic Republic Of The",'phone_code' => 242),
            array('id' => 51,'code' => 'CK','title' => "Cook Islands",'phone_code' => 682),
            array('id' => 52,'code' => 'CR','title' => "Costa Rica",'phone_code' => 506),
            array('id' => 53,'code' => 'CI','title' => "Cote D Ivoire (Ivory Coast)",'phone_code' => 225),
            array('id' => 54,'code' => 'HR','title' => "Croatia (Hrvatska)",'phone_code' => 385),
            array('id' => 55,'code' => 'CU','title' => "Cuba",'phone_code' => 53),
            array('id' => 56,'code' => 'CY','title' => "Cyprus",'phone_code' => 357),
            array('id' => 57,'code' => 'CZ','title' => "Czech Republic",'phone_code' => 420),
            array('id' => 58,'code' => 'DK','title' => "Denmark",'phone_code' => 45),
            array('id' => 59,'code' => 'DJ','title' => "Djibouti",'phone_code' => 253),
            array('id' => 60,'code' => 'DM','title' => "Dominica",'phone_code' => 1767),
            array('id' => 61,'code' => 'DO','title' => "Dominican Republic",'phone_code' => 1809),
            array('id' => 62,'code' => 'TP','title' => "East Timor",'phone_code' => 670),
            array('id' => 63,'code' => 'EC','title' => "Ecuador",'phone_code' => 593),
            array('id' => 64,'code' => 'EG','title' => "Egypt",'phone_code' => 20),
            array('id' => 65,'code' => 'SV','title' => "El Salvador",'phone_code' => 503),
            array('id' => 66,'code' => 'GQ','title' => "Equatorial Guinea",'phone_code' => 240),
            array('id' => 67,'code' => 'ER','title' => "Eritrea",'phone_code' => 291),
            array('id' => 68,'code' => 'EE','title' => "Estonia",'phone_code' => 372),
            array('id' => 69,'code' => 'ET','title' => "Ethiopia",'phone_code' => 251),
            array('id' => 70,'code' => 'XA','title' => "External Territories of Australia",'phone_code' => 61),
            array('id' => 71,'code' => 'FK','title' => "Falkland Islands",'phone_code' => 500),
            array('id' => 72,'code' => 'FO','title' => "Faroe Islands",'phone_code' => 298),
            array('id' => 73,'code' => 'FJ','title' => "Fiji Islands",'phone_code' => 679),
            array('id' => 74,'code' => 'FI','title' => "Finland",'phone_code' => 358),
            array('id' => 75,'code' => 'FR','title' => "France",'phone_code' => 33),
            array('id' => 76,'code' => 'GF','title' => "French Guiana",'phone_code' => 594),
            array('id' => 77,'code' => 'PF','title' => "French Polynesia",'phone_code' => 689),
            array('id' => 78,'code' => 'TF','title' => "French Southern Territories",'phone_code' => 0),
            array('id' => 79,'code' => 'GA','title' => "Gabon",'phone_code' => 241),
            array('id' => 80,'code' => 'GM','title' => "Gambia The",'phone_code' => 220),
            array('id' => 81,'code' => 'GE','title' => "Georgia",'phone_code' => 995),
            array('id' => 82,'code' => 'DE','title' => "Germany",'phone_code' => 49),
            array('id' => 83,'code' => 'GH','title' => "Ghana",'phone_code' => 233),
            array('id' => 84,'code' => 'GI','title' => "Gibraltar",'phone_code' => 350),
            array('id' => 85,'code' => 'GR','title' => "Greece",'phone_code' => 30),
            array('id' => 86,'code' => 'GL','title' => "Greenland",'phone_code' => 299),
            array('id' => 87,'code' => 'GD','title' => "Grenada",'phone_code' => 1473),
            array('id' => 88,'code' => 'GP','title' => "Guadeloupe",'phone_code' => 590),
            array('id' => 89,'code' => 'GU','title' => "Guam",'phone_code' => 1671),
            array('id' => 90,'code' => 'GT','title' => "Guatemala",'phone_code' => 502),
            array('id' => 91,'code' => 'XU','title' => "Guernsey and Alderney",'phone_code' => 44),
            array('id' => 92,'code' => 'GN','title' => "Guinea",'phone_code' => 224),
            array('id' => 93,'code' => 'GW','title' => "Guinea-Bissau",'phone_code' => 245),
            array('id' => 94,'code' => 'GY','title' => "Guyana",'phone_code' => 592),
            array('id' => 95,'code' => 'HT','title' => "Haiti",'phone_code' => 509),
            array('id' => 96,'code' => 'HM','title' => "Heard and McDonald Islands",'phone_code' => 0),
            array('id' => 97,'code' => 'HN','title' => "Honduras",'phone_code' => 504),
            array('id' => 98,'code' => 'HK','title' => "Hong Kong S.A.R.",'phone_code' => 852),
            array('id' => 99,'code' => 'HU','title' => "Hungary",'phone_code' => 36),
            array('id' => 100,'code' => 'IS','title' => "Iceland",'phone_code' => 354),
            array('id' => 101,'code' => 'IN','title' => "India",'phone_code' => 91),
            array('id' => 102,'code' => 'ID','title' => "Indonesia",'phone_code' => 62),
            array('id' => 103,'code' => 'IR','title' => "Iran",'phone_code' => 98),
            array('id' => 104,'code' => 'IQ','title' => "Iraq",'phone_code' => 964),
            array('id' => 105,'code' => 'IE','title' => "Ireland",'phone_code' => 353),
            array('id' => 106,'code' => 'IL','title' => "Israel",'phone_code' => 972),
            array('id' => 107,'code' => 'IT','title' => "Italy",'phone_code' => 39),
            array('id' => 108,'code' => 'JM','title' => "Jamaica",'phone_code' => 1876),
            array('id' => 109,'code' => 'JP','title' => "Japan",'phone_code' => 81),
            array('id' => 110,'code' => 'XJ','title' => "Jersey",'phone_code' => 44),
            array('id' => 111,'code' => 'JO','title' => "Jordan",'phone_code' => 962),
            array('id' => 112,'code' => 'KZ','title' => "Kazakhstan",'phone_code' => 7),
            array('id' => 113,'code' => 'KE','title' => "Kenya",'phone_code' => 254),
            array('id' => 114,'code' => 'KI','title' => "Kiribati",'phone_code' => 686),
            array('id' => 115,'code' => 'KP','title' => "Korea North",'phone_code' => 850),
            array('id' => 116,'code' => 'KR','title' => "Korea South",'phone_code' => 82),
            array('id' => 117,'code' => 'KW','title' => "Kuwait",'phone_code' => 965),
            array('id' => 118,'code' => 'KG','title' => "Kyrgyzstan",'phone_code' => 996),
            array('id' => 119,'code' => 'LA','title' => "Laos",'phone_code' => 856),
            array('id' => 120,'code' => 'LV','title' => "Latvia",'phone_code' => 371),
            array('id' => 121,'code' => 'LB','title' => "Lebanon",'phone_code' => 961),
            array('id' => 122,'code' => 'LS','title' => "Lesotho",'phone_code' => 266),
            array('id' => 123,'code' => 'LR','title' => "Liberia",'phone_code' => 231),
            array('id' => 124,'code' => 'LY','title' => "Libya",'phone_code' => 218),
            array('id' => 125,'code' => 'LI','title' => "Liechtenstein",'phone_code' => 423),
            array('id' => 126,'code' => 'LT','title' => "Lithuania",'phone_code' => 370),
            array('id' => 127,'code' => 'LU','title' => "Luxembourg",'phone_code' => 352),
            array('id' => 128,'code' => 'MO','title' => "Macau S.A.R.",'phone_code' => 853),
            array('id' => 129,'code' => 'MK','title' => "Macedonia",'phone_code' => 389),
            array('id' => 130,'code' => 'MG','title' => "Madagascar",'phone_code' => 261),
            array('id' => 131,'code' => 'MW','title' => "Malawi",'phone_code' => 265),
            array('id' => 132,'code' => 'MY','title' => "Malaysia",'phone_code' => 60),
            array('id' => 133,'code' => 'MV','title' => "Maldives",'phone_code' => 960),
            array('id' => 134,'code' => 'ML','title' => "Mali",'phone_code' => 223),
            array('id' => 135,'code' => 'MT','title' => "Malta",'phone_code' => 356),
            array('id' => 136,'code' => 'XM','title' => "Man (Isle of)",'phone_code' => 44),
            array('id' => 137,'code' => 'MH','title' => "Marshall Islands",'phone_code' => 692),
            array('id' => 138,'code' => 'MQ','title' => "Martinique",'phone_code' => 596),
            array('id' => 139,'code' => 'MR','title' => "Mauritania",'phone_code' => 222),
            array('id' => 140,'code' => 'MU','title' => "Mauritius",'phone_code' => 230),
            array('id' => 141,'code' => 'YT','title' => "Mayotte",'phone_code' => 269),
            array('id' => 142,'code' => 'MX','title' => "Mexico",'phone_code' => 52),
            array('id' => 143,'code' => 'FM','title' => "Micronesia",'phone_code' => 691),
            array('id' => 144,'code' => 'MD','title' => "Moldova",'phone_code' => 373),
            array('id' => 145,'code' => 'MC','title' => "Monaco",'phone_code' => 377),
            array('id' => 146,'code' => 'MN','title' => "Mongolia",'phone_code' => 976),
            array('id' => 147,'code' => 'MS','title' => "Montserrat",'phone_code' => 1664),
            array('id' => 148,'code' => 'MA','title' => "Morocco",'phone_code' => 212),
            array('id' => 149,'code' => 'MZ','title' => "Mozambique",'phone_code' => 258),
            array('id' => 150,'code' => 'MM','title' => "Myanmar",'phone_code' => 95),
            array('id' => 151,'code' => 'NA','title' => "Namibia",'phone_code' => 264),
            array('id' => 152,'code' => 'NR','title' => "Nauru",'phone_code' => 674),
            array('id' => 153,'code' => 'NP','title' => "Nepal",'phone_code' => 977),
            array('id' => 154,'code' => 'AN','title' => "Netherlands Antilles",'phone_code' => 599),
            array('id' => 155,'code' => 'NL','title' => "Netherlands The",'phone_code' => 31),
            array('id' => 156,'code' => 'NC','title' => "New Caledonia",'phone_code' => 687),
            array('id' => 157,'code' => 'NZ','title' => "New Zealand",'phone_code' => 64),
            array('id' => 158,'code' => 'NI','title' => "Nicaragua",'phone_code' => 505),
            array('id' => 159,'code' => 'NE','title' => "Niger",'phone_code' => 227),
            array('id' => 160,'code' => 'NG','title' => "Nigeria",'phone_code' => 234),
            array('id' => 161,'code' => 'NU','title' => "Niue",'phone_code' => 683),
            array('id' => 162,'code' => 'NF','title' => "Norfolk Island",'phone_code' => 672),
            array('id' => 163,'code' => 'MP','title' => "Northern Mariana Islands",'phone_code' => 1670),
            array('id' => 164,'code' => 'NO','title' => "Norway",'phone_code' => 47),
            array('id' => 165,'code' => 'OM','title' => "Oman",'phone_code' => 968),
            array('id' => 166,'code' => 'PK','title' => "Pakistan",'phone_code' => 92),
            array('id' => 167,'code' => 'PW','title' => "Palau",'phone_code' => 680),
            array('id' => 168,'code' => 'PS','title' => "Palestinian Territory Occupied",'phone_code' => 970),
            array('id' => 169,'code' => 'PA','title' => "Panama",'phone_code' => 507),
            array('id' => 170,'code' => 'PG','title' => "Papua new Guinea",'phone_code' => 675),
            array('id' => 171,'code' => 'PY','title' => "Paraguay",'phone_code' => 595),
            array('id' => 172,'code' => 'PE','title' => "Peru",'phone_code' => 51),
            array('id' => 173,'code' => 'PH','title' => "Philippines",'phone_code' => 63),
            array('id' => 174,'code' => 'PN','title' => "Pitcairn Island",'phone_code' => 0),
            array('id' => 175,'code' => 'PL','title' => "Poland",'phone_code' => 48),
            array('id' => 176,'code' => 'PT','title' => "Portugal",'phone_code' => 351),
            array('id' => 177,'code' => 'PR','title' => "Puerto Rico",'phone_code' => 1787),
            array('id' => 178,'code' => 'QA','title' => "Qatar",'phone_code' => 974),
            array('id' => 179,'code' => 'RE','title' => "Reunion",'phone_code' => 262),
            array('id' => 180,'code' => 'RO','title' => "Romania",'phone_code' => 40),
            array('id' => 181,'code' => 'RU','title' => "Russia",'phone_code' => 70),
            array('id' => 182,'code' => 'RW','title' => "Rwanda",'phone_code' => 250),
            array('id' => 183,'code' => 'SH','title' => "Saint Helena",'phone_code' => 290),
            array('id' => 184,'code' => 'KN','title' => "Saint Kitts And Nevis",'phone_code' => 1869),
            array('id' => 185,'code' => 'LC','title' => "Saint Lucia",'phone_code' => 1758),
            array('id' => 186,'code' => 'PM','title' => "Saint Pierre and Miquelon",'phone_code' => 508),
            array('id' => 187,'code' => 'VC','title' => "Saint Vincent And The Grenadines",'phone_code' => 1784),
            array('id' => 188,'code' => 'WS','title' => "Samoa",'phone_code' => 684),
            array('id' => 189,'code' => 'SM','title' => "San Marino",'phone_code' => 378),
            array('id' => 190,'code' => 'ST','title' => "Sao Tome and Principe",'phone_code' => 239),
            array('id' => 191,'code' => 'SA','title' => "Saudi Arabia",'phone_code' => 966),
            array('id' => 192,'code' => 'SN','title' => "Senegal",'phone_code' => 221),
            array('id' => 193,'code' => 'RS','title' => "Serbia",'phone_code' => 381),
            array('id' => 194,'code' => 'SC','title' => "Seychelles",'phone_code' => 248),
            array('id' => 195,'code' => 'SL','title' => "Sierra Leone",'phone_code' => 232),
            array('id' => 196,'code' => 'SG','title' => "Singapore",'phone_code' => 65),
            array('id' => 197,'code' => 'SK','title' => "Slovakia",'phone_code' => 421),
            array('id' => 198,'code' => 'SI','title' => "Slovenia",'phone_code' => 386),
            array('id' => 199,'code' => 'XG','title' => "Smaller Territories of the UK",'phone_code' => 44),
            array('id' => 200,'code' => 'SB','title' => "Solomon Islands",'phone_code' => 677),
            array('id' => 201,'code' => 'SO','title' => "Somalia",'phone_code' => 252),
            array('id' => 202,'code' => 'ZA','title' => "South Africa",'phone_code' => 27),
            array('id' => 203,'code' => 'GS','title' => "South Georgia",'phone_code' => 0),
            array('id' => 204,'code' => 'SS','title' => "South Sudan",'phone_code' => 211),
            array('id' => 205,'code' => 'ES','title' => "Spain",'phone_code' => 34),
            array('id' => 206,'code' => 'LK','title' => "Sri Lanka",'phone_code' => 94),
            array('id' => 207,'code' => 'SD','title' => "Sudan",'phone_code' => 249),
            array('id' => 208,'code' => 'SR','title' => "Suriname",'phone_code' => 597),
            array('id' => 209,'code' => 'SJ','title' => "Svalbard And Jan Mayen Islands",'phone_code' => 47),
            array('id' => 210,'code' => 'SZ','title' => "Swaziland",'phone_code' => 268),
            array('id' => 211,'code' => 'SE','title' => "Sweden",'phone_code' => 46),
            array('id' => 212,'code' => 'CH','title' => "Switzerland",'phone_code' => 41),
            array('id' => 213,'code' => 'SY','title' => "Syria",'phone_code' => 963),
            array('id' => 214,'code' => 'TW','title' => "Taiwan",'phone_code' => 886),
            array('id' => 215,'code' => 'TJ','title' => "Tajikistan",'phone_code' => 992),
            array('id' => 216,'code' => 'TZ','title' => "Tanzania",'phone_code' => 255),
            array('id' => 217,'code' => 'TH','title' => "Thailand",'phone_code' => 66),
            array('id' => 218,'code' => 'TG','title' => "Togo",'phone_code' => 228),
            array('id' => 219,'code' => 'TK','title' => "Tokelau",'phone_code' => 690),
            array('id' => 220,'code' => 'TO','title' => "Tonga",'phone_code' => 676),
            array('id' => 221,'code' => 'TT','title' => "Trinidad And Tobago",'phone_code' => 1868),
            array('id' => 222,'code' => 'TN','title' => "Tunisia",'phone_code' => 216),
            array('id' => 223,'code' => 'TR','title' => "Turkey",'phone_code' => 90),
            array('id' => 224,'code' => 'TM','title' => "Turkmenistan",'phone_code' => 7370),
            array('id' => 225,'code' => 'TC','title' => "Turks And Caicos Islands",'phone_code' => 1649),
            array('id' => 226,'code' => 'TV','title' => "Tuvalu",'phone_code' => 688),
            array('id' => 227,'code' => 'UG','title' => "Uganda",'phone_code' => 256),
            array('id' => 228,'code' => 'UA','title' => "Ukraine",'phone_code' => 380),
            array('id' => 229,'code' => 'AE','title' => "United Arab Emirates",'phone_code' => 971),
            array('id' => 230,'code' => 'GB','title' => "United Kingdom",'phone_code' => 44),
            array('id' => 231,'code' => 'US','title' => "United States",'phone_code' => 1),
            array('id' => 232,'code' => 'UM','title' => "United States Minor Outlying Islands",'phone_code' => 1),
            array('id' => 233,'code' => 'UY','title' => "Uruguay",'phone_code' => 598),
            array('id' => 234,'code' => 'UZ','title' => "Uzbekistan",'phone_code' => 998),
            array('id' => 235,'code' => 'VU','title' => "Vanuatu",'phone_code' => 678),
            array('id' => 236,'code' => 'VA','title' => "Vatican City State (Holy See)",'phone_code' => 39),
            array('id' => 237,'code' => 'VE','title' => "Venezuela",'phone_code' => 58),
            array('id' => 238,'code' => 'VN','title' => "Vietnam",'phone_code' => 84),
            array('id' => 239,'code' => 'VG','title' => "Virgin Islands (British)",'phone_code' => 1284),
            array('id' => 240,'code' => 'VI','title' => "Virgin Islands (US)",'phone_code' => 1340),
            array('id' => 241,'code' => 'WF','title' => "Wallis And Futuna Islands",'phone_code' => 681),
            array('id' => 242,'code' => 'EH','title' => "Western Sahara",'phone_code' => 212),
            array('id' => 243,'code' => 'YE','title' => "Yemen",'phone_code' => 967),
            array('id' => 244,'code' => 'YU','title' => "Yugoslavia",'phone_code' => 38),
            array('id' => 245,'code' => 'ZM','title' => "Zambia",'phone_code' => 260),
            array('id' => 246,'code' => 'ZW','title' => "Zimbabwe",'phone_code' => 263),
            );
            DB::table('countries')->insert($countries);
    }
}
