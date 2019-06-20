<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class events extends Model
{
    protected $fillable = [ 'NameOfEvent',
                            'VenueOfEvent',
                            'Town',
                            'DateOfTheEvent',
                            'OrganizingCompany',
                            'NameOfEvent',
                            'ContactEmail',
                            'Description'
                            ];
}
