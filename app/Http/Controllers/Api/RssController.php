<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Feeds;
use Log;

class RssController extends Controller
{
  const MAX_FEED_NUM = 10;

  public function index()
  {
      $feed = Feeds::make('http://blog.case.edu/news/feed.atom');
      // $data = array(
      //   'title'     => $feed->get_title(),
      //   'permalink' => $feed->get_permalink(),
      //   'items'     => $feed->get_items(),
      // );
      $data['title'] = $feed->get_title();
      $data['items'] = $feed->get_items(0, self::MAX_FEED_NUM);
      // Log::debug(print_r($feed->get_items(0, self::MAX_FEED_NUM), true));

      return response()->json($data);
  }
}
