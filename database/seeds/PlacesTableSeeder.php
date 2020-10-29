<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PlacesTableSeeder extends Seeder
{
    static $places = [
        'Maui'     => [ 20.76443, -156.44501 ],
        'New York, NY'   => [ 40.71278, -74.00597 ],
        'Puerto Rico' => [ 18.22083, -66.59015 ],
        'Oahu'     => [ 21.284635, -157.834074 ],
        'Kauai'   => [ 21.958210, -159.673141 ],
        'Moorea'     => [ -17.499078, -149.872058 ],
        'Washinton, DC'     => [ 38.890096, -77.036550 ],
        'Chicago'    => [ 41.882559, -87.622919 ],
        'Santa Barbara, CA'       => [ 34.420830, -119.698189 ],
        'Portland, OR'        => [ 45.52345, -122.67621 ],
        'Miami, FL'     => [ 25.77427, -80.19366 ],
        'Vancouver, BC'     => [ 49.24966, -123.11934 ],
        'Cancun'    => [ 21.17429, -86.84656 ],
        'Toronto'       => [ 43.70011, -79.4163 ],
        'Seattle'        => [ 47.60621, -122.33207 ],
        'Hawaii'     => [ 19.50139, -154.97056 ],
        'Boston'     => [ 42.35843, -71.05977 ],
        'Barcelona'    => [ 41.38879, 2.15899 ],
        'Rome'       => [ 41.89193, 12.51133 ],
        'Florence'        => [ 43.77925, 11.24626 ],
        'Napa, CA'    => [ 38.29714, -122.28553 ],
        'San Francisco, CA'       => [ 37.77493, -122.41942 ],
        'Las Vegas, NV'        => [ 36.114647, -115.172813 ],
        'Paris, France'    => [ 48.85341, 2.3488 ],
        'Amsterdam, Holland'       => [ 52.37403, 4.88969 ],
        'Yosemite, CA'        => [ 37.865101, -119.538330 ],
        'Manila, Philippines'      => [ 14.55027, 121.03269 ]
    ];


    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach (self::$places as $place => $coords) {
            DB::table('places')->insert([
                'name' => $place,
                'visited' => rand(0,1) == 1,
                'lat' => $coords[0],
                'lng' => $coords[1]
            ]);
        }
    }
}
