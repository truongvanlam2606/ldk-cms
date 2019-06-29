<?php

namespace Modules\Admin\Services;

use \Illuminate\Contracts\Hashing\Hasher;

class PasswordService
{
    private $hasher;
    private $passwordStrengthValidator;

    /**
     * @param Hasher $hasher
     * @param MyPasswordStrengthValidator $passwordStrength
     */
    public function __construct(
        Hasher $hasher,
        MyPasswordStrengthValidator $passwordStrength
    ) {
        $this->hasher = $hasher;
        $this->passwordStrengthValidator = $passwordStrength;
    }

    /**
     * Validate and change the given users password
     *
     * @param User $user
     * @param string $password
     * @throws PasswordTooWeakException
     * @return void
     */
    public function changePassword(User $user, $password)
    {
        if ($this->passwordStrengthValidator->isStrongEnough($password)) {
            $user->setPassword($this->hasher->make($password));
        } else {
            throw new PasswordTooWeakException();
        }
    }
}
