<?php

namespace App\Livewire\Proposals;

use App\Models\Project;
use Livewire\Attributes\Rule;
use Livewire\Attributes\Validate;
use Livewire\Component;

class Create extends Component
{

    public bool $modal = true;

    #[Rule(['required','email'])]
    public string $email =' ';

    #[Rule(['required','numeric','gt:0'])]
    public int $hours = 0;

    public Project $project;

    public bool $agree = false;
    

    public function save()
    {
        if(! $this->agree){
            
            $this->addError('agree', 'You need to agree with the terms of use');
        }

        $this->project->proposals()
            ->updateOrCreate([
                ['email' => $this->email],
                ['hours' => $this->hours],
            ]);

        $this->validate();
    }

    public function render()
    {
        return view('livewire.proposals.create');
    }
}
