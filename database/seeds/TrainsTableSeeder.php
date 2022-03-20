<?php

use Illuminate\Database\Seeder;

use App\Model\Train;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $trains = [
            [
                'company' => 'a',
                'start_stat' => 'Milano',
                'end_stat' => 'Roma',
                'start_time' => '2022-03-02',
                'end_time' => '2022-03-02',
                'num_train' => 'AJKU8',
                'carriages' => 3
            ],
            [
                'company' => 'b',
                'start_stat' => 'Palermo',
                'end_stat' => 'Torino',
                'start_time' => '2022-03-02',
                'end_time' => '2022-03-02',
                'num_train' => 'LKh3d',
                'carriages' => 5
            ]
        ];

        foreach ($trains as $train) {
            $new_train = new Train();

            // $new_train->company = $train['company'];
            // $new_train->start_stat = $train['start_stat'];
            // $new_train->end_stat = $train['end_stat'];
            // $new_train->start_time = $train['start_time'];
            // $new_train->end_time = $train['end_time'];
            // $new_train->num_train = $train['num_train'];
            // $new_train->carriages = $train['carriages'];
            $new_train->fill($train);

            $new_train->save();
        }
    }
}
