<?php

namespace OFFLINE\Mall\Classes\Registration;

trait BootMails
{

    public function registerMailTemplates()
    {
        return [
            'offline.mall::mail.customer._created',
            'offline.mall::mail.order._state_changed',
            'offline.mall::mail.order._shipped',
            'offline.mall::mail.checkout._succeeded',
            'offline.mall::mail.checkout._failed',
            'offline.mall::mail.payment._failed',
            'offline.mall::mail.payment._paid',
            'offline.mall::mail.payment._refunded',
            'offline.mall::mail.admin._checkout_succeeded',
            'offline.mall::mail.admin._checkout_failed',
        ];
    }

    public function registerMailPartials()
    {
        return [
            'mall.order.table'         => 'offline.mall::mail._partials.order.table',
            'mall.order.tracking'      => 'offline.mall::mail._partials.order.tracking',
            'mall.order.addresses'     => 'offline.mall::mail._partials.order.addresses',
            'mall.order.payment_state' => 'offline.mall::mail._partials.order.payment_state',
            'mall.customer.address'    => 'offline.mall::mail._partials.customer.address',
        ];
    }
}
