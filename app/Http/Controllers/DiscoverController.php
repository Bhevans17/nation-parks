<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Collection;
use Illuminate\Pagination\LengthAwarePaginator;


class DiscoverController extends Controller
{
    public function index()
    {
        $parks = Http::get('https://developer.nps.gov/api/v1/parks?limit=15&api_key=zUzPZWsLkOKwYVUbiPvHn1t0yhS6wUkrCYhtoj3I')->json()['data'];

        return view('discover', ['parks' => $parks]);
    }

    public function paginate($items, $perPage = 5, $page = null, $options = [])
    {
        $page = $page ?: (Paginator::resolveCurrentPage() ?: 1);
        $items = $items instanceof Collection ? $items : Collection::make($items);
        return new LengthAwarePaginator($items->forPage($page, $perPage), $items->count(), $perPage, $page, $options);
    }
}
