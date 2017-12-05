<?php

namespace App\Containers\Blog\Actions;

use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;
use Apiato\Core\Foundation\Facades\Apiato;

class DeleteBlogAction extends Action
{
    public function run(Request $request)
    {
        return Apiato::call('Blog@DeleteBlogTask', [$request->id]);
    }
}
