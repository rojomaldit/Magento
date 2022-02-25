define(['Magento_Checkout/js/view/payment/default'], function (Component) {
	'use strict';
	return Component.extend({
		defaults: {
			template: 'ZenriseRentsModule_CardPayment/payment/CashModel',
		},
		getMailingAddress: function () {
			return window.checkoutConfig.payment.checkmo.mailingAddress;
		},
	});
});
