<?php
/**
 * ABS PHP Framework
 *
 * @created      2023
 * @updated      2024-08-01
 * @version      1.0.6
 * @author       abdursoft <support@abdursoft.com>
 * @authorURI    https://abdursoft.com/author
 * @copyright    2024 abdursoft
 * @license      MIT
 *
 * @Written by Abdur Rahim
 */

namespace ABS\Framework\DB\Mongodb;

use Exception;
use MongoDB\Client;

date_default_timezone_set( DB_SERVER_TIMEZONE );
class Mongo {
    public $db;
    public function __construct() {
        $mb = MONDB;
        try {
            $this->db = ( new Client( MONHOST ) )->$mb;
        } catch ( Exception $th ) {
            echo '<!DOCTYPE html><html lang="en"><head> <meta charset="UTF-8"> <meta name="viewport" content="width=device-width, initial-scale=1.0"> <title>DB Query Build Error</title> <style> body{ width: 100vw; height: 100vh; background: #000; display: flex; align-items: center; justify-content: center; overflow: hidden;flex-direction:column; } h3{ font-size: 1.9em; font-weight: 500; color: #fff;background:#333; padding:20px 16px; border-radius:10px;margin:20px 0px; } </style></head><body> <h3>'.$th->getMessage().'</h3></body></html>';
            die;
        }
    }
}
