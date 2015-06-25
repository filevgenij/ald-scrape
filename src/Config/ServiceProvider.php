<?php
/**
 * Short description for ServiceProvider.php
 *
 * @package ServiceProvider
 * @author Cushty <Cushty@WIN-MECGV3ATQQV>
 * @version 0.1
 * @copyright (C) 2015 Cushty <Cushty@WIN-MECGV3ATQQV>
 * @license MIT
 */

namespace Ald\Scrape\Config;

use Pimple\ServiceProviderInterface;
use Pimple\Container;

class ServiceProvider implements ServiceProviderInterface
{
    /**
     * Registers services on the given container.
     *
     * This method should only be used to configure services and parameters.
     * It should not get services.
     *
     * @param Container $pimple An Container instance
     */
    public function register(Container $pimple)
    {
        $pimple['guzzleClient'] = function ($pimple) {
            return new \GuzzleHttp\Client();
        };

        $pimple['spider'] = function ($pimple) {
            return new \Ald\Scrape\Service\Spider\Spider($pimple['guzzleClient']);
        };
    }
}
