<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    public function member($day, $month)
    {
        $params = [
            'day' => $day,
            'month'     => $month,
            
        ];

        print_r($params);
        
    }
}
