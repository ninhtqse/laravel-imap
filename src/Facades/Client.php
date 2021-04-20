<?php
/*
* File:     Client.php
* Category: Facade
* Author:   M. Goldenbaum
* Created:  19.01.17 22:21
* Updated:  -
*
* Description:
*  -
*/

namespace Ninhtqse\IMAP\Facades;

use Illuminate\Support\Facades\Facade;
use Ninhtqse\PHPIMAP\ClientManager;

/**
 * Class Client
 *
 * @package Ninhtqse\IMAP\Facades
 *
 * @method \Ninhtqse\PHPIMAP\Client account($name = null)
 * @method \Ninhtqse\PHPIMAP\Client make($options = [])
 */
class Client extends Facade {

    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor() {
        return ClientManager::class;
    }
}