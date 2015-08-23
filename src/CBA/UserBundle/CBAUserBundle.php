<?php

namespace CBA\UserBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class CBAUserBundle extends Bundle {

    public function getParent() {
        return 'FOSUserBundle';
    }

}
