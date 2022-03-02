define(
    [
        'uiComponent',
        'Magento_Checkout/js/model/payment/renderer-list'
    ],
    function (
        Component,
        rendererList
    ) {
        'use strict';
        rendererList.push(
            {
                type: 'zenrisecardpayment',
                component: 'Zenrise_CardPayment/js/view/payment/method-renderer/zenrisecardpayment-method'
            }
        );
        return Component.extend({});
    }
);