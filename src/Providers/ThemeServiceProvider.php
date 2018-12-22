<?php

namespace Theme\Providers;

use Plenty\Plugin\ServiceProvider;

class ThemeServiceProvider extends ServiceProvider
{
  $eventDispatcher->listen('IO.Component.Import', function (ComponentContainer $container)
   	 {
    if ($container->getOriginComponentTemplate()=='Ceres::Item.Components.SingleItem')
   			 {
    $container->setNewComponentTemplate('Theme::Item.SingleItem');
   			 }
   }, self::PRIORITY);
  /**
  * Register the service provider.
  */
  public function register()
  {

  }
}
