<?php

namespace Database\Seeders;
use App\Models\Wine;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Http;
class WinesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $response = Http::withOptions(['verify' => false])->get('https://api.sampleapis.com/wines/reds');
        $winesArray = $response->json();

        foreach($winesArray as $curWine) {
            $newWine = new Wine();
            $newWine->winery   = $curWine["winery"];
            $newWine->wine     = $curWine["wine"];
            $newWine->rating   = $curWine["rating"]['average'];
            $newWine->location = $curWine["location"];
            $newWine->image    = $curWine["image"];
            $newWine->save();
        }
    }
}
