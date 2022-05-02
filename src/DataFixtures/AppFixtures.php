<?php

namespace App\DataFixtures;

use App\Entity\ISSPosition;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {

        $arrayVar = [
            "positions" => [
                [
                    "iss_position" => [
                        "longitude" => "-109.0929",
                        "latitude" => "28.9797",
                    ],
                    "message" => "success",
                    "timestamp" => 1651223067,
                ],
                [
                    "iss_position" => [
                        "longitude" => "-107.4194",
                        "latitude" => "30.5221",
                    ],
                    "message" => "success",
                    "timestamp" => 1651223101,
                ],
                [
                    "iss_position" => [
                        "longitude" => "-107.3190",
                        "latitude" => "30.6122",
                    ],
                    "message" => "success",
                    "timestamp" => 1651223103,
                ],
                [
                    "iss_position" => [
                        "longitude" => "-107.2437",
                        "latitude" => "30.6796",
                    ],
                    "message" => "success",
                    "timestamp" => 1651223105,
                ],
                [
                    "iss_position" => [
                        "longitude" => "-102.1698",
                        "latitude" => "34.8781",
                    ],
                    "message" => "success",
                    "timestamp" => 1651223201,
                ],
                [
                    "iss_position" => [
                        "longitude" => "-96.4022",
                        "latitude" => "38.8827",
                    ],
                    "message" => "success",
                    "timestamp" => 1651223299,
                ],
                [
                    "iss_position" => [
                        "longitude" => "-90.0709",
                        "latitude" => "42.4540",
                    ],
                    "message" => "success",
                    "timestamp" => 1651223395,
                ],
                [
                    "iss_position" => [
                        "longitude" => "-87.4985",
                        "latitude" => "43.6876",
                    ],
                    "message" => "success",
                    "timestamp" => 1651223431,
                ],
                [
                    "iss_position" => [
                        "longitude" => "-80.9930",
                        "latitude" => "46.3179",
                    ],
                    "message" => "success",
                    "timestamp" => 1651223517,
                ],
                [
                    "iss_position" => [
                        "longitude" => "-80.1857",
                        "latitude" => "46.5994",
                    ],
                    "message" => "success",
                    "timestamp" => 1651223527,
                ],
                [
                    "iss_position" => [
                        "longitude" => "-68.6930",
                        "latitude" => "49.6787",
                    ],
                    "message" => "success",
                    "timestamp" => 1651223659,
                ],
                [
                    "iss_position" => [
                        "longitude" => "-53.3305",
                        "latitude" => "51.5155",
                    ],
                    "message" => "success",
                    "timestamp" => 1651223819,
                ],
                [
                    "iss_position" => [
                        "longitude" => "-47.3201",
                        "latitude" => "51.6172",
                    ],
                    "message" => "success",
                    "timestamp" => 1651223879,
                ],
                [
                    "iss_position" => [
                        "longitude" => "-41.3273",
                        "latitude" => "51.3855",
                    ],
                    "message" => "success",
                    "timestamp" => 1651223939,
                ],
                [
                    "iss_position" => [
                        "longitude" => "-35.3942",
                        "latitude" => "50.8206",
                    ],
                    "message" => "success",
                    "timestamp" => 1651224000,
                ],
                [
                    "iss_position" => [
                        "longitude" => "-29.6950",
                        "latitude" => "49.9457",
                    ],
                    "message" => "success",
                    "timestamp" => 1651224060,
                ],
                [
                    "iss_position" => [
                        "longitude" => "-24.2448",
                        "latitude" => "48.7786",
                    ],
                    "message" => "success",
                    "timestamp" => 1651224120,
                ],
                [
                    "iss_position" => [
                        "longitude" => "-19.0830",
                        "latitude" => "47.3438",
                    ],
                    "message" => "success",
                    "timestamp" => 1651224180,
                ],
                [
                    "iss_position" => [
                        "longitude" => "-14.2307",
                        "latitude" => "45.6681",
                    ],
                    "message" => "success",
                    "timestamp" => 1651224240,
                ],
                [
                    "iss_position" => [
                        "longitude" => "-9.6581",
                        "latitude" => "43.7624",
                    ],
                    "message" => "success",
                    "timestamp" => 1651224301,
                ],
                [
                    "iss_position" => [
                        "longitude" => "-5.4315",
                        "latitude" => "41.6843",
                    ],
                    "message" => "success",
                    "timestamp" => 1651224361,
                ],
                [
                    "iss_position" => [
                        "longitude" => "-1.4964",
                        "latitude" => "39.4436",
                    ],
                    "message" => "success",
                    "timestamp" => 1651224421,
                ],
                [
                    "iss_position" => [
                        "longitude" => "2.1688",
                        "latitude" => "37.0627",
                    ],
                    "message" => "success",
                    "timestamp" => 1651224481,
                ],
                [
                    "iss_position" => [
                        "longitude" => "5.5892",
                        "latitude" => "34.5611",
                    ],
                    "message" => "success",
                    "timestamp" => 1651224541,
                ],
                [
                    "iss_position" => [
                        "longitude" => "8.8161",
                        "latitude" => "31.9342",
                    ],
                    "message" => "success",
                    "timestamp" => 1651224602,
                ],
                [
                    "iss_position" => [
                        "longitude" => "11.8224",
                        "latitude" => "29.2398",
                    ],
                    "message" => "success",
                    "timestamp" => 1651224662,
                ],
                [
                    "iss_position" => [
                        "longitude" => "14.6574",
                        "latitude" => "26.4720",
                    ],
                    "message" => "success",
                    "timestamp" => 1651224722,
                ],
                [
                    "iss_position" => [
                        "longitude" => "17.3669",
                        "latitude" => "23.6176",
                    ],
                    "message" => "success",
                    "timestamp" => 1651224783,
                ],
                [
                    "iss_position" => [
                        "longitude" => "19.9276",
                        "latitude" => "20.7337",
                    ],
                    "message" => "success",
                    "timestamp" => 1651224843,
                ],
                [
                    "iss_position" => [
                        "longitude" => "22.3816",
                        "latitude" => "17.8065",
                    ],
                    "message" => "success",
                    "timestamp" => 1651224903,
                ],
                [
                    "iss_position" => [
                        "longitude" => "24.7471",
                        "latitude" => "14.8436",
                    ],
                    "message" => "success",
                    "timestamp" => 1651224963,
                ],
                [
                    "iss_position" => [
                        "longitude" => "27.0408",
                        "latitude" => "11.8527",
                    ],
                    "message" => "success",
                    "timestamp" => 1651225023,
                ],
                [
                    "iss_position" => [
                        "longitude" => "29.2971",
                        "latitude" => "8.8147",
                    ],
                    "message" => "success",
                    "timestamp" => 1651225084,
                ],
                [
                    "iss_position" => [
                        "longitude" => "31.4936",
                        "latitude" => "5.7862",
                    ],
                    "message" => "success",
                    "timestamp" => 1651225144,
                ],
                [
                    "iss_position" => [
                        "longitude" => "33.6645",
                        "latitude" => "2.7465",
                    ],
                    "message" => "success",
                    "timestamp" => 1651225204,
                ],
                [
                    "iss_position" => [
                        "longitude" => "35.8222",
                        "latitude" => "-0.2970",
                    ],
                    "message" => "success",
                    "timestamp" => 1651225264,
                ],
                [
                    "iss_position" => [
                        "longitude" => "37.9802",
                        "latitude" => "-3.3386",
                    ],
                    "message" => "success",
                    "timestamp" => 1651225324,
                ],
                [
                    "iss_position" => [
                        "longitude" => "40.1527",
                        "latitude" => "-6.3737",
                    ],
                    "message" => "success",
                    "timestamp" => 1651225384,
                ],
                [
                    "iss_position" => [
                        "longitude" => "42.3722",
                        "latitude" => "-9.4219",
                    ],
                    "message" => "success",
                    "timestamp" => 1651225445,
                ],
                [
                    "iss_position" => [
                        "longitude" => "44.6164",
                        "latitude" => "-12.4271",
                    ],
                    "message" => "success",
                    "timestamp" => 1651225505,
                ],
                [
                    "iss_position" => [
                        "longitude" => "46.9184",
                        "latitude" => "-15.4084",
                    ],
                    "message" => "success",
                    "timestamp" => 1651225565,
                ],
                [
                    "iss_position" => [
                        "longitude" => "49.3141",
                        "latitude" => "-18.3836",
                    ],
                    "message" => "success",
                    "timestamp" => 1651225626,
                ],
                [
                    "iss_position" => [
                        "longitude" => "51.7811",
                        "latitude" => "-21.2962",
                    ],
                    "message" => "success",
                    "timestamp" => 1651225686,
                ],
                [
                    "iss_position" => [
                        "longitude" => "54.3568",
                        "latitude" => "-24.1629",
                    ],
                    "message" => "success",
                    "timestamp" => 1651225746,
                ],
                [
                    "iss_position" => [
                        "longitude" => "57.0623",
                        "latitude" => "-26.9761",
                    ],
                    "message" => "success",
                    "timestamp" => 1651225806,
                ],
                [
                    "iss_position" => [
                        "longitude" => "59.9169",
                        "latitude" => "-29.7234",
                    ],
                    "message" => "success",
                    "timestamp" => 1651225866,
                ],
                [
                    "iss_position" => [
                        "longitude" => "62.9429",
                        "latitude" => "-32.3931",
                    ],
                    "message" => "success",
                    "timestamp" => 1651225927,
                ],
                [
                    "iss_position" => [
                        "longitude" => "66.1652",
                        "latitude" => "-34.9727",
                    ],
                    "message" => "success",
                    "timestamp" => 1651225987,
                ],
                [
                    "iss_position" => [
                        "longitude" => "69.6374",
                        "latitude" => "-37.4663",
                    ],
                    "message" => "success",
                    "timestamp" => 1651226047,
                ],
                [
                    "iss_position" => [
                        "longitude" => "73.3289",
                        "latitude" => "-39.8160",
                    ],
                    "message" => "success",
                    "timestamp" => 1651226107,
                ],
                [
                    "iss_position" => [
                        "longitude" => "77.2902",
                        "latitude" => "-42.0224",
                    ],
                    "message" => "success",
                    "timestamp" => 1651226168,
                ],
                [
                    "iss_position" => [
                        "longitude" => "81.5426",
                        "latitude" => "-44.0637",
                    ],
                    "message" => "success",
                    "timestamp" => 1651226228,
                ],
                [
                    "iss_position" => [
                        "longitude" => "86.1007",
                        "latitude" => "-45.9154",
                    ],
                    "message" => "success",
                    "timestamp" => 1651226288,
                ],
                [
                    "iss_position" => [
                        "longitude" => "91.0123",
                        "latitude" => "-47.5643",
                    ],
                    "message" => "success",
                    "timestamp" => 1651226348,
                ],
                [
                    "iss_position" => [
                        "longitude" => "96.1999",
                        "latitude" => "-48.9584",
                    ],
                    "message" => "success",
                    "timestamp" => 1651226409,
                ],
                [
                    "iss_position" => [
                        "longitude" => "101.6594",
                        "latitude" => "-50.0813",
                    ],
                    "message" => "success",
                    "timestamp" => 1651226469,
                ],
                [
                    "iss_position" => [
                        "longitude" => "107.3535",
                        "latitude" => "-50.9111",
                    ],
                    "message" => "success",
                    "timestamp" => 1651226529,
                ],
                [
                    "iss_position" => [
                        "longitude" => "113.2222",
                        "latitude" => "-51.4290",
                    ],
                    "message" => "success",
                    "timestamp" => 1651226589,
                ],
                [
                    "iss_position" => [
                        "longitude" => "119.1873",
                        "latitude" => "-51.6221",
                    ],
                    "message" => "success",
                    "timestamp" => 1651226649,
                ],
                [
                    "iss_position" => [
                        "longitude" => "125.1608",
                        "latitude" => "-51.4853",
                    ],
                    "message" => "success",
                    "timestamp" => 1651226709,
                ],
                [
                    "iss_position" => [
                        "longitude" => "131.1017",
                        "latitude" => "-51.0169",
                    ],
                    "message" => "success",
                    "timestamp" => 1651226770,
                ],
                [
                    "iss_position" => [
                        "longitude" => "136.8304",
                        "latitude" => "-50.2364",
                    ],
                    "message" => "success",
                    "timestamp" => 1651226830,
                ],
                [
                    "iss_position" => [
                        "longitude" => "142.3320",
                        "latitude" => "-49.1594",
                    ],
                    "message" => "success",
                    "timestamp" => 1651226890,
                ],
                [
                    "iss_position" => [
                        "longitude" => "147.5593",
                        "latitude" => "-47.8093",
                    ],
                    "message" => "success",
                    "timestamp" => 1651226950,
                ],
                [
                    "iss_position" => [
                        "longitude" => "152.4852",
                        "latitude" => "-46.2120",
                    ],
                    "message" => "success",
                    "timestamp" => 1651227010,
                ],
                [
                    "iss_position" => [
                        "longitude" => "157.1365",
                        "latitude" => "-44.3783",
                    ],
                    "message" => "success",
                    "timestamp" => 1651227071,
                ],
                [
                    "iss_position" => [
                        "longitude" => "161.4407",
                        "latitude" => "-42.3648",
                    ],
                    "message" => "success",
                    "timestamp" => 1651227131,
                ],
                [
                    "iss_position" => [
                        "longitude" => "165.4507",
                        "latitude" => "-40.1820",
                    ],
                    "message" => "success",
                    "timestamp" => 1651227191,
                ],
                [
                    "iss_position" => [
                        "longitude" => "169.1867",
                        "latitude" => "-37.8525",
                    ],
                    "message" => "success",
                    "timestamp" => 1651227251,
                ],
                [
                    "iss_position" => [
                        "longitude" => "115.5231",
                        "latitude" => "-49.8289",
                    ],
                    "message" => "success",
                    "timestamp" => 1651232426,
                ],
                [
                    "iss_position" => [
                        "longitude" => "121.0043",
                        "latitude" => "-48.6146",
                    ],
                    "message" => "success",
                    "timestamp" => 1651232487,
                ],
                [
                    "iss_position" => [
                        "longitude" => "126.1462",
                        "latitude" => "-47.1425",
                    ],
                    "message" => "success",
                    "timestamp" => 1651232548,
                ],
                [
                    "iss_position" => [
                        "longitude" => "130.9368",
                        "latitude" => "-45.4459",
                    ],
                    "message" => "success",
                    "timestamp" => 1651232608,
                ],
                [
                    "iss_position" => [
                        "longitude" => "135.4521",
                        "latitude" => "-43.5236",
                    ],
                    "message" => "success",
                    "timestamp" => 1651232668,
                ],
                [
                    "iss_position" => [
                        "longitude" => "139.6605",
                        "latitude" => "-41.4149",
                    ],
                    "message" => "success",
                    "timestamp" => 1651232729,
                ],
                [
                    "iss_position" => [
                        "longitude" => "143.5465",
                        "latitude" => "-39.1641",
                    ],
                    "message" => "success",
                    "timestamp" => 1651232789,
                ],
                [
                    "iss_position" => [
                        "longitude" => "147.1980",
                        "latitude" => "-36.7552",
                    ],
                    "message" => "success",
                    "timestamp" => 1651232850,
                ],
                [
                    "iss_position" => [
                        "longitude" => "150.6065",
                        "latitude" => "-34.2258",
                    ],
                    "message" => "success",
                    "timestamp" => 1651232910,
                ],
                [
                    "iss_position" => [
                        "longitude" => "153.7977",
                        "latitude" => "-31.5934",
                    ],
                    "message" => "success",
                    "timestamp" => 1651232971,
                ],
                [
                    "iss_position" => [
                        "longitude" => "156.7980",
                        "latitude" => "-28.8720",
                    ],
                    "message" => "success",
                    "timestamp" => 1651233031,
                ],
                [
                    "iss_position" => [
                        "longitude" => "159.6294",
                        "latitude" => "-26.0768",
                    ],
                    "message" => "success",
                    "timestamp" => 1651233092,
                ],
                [
                    "iss_position" => [
                        "longitude" => "162.3375",
                        "latitude" => "-23.1944",
                    ],
                    "message" => "success",
                    "timestamp" => 1651233153,
                ],
                [
                    "iss_position" => [
                        "longitude" => "164.8783",
                        "latitude" => "-20.3068",
                    ],
                    "message" => "success",
                    "timestamp" => 1651233213,
                ],
                [
                    "iss_position" => [
                        "longitude" => "167.3363",
                        "latitude" => "-17.3513",
                    ],
                    "message" => "success",
                    "timestamp" => 1651233274,
                ],
                [
                    "iss_position" => [
                        "longitude" => "169.6892",
                        "latitude" => "-14.3843",
                    ],
                    "message" => "success",
                    "timestamp" => 1651233334,
                ],
                [
                    "iss_position" => [
                        "longitude" => "171.9923",
                        "latitude" => "-11.3642",
                    ],
                    "message" => "success",
                    "timestamp" => 1651233395,
                ],
                [
                    "iss_position" => [
                        "longitude" => "174.2422",
                        "latitude" => "-8.3217",
                    ],
                    "message" => "success",
                    "timestamp" => 1651233455,
                ],
                [
                    "iss_position" => [
                        "longitude" => "176.4356",
                        "latitude" => "-5.2885",
                    ],
                    "message" => "success",
                    "timestamp" => 1651233515,
                ],
                [
                    "iss_position" => [
                        "longitude" => "178.6236",
                        "latitude" => "-2.2198",
                    ],
                    "message" => "success",
                    "timestamp" => 1651233576,
                ],
                [
                    "iss_position" => [
                        "longitude" => "-179.1863",
                        "latitude" => "0.8687",
                    ],
                    "message" => "success",
                    "timestamp" => 1651233637,
                ],
                [
                    "iss_position" => [
                        "longitude" => "-177.0215",
                        "latitude" => "3.9159",
                    ],
                    "message" => "success",
                    "timestamp" => 1651233697,
                ],
                [
                    "iss_position" => [
                        "longitude" => "-174.8203",
                        "latitude" => "6.9819",
                    ],
                    "message" => "success",
                    "timestamp" => 1651233758,
                ],
                [
                    "iss_position" => [
                        "longitude" => "-172.5865",
                        "latitude" => "10.0352",
                    ],
                    "message" => "success",
                    "timestamp" => 1651233818,
                ],
                [
                    "iss_position" => [
                        "longitude" => "-170.3049",
                        "latitude" => "13.0703",
                    ],
                    "message" => "success",
                    "timestamp" => 1651233879,
                ],
                [
                    "iss_position" => [
                        "longitude" => "-167.9789",
                        "latitude" => "16.0565",
                    ],
                    "message" => "success",
                    "timestamp" => 1651233939,
                ],
                [
                    "iss_position" => [
                        "longitude" => "-165.5547",
                        "latitude" => "19.0347",
                    ],
                    "message" => "success",
                    "timestamp" => 1651234000,
                ],
                [
                    "iss_position" => [
                        "longitude" => "-163.0332",
                        "latitude" => "21.9729",
                    ],
                    "message" => "success",
                    "timestamp" => 1651234060,
                ],
                [
                    "iss_position" => [
                        "longitude" => "-160.3948",
                        "latitude" => "24.8628",
                    ],
                    "message" => "success",
                    "timestamp" => 1651234121,
                ],
                [
                    "iss_position" => [
                        "longitude" => "-157.6424",
                        "latitude" => "27.6715",
                    ],
                    "message" => "success",
                    "timestamp" => 1651234181,
                ],
                [
                    "iss_position" => [
                        "longitude" => "-154.7072",
                        "latitude" => "30.4354",
                    ],
                    "message" => "success",
                    "timestamp" => 1651234242,
                ],
                [
                    "iss_position" => [
                        "longitude" => "-151.6153",
                        "latitude" => "33.0952",
                    ],
                    "message" => "success",
                    "timestamp" => 1651234302,
                ],
                [
                    "iss_position" => [
                        "longitude" => "-148.2899",
                        "latitude" => "35.6812",
                    ],
                    "message" => "success",
                    "timestamp" => 1651234362,
                ],
                [
                    "iss_position" => [
                        "longitude" => "-144.7296",
                        "latitude" => "38.1541",
                    ],
                    "message" => "success",
                    "timestamp" => 1651234423,
                ],
                [
                    "iss_position" => [
                        "longitude" => "-140.9415",
                        "latitude" => "40.4764",
                    ],
                    "message" => "success",
                    "timestamp" => 1651234483,
                ],
                [
                    "iss_position" => [
                        "longitude" => "-136.8024",
                        "latitude" => "42.6832",
                    ],
                    "message" => "success",
                    "timestamp" => 1651234544,
                ],
                [
                    "iss_position" => [
                        "longitude" => "-132.3916",
                        "latitude" => "44.6936",
                    ],
                    "message" => "success",
                    "timestamp" => 1651234605,
                ],
                [
                    "iss_position" => [
                        "longitude" => "-127.7030",
                        "latitude" => "46.4868",
                    ],
                    "message" => "success",
                    "timestamp" => 1651234665,
                ],
                [
                    "iss_position" => [
                        "longitude" => "-114.8698",
                        "latitude" => "49.8747",
                    ],
                    "message" => "success",
                    "timestamp" => 1651234813,
                ],
                [
                    "iss_position" => [
                        "longitude" => "-109.0400",
                        "latitude" => "50.7889",
                    ],
                    "message" => "success",
                    "timestamp" => 1651234874,
                ],
                [
                    "iss_position" => [
                        "longitude" => "-103.0622",
                        "latitude" => "51.3713",
                    ],
                    "message" => "success",
                    "timestamp" => 1651234935,
                ],
                [
                    "iss_position" => [
                        "longitude" => "-97.0718",
                        "latitude" => "51.6145",
                    ],
                    "message" => "success",
                    "timestamp" => 1651234996,
                ],
                [
                    "iss_position" => [
                        "longitude" => "-91.0615",
                        "latitude" => "51.5244",
                    ],
                    "message" => "success",
                    "timestamp" => 1651235056,
                ],
                [
                    "iss_position" => [
                        "longitude" => "-85.0221",
                        "latitude" => "51.0937",
                    ],
                    "message" => "success",
                    "timestamp" => 1651235117,
                ],
                [
                    "iss_position" => [
                        "longitude" => "-79.1913",
                        "latitude" => "50.3400",
                    ],
                    "message" => "success",
                    "timestamp" => 1651235177,
                ],
                [
                    "iss_position" => [
                        "longitude" => "-73.6335",
                        "latitude" => "49.2898",
                    ],
                    "message" => "success",
                    "timestamp" => 1651235238,
                ],
                [
                    "iss_position" => [
                        "longitude" => "-68.3074",
                        "latitude" => "47.9492",
                    ],
                    "message" => "success",
                    "timestamp" => 1651235298,
                ],
                [
                    "iss_position" => [
                        "longitude" => "-63.2899",
                        "latitude" => "46.3528",
                    ],
                    "message" => "success",
                    "timestamp" => 1651235359,
                ],
                [
                    "iss_position" => [
                        "longitude" => "-58.5923",
                        "latitude" => "44.5282",
                    ],
                    "message" => "success",
                    "timestamp" => 1651235419,
                ],
                [
                    "iss_position" => [
                        "longitude" => "-54.2471",
                        "latitude" => "42.5208",
                    ],
                    "message" => "success",
                    "timestamp" => 1651235480,
                ],
                [
                    "iss_position" => [
                        "longitude" => "-50.1677",
                        "latitude" => "40.3226",
                    ],
                    "message" => "success",
                    "timestamp" => 1651235540,
                ],
                [
                    "iss_position" => [
                        "longitude" => "-46.4019",
                        "latitude" => "37.9933",
                    ],
                    "message" => "success",
                    "timestamp" => 1651235600,
                ],
                [
                    "iss_position" => [
                        "longitude" => "-42.8909",
                        "latitude" => "35.5364",
                    ],
                    "message" => "success",
                    "timestamp" => 1651235660,
                ],
                [
                    "iss_position" => [
                        "longitude" => "-39.5824",
                        "latitude" => "32.9478",
                    ],
                    "message" => "success",
                    "timestamp" => 1651235721,
                ],
                [
                    "iss_position" => [
                        "longitude" => "-36.4808",
                        "latitude" => "30.2642",
                    ],
                    "message" => "success",
                    "timestamp" => 1651235782,
                ],
                [
                    "iss_position" => [
                        "longitude" => "-33.5847",
                        "latitude" => "27.5234",
                    ],
                    "message" => "success",
                    "timestamp" => 1651235842,
                ],
                [
                    "iss_position" => [
                        "longitude" => "-30.8219",
                        "latitude" => "24.6917",
                    ],
                    "message" => "success",
                    "timestamp" => 1651235902,
                ],
                [
                    "iss_position" => [
                        "longitude" => "-28.1951",
                        "latitude" => "21.8028",
                    ],
                    "message" => "success",
                    "timestamp" => 1651235963,
                ],
                [
                    "iss_position" => [
                        "longitude" => "-25.6830",
                        "latitude" => "18.8654",
                    ],
                    "message" => "success",
                    "timestamp" => 1651236024,
                ],
                [
                    "iss_position" => [
                        "longitude" => "-23.2880",
                        "latitude" => "15.9150",
                    ],
                    "message" => "success",
                    "timestamp" => 1651236084,
                ],
                [
                    "iss_position" => [
                        "longitude" => "-20.9514",
                        "latitude" => "12.9087",
                    ],
                    "message" => "success",
                    "timestamp" => 1651236144,
                ],
                [
                    "iss_position" => [
                        "longitude" => "-18.6769",
                        "latitude" => "9.8776",
                    ],
                    "message" => "success",
                    "timestamp" => 1651236205,
                ],
                [
                    "iss_position" => [
                        "longitude" => "-16.4674",
                        "latitude" => "6.8536",
                    ],
                    "message" => "success",
                    "timestamp" => 1651236265,
                ],
                [
                    "iss_position" => [
                        "longitude" => "-14.2716",
                        "latitude" => "3.7927",
                    ],
                    "message" => "success",
                    "timestamp" => 1651236326,
                ],
                [
                    "iss_position" => [
                        "longitude" => "-12.0938",
                        "latitude" => "0.7257",
                    ],
                    "message" => "success",
                    "timestamp" => 1651236386,
                ],
                [
                    "iss_position" => [
                        "longitude" => "-9.9378",
                        "latitude" => "-2.3165",
                    ],
                    "message" => "success",
                    "timestamp" => 1651236446,
                ],
                [
                    "iss_position" => [
                        "longitude" => "-7.7536",
                        "latitude" => "-5.3795",
                    ],
                    "message" => "success",
                    "timestamp" => 1651236507,
                ],
                [
                    "iss_position" => [
                        "longitude" => "-5.5269",
                        "latitude" => "-8.4572",
                    ],
                    "message" => "success",
                    "timestamp" => 1651236568,
                ],
                [
                    "iss_position" => [
                        "longitude" => "-3.2787",
                        "latitude" => "-11.4944",
                    ],
                    "message" => "success",
                    "timestamp" => 1651236629,
                ],
                [
                    "iss_position" => [
                        "longitude" => "-0.9773",
                        "latitude" => "-14.5083",
                    ],
                    "message" => "success",
                    "timestamp" => 1651236689,
                ],
                [
                    "iss_position" => [
                        "longitude" => "1.3743",
                        "latitude" => "-17.4691",
                    ],
                    "message" => "success",
                    "timestamp" => 1651236749,
                ],
                [
                    "iss_position" => [
                        "longitude" => "3.8526",
                        "latitude" => "-20.4428",
                    ],
                    "message" => "success",
                    "timestamp" => 1651236811,
                ],
                [
                    "iss_position" => [
                        "longitude" => "6.4375",
                        "latitude" => "-23.3712",
                    ],
                    "message" => "success",
                    "timestamp" => 1651236872,
                ],
                [
                    "iss_position" => [
                        "longitude" => "9.1267",
                        "latitude" => "-26.2226",
                    ],
                    "message" => "success",
                    "timestamp" => 1651236932,
                ],
                [
                    "iss_position" => [
                        "longitude" => "11.9378",
                        "latitude" => "-28.9877",
                    ],
                    "message" => "success",
                    "timestamp" => 1651236992,
                ],
                [
                    "iss_position" => [
                        "longitude" => "14.9400",
                        "latitude" => "-31.7011",
                    ],
                    "message" => "success",
                    "timestamp" => 1651237053,
                ],
                [
                    "iss_position" => [
                        "longitude" => "18.1079",
                        "latitude" => "-34.3053",
                    ],
                    "message" => "success",
                    "timestamp" => 1651237113,
                ],
                [
                    "iss_position" => [
                        "longitude" => "21.5191",
                        "latitude" => "-36.8283",
                    ],
                    "message" => "success",
                    "timestamp" => 1651237174,
                ],
                [
                    "iss_position" => [
                        "longitude" => "25.1748",
                        "latitude" => "-39.2315",
                    ],
                    "message" => "success",
                    "timestamp" => 1651237234,
                ],
                [
                    "iss_position" => [
                        "longitude" => "29.1321",
                        "latitude" => "-41.5122",
                    ],
                    "message" => "success",
                    "timestamp" => 1651237296,
                ],
                [
                    "iss_position" => [
                        "longitude" => "33.3130",
                        "latitude" => "-43.5945",
                    ],
                    "message" => "success",
                    "timestamp" => 1651237356,
                ],
                [
                    "iss_position" => [
                        "longitude" => "37.8741",
                        "latitude" => "-45.5232",
                    ],
                    "message" => "success",
                    "timestamp" => 1651237417,
                ],
                [
                    "iss_position" => [
                        "longitude" => "42.7157",
                        "latitude" => "-47.2223",
                    ],
                    "message" => "success",
                    "timestamp" => 1651237477,
                ],
                [
                    "iss_position" => [
                        "longitude" => "47.8706",
                        "latitude" => "-48.6811",
                    ],
                    "message" => "success",
                    "timestamp" => 1651237538,
                ],
                [
                    "iss_position" => [
                        "longitude" => "53.3167",
                        "latitude" => "-49.8722",
                    ],
                    "message" => "success",
                    "timestamp" => 1651237599,
                ],
                [
                    "iss_position" => [
                        "longitude" => "58.9663",
                        "latitude" => "-50.7643",
                    ],
                    "message" => "success",
                    "timestamp" => 1651237659,
                ],
                [
                    "iss_position" => [
                        "longitude" => "64.8049",
                        "latitude" => "-51.3481",
                    ],
                    "message" => "success",
                    "timestamp" => 1651237719,
                ],
                [
                    "iss_position" => [
                        "longitude" => "70.8067",
                        "latitude" => "-51.6100",
                    ],
                    "message" => "success",
                    "timestamp" => 1651237779,
                ],
                [
                    "iss_position" => [
                        "longitude" => "76.8359",
                        "latitude" => "-51.5368",
                    ],
                    "message" => "success",
                    "timestamp" => 1651237840,
                ],
                [
                    "iss_position" => [
                        "longitude" => "82.7994",
                        "latitude" => "-51.1303",
                    ],
                    "message" => "success",
                    "timestamp" => 1651237901,
                ],
                [
                    "iss_position" => [
                        "longitude" => "88.6592",
                        "latitude" => "-50.3937",
                    ],
                    "message" => "success",
                    "timestamp" => 1651237962,
                ],
                [
                    "iss_position" => [
                        "longitude" => "94.2489",
                        "latitude" => "-49.3570",
                    ],
                    "message" => "success",
                    "timestamp" => 1651238022,
                ],
                [
                    "iss_position" => [
                        "longitude" => "99.5241",
                        "latitude" => "-48.0503",
                    ],
                    "message" => "success",
                    "timestamp" => 1651238083,
                ],
                [
                    "iss_position" => [
                        "longitude" => "104.5007",
                        "latitude" => "-46.4920",
                    ],
                    "message" => "success",
                    "timestamp" => 1651238143,
                ],
                [
                    "iss_position" => [
                        "longitude" => "109.2036",
                        "latitude" => "-44.6933",
                    ],
                    "message" => "success",
                    "timestamp" => 1651238203,
                ],
                [
                    "iss_position" => [
                        "longitude" => "113.5576",
                        "latitude" => "-42.7103",
                    ],
                    "message" => "success",
                    "timestamp" => 1651238263,
                ],
                [
                    "iss_position" => [
                        "longitude" => "117.6150",
                        "latitude" => "-40.5540",
                    ],
                    "message" => "success",
                    "timestamp" => 1651238323,
                ],
                [
                    "iss_position" => [
                        "longitude" => "121.3950",
                        "latitude" => "-38.2472",
                    ],
                    "message" => "success",
                    "timestamp" => 1651238384,
                ],
                [
                    "iss_position" => [
                        "longitude" => "124.9229",
                        "latitude" => "-35.8088",
                    ],
                    "message" => "success",
                    "timestamp" => 1651238444,
                ],
                [
                    "iss_position" => [
                        "longitude" => "128.2194",
                        "latitude" => "-33.2602",
                    ],
                    "message" => "success",
                    "timestamp" => 1651238504,
                ],
                [
                    "iss_position" => [
                        "longitude" => "131.3365",
                        "latitude" => "-30.5934",
                    ],
                    "message" => "success",
                    "timestamp" => 1651238564,
                ],
                [
                    "iss_position" => [
                        "longitude" => "134.2470",
                        "latitude" => "-27.8670",
                    ],
                    "message" => "success",
                    "timestamp" => 1651238625,
                ],
                [
                    "iss_position" => [
                        "longitude" => "137.0007",
                        "latitude" => "-25.0714",
                    ],
                    "message" => "success",
                    "timestamp" => 1651238685,
                ],
                [
                    "iss_position" => [
                        "longitude" => "139.6197",
                        "latitude" => "-22.2170",
                    ],
                    "message" => "success",
                    "timestamp" => 1651238745,
                ],
                [
                    "iss_position" => [
                        "longitude" => "142.1234",
                        "latitude" => "-19.3137",
                    ],
                    "message" => "success",
                    "timestamp" => 1651238805,
                ],
                [
                    "iss_position" => [
                        "longitude" => "144.5504",
                        "latitude" => "-16.3452",
                    ],
                    "message" => "success",
                    "timestamp" => 1651238866,
                ],
                [
                    "iss_position" => [
                        "longitude" => "146.8783",
                        "latitude" => "-13.3677",
                    ],
                    "message" => "success",
                    "timestamp" => 1651238926,
                ],
                [
                    "iss_position" => [
                        "longitude" => "149.1435",
                        "latitude" => "-10.3638",
                    ],
                    "message" => "success",
                    "timestamp" => 1651238986,
                ],
                [
                    "iss_position" => [
                        "longitude" => "151.3623",
                        "latitude" => "-7.3386",
                    ],
                    "message" => "success",
                    "timestamp" => 1651239046,
                ],
                [
                    "iss_position" => [
                        "longitude" => "153.5472",
                        "latitude" => "-4.3007",
                    ],
                    "message" => "success",
                    "timestamp" => 1651239106,
                ],
                [
                    "iss_position" => [
                        "longitude" => "155.7310",
                        "latitude" => "-1.2293",
                    ],
                    "message" => "success",
                    "timestamp" => 1651239167,
                ],
                [
                    "iss_position" => [
                        "longitude" => "157.8915",
                        "latitude" => "1.8195",
                    ],
                    "message" => "success",
                    "timestamp" => 1651239227,
                ],
                [
                    "iss_position" => [
                        "longitude" => "160.0789",
                        "latitude" => "4.8909",
                    ],
                    "message" => "success",
                    "timestamp" => 1651239287,
                ],
                [
                    "iss_position" => [
                        "longitude" => "162.2712",
                        "latitude" => "7.9294",
                    ],
                    "message" => "success",
                    "timestamp" => 1651239348,
                ],
                [
                    "iss_position" => [
                        "longitude" => "164.5186",
                        "latitude" => "10.9782",
                    ],
                    "message" => "success",
                    "timestamp" => 1651239408,
                ],
                [
                    "iss_position" => [
                        "longitude" => "166.7992",
                        "latitude" => "13.9818",
                    ],
                    "message" => "success",
                    "timestamp" => 1651239468,
                ],
                [
                    "iss_position" => [
                        "longitude" => "169.1671",
                        "latitude" => "16.9836",
                    ],
                    "message" => "success",
                    "timestamp" => 1651239529,
                ],
                [
                    "iss_position" => [
                        "longitude" => "171.5992",
                        "latitude" => "19.9264",
                    ],
                    "message" => "success",
                    "timestamp" => 1651239589,
                ],
                [
                    "iss_position" => [
                        "longitude" => "174.1380",
                        "latitude" => "22.8333",
                    ],
                    "message" => "success",
                    "timestamp" => 1651239649,
                ],
                [
                    "iss_position" => [
                        "longitude" => "176.7929",
                        "latitude" => "25.6844",
                    ],
                    "message" => "success",
                    "timestamp" => 1651239709,
                ],
                [
                    "iss_position" => [
                        "longitude" => "179.5895",
                        "latitude" => "28.4754",
                    ],
                    "message" => "success",
                    "timestamp" => 1651239770,
                ],
                [
                    "iss_position" => [
                        "longitude" => "-177.4506",
                        "latitude" => "31.1945",
                    ],
                    "message" => "success",
                    "timestamp" => 1651239830,
                ],
                [
                    "iss_position" => [
                        "longitude" => "-174.3031",
                        "latitude" => "33.8293",
                    ],
                    "message" => "success",
                    "timestamp" => 1651239890,
                ],
                [
                    "iss_position" => [
                        "longitude" => "-170.9127",
                        "latitude" => "36.3867",
                    ],
                    "message" => "success",
                    "timestamp" => 1651239951,
                ],
                [
                    "iss_position" => [
                        "longitude" => "-167.3126",
                        "latitude" => "38.8054",
                    ],
                    "message" => "success",
                    "timestamp" => 1651240011,
                ],
                [
                    "iss_position" => [
                        "longitude" => "-163.4492",
                        "latitude" => "41.0888",
                    ],
                    "message" => "success",
                    "timestamp" => 1651240071,
                ],
                [
                    "iss_position" => [
                        "longitude" => "-159.3001",
                        "latitude" => "43.2153",
                    ],
                    "message" => "success",
                    "timestamp" => 1651240131,
                ],
                [
                    "iss_position" => [
                        "longitude" => "-154.8466",
                        "latitude" => "45.1611",
                    ],
                    "message" => "success",
                    "timestamp" => 1651240191,
                ],
                [
                    "iss_position" => [
                        "longitude" => "-150.0711",
                        "latitude" => "46.9029",
                    ],
                    "message" => "success",
                    "timestamp" => 1651240251,
                ],
                [
                    "iss_position" => [
                        "longitude" => "-144.9897",
                        "latitude" => "48.4081",
                    ],
                    "message" => "success",
                    "timestamp" => 1651240311,
                ],
                [
                    "iss_position" => [
                        "longitude" => "-139.5665",
                        "latitude" => "49.6615",
                    ],
                    "message" => "success",
                    "timestamp" => 1651240372,
                ],
                [
                    "iss_position" => [
                        "longitude" => "-133.9256",
                        "latitude" => "50.6170",
                    ],
                    "message" => "success",
                    "timestamp" => 1651240432,
                ],
                [
                    "iss_position" => [
                        "longitude" => "-128.0824",
                        "latitude" => "51.2639",
                    ],
                    "message" => "success",
                    "timestamp" => 1651240492,
                ],
            ],
        ];
        
        
        foreach($arrayVar["positions"] as $position){
            $oneposition = [];
            foreach($position['iss_position'] as $key2 => $value2){
                if($key2 == 'longitude'){
                    $oneposition['longitude'] = $value2;
                }
                if($key2 == 'latitude'){
                    $oneposition['latitude'] = $value2;
                }
            }
            
            if (isset($oneposition['latitude']) && isset($oneposition['longitude'])){
                $date = $date = new \DateTime(date('Y-m-d H:i:s', rand(1650405600, 1651356000)));
                array_push($oneposition, $date);
            }
            
            $ISSPosition = new ISSPosition();
            $ISSPosition->setLatitude($oneposition['latitude'])
                        ->setLongitude($oneposition['longitude'])
                        ->setDate($oneposition['0']);
            $manager->persist($ISSPosition);
            $manager->flush();
        }

    }
}
