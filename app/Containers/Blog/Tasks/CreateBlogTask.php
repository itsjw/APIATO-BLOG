<?php

namespace App\Containers\Blog\Tasks;

use App\Containers\Blog\Data\Repositories\BlogRepository;
use App\Ship\Exceptions\CreateResourceFailedException;
use App\Ship\Parents\Tasks\Task;
use Exception;

class CreateBlogTask extends Task
{

    private $repository;

    public function __construct(BlogRepository $repository)
    {
        $this->repository = $repository;
    }

    public function run(array $data)
    {
        try {
            return $this->repository->create($data);
        }
        catch (Exception $exception) {
            throw new CreateResourceFailedException();
        }
    }
}
