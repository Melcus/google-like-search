<?php

use Sleimanx2\Plastic\Map\Blueprint;
use Sleimanx2\Plastic\Mappings\Mapping;

class AppModelsStore extends Mapping
{
    /**
     * Full name of the model that should be mapped
     *
     * @var string
     */
    protected $model = App\Models\Store::class;

    /**
     * Run the mapping.
     *
     * @return void
     */
    public function map()
    {
        Map::create($this->getModelType(),function(Blueprint $map){
                $map->long ('id');
                $map->string ('name');
                $map->string ('slug');
                $map->string ('description');
                $map->string ('street_address');
                $map->string ('house_number');
                $map->string ('zipcode');
                $map->string ('website');
                $map->date ('created_at')->format ('yyyy-MM-dd HH:mm:ss');
                $map->date ('updated_at')->format ('yyyy-MM-dd HH:mm:ss');
        },$this->getModelIndex());


    }
}
