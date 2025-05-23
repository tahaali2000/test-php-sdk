<?php

declare(strict_types=1);

/*
 * PayPalRESTAPIsLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace PayPalRESTAPIsLib\Models;

use PayPalRESTAPIsLib\ApiHelper;
use stdClass;

/**
 * The payment source used to fund the payment.
 */
class PaymentSourceResponse implements \JsonSerializable
{
    /**
     * @var CardResponse|null
     */
    private $card;

    /**
     * @var PayPalWalletResponse|null
     */
    private $paypal;

    /**
     * @var BancontactPaymentObject|null
     */
    private $bancontact;

    /**
     * @var BLIKPaymentObject|null
     */
    private $blik;

    /**
     * @var EPSPaymentObject|null
     */
    private $eps;

    /**
     * @var GiropayPaymentObject|null
     */
    private $giropay;

    /**
     * @var IDEALPaymentObject|null
     */
    private $ideal;

    /**
     * @var MyBankPaymentObject|null
     */
    private $mybank;

    /**
     * @var P24PaymentObject|null
     */
    private $p24;

    /**
     * @var SofortPaymentObject|null
     */
    private $sofort;

    /**
     * @var TrustlyPaymentObject|null
     */
    private $trustly;

    /**
     * @var ApplePayPaymentObject|null
     */
    private $applePay;

    /**
     * @var GooglePayWalletResponse|null
     */
    private $googlePay;

    /**
     * @var VenmoWalletResponse|null
     */
    private $venmo;

    /**
     * Returns Card.
     * The payment card to use to fund a payment. Card can be a credit or debit card.
     */
    public function getCard(): ?CardResponse
    {
        return $this->card;
    }

    /**
     * Sets Card.
     * The payment card to use to fund a payment. Card can be a credit or debit card.
     *
     * @maps card
     */
    public function setCard(?CardResponse $card): void
    {
        $this->card = $card;
    }

    /**
     * Returns Paypal.
     * The PayPal Wallet response.
     */
    public function getPaypal(): ?PayPalWalletResponse
    {
        return $this->paypal;
    }

    /**
     * Sets Paypal.
     * The PayPal Wallet response.
     *
     * @maps paypal
     */
    public function setPaypal(?PayPalWalletResponse $paypal): void
    {
        $this->paypal = $paypal;
    }

    /**
     * Returns Bancontact.
     * Information used to pay Bancontact.
     */
    public function getBancontact(): ?BancontactPaymentObject
    {
        return $this->bancontact;
    }

    /**
     * Sets Bancontact.
     * Information used to pay Bancontact.
     *
     * @maps bancontact
     */
    public function setBancontact(?BancontactPaymentObject $bancontact): void
    {
        $this->bancontact = $bancontact;
    }

    /**
     * Returns Blik.
     * Information used to pay using BLIK.
     */
    public function getBlik(): ?BLIKPaymentObject
    {
        return $this->blik;
    }

    /**
     * Sets Blik.
     * Information used to pay using BLIK.
     *
     * @maps blik
     */
    public function setBlik(?BLIKPaymentObject $blik): void
    {
        $this->blik = $blik;
    }

    /**
     * Returns Eps.
     * Information used to pay using eps.
     */
    public function getEps(): ?EPSPaymentObject
    {
        return $this->eps;
    }

    /**
     * Sets Eps.
     * Information used to pay using eps.
     *
     * @maps eps
     */
    public function setEps(?EPSPaymentObject $eps): void
    {
        $this->eps = $eps;
    }

    /**
     * Returns Giropay.
     * Information needed to pay using giropay.
     */
    public function getGiropay(): ?GiropayPaymentObject
    {
        return $this->giropay;
    }

    /**
     * Sets Giropay.
     * Information needed to pay using giropay.
     *
     * @maps giropay
     */
    public function setGiropay(?GiropayPaymentObject $giropay): void
    {
        $this->giropay = $giropay;
    }

    /**
     * Returns Ideal.
     * Information used to pay using iDEAL.
     */
    public function getIdeal(): ?IDEALPaymentObject
    {
        return $this->ideal;
    }

    /**
     * Sets Ideal.
     * Information used to pay using iDEAL.
     *
     * @maps ideal
     */
    public function setIdeal(?IDEALPaymentObject $ideal): void
    {
        $this->ideal = $ideal;
    }

    /**
     * Returns Mybank.
     * Information used to pay using MyBank.
     */
    public function getMybank(): ?MyBankPaymentObject
    {
        return $this->mybank;
    }

    /**
     * Sets Mybank.
     * Information used to pay using MyBank.
     *
     * @maps mybank
     */
    public function setMybank(?MyBankPaymentObject $mybank): void
    {
        $this->mybank = $mybank;
    }

    /**
     * Returns P 24.
     * Information used to pay using P24(Przelewy24).
     */
    public function getP24(): ?P24PaymentObject
    {
        return $this->p24;
    }

