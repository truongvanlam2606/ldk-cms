<?php

namespace App\Repositories;

use App\Contracts\IDbRepository;

abstract class EloquentRepository implements IDbRepository
{
    protected $model;
    
    abstract public function getModel();
    
    
    public function setModel()
    {
        $this->model = app()->make($this->getModel());
    }
    
    public function getAll()
    {
        return $this->model->all();
    }
    
    public function pagination(array $criterial, int $limit = 15, int $page = 1)
    {
        return $this->model->where($criterial)->paginate($limit);
    }
    
    public function find(int $id)
    {
        return $this->model->find($id);
    }
    
    public function findBy(string $by, $value)
    {
        return $this->model->where($by, $value)->get();
    }
    
    public function insert(array $data)
    {
        $this->model->fill($data);
        $this->model->save();
    }
    
    public function update(int $id, array $data)
    {
        $this->model->where('id', $id)->update($data);
    }
    
    public function delete(int $id)
    {
        $this->model->delete($id);
    }
}
