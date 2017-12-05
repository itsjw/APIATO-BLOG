<?php

namespace App\Containers\Blog\Actions;

use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;
use Apiato\Core\Foundation\Facades\Apiato;

class GetAllBlogsAction extends Action
{
    public function run(Request $request)
    {
        $blogs = Apiato::call('Blog@GetAllBlogsTask');

        return $blogs;
    }
}
