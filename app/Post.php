<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Post extends Model
{
    //
    protected $guarded = [''];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function scopeFilter($query, $filters){

        if(isset($filters['month'])){
            $query->whereMonth('created_at', Carbon::parse($filters['month'])->month);
        }

        if(isset($filters['year'])){
            $query->whereYear('created_at', $filter['year']);
        }
    }

    public static function archives(){
        return static::selectRaw('year(created_at) year,monthname(created_at) month,count(*)')
            ->groupBy('year', 'month')
            ->orderByRaw('min(created_at) desc')
            ->get()
            ->toArray();
    }
}
