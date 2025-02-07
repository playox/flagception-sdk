<?php

namespace Flagception\Activator;

use Flagception\Model\Context;

/**
 * Interface FeatureActivatorInterface
 *
 * @author Michel Chowanski <michel.chowanski@bestit-online.de>
 * @package Flagception\Activator
 */
interface FeatureActivatorInterface
{
    /**
     * Get unique activator name
     *
     * @return string
     */
    public function getName(): string;

    /**
     * Check if the given feature name is active
     * Optional the context object can contain further options to check
     *
     * @param string $name
     * @param Context|null $context
     *
     * @return bool
     */
    public function isActive(string $name, ?Context $context): bool;
}
