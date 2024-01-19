<?php

namespace Igniter\Cart\Actions;

use Igniter\Flame\Database\Model;
use Igniter\System\Actions\ModelAction;

class OrderAction extends ModelAction
{
    protected Model $model;

    public function __construct($model)
    {
        $this->model = $model;

        $this->model->fillable(['customer_id', 'address_id', 'first_name', 'last_name', 'email', 'telephone', 'comment', 'delivery_comment', 'payment']);
    }
}
