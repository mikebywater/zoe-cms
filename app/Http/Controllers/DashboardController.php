<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Show the dashboard
     */
    public function show()
    {
        return redirect('/admin/photos');
    }
}
