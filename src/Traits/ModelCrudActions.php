<?php

namespace Jxckaroo\LaravelServiceRepository\Traits;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

/**
 * Trait ModelCrudActions
 * @package Jxckaroo\LaravelServiceRepository\Traits
 */
trait ModelCrudActions
{
    /**
     * @var array $activeWith
     */
    protected array $activeWith = [];

    /**
     * @var array $activeWithCount
     */
    protected array $activeWithCount = [];

    /**
     * @return Builder[]|\Illuminate\Database\Eloquent\Collection
     */
    public function getAll()
    {
        return $this->buildQuery()->get();
    }

    /**
     * @param $selectedKey
     * @return Model|null
     */
    public function find($selectedKey): ?Model
    {
        return $this->buildQuery()->whereKey($selectedKey)->first();
    }

    /**
     * @param array $with
     * @return $this
     */
    public function with(array $with)
    {
        $this->activeWith = $with;
        return $this;
    }

    /**
     * @param array $withCount
     * @return $this
     */
    public function withCount(array $withCount)
    {
        $this->activeWithCount = $withCount;
        return $this;
    }

    /**
     * @return Builder
     */
    public function buildQuery(): Builder
    {
        $freshQuery = $this->model::query();

        if (count($this->activeWith) > 0) {
            $freshQuery->with($this->activeWith);
        }

        if (count($this->activeWithCount) > 0) {
            $freshQuery->withCount($this->activeWithCount);
        }

        return $freshQuery;
    }
}
