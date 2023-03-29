<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EtudiantAuthController extends Controller
{
    //
    //
    /**
     * Display admin login view
     *
     * @return \Illuminate\View\View
     */
    public function showLoginForm()
    {
        if (Auth::guard('etudiant')->check()) {
            return redirect()->route('etudiant.dashboard');
        } else {
            return view('authentifications.connexion');
        }
    }

    /**
     * Handle an incoming admin authentication request.
     *
     * @param \App\Http\Requests\Auth\LoginRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function login(Request $request)
    {
        $this->validate($request, [
            'matricule' => 'required',
            'password' => 'required',
        ]);

        if (auth()->guard('etudiant')->attempt([
            'matricule' => $request->matricule,
            'password' => $request->password,
        ])) {
            $user = auth()->user();

            return redirect()->intended(url('etudiant/dashboard'));
        } else {
            return redirect()->back()->withError('Credentials doesn\'t match.');
        }
    }

    /**
     * Destroy an authenticated session.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function logout(Request $request)
    {
        Auth::guard('etudiant')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
