<?php

namespace App\Repository;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

interface EloquentRepositoryInterface
{
    public function all(
        array $collumns = ['*'],
        array $relations = []
    ): Collection;

    public function allTrashed(): Collection;

    public function findTrashedById(int $modelId): ?Model;

    public function findOnlyTrashedById(int $modelId): ?Model;

    public function create(array $payload): ?Model;

    public function update(int $modelId, array $payload): bool;

    public function deleteById(int $modelId): bool;

    public function restoreById(int $modelId): bool;

    public function permanentlyDeleteById(int $modelId): bool;
}
