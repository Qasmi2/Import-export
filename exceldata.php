<?php

namespace App;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;

class exceldata extends Model
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public $fillable = [
        'title','first_name','sur_name','middle_name','position','company','department','address1','address2','city','post_code','state','country','telephone_country',
        'telephone_area', 'telephone','extention','facsimile_country','facsimile_area','facsimile','mobile_area','mobile_number','mobile_area_2',
         'mobile_number_2','email_work','email_private','email','company_website','age_group','nationality','nature_of_business','category',
         'event_id','event_name','event_date','maretingoptns','unsubscribes','history_mwan_events_attend','comments',
    ];
  
     /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
       
    ];
}
