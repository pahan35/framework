<?php

namespace Illuminate\Database\Schema\ColumnStub;

abstract class CommonColumn
{
    /**
     * @param bool $after
     * @return static
     */
    abstract public function after(bool $after = true);

    /**
     * @param bool $change
     * @return static
     */
    abstract public function change(bool $change = true);

    /**
     * @param string $comment
     * @return static
     */
    abstract public function comment(string $comment);

    /**
     * @param $default
     * @return static
     */
    abstract public function default($default);

    /**
     * @param bool $index
     * @return static
     */
    abstract public function index(bool $index = true);

    /**
     * @param string $name
     * @return static
     */
    abstract public function name(string $name);

    /**
     * @param string $on
     * @return static
     */
    abstract public function on(string $on);

    /**
     * @param string $onDelete
     * @return static
     */
    abstract public function onDelete(string $onDelete);

    /**
     * @param string $onUpdate
     * @return static
     */
    abstract public function onUpdate(string $onUpdate);

    /**
     * @param bool|null $nullable
     * @return static
     */
    abstract public function nullable(bool $nullable = true);

    /**
     * @param string $references
     * @return static
     */
    abstract public function references(string $references);

    /**
     * @param string $type
     * @return static
     */
    abstract public function type(string $type);

    /**
     * @param bool $unique
     * @return static
     */
    abstract public function unique(bool $unique = true);
}
