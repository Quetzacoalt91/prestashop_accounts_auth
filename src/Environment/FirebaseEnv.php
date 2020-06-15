<?php
/**
 * 2007-2020 PrestaShop and Contributors.
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Academic Free License 3.0 (AFL-3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * https://opensource.org/licenses/AFL-3.0
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@prestashop.com so we can send you a copy immediately.
 *
 * @author    PrestaShop SA <contact@prestashop.com>
 * @copyright 2007-2020 PrestaShop SA and Contributors
 * @license   https://opensource.org/licenses/AFL-3.0 Academic Free License 3.0 (AFL-3.0)
 * International Registered Trademark & Property of PrestaShop SA
 */

namespace PrestaShop\AccountsAuth\Environment;

/**
 * Allow to set the differents api key / api link depending on.
 */
class FirebaseEnv
{
    /**
     * Firebase public api key.
     *
     * @var string
     */
    private $firebaseApiKey;

    public function __construct()
    {
        $this->firebaseApiKey = $_ENV['FIREBASE_API_KEY'];
        if (false === $this->firebaseApiKey) {
            throw new \Exception('FIREBASE_API_KEY can\'t be empty');
        }
        $this->setFirebaseApiKey($_ENV['FIREBASE_API_KEY']);
    }

    /**
     * getter for firebaseApiKey.
     *
     * @return string
     */
    public function getFirebaseApiKey()
    {
        return $this->firebaseApiKey;
    }

    /**
     * setter for firebaseApiKey.
     *
     * @param string $apiKey
     *
     * @return void
     */
    private function setFirebaseApiKey($apiKey)
    {
        $this->firebaseApiKey = $apiKey;
    }
}
