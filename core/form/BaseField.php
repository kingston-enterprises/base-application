<?php
/** created by : kingston-5 @ 17/01/23 **/

namespace kingstonenterprises\core\form;


use kingstonenterprises\core\Model;

abstract class BaseField
{

    public Model $model;
    public string $attribute;
    public string $type;
    public function __construct(Model $model, string $attribute)
    {
        $this->model = $model;
        $this->attribute = $attribute;
    }

    public function __toString()
    {
        return sprintf('<div class="mb-6">
				        %s
				        <div class="m-2 p-2 inline-block font-medium text-xs leading-tight">
				            <p class="text-red-500 hover:text-red-700"> %s</p>
				        </div>
                  </div>',
            $this->renderInput(),
            $this->model->getFirstError($this->attribute)
        );
    }

    abstract public function renderInput();
}
