<?php
namespace Controllers\Api;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Controller;
class DummyController
{
    public function getDummyDataAction()
    {
        $date = new \DateTime();
        $dates = [];
        for ($i = 0; $i < 24; $i++) {
            $timeInterval = new \DateInterval('P' . $i . 'D');
            $dates[$date->format('Y-m-d h:i:s')] = $i * (mt_rand(1, 100) * mt_rand(-1, 1));
        }
        $data = [
            'string' => 'Lorem ipsum dolor sit amet',
            'integer' => 1,
            'chart_data' => [
                $date->format('Y-m-d h:i:s') => 22.2,

            ]
        ];
        return new Response();
    }
}