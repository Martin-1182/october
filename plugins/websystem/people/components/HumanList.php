<?php

namespace Websystem\People\Components;

use Cms\Classes\ComponentBase;
use Illuminate\Database\Eloquent\Collection;
use Websystem\People\Models\Human;

class HumanList extends ComponentBase
{
    /**
     * @var	Collection	$humans
     */
    public Collection $humans;

    public function componentDetails()
    {
        return [
            'name'        => 'HumanList Component',
            'description' => 'No description provided yet...'
        ];
    }

    public function defineProperties()
    {
        return [];
    }

    public function onRun()
    {
        $this->humans = Human::select('id', 'name')->get();
    }
}
