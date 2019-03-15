<?php 

namespace App\Http\Controllers\Api;

use CloudCreativity\LaravelJsonApi\Http\Controllers\JsonApiController;

class PostsController extends JsonApiController
{

  public function create()
  {
  	return $this->reply(200);
  }
}