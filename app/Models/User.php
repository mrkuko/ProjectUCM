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
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'phone',
        'position',
        'salary',
    ];

    /**
     * User have one(manager, seller) or many(admin) branches
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function location()
    {
        return $this->hasMany(Branch::class);
    }

    /**
     * The branches the user is associated with.
     */
    public function branches()
    {
        return $this->belongsToMany(Branch::class, 'user_branch')
            // Include the position from the pivot table
            ->withPivot('position')
            ->withTimestamps();
    }

    /**
     * Get the user's role (position) in a specific branch.
     * @param Branch $branch
     * @return string|null
     */
    public function getRoleInBranch(Branch $branch)
    {
        // Retrieve the position (role) for the user in the given branch
        return $this->branches()
            ->where('branch_id', $branch->id)
            ->first()
            ->pivot->position ?? null;  // Return null if no role exists
    }

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
}
