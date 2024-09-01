<?php

namespace App\Http\Controllers;

use App\Models\Setting;
use Illuminate\Http\Request;

class SettingsController extends Controller
{
    public function index()
    {
        $settings = Setting::first();

        return view('settings.index', compact('settings'));

    }

    public function update(Request $request)
    {
        $request->validate([
            'company_name' => 'required',
            'primary_color' => 'required',
            'type' => 'required',
        ]);


        $setting = Setting::first();

        $setting->update([
            'company_name' => $request->input('company_name'),
            'primary_color' => $request->input('primary_color'),
            'type' => $request->input('type'),
        ]);

        return redirect()->back()->with('success', 'Configurações atualizadas com sucesso!');
    }

}
