<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

use App\Models\Order;

use function PHPUnit\Framework\returnValue;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'balance',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function setId($id)
    {
        $this->attributes['id'] = $id;
    }

    public function getId()
    {
        return $this->attributes['id'];
    }

    public function setName($name)
    {
        $this->attributes["name"] = $name; 
    }

    public function getName()
    {
        return $this->attributes["name"]; 
    }

    public function setEmail($email)
    {
        $this->attributes["email"] = $email;
    }

    public function getEmail()
    {
        return $this->attributes["email"];
    }

    public function setPassword($password)
    {
        $this->attributes["password"] = $password; 
    }

    public function getPassword()
    {
        return $this->attributes["password"]; 
    }

    public function setRole($role)
    {
        $this->attributes["role"] = $role; 
    }

    public function getRole()
    {
        return $this->attributes["role"]; 
    }
    
    public function setBalance($balance)
    {
        $this->attributes["balance"] = $balance; 
    }

    public function getBalance()
    {
        return $this->attributes["balance"] ; 
    }

    public function setCreatedAt($createdAt)
    {
        $this->attributes["created_at"] = $createdAt;
    }

    public function getCreatedAt()
    {
        return $this->attributes["created_at"] ; 
    }

    public function setUpdatedAt($updatedAt)
    {
        $this->attributes["updated_at"] = $updatedAt; 
    }

    public function getUpdatedAt()
    {
        return $this->attributes["updated_at"] ; 
    }


    public function orders() 
    {
        return $this->hasMany(Order::class);
    }

    public function getOrders()
    {
        return $this->orders;
    }

    public function setOrders($orders)
    {
        $this->orders = $orders;
    }
}
