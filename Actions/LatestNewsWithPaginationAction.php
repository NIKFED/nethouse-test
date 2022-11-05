<?php

namespace Actions;

use Repositories\NewsRepository;

class LatestNewsWithPaginationAction
{
    public function __construct(
        private readonly NewsRepository $newsRepository,
    )
    {

    }

    public function __invoke(int $perPage)
    {
        return $this->newsRepository->getLatestWithPagination($perPage);
    }
}
