<?php

declare(strict_types=1);

namespace Orchid\Bulldozer\Layouts;

use Orchid\Screen\Fields\InputField;
use Orchid\Screen\Layouts\Rows;

/**
 * Class BootCreateModel.
 */
class BootCreateModel extends Rows
{
    /**
     * Views.
     *
     * @return array
     * @throws \Throwable
     */
    public function fields(): array
    {
        return [
            InputField::make('name')
                ->title(__('Model Name:'))
                ->help(__('Create a new model for your application'))
                ->pattern('^[a-zA-Z][a-zA-Z0-9-_\.]{1,20}$')
                ->required(),
        ];
    }
}