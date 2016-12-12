<?php

/**
 * LazyLoaderInterface.php (UTF-8)
 * Copyright (c) 2015 Sami Holck <sami.holck@gmail.com>
 */

namespace Sphp\Html\Media;

use Sphp\Html\ContentInterface;

/**
 * Interface models lazy loading of images, videos and other resources
 * 
 * SPHP framework uses Lazy Load XT jQuery plugin. It is Mobile-oriented, fast 
 * and extensible jQuery plugin with build-in support of jQueryMobile framework.

 * @author  Sami Holck <sami.holck@gmail.com>
 * @since   2015-06-15
 * @link    https://github.com/ressio/lazy-load-xt Lazy Load XT jQuery plugin
 * @license http://www.gnu.org/licenses/gpl-3.0.html GPLv3
 * @filesource
 */
interface LazyLoaderInterface extends ContentInterface {

  /**
   * Sets or unsets the media source loading as lazy
   * 
   * **Important:** if the `$lazy = true` the actual media source path is stored into the  
   * `data-src` attribute instead of the `src` attribute
   * 
   * @param  boolean $lazy true if the loading is lazy, false otherwise
   * @return self for PHP Method Chaining
   */
  public function setLazy($lazy = true);

  /**
   * Checks whether the media source loading is lazy
   * 
   * @return boolean true if the loading is lazy, false otherwisev
   */
  public function isLazy();
}