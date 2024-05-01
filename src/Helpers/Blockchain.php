<?php
namespace HopekellDev\Tatum\Helpers;

use HopekellDev\Tatum\Helpers\Blockchains\Bitcoin;

class Blockchain
{
    protected $apiKey;
    protected $accountID;
    protected $baseUrl;

    /**
     * Construct
     */
    function __construct(String $apiKey, String $accountID, String $baseUrl)
    {
        $this->apiKey = $apiKey;
        $this->accountID = $accountID;
        $this->baseUrl = $baseUrl;
    }

    /**
     * Handle Bitcoin Blockchan
     *
     * @return Bitcoin
     */
    public function bitcoin()
    {
        $bitcoin = new Bitcoin($this->apiKey, $this->accountID, $this->baseUrl);
        return $bitcoin;
    }

}