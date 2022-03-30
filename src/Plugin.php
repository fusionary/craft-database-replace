<?php
namespace fusionary\craftdatabasereplace;

use craft\events\RegisterComponentTypesEvent;
use craft\services\Utilities;
use yii\base\Event;

class Plugin extends \craft\base\Plugin
{
    public $packageName = 'Fusionary Database Replace';

    public function init()
    {
        parent::init();

        Event::on(
            Utilities::class,
            Utilities::EVENT_REGISTER_UTILITY_TYPES,
            function(RegisterComponentTypesEvent $event) {
                $event->types[] = DatabaseReplace::class;
            }
        );
    }
}
