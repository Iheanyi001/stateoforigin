<?php

namespace App\Livewire;

use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;
use App\Models\RequestModel;

class RequestModelTable extends DataTableComponent
{
    protected $model = RequestModel::class;

    public function configure(): void
    {
        $this->setPrimaryKey('id');
    }

    public function columns(): array
    {
        return dd(RequestModel::get());
        return [
            Column::make("Ref", "ref")
                ->sortable()->searchable(),
            Column::make("Application type", "application_type")
                ->sortable(),
            Column::make("Type", "type")
                ->sortable(),
            Column::make("Last name", "last_name")
                ->sortable(),
            Column::make("Lga", "lga")
                ->sortable(),
            Column::make("Nationality", "nationality")
                ->sortable(),
            Column::make("Father name", "father_name")
                ->sortable(),
            Column::make("Mother name", "mother_name")
                ->sortable(),

        ];
    }
}
