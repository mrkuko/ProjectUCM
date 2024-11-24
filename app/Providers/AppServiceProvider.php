<?php

namespace App\Providers;

use App\Models\User;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        // Gate for checking role
        // middleware(['auth', 'role:admin,manager']);
        Gate::define('role', function (User $user, $roles) {
            if (!is_array($roles)) {
                // Convert comma-separated string to array
                $roles = explode(',', $roles);
            }

            $branch = $user->branches()->first(); // Get the first branch
            if (!$branch) {
                // No branch is associated
                return false;
            }
            $currentRole = $user->getRoleInBranch($branch);
            return in_array($currentRole, $roles, true);

//            if (is_array($roles)) {
//                dump("array" . in_array($currentRole, $roles, true));
//                // Check if the user's role matches any role in the list
//                return in_array($currentRole, $roles, true);
//            }
//
//            dump("not array" . $currentRole === $roles);
//            // If a single role is passed, check equality
//            return $currentRole === $roles;
        });

    }
}
