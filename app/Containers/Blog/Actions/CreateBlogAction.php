<?php

namespace App\Containers\Blog\Actions;

use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;
use Apiato\Core\Foundation\Facades\Apiato;

class CreateBlogAction extends Action
{
    public function run(Request $request)
    {
        $data = $request->sanitizeInput([
            // add your request data here
            'title', 'body' ,'user_id'
        ]);

        $data['user_id'] = auth()->id();

        $blog = Apiato::call('Blog@CreateBlogTask', [$data]);

        return $blog;
    }
}
