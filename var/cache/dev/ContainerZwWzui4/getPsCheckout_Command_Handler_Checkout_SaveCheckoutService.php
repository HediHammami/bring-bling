<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'ps_checkout.command.handler.checkout.save_checkout' shared service.

return $this->services['ps_checkout.command.handler.checkout.save_checkout'] = new \PrestaShop\Module\PrestashopCheckout\Checkout\CommandHandler\SaveCheckoutCommandHandler(($this->services['ps_checkout.repository.pscheckoutcart'] ?? $this->load('getPsCheckout_Repository_PscheckoutcartService.php')));
