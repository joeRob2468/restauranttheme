<?php namespace Quindarious\UtilityComponents;

use System\Classes\PluginBase;

class Plugin extends PluginBase
{
  
  // register plugin components
  public function registerComponents() {
    return [
      'Quindarious\UtilityComponents\Components\Button' => 'button'
    ];
  }

  // register plugin snippets for use with static pages plugin.
  public function registerPageSnippets() {
    return [
      'Quindarious\UtilityComponents\Components\Button' => 'button'
    ];
  }

  public function registerMarkupTags()
  {
    return [
      'filters' => [
        'linkify' => [$this, 'linkifyInstagram'],
        'timestamptorelative' => [$this, 'timestampToRelativeTime']
      ]
    ];
  }

  public function registerSettings()
  {
  }

  public function linkifyInstagram($text)
  {
    //Convert urls to <a> links
    $text = preg_replace("/([\w]+\:\/\/[\w-?&;#~=\.\/\@]+[\w\/])/", "<a target=\"_blank\" href=\"$1\">$1</a>", $text);

    //Convert hashtags to instagram searches in <a> links
    $text = preg_replace("/#([A-Za-z0-9\/\.]*)/", "<a target=\"_new\" href=\"https://www.instagram.com/explore/tags/$1/\">#$1</a>", $text);

    //Convert attags to twitter profiles in <a> links
    $text = preg_replace("/@([A-Za-z0-9\/\.]*)/", "<a href=\"http://www.instagram.com/$1\">@$1</a>", $text);

    return $text;
  }

  public function timestampToRelativeTime($timestamp)
  {
    $etime = time() - $timestamp;

    if ($etime < 1) {
      return '0 seconds';
    }

    $a = array( 12 * 30 * 24 * 60 * 60  =>  'y',
      30 * 24 * 60 * 60       =>  'mo',
      7 * 24 * 60 * 60        =>  'w',
      24 * 60 * 60            =>  'd',
      60 * 60                 =>  'h',
      60                      =>  'm',
      1                       =>  's'
      );

    foreach ($a as $secs => $str) {
      $d = $etime / $secs;
      if ($d >= 1) {
        $r = round($d);
        return $r . '' . $str . ($r > 1 ? '' : '');
      }
    }
  }
}