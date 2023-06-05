<?php

namespace App\Http\Livewire\Student;

use Livewire\Component;

class Student extends Component
{

    public $name, $description;



    public function updated($fields)
    {
        $this->validateOnly($fields);
    }

    protected function rules()
    {
        return [
            'name' => 'required|min:6',
            'description' => 'required|min:5',
        ];
    }

    public function saveData()
    {
        $validatedData = $this->validate();
        // dd($dataValidation);
        Student::create($validatedData);
        session()->flash('message', "New student added successful");
        $this->resetInput();
    }

    public function resetInput()
    {
        $this->name = '';
        $this->description = '';
    }


    public function render()
    {
        return view('livewire.student.student');
    }
}
