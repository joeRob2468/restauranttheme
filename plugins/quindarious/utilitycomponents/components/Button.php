<?php namespace Quindarious\UtilityComponents\Components;

use Cms\Classes\Page;

class Button extends \Cms\Classes\ComponentBase
{

  public function componentDetails()
  {
    return [
      'name' => 'Button',
      'description' => 'Displays a link to an external URL or internal page.'
    ];
  }

  // define properties that the user can set in the plugin or snippet settings.
  public function defineProperties()
  {
    return [
      // this page property is dynamically populated using the getPageOptions() method below.
      'page' => [
        'title' => 'Page:',
        'description' => 'The page to link to.',
        'placeholder' => 'Select a page',
        'type' => 'dropdown',
        'default' => 'none'
      ],

      'url' => [
        'title' => 'URL',
        'description' => 'The URL to the page.',
        'type' => 'string',
        'placeholder' => 'http://www.example.com/'
      ],

      'alignment' => [
        'title' => 'Alignment',
        'description' => 'The horiontal alignment of the button',
        'default' => 'none',
        'type' => 'dropdown',
        'options' => ['none' => 'Inherit', 'text-left' => 'Left', 'text-center' => 'Center', 'text-right' => 'Right']
      ],

      'text' => [
        'title' => 'Text',
        'description' => 'The text to display inside the button.',
        'type' => 'string',
        'placeholder' => 'Example Link'
      ],

      'type' => [
        'title' => 'Type',
        'description' => 'The display type of the button',
        'default' => 'solid',
        'type' => 'dropdown',
        'options' => ['solid' => 'Solid', 'outline' => 'Outlined']
      ],

      'color' => [
        'title' => 'Color',
        'description' => 'The color of the button',
        'default' => 'normal',
        'type' => 'dropdown',
        'options' => ['normal' => 'Normal', 'light' => 'Light']
      ]
    ];
  }

  // populate the pages dropdown options with pages. 
  // also supports static pages plugin, if it's installed.
  public function getPageOptions()
  {
    // get default pages
    $pages = Page::sortBy('baseFileName')->lists('title', 'baseFileName');

    // also add static pages if the Pages plugin is installed.
    if(class_exists('\\Rainlab\\Pages\\Classes\\Page'))
    {
      $pages = $pages + \Rainlab\Pages\Classes\Page::sortBy('baseFileName')->
        lists('title', 'baseFileName');
    }

    // append default value.
    if(count($pages) != 0)
    {
      $pages = array('none' => 'Use URL Instead') + $pages;
    }
    
    return $pages;
  }
}