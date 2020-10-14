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
        DB::table('products')->insert([
           [
                'name' => "DBA - Pizza Fungi",
                'description' => "Pizza met champignons",
                'price' => 7.99,
                'category_id' => 1,
                'image_nr' => "1"
           ],
           [
                'name' => "DBA - Pizza Shoarma",
                'description' => "Pizza met Shoarmavlees",
                'price' => 8.99,
                'category_id' => 1,
                'image_nr' => "2"
           ],
           [
                'name' => "DBA - Pizza Margherita",
                'description' => "Pizza met kaas",
                'price' => 5.99,
                'category_id' => 1,
                'image_nr' => "3"
           ],
           [
                'name' => "DBA - Pizza Peperoni",
                'description' => "Pizza met salami",
                'price' => 6.99,
                'category_id' => 1,
                'image_nr' => "4"
            ],
            [
                'name' => "DBA - Pizza Tonno",
                'description' => "Pizza met tonijnvlees",
                'price' => 7.99,
                'category_id' => 1,
                'image_nr' => "5"
            ],
            [
                'name' => "DBA - Pizza Veggie",
                'description' => "Pizza voor vegetariërs",
                'price' => 7.99,
                'category_id' => 1,
                'image_nr' => "6"
            ],
            [
                'name' => "DBA - Pizza Hawaii",
                'description' => "Pizza met ananas",
                'price' => 5.99,
                'category_id' => 1,
                'image_nr' => "7"
            ],
            [
                'name' => "DBA - Pizza Gorgonzola",
                'description' => "Pizza met gorgonzola schimmelkaas",
                'price' => 9.99,
                'category_id' => 1,
                'image_nr' => "8"
            ],
            [
                'name' => "McDonalds - Cheese Burger",
                'description' => "Cheese Burger van McDonalds",
                'price' => 7.99,
                'category_id' => 2,
                'image_nr' => "9"
            ],
            [
                'name' => "McDonalds - Quarter Pounder",
                'description' => "Quarter Pounder burger van McDonalds",
                'price' => 3.50,
                'category_id' => 2,
                'image_nr' => "10"
            ],
            [
                'name' => "McDonalds - Big Mac",
                'description' => "Big Mac de hoogste burger van McDonalds",
                'price' => 4.50,
                'category_id' => 2,
                'image_nr' => "11"
            ],
            [
                'name' => "Burger King - Long Chili Cheese",
                'description' => "Pizza met champignons",
                'price' => 3.50,
                'category_id' => 2,
                'image_nr' => "12"
            ],
            [
                'name' => "Burger King - Big King",
                'description' => "Big King burger van Burger King",
                'price' => 5.50,
                'category_id' => 2,
                'image_nr' => "13"
            ],
            [
                'name' => "Burger King - Whopper",
                'description' => "Whopper de grootste en breedste burger van Burger King",
                'price' => 6.50,
                'category_id' => 2,
                'image_nr' => "14"
            ],
            [
                'name' => "McDonalds - Fish Burger",
                'description' => "Vis burger van McDonalds",
                'price' => 4.50,
                'category_id' => 2,
                'image_nr' => "15"
            ],
            [
                'name' => "DBA - VegaBurger",
                'description' => "Burger voor vegetariërs",
                'price' => 4.50,
                'category_id' => 2,
                'image_nr' => "16"
            ],
            [
                'name' => "KFC - Zinger Burger",
                'description' => "Kipburger van KFC",
                'price' => 3.50,
                'category_id' => 2,
                'image_nr' => "17"
            ],
            [
                'name' => "DBA - Vanille Vla",
                'description' => "Vla met vanille smaak",
                'price' => 1.75,
                'category_id' => 3,
                'image_nr' => "18"
            ],
            [
                'name' => "DBA - Vanille Roomijs",
                'description' => "Roomijs met vanille smaak",
                'price' => 3.75,
                'category_id' => 3,
                'image_nr' => "19"
            ],
            [
                'name' => "DBA - Vanille Yoghurt",
                'description' => "Yoghurt met vanille smaak",
                'price' => 2.75,
                'category_id' => 3,
                'image_nr' => "20"
            ],
            [
                'name' => "DBA - Vanille Cupcake",
                'description' => "Cupcake met vanille smaak",
                'price' => 0.75,
                'category_id' => 3,
                'image_nr' => "21"
            ],
            [
                'name' => "DBA - Vanille Vla",
                'description' => "Vla met chocolade smaak",
                'price' => 1.75,
                'category_id' => 3,
                'image_nr' => "22"
            ],
            [
                'name' => "DBA - Chocolade Roomijs",
                'description' => "Roomijs met chocolade smaak",
                'price' => 3.75,
                'category_id' => 3,
                'image_nr' => "23"
            ],
            [
                'name' => "DBA - Chocolade Yoghurt",
                'description' => "Yoghurt met chocolade smaak (niet te vreten)",
                'price' => 2.75,
                'category_id' => 3,
                'image_nr' => "24"
            ],
            [
                'name' => "DBA - Chocolade Cupcake",
                'description' => "Cupcake met chocolade smaak",
                'price' => 0.75,
                'category_id' => 3,
                'image_nr' => "25"
            ],
            [
                'name' => "DBA - Salade Tomaat",
                'description' => "Salade met tomaat",
                'price' => 6.25,
                'category_id' => 5,
                'image_nr' => "26"
            ],
            [
                'name' => "DBA - Salade Ei",
                'description' => "Salade met ei",
                'price' => 5.25,
                'category_id' => 5,
                'image_nr' => "27"
            ],
            [
                'name' => "DBA - Salade Gezond",
                'description' => "Salade met alles erop",
                'price' => 8.25,
                'category_id' => 5,
                'image_nr' => "28"
            ],
            [
                'name' => "DBA - Salade Spaghetti",
                'description' => "Salade met spaghetti",
                'price' => 6.25,
                'category_id' => 5,
                'image_nr' => "29"
            ],
            [
                'name' => "DBA - Salade Union",
                'description' => "Salade met uien",
                'price' => 9.25,
                'category_id' => 5,
                'image_nr' => "30"
            ],
            [
                'name' => "DBA - Salade Oranje",
                'description' => "Salade van Nederland, Salade Hollandia",
                'price' => 4.25,
                'category_id' => 5,
                'image_nr' => "31"
            ],
            [
                'name' => "DBA - Salade Fruit",
                'description' => "Salade met fruit",
                'price' => 5.25,
                'category_id' => 5,
                'image_nr' => "32"
            ],
            [
                'name' => "DBA - Salade Italiano",
                'description' => "Salade van Italië",
                'price' => 8.25,
                'category_id' => 5,
                'image_nr' => "33"
            ],
            [
                'name' => "DBA - Water",
                'description' => "Water 2 liter",
                'price' => 1.60,
                'category_id' => 4,
                'image_nr' => "34"
            ],
            [
                'name' => "DBA - Melk",
                'description' => "Volle melk",
                'price' => 1.60,
                'category_id' => 4,
                'image_nr' => "35"
            ],
            [
                'name' => "Pepsi - Cola",
                'description' => "Frisdrank van Pepsi",
                'price' => 3.60,
                'category_id' => 4,
                'image_nr' => "36"
            ],
            [
                'name' => "Coca Cola - Cola",
                'description' => "Frisdrank van Coca Cola",
                'price' => 4.60,
                'category_id' => 4,
                'image_nr' => "37"
            ],
            [
                'name' => "Heineken - Bier",
                'description' => "Bier van Heineken",
                'price' => 6.60,
                'category_id' => 4,
                'image_nr' => "38"
            ],
            [
                'name' => "Amstel - Bier",
                'description' => "Bier van Amstel",
                'price' => 7.60,
                'category_id' => 4,
                'image_nr' => "39"
            ],
            [
                'name' => "Grolsch - Bier",
                'description' => "Bier van Grolsch met 0.0% alcohol",
                'price' => 5.60,
                'category_id' => 4,
                'image_nr' => "40"
            ],
            [
                'name' => "Fanta - Orange",
                'description' => "Frisdrank van Fanta",
                'price' => 3.60,
                'category_id' => 4,
                'image_nr' => "41"
            ],
            [
                'name' => "DBA - Kapsalon",
                'description' => "Turkse gerecht met patat en vlees",
                'price' => 5.95,
                'category_id' => 6,
                'image_nr' => "42"
            ],
            [
                'name' => "DBA - Turkse Pizza",
                'description' => "Turkse Pizza gerecht",
                'price' => 9.95,
                'category_id' => 6,
                'image_nr' => "43"
            ],
            [
                'name' => "Marlboro - Seventy-Twos",
                'description' => "Normale pakken sigaretten van Marlboro",
                'price' => 12.00,
                'category_id' => 7,
                'image_nr' => "44"
            ],
            [
                'name' => "Marlboro - Gold",
                'description' => "Speciale soorten sigaretten van Marlboro",
                'price' => 14.00,
                'category_id' => 7,
                'image_nr' => "45"
            ],
            [
                'name' => "Esbjaerg - Vodka",
                'description' => "Vodka van Esbjaerg",
                'price' => 17.00,
                'category_id' => 7,
                'image_nr' => "46"
            ]
        ]);
    }
}
