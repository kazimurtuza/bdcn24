<?php

namespace Database\Seeders;

use App\Models\BdDivision;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DivisionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $path = public_path().'/resource-db/divisions.json';
        $json = json_decode(file_get_contents($path), true);
        foreach ($json as $c) {
            $data = [
                'id' => $c['id'],
                'name' => $c['name'],
                'bn_name' => $c['bn_name'],
                'url' => $c['url']
            ];
            BdDivision::create($data);
        }
    }
}
