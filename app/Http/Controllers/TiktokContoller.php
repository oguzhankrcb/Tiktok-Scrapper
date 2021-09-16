<?php

namespace App\Http\Controllers;

use App\Http\Traits\HelperTrait;
use Illuminate\Http\Request;


use GuzzleHttp\Client as Guzzle;

class TiktokContoller extends Controller
{
    use HelperTrait;

    public function index($username)
    {

        print_r( $this->getUserInformation($username));

        echo "<br>";

        echo $this->getEngagementRate($username);




        // $lastTenPost = array_slice($userFeed->items, 0, 10);

        // foreach($lastTenPost as $item)
        // {
        //     echo $item->stats->commentCount."<br>";
        // }






        // echo json_encode($data);

    }

}
