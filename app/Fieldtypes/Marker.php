<?php

namespace App\Fieldtypes;

use Statamic\Fields\Fieldtype;

class Marker extends Fieldtype
{
    protected $icon = '<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6"><path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" /><path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1 1 15 0Z" /></svg>';

    public $categories = ['special'];


    /**
     * The blank/default value.
     *
     * @return array
     */
    public function defaultValue()
    {
        return null;
    }

    /**
     * Pre-process the data before it gets sent to the publish page.
     *
     * @param mixed $data
     * @return array|mixed
     */
    public function preProcess($data)
    {
        return $data;
    }

    /**
     * Process the data before it gets saved.
     *
     * @param mixed $data
     * @return array|mixed
     */
    public function process($data)
    {
        return $data;
    }

    protected function configFieldItems(): array
    {
        return [
            'mode' => [
                'display' => 'Mode',
                'instructions' => 'Choose which mode you want to use',
                'type' => 'select',
                'default' => 'regular',
                'options' => [
                    'regular' => __('Regular'),
                    'enhanced' => __('Enhanced'),
                ],
                'width' => 50
            ],
            'secret_agent_features' => [
                'display' => 'Enable super secret agent features',
                'instructions' => 'Can you even handle these features?',
                'type' => 'toggle',
                'default' => false,
                'width' => 50
            ],
        ];
    }

}
