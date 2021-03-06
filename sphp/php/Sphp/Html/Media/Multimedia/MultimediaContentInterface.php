<?php

/**
 * MultimediaContentInterface.php (UTF-8)
 * Copyright (c) 2014 Sami Holck <sami.holck@gmail.com>
 */

namespace Sphp\Html\Media\Multimedia;

/**
 * Defines media resources for {@link MediaTagInterface} components
 *
 * @author  Sami Holck <sami.holck@gmail.com>
 * @since   2014-11-14
 * @license http://www.gnu.org/licenses/gpl-3.0.html GPLv3
 * @filesource
 */
interface MultimediaContentInterface {

  /**
   * Sets the path to the media source
   *
   * @param  string|URL $src the path to the media source
   * @return self for a fluent interface
   */
  public function setSrc($src);

  /**
   * Returns the URL of the media file
   * 
   * @return string the URL of the media file
   */
  public function getSrc();
}