    /**
     * Sets P 24.
     * Information used to pay using P24(Przelewy24).
     *
     * @maps p24
     */
    public function setP24(?P24PaymentObject $p24): void
    {
        $this->p24 = $p24;
    }

    /**
     * Returns Sofort.
     * Information used to pay using Sofort.
     */
    public function getSofort(): ?SofortPaymentObject
    {
        return $this->sofort;
    }

    /**
     * Sets Sofort.
     * Information used to pay using Sofort.
     *
     * @maps sofort
     */
    public function setSofort(?SofortPaymentObject $sofort): void
    {
        $this->sofort = $sofort;
    }

    /**
     * Returns Trustly.
     * Information needed to pay using Trustly.
     */
    public function getTrustly(): ?TrustlyPaymentObject
    {
        return $this->trustly;
    }

    /**
     * Sets Trustly.
     * Information needed to pay using Trustly.
     *
     * @maps trustly
     */
    public function setTrustly(?TrustlyPaymentObject $trustly): void
    {
        $this->trustly = $trustly;
    }

    /**
     * Returns Apple Pay.
     * Information needed to pay using ApplePay.
     */
    public function getApplePay(): ?ApplePayPaymentObject
    {
        return $this->applePay;
    }

    /**
     * Sets Apple Pay.
     * Information needed to pay using ApplePay.
     *
     * @maps apple_pay
     */
    public function setApplePay(?ApplePayPaymentObject $applePay): void
    {
        $this->applePay = $applePay;
    }

    /**
     * Returns Google Pay.
     * Google Pay Wallet payment data.
     */
    public function getGooglePay(): ?GooglePayWalletResponse
    {
        return $this->googlePay;
    }

    /**
     * Sets Google Pay.
     * Google Pay Wallet payment data.
     *
     * @maps google_pay
     */
    public function setGooglePay(?GooglePayWalletResponse $googlePay): void
    {
        $this->googlePay = $googlePay;
    }

    /**
     * Returns Venmo.
     * Venmo wallet response.
     */
    public function getVenmo(): ?VenmoWalletResponse
    {
        return $this->venmo;
    }

    /**
     * Sets Venmo.
     * Venmo wallet response.
     *
     * @maps venmo
     */
    public function setVenmo(?VenmoWalletResponse $venmo): void
    {
        $this->venmo = $venmo;
    }

    /**
     * Converts the PaymentSourceResponse object to a human-readable string representation.
     *
     * @return string The string representation of the PaymentSourceResponse object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify(
            'PaymentSourceResponse',
            [
                'card' => $this->card,
                'paypal' => $this->paypal,
                'bancontact' => $this->bancontact,
                'blik' => $this->blik,
                'eps' => $this->eps,
                'giropay' => $this->giropay,
                'ideal' => $this->ideal,
                'mybank' => $this->mybank,
                'p24' => $this->p24,
                'sofort' => $this->sofort,
                'trustly' => $this->trustly,
                'applePay' => $this->applePay,
                'googlePay' => $this->googlePay,
                'venmo' => $this->venmo
            ]
        );
    }

    /**
     * Encode this object to JSON
     *
     * @param bool $asArrayWhenEmpty Whether to serialize this model as an array whenever no fields
     *        are set. (default: false)
     *
     * @return array|stdClass
     */
    #[\ReturnTypeWillChange] // @phan-suppress-current-line PhanUndeclaredClassAttribute for (php < 8.1)
    public function jsonSerialize(bool $asArrayWhenEmpty = false)
    {
        $json = [];
        if (isset($this->card)) {
            $json['card']       = $this->card;
        }
        if (isset($this->paypal)) {
            $json['paypal']     = $this->paypal;
        }
        if (isset($this->bancontact)) {
            $json['bancontact'] = $this->bancontact;
        }
        if (isset($this->blik)) {
            $json['blik']       = $this->blik;
        }
        if (isset($this->eps)) {
            $json['eps']        = $this->eps;
        }
        if (isset($this->giropay)) {
            $json['giropay']    = $this->giropay;
        }
        if (isset($this->ideal)) {
            $json['ideal']      = $this->ideal;
        }
        if (isset($this->mybank)) {
            $json['mybank']     = $this->mybank;
        }
        if (isset($this->p24)) {
            $json['p24']        = $this->p24;
        }
        if (isset($this->sofort)) {
            $json['sofort']     = $this->sofort;
        }
        if (isset($this->trustly)) {
            $json['trustly']    = $this->trustly;
        }
        if (isset($this->applePay)) {
            $json['apple_pay']  = $this->applePay;
        }
        if (isset($this->googlePay)) {
            $json['google_pay'] = $this->googlePay;
        }
        if (isset($this->venmo)) {
            $json['venmo']      = $this->venmo;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
