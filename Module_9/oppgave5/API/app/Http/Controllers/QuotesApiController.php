<?php

namespace App\Http\Controllers;

use App\models\Quotes;

use Illuminate\Http\Request;

class QuotesApiController extends Controller
{
    public function all()
    {
        return Quotes::all();
    }

    public function byid($id)
    {

        return Quotes::find($id);
    }

    public function add()
    {
        return Quotes::create([
            'quote' => request('quote'),
            'by' => request('by')
        ]);
    }

    public function random()
    {
        $all = Quotes::all();

        $num = count($all);

        $id = rand(0, $num);

        return Quotes::find($id);
    }
}
