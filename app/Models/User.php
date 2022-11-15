<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;


use Laravel\Passport\HasApiTokens;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'social_media_id',
        'first_name',
        'last_name',
        'email_address',
        'mobile_number',
        'id_pic_name',
        'user_pic_name',
        'gender_id',
        'password',
        'user_type',
        'stripe_account_id',
        'device_token',
        'website_link',
    ];

    public function properties()
    {
        return $this->hasMany(Properties::class, 'user_id');
    }

    public function booking_request_host()
    {
        return $this->hasMany(BookingRequest::class, 'host_id','user_id');
    }

    public function booking_request_user()
    {
        return $this->hasMany(BookingRequest::class, 'user_id');
    }

    public function wishlist()
    {
        return $this->hasMany(Wishlist::class, 'user_id');
    }

    public function bookings_user()
    {
        return $this->hasMany(Bookings::class, 'user_id');
    }

    public function bookings_host()
    {
        return $this->hasMany(Bookings::class, 'host_id');
    }

    public function ratting()
    {
        return $this->hasMany(Ratting::class, 'user_id');
    }

    // USER FILTER ADMIN SIDE
    public function user_list($full_names, $email, $mobile)
    {
        $first_name = '';
        $last_name  = '';

        if (isset($full_names) && !empty($full_names)) {
            // echo 'dddd';die;
            $full_name = preg_replace('/\s+/', ' ', $full_names);

            $name = explode(" ", $full_name);
            $first_name  = isset($name[0]) ? trim($name[0]) : '';
            $last_name   = isset($name[1]) ? trim($name[1]) : '';
        }

        return User::OrderBy('created_at','desc')
            ->Where(function ($query) use ($first_name) {
                if (isset($first_name) && !empty($first_name)) {
                    $query->where('first_name', 'LIKE', "%" . $first_name . "%");
                }
            })->Where(function ($query) use ($last_name) {
                if (isset($last_name) && !empty($last_name)) {
                    $query->where('last_name', 'LIKE', "%" . $last_name . "%");
                }
            })->Where(function ($query) use ($email) {
                if (isset($email) && !empty($email)) {
                    $query->where('email_address', 'LIKE', "%" . $email . "%");
                }
            })->Where(function ($query) use ($mobile) {
                if (isset($mobile) && !empty($mobile)) {
                    $query->where('mobile_number', 'LIKE', "%" . $mobile . "%");
                }
            })->where('user_type', config("constant.USER_TYPE.USER"))->orderBy('created_at','desc')->paginate(10);
    }

    public function notification()
    {
        return $this->hasMany(Notification::class, 'user_id');
    }
    // host FILTER ADMIN SIDE
    public function host_list($full_names,  $email, $mobile, $status, $stripe_status)
    {
        $first_name = '';
        $last_name  = '';

        if (isset($full_names) && !empty($full_names)) {
            // echo 'dddd';die;
            $full_name = preg_replace('/\s+/', ' ', $full_names);

            $name = explode(" ", $full_name);
            $first_name  = isset($name[0]) ? trim($name[0]) : '';
            $last_name   = isset($name[1]) ? trim($name[1]) : '';
        }

        return User::OrderBy('created_at','desc')
            ->Where(function ($query) use ($first_name) {
                if (isset($first_name) && !empty($first_name)) {
                    $query->where('first_name', 'LIKE', "%" . $first_name . "%");
                }
            })->Where(function ($query) use ($last_name) {
                if (isset($last_name) && !empty($last_name)) {
                    $query->where('last_name', 'LIKE', "%" . $last_name . "%");
                }
            })->Where(function ($query) use ($email) {
                if (isset($email) && !empty($email)) {
                    $query->where('email_address', 'LIKE', "%" . $email . "%");
                }
            })->Where(function ($query) use ($mobile) {
                if (isset($mobile) && !empty($mobile)) {
                    $query->where('mobile_number', 'LIKE', "%" . $mobile . "%");
                }
            })->Where(function ($query) use ($status) {
                if (isset($status) && !empty($status)) {
                    $query->where('status',  $status);
                }
            })->Where(function ($query) use ($stripe_status) {
                if (isset($stripe_status) && !empty($stripe_status)) {
                    if ($stripe_status == 'Pending') {
                        $query->where('stripe_account_id', '=', null);
                    } else {
                        $query->where('stripe_account_id', '!=', null);
                    }
                }
            })->where('user_type', config("constant.USER_TYPE.HOST"))->latest()->paginate(10);
    }
}
