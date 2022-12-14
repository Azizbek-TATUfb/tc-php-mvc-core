<?php
namespace AzizbekIsmoilov\phpmvc\form;
use AzizbekIsmoilov\phpmvc\Model;

class Form
{
    public static function begin($action , $method)
    {
        echo sprintf('<form action="%s" method="%s">', $action, $method);
        return new Form();
    }
    public static function end():void
    {
        echo '</form';
    }

    public function field(Model $model, $attribute): InputField
    {
        return new InputField($model, $attribute);
    }
}