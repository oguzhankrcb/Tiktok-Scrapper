<?php

namespace App\Http\Traits;

use Illuminate\Support\Facades\DB;

trait HelperTrait
{
    public function getEngagementRate($username)
    {
        $api = new \Sovit\TikTok\Api(array());

        $userFeed=$api->getUserFeed($username,$maxCursor=0);

        $followerCount = $userFeed->info->detail->stats->followerCount;

        $lastTenPost = array_slice($userFeed->items, 0, 10);

        $totalLikeAndComment = 0;

        foreach($lastTenPost as $item)
        {
            $totalLikeAndComment += $item->stats->commentCount;
            $totalLikeAndComment += $item->stats->diggCount;
        }

        $engagementRate = $totalLikeAndComment / $followerCount;

        $engagementRate = round($engagementRate, 4);

        return $engagementRate;
    }

    public function getUserInformation($username)
    {
        $api=new \Sovit\TikTok\Api(array());

        $userData=$api->getUser($username);

        $data = [
            'followerCount' => number_format($userData->stats->followerCount, 0),
            'followingCount' => number_format($userData->stats->followingCount, 0),
            'videoCount' => $userData->stats->videoCount,
            'heartCount' => number_format($userData->stats->heartCount)
        ];

        return $data;
    }
}
