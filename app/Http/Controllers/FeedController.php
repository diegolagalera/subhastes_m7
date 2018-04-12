<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Subhasta;

class FeedController extends Controller
{

  public function index()
  {
  $posts = Subhasta::limit(20)->get();

  $data = [
    'version' => 'https://jsonfeed.org/version/1',
    'title' => 'Laravel News Feed',
    'home_page_url' => 'https://laravel-news.com/',
    'feed_url' => 'https://laravel-news.com/feed/json',
    'icon' => 'https://laravel-news.com/apple-touch-icon.png',
    'favicon' => 'https://laravel-news.com/apple-touch-icon.png',
    'items' => [],
];

foreach ($posts as $key => $post) {
  $estat="";
  if ($post->actiu==1) {
    $estat="Inactiu";
  }
  else {
    $estat="Actiu";
  }
  $data['items'][$key] = [
      'id' => $post->id,
      //'title' => $post->title,
      'url' => 'https://127.0.0.1:8080/subhasta/'.$post->id,
      // 'image' => $post->featured_image,
      'content_text' => "$post->preu_venta ($estat)",
      'date_published' => $post->created_at->tz('UTC')->toRfc3339String(),
      'date_modified' => $post->updated_at->tz('UTC')->toRfc3339String()
  ];
}

  return $data;

  }


    /*



    */
}
