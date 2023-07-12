<?php

namespace app\Http\Controllers;

use App\Models\Settings;
use Illuminate\Http\Request;

class ContactsController extends Controller
{
    public function index()
    {
        $breadcrumbs = [
            __('Главная') => '/',
            __('Контакты') => ''
        ];

        $settings = Settings::whereIn('name', ['CONTACTS_ADDRESS', 'CONTACTS_EMAIL', 'CONTACTS_PHONE'])
            ->select('name', 'value')
            ->get()
            ->mapWithKeys(function ($cpr, $key) {
                return [$cpr->name => $cpr->value];
            });

        return view('pages.contacts', compact('settings', 'breadcrumbs'));
    }
}
