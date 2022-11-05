<?php

namespace Controllers;

use Actions\LatestNewsForDaysAction;
use Actions\LatestNewsWithPaginationAction;
use Actions\NewsByIdAction;

class NewsController extends ApiController
{
    public function newsById(int $uid, NewsByIdAction $newsByIdAction)
    {
        $news = $newsByIdAction($uid);
        return $this->respond($news);
    }

    public function latestNewsForThreeDays(LatestNewsForDaysAction $latestNewsForDaysAction)
    {
        $news = $latestNewsForDaysAction(3);
        return $this->respond($news);
    }

    public function latestNewsWithPagination(LatestNewsWithPaginationAction $latestNewsWithPaginationAction)
    {
        $news = $latestNewsWithPaginationAction(10);
        return $this->respond($news);
    }
}
