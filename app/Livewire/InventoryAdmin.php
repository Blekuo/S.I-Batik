<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Inventory;

class InventoryAdmin extends Component
{
    use \Livewire\WithPagination;
    use \Livewire\WithoutUrlPagination;
    public $visible, $search, $countTotal;

    public function mount()
    {
        $this->visible = false;
        $this->countTotal = Inventory::count();
    }

    public function See()
    {
        $this->visible = true;
    }
    public function unSee()
    {
        $this->visible = false;
    }

    public function render()
    {
        return view('livewire.inventory-admin', [
            'data' => Inventory::latest()->where('name', 'LIKE', '%'.$this->search.'%')->paginate(10)
        ]);
    }
}
