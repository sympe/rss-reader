<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Feeds;

class HomeController extends Controller
{
  const MAX_FEED_NUM = 10;

  public function index()
  {
      $feed = Feeds::make('http://b.hatena.ne.jp/hotentry/it.rss');

      $data['title'] = $feed->get_title();
      $data['items'] = $feed->get_items(0, self::MAX_FEED_NUM);

      return view('home.index')->with($data);
  }
}