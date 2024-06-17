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
        return [
            Column::make("Id", "id")
                ->sortable(),
            Column::make("Ref", "ref")
                ->sortable()->searchable(),
            Column::make("Application type", "application_type")
                ->sortable(),
            Column::make("Type", "type")
                ->sortable(),
            Column::make("Conversion id", "conversion_id")
                ->sortable(),
            Column::make("Lga cert type", "lga_cert_type")
                ->sortable(),
            Column::make("Lga cert no", "lga_cert_no")
                ->sortable(),
            Column::make("Lga cert", "lga_cert")
                ->sortable(),
            Column::make("Last name", "last_name")
                ->sortable(),
            Column::make("First name", "first_name")
                ->sortable(),
            Column::make("Middle name", "middle_name")
                ->sortable(),
            Column::make("Dob", "dob")
                ->sortable(),
            Column::make("Sex", "sex")
                ->sortable(),
            Column::make("Lga", "lga")
                ->sortable(),
            Column::make("Nationality", "nationality")
                ->sortable(),
            Column::make("Father name", "father_name")
                ->sortable(),
            Column::make("Mother name", "mother_name")
                ->sortable(),
            Column::make("Compound", "compound")
                ->sortable(),
            Column::make("Native place", "native_place")
                ->sortable(),
            Column::make("Passport", "passport")
                ->sortable(),
            Column::make("Nin", "nin")
                ->sortable(),
            Column::make("Purpose", "purpose")
                ->sortable(),
            Column::make("Created at", "created_at")
                ->sortable(),
            Column::make("Updated at", "updated_at")
                ->sortable(),
        ];
    }
}
