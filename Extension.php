<?php namespace Binco\DeliveryMan;

use System\Classes\BaseExtension;

class Extension extends BaseExtension
{
    public function registerDashboardWidgets()
    {
        return [
            'Binco\Demo\Components\deliveryman' => [
                'code' => 'deliveryman',
                'name' => 'lang:binco.demo::default.text_component_title',
                'description' => 'lang:binco.demo::default.text_component_desc',
            ],
        ];
    }
    
    public function registerNavigation()
{
    return [
        'messages' => [
            'priority' => 300,
            'title' => 'Deliveries',
            'href' => admin_url('orders'),
            'icon' => 'fa-box',
            'permission' => ['Admin.Orders'],
        ],
    ];
}
}
