<?php

namespace Database\Seeders;

use App\Models\BdDistrict;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DistrictsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $path = public_path().'/resource-db/districts.json';
        $json = json_decode(file_get_contents($path), true);
        foreach ($json as $c) {
            $data = [
                'id' => $c['id'],
                'division_id' => $c['division_id'],
                'name' => $c['name'],
                'bn_name' => $c['bn_name'],
                'lat' => $c['lat'],
                'lon' => $c['lon'],
                'url' => $c['url']
            ];
            BdDistrict::create($data);
        }
    }
}
