<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LanguageController extends Controller
{
    public function languageChange(Request $request)
    {
        $locale = $request->lang;
 
        if (in_array($locale, config('app.locales')))
        {
            // $cookie = cookie('locale', $locale, 43200)

            $request->session()->forget(['locale']);
            $request->session()->put(['locale'=>$locale]);
            // return redirect()->back()->withCookie($cookie);
        }

        return back();

    }
}
