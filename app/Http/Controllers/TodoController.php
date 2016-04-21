<?php

namespace App\Http\Controllers;

use App\Todo;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class TodoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        /*$date = new \DateTime('yesterday');
        $chronologicalData = [];
        for ($i = 0; $i < 23; $i++) {
            $interval = new \DateInterval('PT' . 1 . 'H');
            $chronologicalData[$date->add($interval)->format('Y-m-d H:i:s')] = $i * mt_rand(1, 20);
        }
        $items = [
            'message' => 'sup',
            'data' => [
                'ints' => [
                    1,
                    2,
                    3,
                    4,
                    5,
                    6,
                ],
                'chronological_data' => $chronologicalData,
                'floats' => [
                    1.66,
                    2.32,
                    4.2,
                    5.12,
                    6.99,
                    7.01,
                ],
                'strings' => [
                    'lorem ipsum dolor sit amet',
                    'charlie sheen drinks tigers blood',
                    'i am the walrus',
                    'coocoo cachoo',
                    'this is a very long string its data is irrelevant i swear or is it is there some sort of hidden message maybe but the lack of punctuation really bugs me i think my elementary school teachers are rolling in their grave because of this sentence whoops my bad'
                ]
            ]
        ];
        return $items;*/

        return '{
  "sEcho": 2,
  "iTotalRecords": "57",
  "iTotalDisplayRecords": "57",
  "aaData": [
    [
      "Webkit",
      "Safari 1.2",
      "OSX.3",
      "125.5",
      "A"
    ],
    [
      "Webkit",
      "Safari 1.3",
      "OSX.3",
      "312.8",
      "A"
    ],
    [
      "Webkit",
      "Safari 2.0",
      "OSX.4+",
      "419.3",
      "A"
    ],
    [
      "Webkit",
      "Safari 3.0",
      "OSX.4+",
      "522.1",
      "A"
    ],
    [
      "Webkit",
      "OmniWeb 5.5",
      "OSX.4+",
      "420",
      "A"
    ],
    [
      "Webkit",
      "iPod Touch / iPhone",
      "iPod",
      "420.1",
      "A"
    ],
    [
      "Webkit",
      "S60",
      "S60",
      "413",
      "A"
    ],
    [
      "Trident",
      "Internet Explorer 4.0",
      "Win 95+",
      "4",
      "X"
    ],
    [
      "Trident",
      "Internet Explorer 5.0",
      "Win 95+",
      "5",
      "C"
    ],
    [
      "Trident",
      "Internet Explorer 5.5",
      "Win 95+",
      "5.5",
      "A"
    ]
  ]
}';
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
        $todo = new Todo(Request::all());
        $todo->save();

        return $todo;
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
     * @param  \Illuminate\Http\Request  $request
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
}
