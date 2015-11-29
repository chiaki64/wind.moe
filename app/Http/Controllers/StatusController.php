<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Input;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class StatusController extends Controller
{

    //Status
    public function status()
    {
        $type = Input::get('type');
        if ($type == "steam")
        {
            $html = file_get_contents('http://steamcommunity.com/id/forblackking');
            $str = explode('<div class="profile_in_game_header">', $html);
            $status = explode('</div>', $str[1])[0];
            if ($status == "Currently Offline")
            {
                $num = 0;
                $status = "当前离线";
            }
            else if ($status == "Currently Online")
            {
                $num = 1;
                $status = "当前在线";
            }
            else if ($status == "Currently In-Game")
            {
                $num = 2;
                $status = "游戏中";
            }
            else
            {
                $num = 0;
            }


            if ($num == 2) //stristr($html,'<div class="profile_in_game_name">')
            {
                $str = explode('<div class="profile_in_game_name">', $html);
                $game = explode('</div>', $str[1])[0];
            }
            else
            {
                $game = null;
            }
            $obj = array('status' => $num, 'type' => $status, 'game' => $game);
            $json = json_encode($obj);
            return $json;
        }
        return null;
    }
}
