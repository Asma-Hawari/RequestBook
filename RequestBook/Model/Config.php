<?php
/**
 *  * @author Eng.Asma Hawari
 *  * @package CodaTrip_RequestBook
 */
namespace CodaTrip\RequestBook\Model;

use Magento\Framework\App\Config\ScopeConfigInterface;
use Magento\Store\Model\ScopeInterface;

class Config
{
    /**
     * Recipient email config path
     */
    const XML_PATH_REQUEST_BOOK_EMAIL_RECIPIENT = 'request_book/request_book_form/recipient_email';

    /**
     * Sender email config path
     */
    const XML_PATH_REQUEST_BOOK_EMAIL_SENDER = 'request_book/request_book_form/sender_email_identity';

    /**
     * Email template config path
     */
    const XML_PATH_REQUEST_BOOK_EMAIL_TEMPLATE = 'request_book/request_book_form/request_book_email';
    /**
     * @var ScopeConfigInterface
     */
    private $scopeConfig;

    /**
     * @param ScopeConfigInterface $scopeConfig
     */
    public function __construct(ScopeConfigInterface $scopeConfig)
    {
        $this->scopeConfig = $scopeConfig;
    }


    /**
     * {@inheritdoc}
     */
    public function emailTemplate()
    {
        return $this->scopeConfig->getValue(
            self::XML_PATH_REQUEST_BOOK_EMAIL_TEMPLATE,
            ScopeInterface::SCOPE_STORE
        );
    }

    /**
     * {@inheritdoc}
     */
    public function emailSender()
    {
        return $this->scopeConfig->getValue(
            self::XML_PATH_REQUEST_BOOK_EMAIL_SENDER,
            ScopeInterface::SCOPE_STORE
        );
    }

    /**
     * {@inheritdoc}
     */
    public function emailRecipient()
    {
        return $this->scopeConfig->getValue(
            self::XML_PATH_REQUEST_BOOK_EMAIL_RECIPIENT,
            ScopeInterface::SCOPE_STORE
        );
    }
}
