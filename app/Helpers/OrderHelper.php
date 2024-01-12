<?php

namespace  App\Helpers;
class OrderHelper {
    public static function getStatuses(){
        return ['paid', 'checkout', 'canceled', 'failed', 'expired'];
    }
}
