<?php

declare(strict_types=1);

namespace Verdient\Infrastructure;

use Verdient\http\Request as HttpRequest;

/**
 * 响应
 * @author Verdient。
 */
class Request extends HttpRequest
{
    /**
     * @var string 授权秘钥
     * @author Verdient。
     */
    public $accessToken = null;

    /**
     * @inheritdoc
     * @return Response
     * @author Verdient。
     */
    public function send()
    {
        $this->addHeader('Authorization', $this->accessToken);
        return new Response(parent::send());
    }
}
