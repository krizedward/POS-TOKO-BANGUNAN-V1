<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class ProductOut extends Model
{
    protected $table = 'product_out';

    public function income($date)
    {
        return $this->where('created_at', 'LIKE', "$date%")->sum('total'); 
    }
    
    // method untuk menconvert unix
    public function day($val)
    {
        // Divide by 1000 to obtain the actual timestamp
        $ts = number_format($val/1000, 3, '.', '');
        // Parse into a DateTime object
        $day = Carbon::createFromTimestamp($ts,'Asia/Jakarta');
        return $day->format('d M Y');
    }

    public function kelompokData($date)
    {
        return $this->where('created_at', 'LIKE', "$date%")->sum('qty');
        // return $this->where('created_at', 'LIKE', "$date%")->sum('total');
    }
}
