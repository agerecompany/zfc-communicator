<?php
/**
 * The MIT License (MIT)
 * Copyright (c) 2018 Stagem Team
 * This source file is subject to The MIT License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * https://opensource.org/licenses/MIT
 *
 * @category Stagem
 * @package Stagem_Communicator
 * @license https://opensource.org/licenses/MIT The MIT License (MIT)
 */

use Agere\Visit\Controller\VisitController;
use Agere\Communicator\Listener\CreateVisitListener;

return [
    'definitions' => [
        [
            'listener' => CreateVisitListener::class,
            'method' => 'onCreateVisit',
            'event' => 'createVisit',
            'identifier' => VisitController::class,
            'priority' => 100,
        ],
    ],
];
