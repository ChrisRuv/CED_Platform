<?php
/**
 * User Database — Colegio CED
 *
 * Operaciones CRUD específicas para la tabla 'user'.
 * Extiende BaseDatabase heredando findOne, findAll, insert, update, delete.
 */

require_once(__DIR__ . '/BaseDatabase.php');

class UserDatabase extends BaseDatabase
{
    protected const TABLE = 'user';
}
