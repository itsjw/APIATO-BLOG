<?php

namespace App\Containers\Blog\Actions;

use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;
use Apiato\Core\Foundation\Facades\Apiato;

class UpdateBlogAction extends Action
{
    public function run(Request $request)
    {
        $data = $request->sanitizeInput([
            // add your request data here
        ]);

        $blog = Apiato::call('Blog@UpdateBlogTask', [$request->id, $data]);

        return $blog;
    }
}
