<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use Illuminate\Support\Facades\Auth;

class TopNavAgency extends Component
{
    public $title;
    public $backRoute;
    public $agency;

    /**
     * Create a new component instance.
     *
     * @param string $title
     * @param string $backRoute
     */
    public function __construct($title = null, $backRoute = 'affiliate.dashboard')
    {
        $this->title = $title;
        $this->backRoute = $backRoute;

        // Ambil data agency langsung di component
        $this->agency = $this->getAgencyData();
    }

    /**
     * Get agency data from authenticated user
     */
    private function getAgencyData()
    {
        if (!Auth::check()) {
            return null;
        }

        $user = Auth::user();

        // Sesuaikan dengan struktur database Anda
        // Contoh 1: Jika user memiliki relasi agency
        if (method_exists($user, 'agency') && $user->agency) {
            return $user->agency;
        }

        // Contoh 2: Jika user itu sendiri adalah agency
        if (isset($user->nama) && isset($user->telepon)) {
            return $user;
        }

        // Contoh 3: Jika perlu query khusus
        // return Agency::where('user_id', $user->id)->first();

        // Default: return user sebagai agency
        return $user;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.top-nav-agency');
    }
}
