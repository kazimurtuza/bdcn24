<?php

namespace Database\Seeders;

use App\Models\BdThana;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ThanasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $path = public_path().'/resource-db/thanas.json';
        $json = json_decode(file_get_contents($path), true);
        foreach ($json as $c) {
            $data = [
                'id' => $c['id'],
                'district_id' => $c['district_id'],
                'name' => $c['name'],
                'bn_name' => $c['bn_name'],
                'url' => $c['url']
            ];
            BdThana::create($data);
        }
    }
}
