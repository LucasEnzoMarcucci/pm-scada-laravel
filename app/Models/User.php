<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
  /** @use HasFactory<\Database\Factories\UserFactory> */
  use HasFactory, Notifiable;

  /**
   * The attributes that are mass assignable.
   *
   * @var list<string>
   */
  protected $fillable = [
    'name',
    'email',
    'password',
  ];

  /**
   * The attributes that should be hidden for serialization.
   *
   * @var list<string>
   */
  protected $hidden = [
    'password',
    'remember_token',
  ];

  /**
   * Get the attributes that should be cast.
   *
   * @return array<string, string>
   */
  protected function casts(): array
  {
    return [
      'email_verified_at' => 'datetime',
      'password' => 'hashed',
    ];
  }

  /**
   * Get the user's profile image URL.
   *
   * @return string
   */
  public function adminlte_image()
  {
    // Return a default image URL or the user's profile image if you have one
    return asset('vendor/adminlte/dist/img/AdminLTELogo.png');
  }

  /**
   * Get the user's description for AdminLTE.
   *
   * @return string
   */
  public function adminlte_desc()
  {
    // You can customize this to return any description you want
    return 'Member since ' . $this->created_at->format('M. Y');
  }
}
