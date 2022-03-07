<?php
declare(strict_types=1);

namespace Zenrise\CardPayment\Controller\Index;

use Magento\Framework\App\Action\HttpGetActionInterface;
use Magento\Framework\App\Response\Http;
use Magento\Framework\Controller\ResultInterface;
use Magento\Framework\Exception\LocalizedException;
use Magento\Framework\Serialize\Serializer\Json;
use Magento\Framework\View\Result\PageFactory;
use Psr\Log\LoggerInterface;
use Magento\Framework\App\Helper\AbstractHelper;

class Index implements HttpGetActionInterface
{

    /**
     * @var PageFactory
     */
    protected $resultPageFactory;
    /**
     * @var Json
     */
    protected $serializer;
    /**
     * @var LoggerInterface
     */
    protected $logger;
    /**
     * @var Http
     */
    protected $http;

    /**
     * Constructor
     *
     * @param PageFactory $resultPageFactory
     * @param Json $json
     * @param LoggerInterface $logger
     * @param Http $http
     */
    public function __construct(
        PageFactory $resultPageFactory,
        Json $json,
        LoggerInterface $logger,
        Http $http,
        \Magento\Framework\App\Config\ScopeConfigInterface $scopeConfig,
        array $data = []
    ) {
        $this->resultPageFactory = $resultPageFactory;
        $this->serializer = $json;
        $this->logger = $logger;
        $this->http = $http;
        $this->scopeConfig = $scopeConfig;
    }

    protected function _prepareLayout()
    {
      parent::_prepareLayout();
    }

    /**
     * Execute view action
     *
     * @return ResultInterface
     */
    public function execute()
    {
      var_dump($this->getClientId());
    }

    private function getConfig($attr)
    {
      return $this->scopeConfig->getValue('payment/zenrisecardpayment/' . $attr, \Magento\Store\Model\ScopeInterface::SCOPE_STORE);
    }

    public function getClientId()
    {
      return $this->getConfig('clientid');
    }

    public function getSecretId()
    {
      return $this->getConfig('secretid');
    }
}
