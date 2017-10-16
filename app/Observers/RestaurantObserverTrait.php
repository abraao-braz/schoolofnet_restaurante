<?php

namespace App\Observers;

use App\Restaurant;

trait RestaurantObserverTrait
{

    use UploadObserverTrait;

    protected $field = 'photo';
    protected $path = 'restaurante/';

    public function creating(Restaurant $model)
    {
        $this->sendFile($model);
    }

    public function deleting(Restaurant $model)
    {
        $this->removeFile($model);
    }

    public function updating(Restaurant $model)
    {
        $this->updateFile($model);
    }

}