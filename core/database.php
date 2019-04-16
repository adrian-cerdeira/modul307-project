<?php
/**
 * Stellt eine Verbindung zur Datenbank her und gibt die
 * Datenbankverbindung als PDO zurück.
 *
 * @return PDO
 */
function connectToDatabase()
{
    try {
        // return new PDO('mysql:host=dedi3038.secure.exenti.ch', 'kurseictbz_30702', 'db_307_pw_02', [
        //     PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
        //     PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
        // ]);
        return new PDO('mysql:localhost', 'root', '', [
            PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
            PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
        ]);
    } catch (PDOException $e) {
        die('Keine Verbindung zur Datenbank möglich: ' . $e->getMessage());
    }
}