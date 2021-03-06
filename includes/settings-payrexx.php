<?php
return apply_filters('wc_offline_form_fields',
    array(
        'enabled' => array(
            'title' => __('Enable/Disable', 'wc-payrexx-gateway'),
            'type' => 'checkbox',
            'label' => __('Enable Payrexx', 'wc-payrexx-gateway'),
            'default' => 'no',
        ),
        'title' => array(
            'title' => __('Title  <small style="color: #ff0000;">(Required)</small>', 'woocommerce'),
            'type' => 'text',
            'custom_attributes' => array('required' => 'required'),
            'description' => __('This controls the title which the user sees during checkout.', 'woocommerce'),
            'default' => __(get_option("woocommerce_payrexx_title"), 'woocommerce'),
            'desc_tip' => true,
        ),
        'instance' => array(
            'title' => __('Instance Name  <small style="color: #ff0000;">(Required)</small>', 'wc-payrexx-gateway'),
            'type' => 'text',
            'custom_attributes' => array('required' => 'required'),
            'description' => __('This controls the title for the payment method the customer sees during checkout.', 'wc-payrexx-gateway'),
            'default' => __(get_option("woocommerce_payrexx_instance"), 'wc-payrexx-gateway'),
            'desc_tip' => true,
        ),
        'sid' => array(
            'title' => __('Secret ID  <small style="color: #ff0000;">(Required)</small>', 'wc-payrexx-gateway'),
            'type' => 'text',
            'custom_attributes' => array('required' => 'required'),
            'description' => __('This controls the title for the payment method the customer sees during checkout.', 'wc-payrexx-gateway'),
            'default' => __(get_option("woocommerce_payrexx_sid"), 'wc-payrexx-gateway'),
            'desc_tip' => true,
        ),
        'logos' => array(
            'title' => __('Select Logo  <small style="color: #ff0000;">(Required)</small>', 'wc-payrexx-gateway'),
            'type' => 'multiselect',
            'custom_attributes' => array('required' => 'required'),
            'description' => __('This controls the payment method logos the customer sees during checkout.', 'wc-payrexx-gateway'),
            'default' => __(get_option("woocommerce_payrexx_logos"), 'wc-payrexx-gateway'),
            'desc_tip' => true,
            'options' => array(
                'masterpass' => 'Masterpass',
                'mastercard' => 'Mastercard',
                'visa' => 'Visa',
                'apple_pay' => 'Apple Pay',
                'maestro' => 'Maestro',
                'jcb' => 'JCB',
                'american_express' => 'American Express',
                'paypal' => 'PayPal',
                'bitcoin' => 'Bitcoin',
                'sofortueberweisung_de' => 'Sofort Überweisung',
                'airplus' => 'Airplus',
                'billpay' => 'Billpay',
                'bonuscard' => 'Bonus card',
                'cashu' => 'CashU',
                'cb' => 'Carte Bleue',
                'diners_club' => 'Diners Club',
                'direct_debit' => 'Direct Debit',
                'discover' => 'Discover',
                'elv' => 'ELV',
                'ideal' => 'iDEAL',
                'invoice' => 'Invoice',
                'myone' => 'My One',
                'paysafecard' => 'Paysafe Card',
                'postfinance_card' => 'PostFinance Card',
                'postfinance_efinance' => 'PostFinance E-Finance',
                'swissbilling' => 'SwissBilling',
                'twint' => 'TWINT',
            )
        ),
    )
);