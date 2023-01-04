<?php

namespace App\Http\Controllers;

use App\Models\dids;
use Illuminate\Http\Request;

class DidsController extends Controller
{
    public function tabela() {
        $did = dids::get();

        return view('admin.dids.tabela', compact('did'));
    }

    public function create() {
        
        return view('admin.dids.create', compact('did'));
    }
}
