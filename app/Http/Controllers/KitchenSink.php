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
        $players = [];
        $returnData = [];
        if (isset($_GET['custom_keys']) && $_GET['custom_keys'] == true) {
            $customKeys = [
                'id' => [
                    'display' =>'Id',
                    'position' => 'center',
                    'editable' => 0,
                    'width' => '5%'
                ],
                'first_name' =>[
                    'display' => 'First Name',
                    'position' => 'left',
                    'editable' => 1,
                    'width' => '15%'
                ],
                'last_name' => [
                    'display' => 'Last Name',
                    'position' => 'left',
                    'editable' => 1,
                    'width' => '15%'
                ],
                'age' => [
                    'display' => 'Age',
                    'position' => 'center',
                    'editable' => 1,
                    'width' => '5%'
                ],
                'position_id' => [
                    'display' => 'Position Id',
                    'position' => 'center',
                    'editable' => 1,
                    'width' => '10%'
                ],
                'is_starter' => [
                    'display' => 'Starter',
                    'position' => 'center',
                    'editable' => 1,
                    'width' => '8%'
                ],
                'comment_count' => [
                    'display' => 'Comment Count',
                    'position' => 'center',
                    'editable' => 0,
                    'width' => '10%'
                ],
                'news_item_count' => [
                    'display' => 'News Item Count',
                    'position' => 'center',
                    'editable' => 0,
                    'width' => '10%'
                ],
                'actions' => [
                    'display' => 'Actions',
                    'position' => '',
                    'editable' => 0,
                    'width' => '22%'
                ]
            ];
            $returnData['customKeys'] = $customKeys;
        }
        for ($i = 0; $i < 50; $i++) {
            $players[$i] = [
                'id' => $i + 1,
                'first_name' => $this->createName('first'),
                'last_name' => $this->createName('last'),
                'age' => mt_rand(19, 35),
                'position_id' => mt_rand(1, 9),
                'is_starter' => mt_rand(0, 1),
                'comment_count' => mt_rand(0, 1000),
                'news_item_count' => mt_rand(1, 50),

            ];
            $players[$i]['last_comment'] = $players[$i]['first_name'] . ' is really one of the best players ive ever seen, he has great hands and can throw for miles';
        }
        $returnData['players'] = $players;
        return view('kitchensink.tablepage')->with($returnData);
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
