<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\EventPhoto;

class events extends Model
{
    protected $fillable = [ 'NameOfEvent',
                            'VenueOfEvent',
                            'Town',
                            'DateOfTheEvent',
                            'OrganizingCompany',
                            'ContactEmail',
                            'Description'
                            ];
    public function eventphoto(){
        return $this -> hasOne('App\EventPhoto','PhotosId');
    }
}
