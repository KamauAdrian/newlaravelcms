<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    //
//    use SoftDeletes;
//    protected $table = 'members';
//    protected $primaryKey = 'tid';
//    protected $dates=['deleted_at'];
    protected $fillable = [
        'title',
        'body',
        'path'
    ];

    public function user(){
        return $this->belongsTo('App\User');
    }

    public function comments(){
        return $this->hasMany('App\Comment');
    }
    public function addcoment($body){
       $this->comments()->create(['body'=>$body]);

////the long method
//Comment::create([
//    'body'=>$body,
//    'post_id'=>$this->id
//]);
    }
    public static function archives()
    {
        return static::selectRaw('year(created_at) year,monthname(created_at) month,count(*) published')
            ->orderByRaw('min(created_at) desc')
            ->groupBy('year','month')->get()->toArray();


    }

}
