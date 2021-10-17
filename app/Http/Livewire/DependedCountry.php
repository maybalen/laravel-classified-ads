<?php

namespace App\Http\Livewire;

use App\Models\City;
use App\Models\Country;
use App\Models\State;
use Livewire\Component;

class DependedCountry extends Component
{
    public $countries;
    public $states;
    public $cities;
    
    public $selectedCountry = null;
    public $selectedState = null;
    public $selectedCity = null;
    
    public function mount()
    {
        $this->countries = Country::all();
    }

    public function updatedSelectedCountry($country)
    {
        $this->states = State::where('country_id', $country)->get();
        $this->reset('selectedState', 'selectedCity', 'cities');
    }

    public function updatedSelectedState($state)
    {
        if(!is_null($this->selectedState)) {
            $this->cities = City::where('state_id', $state)->get();
        }
    }
    
    public function render()
    {
        return view('livewire.depended-country');
    }
}
