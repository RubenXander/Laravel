<?php

namespace Database\Seeders;

use App\Models\Pizza;
use Illuminate\Database\Seeder;
class PizzaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $pizza = new Pizza([
            'ImagePath' => 'https://images0.persgroep.net/rcs/svlNgRjYdfHRww8NLKuTSrj5Bj0/diocontent/100249536/_fill/1200/630/?appId=21791a8992982cd8da851550a453bd7f&quality=0.7',
            'pizza' => 'Hawaï',
            'price' => 12
        ]);
        $pizza ->save();

        $pizza = new Pizza([
            'ImagePath' => 'https://ohmyfoodness.nl/wp-content/uploads/2020/10/kip-parmezaan_calzone-feat-500x375.jpg',
            'pizza' => 'Calzone',
            'price' => 14
        ]);
        $pizza ->save();

        $pizza = new Pizza([
            'ImagePath' => 'https://www.okokorecepten.nl/i/recepten/kookboeken/2008/de-zilveren-lepel/pizza-napolitana-500.jpg',
            'pizza' => 'Napolitana',
            'price' => 16
        ]);
        $pizza ->save();
        $pizza = new Pizza([
            'ImagePath' => 'https://midmid.blob.core.windows.net/images/brasseriedekraai/product/pizza-salami_3f8199_lg.jpg?v=ba60bd2be51cde30fb0f62ddcad23c31',
            'pizza' => 'Salami',
            'price' => 15
        ]);
        $pizza ->save();
        $pizza = new Pizza([
            'ImagePath' => 'https://www.okokorecepten.nl/i/recepten/kookboeken/2008/de-zilveren-lepel/pizza-napolitana-500.jpg',
            'pizza' => 'Shoarma',
            'price' => 13
        ]);
        $pizza ->save();
        $pizza = new Pizza([
            'ImagePath' => 'https://www.okokorecepten.nl/i/recepten/kookboeken/2008/de-zilveren-lepel/pizza-napolitana-500.jpg',
            'pizza' => 'Caprese',
            'price' => 8
        ]);
        $pizza ->save();

    }
}
