<?php

namespace RestClient;

final class ResponseData
{
    /** @var mixed */
    private mixed $responseData;
    private string $responseBody;

    /**
     * @param mixed $responseData
     * @param string $responseBody
     */
    public function __construct(mixed $responseData, string $responseBody)
    {
        $this->responseData = $responseData;
        $this->responseBody = $responseBody;
    }

    public function getResponseBody(): string
    {
        return $this->responseBody;
    }

    /**
     * @return mixed
     */
    public function getResponseData(): mixed
    {
        return $this->responseData;
    }
}
