<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $kategorien = [
            "Schmuck" => "Handgefertigte Halsketten, Armbänder und Ringe aus verschiedenen Materialien.",
            "Möbel" => "Vintage-Möbel und handgefertigte Einzelstücke für ein individuelles Zuhause.",
            "Dekoration" => "Einzigartige Dekoartikel, um jedem Raum eine persönliche Note zu verleihen.",
            "Kunst" => "Gemälde, Skulpturen und andere Kunstwerke von talentierten Künstlern.",
            "Textilien" => "Handgewebte Teppiche, Kissen und andere Textilien für ein gemütliches Zuhause.",
            "Beleuchtung" => "Stilvolle Beleuchtungskörper, von handgemachten Lampenschirmen bis hin zu
Retro-Leuchten.",
            "Geschirr" => "Handgefertigtes Geschirr, das jede Mahlzeit zu einem besonderen Erlebnis macht."
        ];
        foreach ($kategorien as $key => $value) {
            Category::create([
                'name' => $key,
                'beschreibung' => $value,
            ]);
        }
    }
}
