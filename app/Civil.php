<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Civil extends Model
{
    public function user()
    {
        return $this->belognTo('SuccessCivil');
    }
}
