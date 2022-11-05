<?php

namespace Repositories;

abstract class BaseRepository
{
    protected $model;

    public function find(int $id)
    {
        return $this->model->find($id);
    }
}
