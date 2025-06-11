<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\RequestModel;
use Illuminate\Database\Eloquent\Builder;

class RequestModelTable extends Component
{
    use WithPagination;

    public $search = '';

    public function render()
    {
        $requests = RequestModel::with(['user']) // Assuming a relationship with User model
            ->where(function (Builder $query) {
                if ($this->search) {
                    $query->where('application_type', 'like', "%{$this->search}%")
                        ->orWhereHas('user', function ($q) {
                            $q->whereRaw("first_name || ' ' || COALESCE(middle_name, '') || ' ' || last_name LIKE ?", ["%{$this->search}%"]);
                        });
                }
            })
            ->orderBy('created_at', 'desc')
            ->paginate(10);

        return view('livewire.request-model-table', ['requests' => $requests]);
    }
}
