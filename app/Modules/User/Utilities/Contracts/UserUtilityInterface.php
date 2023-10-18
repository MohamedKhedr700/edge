<?php

namespace Modules\User\Utilities\Contracts;

use Raid\Core\Repository\Utilities\Contracts\UtilityInterface;
use Raid\Core\Request\Exceptions\UnvalidatedRequestException;
    use Raid\Core\Model\Models\Contracts\ModelInterface;
    use Raid\Core\Action\Actions\Contracts\Crud\CreateActionInterface;
interface UserUtilityInterface extends UtilityInterface
{
}
