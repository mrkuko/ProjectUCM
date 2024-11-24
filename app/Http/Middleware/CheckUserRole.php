<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

/**
 * Checks if user have position to show content
 */
class CheckUserRole
{
    public function handle(Request $request, Closure $next, $role)
    {
        $user = Auth::user();

        if (! $user) {
            return redirect()->route('login');
        }

        $branch = $user->branches()->first();
        $roleInBranch = $user->getRoleInBranch($branch);

        if ($roleInBranch !== $role) {
            // Redirect with an error message
            return redirect()->route('error')->withErrors(['error' => 'Access denied.']);
        }

        return $next($request);
    }
}
