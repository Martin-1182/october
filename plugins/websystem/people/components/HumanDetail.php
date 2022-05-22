<?php namespace Websystem\People\Components;

use Cms\Classes\ComponentBase;
use Websystem\People\Models\Human;

class HumanDetail extends ComponentBase
{
    /**
     * @var		human	$human
     */
    public Human $human;
    
    public function componentDetails()
    {
        return [
            'name'        => 'HumanDetail Component',
            'description' => 'No description provided yet...'
        ];
    }

    public function defineProperties()
    {
        return [];
    }

    public function onRun()
    {
        //$this->human = Human::findOrFail($this->param('id')); /* Toto mi vracia ModelNotFoundException ak sa nenájde. */


        $human = Human::where('id', $this->param('id'))->first();

        if ($human) {
            $this->human = $human;
        } else {
            return $this->controller->run('404');
        }
    }
}
