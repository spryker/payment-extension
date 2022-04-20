<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace Spryker\Zed\PaymentExtension\Dependency\Plugin;

use Generated\Shared\Transfer\PaymentAuthorizeRequestTransfer;

interface PaymentAuthorizeRequestExpanderPluginInterface
{
    /**
     * Specification:
     * - Expands payment authorize request.
     *
     * @api
     *
     * @param \Generated\Shared\Transfer\PaymentAuthorizeRequestTransfer $paymentAuthorizeRequestTransfer
     *
     * @return \Generated\Shared\Transfer\PaymentAuthorizeRequestTransfer
     */
    public function expand(
        PaymentAuthorizeRequestTransfer $paymentAuthorizeRequestTransfer
    ): PaymentAuthorizeRequestTransfer;
}
