<?php

namespace Jxckaroo\LaravelServiceRepository\Repositories\Interfaces;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Jxckaroo\LaravelServiceRepository\Exceptions\Repositories\InvalidModelException;

/**
 * Interface IRepository
 * @package Jxckaroo\LaravelServiceRepository\Repositories\Interfaces
 */
interface IRepository
{
    /**
     * @return Builder[]|\Illuminate\Database\Eloquent\Collection
     */
    public function getAll();

    /**
     * @param $selectedKey
     * @return Model|null
     */
    public function find($selectedKey): ?Model;

    /**
     * @param array $with
     * @return $this
     */
    public function with(array $with);

    /**
     * @param array $withCount
     * @return $this
     */
    public function withCount(array $withCount);

    /**
     * @return Builder
     */
    public function buildQuery(): Builder;

    /**
     * @return Model
     */
    public function getModel(): Model;

    /**
     * @throws InvalidModelException
     */
    public function resolveCorrectModel();
}
