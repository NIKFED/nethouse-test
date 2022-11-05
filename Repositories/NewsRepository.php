<?php

namespace Repositories;

use Carbon\Carbon;

class NewsRepository extends BaseRepository
{
    public function __construct(News $news)
    {
        $this->model = $news;
    }

    public function getLatestForDays(int $days)
    {
        $date = Carbon::now()->subDays($days);
        return $this->model
            ->where('created_at', $date)
            ->get();
    }

    public function getLatestWithPagination(int $perPage)
    {
        return $this->model
            ->whereNotNull('deleted_at')
            ->orderBy('created_at', 'desc')
            ->paginate($perPage);
    }
}
