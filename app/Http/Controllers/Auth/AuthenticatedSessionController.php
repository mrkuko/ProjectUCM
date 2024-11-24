<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Models\UserPosition;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Illuminate\View\View;

class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     */
    public function create()
    {
        // Check if the user is authenticated
        if (Auth::check()) {
            $user = Auth::user();

            // Switch case based on user's role in the branch
            switch ($user->getRoleInBranch($user->branches()->first())) {
                case UserPosition::Admin->value:
                    Log::warning("Admin");
                    return redirect()->intended(route('admin.dashboard')); // Redirect to admin dashboard
                case UserPosition::Manager->value:
                    Log::warning("Manager");
                    return redirect()->intended(route('manager.dashboard')); // Redirect to manager dashboard
                case UserPosition::Seller->value:
                    Log::warning("Seller");
                    return redirect()->intended(route('seller.dashboard')); // Redirect to seller dashboard
                default:
                    // Abort if no matching role found
                    abort(403, 'Forbidden');
            }
        }

        // If the user is not authenticated, show the login form
        return view('auth.login');
    }

    /**
     * Handle an incoming authentication request.
     */
    public function store(LoginRequest $request): RedirectResponse
    {
        print(request());
        $request->authenticate();

        $request->session()->regenerate();

        // Retrieve the authenticated user
        $user = $request->user();
//        foreach ($user->branches as $branch) {
//            dump($branch->name . ' (' . $branch->pivot->position . ')<br>');
//        }
//        dump($user->getRoleInBranch($user->branches()->first()));

        // TODO loop error 404 redirect /login
//        if (Redirect::intended(RouteServiceProvider::HOME)) {}
//        $intendedRoute = session()->get('url.intended');
//        if ($intendedRoute && Route::has($intendedRoute)) {
//         Determine redirection based on user role
        switch ($user->getRoleInBranch($user->branches()->first())) {
            case UserPosition::Admin->value:
                Log::warning("Admin");
                return redirect()->route('admin.dashboard');
            case UserPosition::Manager->value:
                Log::warning("Manager");
                return redirect()->route('manager.dashboard');
            case UserPosition::Seller->value:
                Log::warning("Seller");
                return redirect()->route('seller.dashboard');
            default:
                // Redirect to a default route if no role matches
//                return redirect()->intended(route('login'));
                abort(403);
        }

//        return redirect()->intended(route('manager.dashboard', absolute: false));
    }

    /**
     * Destroy an authenticated session.
     */
    public function destroy(Request $request): RedirectResponse
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/login');
    }
}
