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

namespace ABS\Framework\System\Route;

use ABS\Framework\System\Auth\Session;

class App {
    public function __construct() {
        Session::init();
        include "route/" . MODE . ".php";
        Route::run();
    }
}