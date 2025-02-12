<?php

namespace App\Enums;

use App\Traits\ReturnsConstantsForEnums;

class MembershipStatusEnum
{
    use ReturnsConstantsForEnums;

    public const APPLIED = 'APPLIED';
    public const UNDER_REVIEW = 'UNDER_REVIEW';
    public const APPROVED = 'APPROVED';
    public const ACTIVE = 'ACTIVE';
    public const SUSPENDED = 'SUSPENDED';
    public const REJECTED = 'REJECTED';


}
