<?php

namespace Basico\Repositories;

use Basico\Models\User;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;

class UserRepository
{
    public function __construct(User $model)
    {
        $this->model = $model;
    }

    public function find(int $id): User
    {
        return $this->model->findOrFail($id);
    }

    public function create(array $data): User
    {
        return $this->model->create($data);
    }

    public function update(int $id, array $data): User
    {
        $product = $this->find($id);
        $product->update($data);
        return $product;
    }

    public function paginate(int $perPage = 15): LengthAwarePaginator
    {
        return $this->model
            ->orderBy('name')
            ->paginate($perPage);
    }

    public function delete(int $id): bool
    {
        return $this->find($id)->delete();
    }
}
