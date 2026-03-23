<?php


namespace App\Http\Services;

use App\Contracts\IndexInterface;
use Illuminate\Support\Facades\App;

class IndexService implements IndexInterface
{
    public function changeLocale($locale)
    {
        $availableLocales = config('app.locales');
        if (!in_array($locale, $availableLocales)) {
            $locale = config('app.locale');
        }

        session(['locale' => $locale]);

        App::setLocale($locale);

        return true;
    }
}
