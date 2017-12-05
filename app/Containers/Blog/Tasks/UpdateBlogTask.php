<?php

namespace App\Containers\Blog\Tasks;

use App\Containers\Blog\Data\Repositories\BlogRepository;
use App\Ship\Exceptions\UpdateResourceFailedException;
use App\Ship\Parents\Tasks\Task;
use Exception;

class UpdateBlogTask extends Task
{

    private $repository;

    public function __construct(BlogRepository $repository)
    {
        $this->repository = $repository;
    }

    public function run($id, array $data)
    {
        try {
            return $this->repository->update($data, $id);
        }
        catch (Exception $exception) {
            throw new UpdateResourceFailedException();
        }
    }
}
