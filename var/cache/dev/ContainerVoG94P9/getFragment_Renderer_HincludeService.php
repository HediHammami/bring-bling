<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'fragment.renderer.hinclude' shared service.

$this->privates['fragment.renderer.hinclude'] = $instance = new \Symfony\Component\HttpKernel\Fragment\HIncludeFragmentRenderer(($this->services['twig'] ?? $this->getTwigService()), ($this->privates['uri_signer'] ?? ($this->privates['uri_signer'] = new \Symfony\Component\HttpKernel\UriSigner('vmu2X36dGUDdQwy2CDu2phN8K1jhmUgt7qKnNLkOWtkv5noX8HmfSFbRf17IbG7Q'))), NULL);

$instance->setFragmentPath('/_fragment');

return $instance;
