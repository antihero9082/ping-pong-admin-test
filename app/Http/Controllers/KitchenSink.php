<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class KitchenSink extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $players = array();
        for ($i = 0; $i < 50; $i++) {
            $players[] = array(
                'id' => $i + 1,
                'first_name' => $this->createName('first'),
                'last_name' => $this->createName('last'),
                'age' => mt_rand(19, 35),
                'position_id' => mt_rand(1, 9),
                'is_starter' => mt_rand(0, 1),
                'comment_count' => mt_rand(0, 1000),
                'news_item_count' => mt_rand(1, 50)
            );
        }
        return view('kitchensink.tablepage')->with('players', $this->actionButtons($players));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \IllirstNamesuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    private function createName($type)
    {
        if ($type == 'first') {
            $names = array(
                'Aaron',
                'Brian',
                'Chris',
                'Dillon',
                'Edgar',
                'Frank',
                'Gimli',
                'Howard',
                'Isaac',
                'Jerome',
                'Kyle',
                'Lamar',
                'Miguel',
                'Nick',
                'Orwell',
                'Prince',
                'Q-bert',
                'Rusty',
                'Steve',
                'Thomas',
                'Uruk',
                'Vince',
                'Walter',
                'Xenu',
                'Yorma',
                'Zack'
            );
        } elseif ($type == 'last') {
            $names = array(
                'Abraham',
                'Brown',
                'Carver',
                'Demetrius',
                'Erkel',
                'Farqua',
                'Gilio',
                'Hasgaard',
                'Ichabod',
                'Jinobli',
                'Knez',
                'Lemont',
                'Monte',
                'Narthol',
                'Oliver',
                'Pratt',
                'Quent',
                'Riley',
                'Solomon',
                'Tucker',
                'Ulver',
                'Valasquez',
                'Witmer',
                'Xellulon',
                'Yancy',
                'Zilma'
            );
        }
        return $names[mt_rand(0, count($names) - 1)];
    }

    protected function actionButtons($data)
    {
       // $data['actions'] = '<button class="btn btn-success"> Save </button> | <button class="btn btn-danger">Delete</button>';
        return $data;
    }
}
