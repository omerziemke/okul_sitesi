<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','yetki',
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

    public function yetki()
    {
        return $this->yetki;
    }
    public function role()
    {
        return $this->hasOne('App\Http\Models\Role','id','role_id');
    }

    public function checkRole($need_role)
    {
        return (strtolower($need_role)==strtolower($this->have_role->name)) ? true :false;
    }
    public function hasRole($roles)
    {
       $this->have_role=$this->role()->getResults();
       if(is_array($roles)){
           foreach ($roles as $key=>$need_role){
               if ($this->checkRole($need_role)){
                   return true;
               }
           }

       }else{
           return $this->checkRole($need_role);
       }
    }
}
