<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'PrestaShopBundle\Controller\Api\OAuth2\AccessTokenController' shared service.

$a = new \League\OAuth2\Server\AuthorizationServer(new \PrestaShopBundle\Security\OAuth2\Repository\ClientRepository(($this->privates['security.user.provider.concrete.oauth2'] ?? ($this->privates['security.user.provider.concrete.oauth2'] = new \Symfony\Component\Security\Core\User\InMemoryUserProvider([]))), ($this->services['security.password_encoder'] ?? $this->load('getSecurity_PasswordEncoderService.php'))), ($this->privates['PrestaShopBundle\\Security\\OAuth2\\Repository\\AccessTokenRepository'] ?? ($this->privates['PrestaShopBundle\\Security\\OAuth2\\Repository\\AccessTokenRepository'] = new \PrestaShopBundle\Security\OAuth2\Repository\AccessTokenRepository())), new \PrestaShopBundle\Security\OAuth2\Repository\NullScopeRepository(), new \League\OAuth2\Server\CryptKey('-----BEGIN PRIVATE KEY-----'."\n".'MIIEvQIBADANBgkqhkiG9w0BAQEFAASCBKcwggSjAgEAAoIBAQDOQqbnQuVhRJgu'."\n".'aL3qeIHqvUm+QrZMsspUAD9+KgfacTqJrffMs9mME1kJeuUBu7r3LSDDPEmiUkw6'."\n".'GMpxB7xX67QGWxmdFS5eIedffe5Dj7x9OEChd3aDUh6xI6JYM3waA8iuKwgzosl+'."\n".'SX52EuQqkp4cubXq+OHz3N/Cgtahz+NZvpRQUGricSkL4eFDJ3O7GMW+7fKL1Sad'."\n".'5yR8p156vYwd/c5OkK66PoucGq7ACoZv9qn254hbyv1hKryEn1v2vNVLs8/Aw1p2'."\n".'bpzKFOlQ1F/TY0U8XOkK8lh7MX9uG+t9xy+Yu12MfuflrRdUIbvhj2zt1x5lghTx'."\n".'L+ivnccXAgMBAAECggEBAL5rmlr2z321LinqWSsWhhqJFoOoY1T72v8iG3wGoalx'."\n".'z3E8QwGhKL7BPfoak0G+ZyW7a/vStMg+4lDggkVHtwIUgOc9Q7BZ1azh8BGg2U9W'."\n".'a9XPERwAhlFGhz9SfpafMXty8tqYr8G8D/mfMDkhx7PmGEK80M5VZ4UT7SBOWoiX'."\n".'FCqZw9eui3fxkmv0Yzijxi5Sqq3Co6gDt4GZReoeScfFqEBqlmsc2Nvjqsx98oWH'."\n".'AVbm8qnKVvh+HBKg5zCVI3KSpTQc7rDcsVwICFVlm9Zg9HYHNRqaz1sr9ODOdwHl'."\n".'P7gbOnFCqJaWbUy+11Iqpqv4O42IBkmU/5XIWS+xzgECgYEA5tpARdjsbQc0wwmv'."\n".'wwopP/DA/Y5BWUWiRkuXD4HIi9Uu2zLOSwnC+358Frp23upB+ablQ2Lc3VGyBk0I'."\n".'udRrtYbTG2I/EdeOIWmwn2RkOnNxZmKdVv9HUvhTc6BwuFNLjOj6pxf4WlzZNEMQ'."\n".'F5pu0FS5spaobE84siHty18xu/cCgYEA5LqaPQ/WHfxI+vRj8oCWfnPSPlJDhoK5'."\n".'MO1n2JQ48jxsvY1yGUNvjJvNzTFZ48qSqsjUbpjtuVh4ZmemsN50fN8ux3TwUAvj'."\n".'iSrT+SSkHq9dlJMl8m2fyIzV3VHjK0vX19+XwHhhJaxIkQ/cPtl5iuIa6tJgrKoX'."\n".'YtTpTJEyReECgYAoH+EyAr09ShZanBFnphl7Wp5As/wZxyeobjUIZfd0jo5BXThM'."\n".'BJtWWSq6TJiisDbdbKvGpaVb9nop7DPLEOfTumZxCQeLU1sJ5bPkUG+3VR9tu1A7'."\n".'sc0016Kxoz5UW23zRP9kEZ+CHUdHdSyT3azLGx7XsqX9hVuGYq1RPu+HCwKBgA8Z'."\n".'/ur/K6zpJkxjbGHreYQ502zH86ti4CVJ12xmROhBcxCE0T63xBqtgsYEdyHiExLx'."\n".'lY0DzdZJ8BEa0NemqFxCRA1pPCCc2FYLHNm7QJbCD1Sq7nt2H3GXUtt895m5NTQM'."\n".'kDFmAUwCdvwU5v7DTxILYamVYEqmJEsjMZAbmg0hAoGAUHbJF0A4nWuy2lHuYDo4'."\n".'i4xm5Wi7L4pFy2qrQCxJiz9QqYH4Y675hVB+D1aUwL0SmWcmVRQdsUWqr7njOExE'."\n".'LWEjI0txroCgqOAem0gHLCegbjDFlduRnMmU4bwGpw3U+ARpXtexgEphxZxXjqd3'."\n".'CKnSihPMq9tw5jWTUzOmDKE='."\n".'-----END PRIVATE KEY-----'."\n".''), 'def000006904a056c3f50eb19846b64f0e86633a4435552d19f7fa42125b1c197023c342ed3541bf46440136a521ef0755bf096df37cc422c7a00506960e781753b499d5');
$a->enableGrantType(new \League\OAuth2\Server\Grant\ClientCredentialsGrant());

return $this->services['PrestaShopBundle\\Controller\\Api\\OAuth2\\AccessTokenController'] = new \PrestaShopBundle\Controller\Api\OAuth2\AccessTokenController($a, ($this->privates['Symfony\\Bridge\\PsrHttpMessage\\Factory\\PsrHttpFactory'] ?? $this->load('getPsrHttpFactoryService.php')), new \Symfony\Bridge\PsrHttpMessage\Factory\HttpFoundationFactory(), ($this->privates['Nyholm\\Psr7\\Factory\\Psr17Factory'] ?? ($this->privates['Nyholm\\Psr7\\Factory\\Psr17Factory'] = new \Nyholm\Psr7\Factory\Psr17Factory())));