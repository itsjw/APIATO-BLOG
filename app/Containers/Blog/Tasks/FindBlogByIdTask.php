<?php

namespace App\Containers\Blog\Tasks;

use App\Containers\Blog\Data\Repositories\BlogRepository;
use App\Ship\Exceptions\NotFoundException;
use App\Ship\Parents\Tasks\Task;
use Exception;

class FindBlogByIdTask extends Task
{

    private $repository;

    public function __construct(BlogRepository $repository)
    {
        $this->repository = $repository;
    }

    public function run($id)
    {
        try {
            return $this->repository->find($id);
        }
        catch (Exception $exception) {
            throw new NotFoundException();
        }
    }
}
