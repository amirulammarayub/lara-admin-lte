<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Staff extends Authenticatable
{
    use Notifiable;
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'staffs';

    /**
    * The primary key for the model.
    *
    * @var string
    */
    protected $primaryKey = 'staff_id';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'staff_name',
        'staff_email',
        'staff_password'
    ];

    protected $attribute = [
        'staff_name'     => '',
        'staff_email'    => '',
        'staff_password' => ''
    ];

    protected $alias = [
        'id'       => 'staff_id',
        'name'     => 'staff_name',
        'email'    => 'staff_email',
        'phone'    => 'staff_phone',
        'added_by' => 'staff_added_by'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

}
