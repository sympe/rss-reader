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
      $feed = Feeds::make('http://b.hatena.ne.jp/hotentry/it.rss');

      $data['items'] = [];

      $items = $feed->get_items(0, self::MAX_FEED_NUM);

      foreach ($items as $item) {
        $list_item['title'] = $item->get_title();
        $list_item['link'] = $item->get_permalink();
        $list_item['description'] = $item->get_description();
        $data['items'][] = $list_item;
      }

      return response()->json($data);
  }
}
