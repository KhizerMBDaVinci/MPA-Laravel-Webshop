<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categorieen')->insert([
            [
                'Naam' => "Pizza's",
                'Beschrijving' => "De pizza is een Italiaans gerecht. Het bestaat uit een bodem van deeg, de pizzabodem, waarop voedingsmiddelen als kaas of analoogkaas, tomaten, olijven, champignons, groenten en vlees gedaan worden, die doorgaans wordt gebakken in een oven."
            ],
            [
                'Naam' => "Burgers",
                'Beschrijving' => "Een burger is een schijf gebakken of gegrild vlees (meestal rundergehakt). Vaak wordt 'hamburger' ook als synoniem gebruikt voor een broodje dat met deze schijf vlees belegd is. Vaak worden hier sla, tomaat, ui, spek, ei, augurken en kaas aan toegevoegd met sauzen als mosterd, mayonaise, ketchup of chilisaus. Verder kent dit gerecht verschillende nationale en regionale varianten."
            ],
            [
                'Naam' => "Toetjes",
                'Beschrijving' => "Een toetje is een nagerecht, ook wel dessert genoemd. Je eet het na de warme maaltijd, vaak 's avonds. Een typisch Nederlands toetje is vla of yoghurt. Ook eten mensen soms ijs of gebak als toetje."
            ],
            [
                'Naam' => "Drinken",
                'Beschrijving' => "Alle lekkere dranken van melk tot bier hebben we op voorraad."
            ],
            [
                'Naam' => "Salade",
                'Beschrijving' => "Een salade is een koud gerecht, dat bereid kan zijn met verschillende ingrediënten en vaak aangemaakt wordt met een vinaigrette of dressing. Vinaigrettes en dressings bestaan meestal uit een combinatie van olie, azijn en smaakmakers als zout, kruiden en specerijen. Ook worden dressings vaak gemaakt met mayonaise, dat weer een mengsel is van o.a. olie, eidooier en azijn. Een salades met mayonaise en kleingehakte groenten worden in de volksmond ook wel slaatje genoemd."
            ],
            [
                'Naam' => "Turks",
                'Beschrijving' => "De lekkerste turkse eten."
            ],
            [
                'Naam' => "NIX18",
                'Beschrijving' => "Alleen 18 plussers kunnen van hier winkelen"
            ]
        ]);
    }
}
