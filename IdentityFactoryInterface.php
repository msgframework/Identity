<?php

namespace Msgframework\Lib\Identity;

/**
 * Interface defining a factory which can create User objects
 *
 * @since  1.0.0
 */
interface IdentityFactoryInterface
{
    /**
     * Method to get an instance of a user for the given id.
     *
     * @param   int  $id  The id
     *
     * @return  IdentityInterface
     *
     * @since   1.0.0
     */
    public function loadIdentity(int $id): IdentityInterface;
}
