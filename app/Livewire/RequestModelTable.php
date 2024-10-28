<?php

namespace App\Livewire;

use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;
use Rappasoft\LaravelLivewireTables\Views\Columns\{DateColumn, LinkColumn};
use Rappasoft\LaravelLivewireTables\Views\Columns\ButtonGroupColumn;
use App\Models\RequestModel;
use Illuminate\Database\Eloquent\Builder;

class RequestModelTable extends DataTableComponent
{
    protected $model = RequestModel::class;

    public function configure(): void
    {
        $this->setPrimaryKey('id')
        ->setAdditionalSelects(['request_models.id as id']);
        $this->setDefaultReorderSort('order', 'desc');
    }

    public function columns(): array
    {
        //return dd(RequestModel::get());
        return [

            Column::make("Application type", "application_type")
                ->sortable(),
            Column::make('Name')
                ->label(function ($row, Column $column) {
                    return RequestModel::where('id', $row->id)
                        ->selectRaw("first_name || ' ' || COALESCE(middle_name, '') || ' ' || last_name as full_name")
                        ->first()->full_name;
                })->searchable(function(Builder $query, $searchTerm) {
                    // Perform the search by concatenating first_name, middle_name, and last_name using SQLite-compatible syntax
                    return $query->orWhereRaw(
                        "first_name || ' ' || COALESCE(middle_name, '') || ' ' || last_name LIKE ?",
                        ["%{$searchTerm}%"]
                    );
                }),

            Column::make("Lga", "lga")
                ->sortable(),
            Column::make("Payment Status", "payment_status")
                ->sortable(),
            Column::make("Status", "status")
                ->sortable(),
            DateColumn::make('Date', 'created_at')
                ->outputFormat('Y-m-d H:i:s'),
            ButtonGroupColumn::make('Actions')
                ->attributes(function($row) {
                    return [
                        'class' => 'space-x-2',
                    ];
                })->buttons([
                    LinkColumn::make('View') // make() has no effect in this case but needs to be set anyway
                        ->title(fn($row) => 'View')
                        ->location(fn($row) => route('application.request.view', $row->id))
                        ->attributes(function($row) {
                            return [
                                'class' => 'btn btn-primary text-blue-500 hover:no-underline',
                            ];
                        }),

                ]),

        ];
    }
}
