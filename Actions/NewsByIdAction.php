<?php

namespace Actions;

use Repositories\NewsRepository;

class NewsByIdAction
{
    public function __construct(
        private readonly NewsRepository $newsRepository,
    )
    {

    }

    public function __invoke(int $uid)
    {
        return $this->newsRepository->find($uid);
    }
}
