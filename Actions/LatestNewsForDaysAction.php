<?php

namespace Actions;

use Repositories\NewsRepository;

class LatestNewsForDaysAction
{
    public function __construct(
        private readonly NewsRepository $newsRepository,
    )
    {

    }

    public function __invoke(int $countDays)
    {
        return $this->newsRepository->getLatestForDays($countDays);
    }
}
