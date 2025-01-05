<?php

include_once 'TableWrapperInterface.php';

abstract class UserTableWrapper implements TableWrapperInterface
{
    private array $rows;

    /**
     * @param array|[column => row_value] $values
     */
    public function insert(array $values): void
    {
        $this->rows[] = $values;
    }

    public function update(int $id, array $values): array
    {
        if (array_key_exists($id, $this->rows)) {
            unset($this->rows[$id]);
            $this->rows[$id] = $values;
            sort($this->rows);
        }
        return $this->rows[$id];
    }

    public function delete(int $id): void
    {
        if (array_key_exists($id, $this->rows)) {
            unset($this->rows[$id]);
            $this->rows = array_values($this->rows);
        }
    }

    public function get(): array
    {
        return $this->rows;
    }
}