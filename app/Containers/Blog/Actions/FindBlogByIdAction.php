<?php

namespace App\Containers\Blog\Actions;

use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;
use Apiato\Core\Foundation\Facades\Apiato;

class FindBlogByIdAction extends Action
{
    public function run(Request $request)
    {
        $blog = Apiato::call('Blog@FindBlogByIdTask', [$request->id]);

        return $blog;
    }
}
