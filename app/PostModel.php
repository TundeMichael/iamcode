<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class PostModel extends Model {

    protected $geofields = array('location');

    public function setLocationAttribute($value) {
        $this->attributes['location'] = DB::raw("POINT($value)");
    }

    public function getLocationAttribute($value) {

        $loc = substr($value, 6);
        $loc = preg_replace('/[ ,]+/', ',', $loc, 1);

        return substr($loc, 0, -1);
    }

    public function newQuery($excludeDeleted = true) {
        //https://www.codetutorial.io/geo-spatial-mysql-laravel-5/
        $raw = '';
        foreach ($this->geofields as $column) {
            $raw .= ' astext(' . $column . ') as ' . $column . ' ';
        }

        return parent::newQuery($excludeDeleted)->addSelect('*', DB::raw($raw));
    }

    public function scopeAllPostsNearDestination($query, $dist, $location) {
        return $query->whereRaw('ST_Distance(location,POINT(' . $location . ')) < ' . $dist);
        //ST_Distance() was added in MySQL 5.6.1. 
        //Upgrade as follows: sudo apt-get install mysql-server-core-5.6 mysql-server-5.6
    }

}
