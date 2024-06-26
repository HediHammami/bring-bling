<?php
/**
 * Copyright since 2007 PrestaShop SA and Contributors
 * PrestaShop is an International Registered Trademark & Property of PrestaShop SA
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Academic Free License version 3.0
 * that is bundled with this package in the file LICENSE.md.
 * It is also available through the world-wide-web at this URL:
 * https://opensource.org/licenses/AFL-3.0
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@prestashop.com so we can send you a copy immediately.
 *
 * @author    PrestaShop SA and Contributors <contact@prestashop.com>
 * @copyright Since 2007 PrestaShop SA and Contributors
 * @license   https://opensource.org/licenses/AFL-3.0 Academic Free License version 3.0
 */

namespace PrestaShop\Module\PsAccounts\Hook;

use Exception;
use PrestaShop\Module\PsAccounts\Account\Command\UpgradeModuleMultiCommand;
use PrestaShop\Module\PsAccounts\Repository\ConfigurationRepository;
use PrestaShop\Module\PsAccounts\Vendor\League\OAuth2\Client\Provider\Exception\IdentityProviderException;

class DisplayBackOfficeHeader extends Hook
{
    /**
     * @return void
     *
     * @throws IdentityProviderException
     * @throws Exception
     */
    public function execute(array $params = [])
    {
        $this->module->getOauth2Middleware()->execute();

        /** @var ConfigurationRepository $configurationRepository */
        $configurationRepository = $this->module->getService(ConfigurationRepository::class);

        if (version_compare(
            $configurationRepository->getLastUpgrade(false),
            \Ps_accounts::VERSION,
            '<'
        )) {
            $this->commandBus->handle(new UpgradeModuleMultiCommand());
        }
    }
}
