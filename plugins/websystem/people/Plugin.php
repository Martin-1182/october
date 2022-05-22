<?php namespace Websystem\People;

use Backend;
use System\Classes\PluginBase;

/**
 * People Plugin Information File
 */
class Plugin extends PluginBase
{
    /**
     * Returns information about this plugin.
     *
     * @return array
     */
    public function pluginDetails()
    {
        return [
            'name'        => 'People',
            'description' => 'No description provided yet...',
            'author'      => 'Websystem',
            'icon'        => 'icon-leaf'
        ];
    }

    /**
     * Register method, called when the plugin is first registered.
     *
     * @return void
     */
    public function register()
    {

    }

    /**
     * Boot method, called right before the request route.
     *
     * @return array
     */
    public function boot()
    {

    }

    /**
     * Registers any front-end components implemented in this plugin.
     *
     * @return array
     */
    public function registerComponents()
    {
        //return []; // Remove this line to activate

        return [
            'Websystem\People\Components\HumanList' => 'humanList',
            'Websystem\People\Components\HumanDetail' => 'humanDetail'
        ];
    }

    /**
     * Registers any back-end permissions used by this plugin.
     *
     * @return array
     */
    public function registerPermissions()
    {
        return []; // Remove this line to activate

        return [
            'websystem.people.some_permission' => [
                'tab' => 'People',
                'label' => 'Some permission'
            ],
        ];
    }

    /**
     * Registers back-end navigation items for this plugin.
     *
     * @return array
     */
    public function registerNavigation()
    {
        //return []; // Remove this line to activate

        return [
            'people' => [
                'label'       => 'People',
                'url'         => Backend::url('websystem/people/humans'),
                'icon'        => 'icon-users',
                'permissions' => ['websystem.people.*'],
                'order'       => 500,
            ],
        ];
    }
}
