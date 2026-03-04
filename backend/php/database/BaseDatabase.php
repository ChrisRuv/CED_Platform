<?php
/**
 * Base Database — Colegio CED
 *
 * Clase base abstracta con operaciones CRUD genéricas.
 * Cada entidad extiende esta clase definiendo su tabla.
 *
 * Ejemplo: UserDatabase extends BaseDatabase { TABLE = 'user'; }
 */

abstract class BaseDatabase
{
    protected object $connection;
    protected const TABLE = '';

    public function __construct(object $moodleDB)
    {
        $this->connection = $moodleDB;
    }

    // ─── READ ───────────────────────────────────────────────────────────────

    public function findOne(array $conditions)
    {
        return $this->connection->get_record(static::TABLE, $conditions);
    }

    public function findAll(array $conditions = []): array
    {
        return $this->connection->get_records(static::TABLE, $conditions);
    }

    public function count(array $conditions = []): int
    {
        return $this->connection->count_records(static::TABLE, $conditions);
    }

    public function exists(array $conditions): bool
    {
        return $this->connection->record_exists(static::TABLE, $conditions);
    }

    // ─── CREATE ─────────────────────────────────────────────────────────────

    public function insert(object $record): int
    {
        return $this->connection->insert_record(static::TABLE, $record);
    }

    // ─── UPDATE ─────────────────────────────────────────────────────────────

    public function update(object $record): bool
    {
        return $this->connection->update_record(static::TABLE, $record);
    }

    // ─── DELETE ─────────────────────────────────────────────────────────────

    public function delete(array $conditions): bool
    {
        return $this->connection->delete_records(static::TABLE, $conditions);
    }
}
