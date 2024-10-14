<?php

namespace App\Livewire\Proposals;

use App\Models\Project;
use App\Models\proposal;
use Illuminate\Container\Attributes\DB;
use Illuminate\Contracts\View\View;
use Livewire\Attributes\Rule;
use Livewire\Component;

class Create extends Component
{
    public Project $project;

    public bool $modal = false;

    #[Rule(['required', 'email'])]
    public string $email = '';

    #[Rule(['required', 'numeric','min:1'])]
    public int $hours = 0;

    public bool $agree = false;

    public function save(){

        if(!$this->agree){
            $this->addError('agree','Voçê precisa concordar com os termos de uso');
        }

        $this->validate();

      $proposal =   $this->project->proposals()->updateOrcreate
        (
            ['email' => $this->email],

            ['hours' => $this->hours]
        );

        $this->arrangePositions($proposal);

        $this->dispatch('proposal::created');

        $this->modal = false;
    }

    public function arrangPositions(proposal $proposal){

        $query = DB::select("select *, row_number() over (order by hours asc) as newPosition 
        from proposals
        ");
    }



    public function render()
    {
        return View('livewire.proposals.create');
    }
}
