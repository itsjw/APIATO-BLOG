<?php

namespace App\Containers\Blog\Tasks;

use App\Containers\Blog\Data\Repositories\BlogRepository;
use App\Ship\Parents\Tasks\Task;

class GetAllBlogsTask extends Task
{

    private $repository;

    public function __construct(BlogRepository $repository)
    {
        $this->repository = $repository;
    }

    public function run()
    {
        return $this->repository->paginate();
    }
}
