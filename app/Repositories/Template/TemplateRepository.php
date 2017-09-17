<?php

namespace App\Repositories\Template;


use Illuminate\Support\Collection;

class TemplateRepository
{
    public function all()
    {
        $array = json_decode(file_get_contents(__DIR__ . '/templates.json', true));
        return new Collection($array);
    }

    public function findByName($name)
    {
        $array = json_decode(file_get_contents(__DIR__ . '/templates.json', true));
        $templates = new Collection($array);
        foreach($templates as $template){
            if($template->name == $name)
            {
                return $template;
            }
        }
    }
}