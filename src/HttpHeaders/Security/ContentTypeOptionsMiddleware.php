<?php
//
// +---------------------------------------------------------------------+
// | CODE INC. SOURCE CODE                                               |
// +---------------------------------------------------------------------+
// | Copyright (c) 2017 - Code Inc. SAS - All Rights Reserved.           |
// | Visit https://www.codeinc.fr for more information about licensing.  |
// +---------------------------------------------------------------------+
// | NOTICE:  All information contained herein is, and remains the       |
// | property of Code Inc. SAS. The intellectual and technical concepts  |
// | contained herein are proprietary to Code Inc. SAS are protected by  |
// | trade secret or copyright law. Dissemination of this information or |
// | reproduction of this material  is strictly forbidden unless prior   |
// | written permission is obtained from Code Inc. SAS.                  |
// +---------------------------------------------------------------------+
//
// Author:   Joan Fabrégat <joan@codeinc.fr>
// Date:     14/03/2018
// Time:     11:08
// Project:  Psr15Middlewares
//
declare(strict_types = 1);
namespace CodeInc\Psr15Middlewares\HttpHeaders\Security;
use CodeInc\Psr15Middlewares\HttpHeaders\AbstractHttpHeaderMiddleware;
use CodeInc\Psr15Middlewares\Tests\HttpHeaders\Security\ContentTypeOptionsMiddlewareTest;


/**
 * Class ContentTypeOptionsMiddleware
 *
 * @link https://developer.mozilla.org/docs/Web/HTTP/Headers/X-Content-Type-Options
 * @see ContentTypeOptionsMiddlewareTest
 * @package CodeInc\Psr15Middlewares\HttpHeaders\Security
 * @author Joan Fabrégat <joan@codeinc.fr>
 */
class ContentTypeOptionsMiddleware extends AbstractHttpHeaderMiddleware
{
    /**
     * XContentTypeOptionsMiddleware constructor.
     */
    public function __construct()
    {
        parent::__construct('X-Content-Type-Options');
    }


    /**
     * @inheritdoc
     * @return string
     */
    public function getHeaderValue():string
    {
        return 'nosniff';
    }
}