<?php

namespace Jxckaroo\LaravelServiceRepository\Repositories;

use Illuminate\Database\Eloquent\Model;
use Jxckaroo\LaravelServiceRepository\Exceptions\Repositories\InvalidModelException;
use Jxckaroo\LaravelServiceRepository\Repositories\Interfaces\RepositoryInterface;

/**
 * Class Repository
 * @package Jxckaroo\LaravelServiceRepository\Repositories
 */
abstract class Repository implements RepositoryInterface
{
    /**
     * @var Model $model
     */
    protected $model;

    /**
     * Repository constructor.
     * @throws InvalidModelException
     */
    public function __construct()
    {
        $this->resolveCorrectModel();
    }

    /**
     * @return Model
     */
    public function getModel(): Model
    {
        return $this->model;
    }

    /**
     * @throws InvalidModelException
     */
    public function resolveCorrectModel()
    {
        if (is_null($this->model)) {
            throw new InvalidModelException("Repository model cannot be null. Have you remembered to set \$model on your repository?");
        }

        $this->model = resolve($this->model);

        if ($this->model instanceof Model) {
            throw new InvalidModelException("Repository model must be an instance of Illuminate\Database\Eloquent\Model.");
        }
    }
}
