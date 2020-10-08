<?php

use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('producten')->insert([
           [
                'Naam' => "DBA - Pizza Fungi",
                'Beschrijving' => "Pizza met champignons",
                'Prijs' => 7.99,
                'Categorie_ID' => 1,
                'Image_Nr' => "1"
           ],
           [
                'Naam' => "DBA - Pizza Shoarma",
                'Beschrijving' => "Pizza met Shoarmavlees",
                'Prijs' => 8.99,
                'Categorie_ID' => 1,
                'Image_Nr' => "2"
           ],
           [
                'Naam' => "DBA - Pizza Margherita",
                'Beschrijving' => "Pizza met kaas",
                'Prijs' => 5.99,
                'Categorie_ID' => 1,
                'Image_Nr' => "3"
           ],
           [
                'Naam' => "DBA - Pizza Peperoni",
                'Beschrijving' => "Pizza met salami",
                'Prijs' => 6.99,
                'Categorie_ID' => 1,
                'Image_Nr' => "4"
            ],
            [
                'Naam' => "DBA - Pizza Tonno",
                'Beschrijving' => "Pizza met tonijnvlees",
                'Prijs' => 7.99,
                'Categorie_ID' => 1,
                'Image_Nr' => "5"
            ],
            [
                'Naam' => "DBA - Pizza Veggie",
                'Beschrijving' => "Pizza voor vegetariërs",
                'Prijs' => 7.99,
                'Categorie_ID' => 1,
                'Image_Nr' => "6"
            ],
            [
                'Naam' => "DBA - Pizza Hawaii",
                'Beschrijving' => "Pizza met ananas",
                'Prijs' => 5.99,
                'Categorie_ID' => 1,
                'Image_Nr' => "7"
            ],
            [
                'Naam' => "DBA - Pizza Gorgonzola",
                'Beschrijving' => "Pizza met gorgonzola schimmelkaas",
                'Prijs' => 9.99,
                'Categorie_ID' => 1,
                'Image_Nr' => "8"
            ],
            [
                'Naam' => "McDonalds - Cheese Burger",
                'Beschrijving' => "Cheese Burger van McDonalds",
                'Prijs' => 7.99,
                'Categorie_ID' => 2,
                'Image_Nr' => "9"
            ],
            [
                'Naam' => "McDonalds - Quarter Pounder",
                'Beschrijving' => "Quarter Pounder burger van McDonalds",
                'Prijs' => 3.50,
                'Categorie_ID' => 2,
                'Image_Nr' => "10"
            ],
            [
                'Naam' => "McDonalds - Big Mac",
                'Beschrijving' => "Big Mac de hoogste burger van McDonalds",
                'Prijs' => 4.50,
                'Categorie_ID' => 2,
                'Image_Nr' => "11"
            ],
            [
                'Naam' => "Burger King - Long Chili Cheese",
                'Beschrijving' => "Pizza met champignons",
                'Prijs' => 3.50,
                'Categorie_ID' => 2,
                'Image_Nr' => "12"
            ],
            [
                'Naam' => "Burger King - Big King",
                'Beschrijving' => "Big King burger van Burger King",
                'Prijs' => 5.50,
                'Categorie_ID' => 2,
                'Image_Nr' => "13"
            ],
            [
                'Naam' => "Burger King - Whopper",
                'Beschrijving' => "Whopper de grootste en breedste burger van Burger King",
                'Prijs' => 6.50,
                'Categorie_ID' => 2,
                'Image_Nr' => "14"
            ],
            [
                'Naam' => "McDonalds - Fish Burger",
                'Beschrijving' => "Vis burger van McDonalds",
                'Prijs' => 4.50,
                'Categorie_ID' => 2,
                'Image_Nr' => "15"
            ],
            [
                'Naam' => "DBA - VegaBurger",
                'Beschrijving' => "Burger voor vegetariërs",
                'Prijs' => 4.50,
                'Categorie_ID' => 2,
                'Image_Nr' => "16"
            ],
            [
                'Naam' => "KFC - Zinger Burger",
                'Beschrijving' => "Kipburger van KFC",
                'Prijs' => 3.50,
                'Categorie_ID' => 2,
                'Image_Nr' => "17"
            ],
            [
                'Naam' => "DBA - Vanille Vla",
                'Beschrijving' => "Vla met vanille smaak",
                'Prijs' => 1.75,
                'Categorie_ID' => 3,
                'Image_Nr' => "18"
            ],
            [
                'Naam' => "DBA - Vanille Roomijs",
                'Beschrijving' => "Roomijs met vanille smaak",
                'Prijs' => 3.75,
                'Categorie_ID' => 3,
                'Image_Nr' => "19"
            ],
            [
                'Naam' => "DBA - Vanille Yoghurt",
                'Beschrijving' => "Yoghurt met vanille smaak",
                'Prijs' => 2.75,
                'Categorie_ID' => 3,
                'Image_Nr' => "20"
            ],
            [
                'Naam' => "DBA - Vanille Cupcake",
                'Beschrijving' => "Cupcake met vanille smaak",
                'Prijs' => 0.75,
                'Categorie_ID' => 3,
                'Image_Nr' => "21"
            ],
            [
                'Naam' => "DBA - Vanille Vla",
                'Beschrijving' => "Vla met chocolade smaak",
                'Prijs' => 1.75,
                'Categorie_ID' => 3,
                'Image_Nr' => "22"
            ],
            [
                'Naam' => "DBA - Chocolade Roomijs",
                'Beschrijving' => "Roomijs met chocolade smaak",
                'Prijs' => 3.75,
                'Categorie_ID' => 3,
                'Image_Nr' => "23"
            ],
            [
                'Naam' => "DBA - Chocolade Yoghurt",
                'Beschrijving' => "Yoghurt met chocolade smaak (niet te vreten)",
                'Prijs' => 2.75,
                'Categorie_ID' => 3,
                'Image_Nr' => "24"
            ],
            [
                'Naam' => "DBA - Chocolade Cupcake",
                'Beschrijving' => "Cupcake met chocolade smaak",
                'Prijs' => 0.75,
                'Categorie_ID' => 3,
                'Image_Nr' => "25"
            ],
            [
                'Naam' => "DBA - Salade Tomaat",
                'Beschrijving' => "Salade met tomaat",
                'Prijs' => 6.25,
                'Categorie_ID' => 5,
                'Image_Nr' => "26"
            ],
            [
                'Naam' => "DBA - Salade Ei",
                'Beschrijving' => "Salade met ei",
                'Prijs' => 5.25,
                'Categorie_ID' => 5,
                'Image_Nr' => "27"
            ],
            [
                'Naam' => "DBA - Salade Gezond",
                'Beschrijving' => "Salade met alles erop",
                'Prijs' => 8.25,
                'Categorie_ID' => 5,
                'Image_Nr' => "28"
            ],
            [
                'Naam' => "DBA - Salade Spaghetti",
                'Beschrijving' => "Salade met spaghetti",
                'Prijs' => 6.25,
                'Categorie_ID' => 5,
                'Image_Nr' => "29"
            ],
            [
                'Naam' => "DBA - Salade Union",
                'Beschrijving' => "Salade met uien",
                'Prijs' => 9.25,
                'Categorie_ID' => 5,
                'Image_Nr' => "30"
            ],
            [
                'Naam' => "DBA - Salade Oranje",
                'Beschrijving' => "Salade van Nederland, Salade Hollandia",
                'Prijs' => 4.25,
                'Categorie_ID' => 5,
                'Image_Nr' => "31"
            ],
            [
                'Naam' => "DBA - Salade Fruit",
                'Beschrijving' => "Salade met fruit",
                'Prijs' => 5.25,
                'Categorie_ID' => 5,
                'Image_Nr' => "32"
            ],
            [
                'Naam' => "DBA - Salade Italiano",
                'Beschrijving' => "Salade van Italië",
                'Prijs' => 8.25,
                'Categorie_ID' => 5,
                'Image_Nr' => "33"
            ],
            [
                'Naam' => "DBA - Water",
                'Beschrijving' => "Water 2 liter",
                'Prijs' => 1.60,
                'Categorie_ID' => 4,
                'Image_Nr' => "34"
            ],
            [
                'Naam' => "DBA - Melk",
                'Beschrijving' => "Volle melk",
                'Prijs' => 1.60,
                'Categorie_ID' => 4,
                'Image_Nr' => "35"
            ],
            [
                'Naam' => "Pepsi - Cola",
                'Beschrijving' => "Frisdrank van Pepsi",
                'Prijs' => 3.60,
                'Categorie_ID' => 4,
                'Image_Nr' => "36"
            ],
            [
                'Naam' => "Coca Cola - Cola",
                'Beschrijving' => "Frisdrank van Coca Cola",
                'Prijs' => 4.60,
                'Categorie_ID' => 4,
                'Image_Nr' => "37"
            ],
            [
                'Naam' => "Heineken - Bier",
                'Beschrijving' => "Bier van Heineken",
                'Prijs' => 6.60,
                'Categorie_ID' => 4,
                'Image_Nr' => "38"
            ],
            [
                'Naam' => "Amstel - Bier",
                'Beschrijving' => "Bier van Amstel",
                'Prijs' => 7.60,
                'Categorie_ID' => 4,
                'Image_Nr' => "39"
            ],
            [
                'Naam' => "Grolsch - Bier",
                'Beschrijving' => "Bier van Grolsch met 0.0% alcohol",
                'Prijs' => 5.60,
                'Categorie_ID' => 4,
                'Image_Nr' => "40"
            ],
            [
                'Naam' => "Fanta - Orange",
                'Beschrijving' => "Frisdrank van Fanta",
                'Prijs' => 3.60,
                'Categorie_ID' => 4,
                'Image_Nr' => "41"
            ],
            [
                'Naam' => "DBA - Kapsalon",
                'Beschrijving' => "Turkse gerecht met patat en vlees",
                'Prijs' => 5.95,
                'Categorie_ID' => 6,
                'Image_Nr' => "42"
            ],
            [
                'Naam' => "DBA - Turkse Pizza",
                'Beschrijving' => "Turkse Pizza gerecht",
                'Prijs' => 9.95,
                'Categorie_ID' => 6,
                'Image_Nr' => "43"
            ],
            [
                'Naam' => "Marlboro - Seventy-Twos",
                'Beschrijving' => "Normale pakken sigaretten van Marlboro",
                'Prijs' => 12.00,
                'Categorie_ID' => 7,
                'Image_Nr' => "44"
            ],
            [
                'Naam' => "Marlboro - Gold",
                'Beschrijving' => "Speciale soorten sigaretten van Marlboro",
                'Prijs' => 14.00,
                'Categorie_ID' => 7,
                'Image_Nr' => "45"
            ],
            [
                'Naam' => "Esbjaerg - Vodka",
                'Beschrijving' => "Vodka van Esbjaerg",
                'Prijs' => 17.00,
                'Categorie_ID' => 7,
                'Image_Nr' => "46"
            ]
        ]);
    }
}
