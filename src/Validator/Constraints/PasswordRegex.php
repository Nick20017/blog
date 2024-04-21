<?php
namespace App\Validator\Constraints;

use Symfony\Component\Validator\Constraint;
use Symfony\Component\Validator\ConstraintValidator;

/**
 * @Annotation
 */
class PasswordRegex extends Constraint {
    public $message = 'The password must contain at least 1 lowercase letter, 1 capital letter, 1 numer and 1 special symbol';
}

class PasswordRegexValidator extends ConstraintValidator {
    public function validate($value, Constraint $constraint) {
        if (!preg_match('/^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$+%^&*-]).{8,}$/', $value)) {
            $this->context->buildViolation($constraint->message)
            ->setParameter('{{value}}', $value)
            ->addViolation();
        }
    }
}