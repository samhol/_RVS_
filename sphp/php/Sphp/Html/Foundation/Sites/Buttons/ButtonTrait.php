<?php

/**
 * ButtonTrait.php (UTF-8)
 * Copyright (c) 2014 Sami Holck <sami.holck@gmail.com>
 */

namespace Sphp\Html\Foundation\Sites\Buttons;

use Sphp\Html\Foundation\Sites\Core\ColourableTrait;
use Sphp\Html\Attributes\MultiValueAttribute as MultiValueAttribute;

/**
 * Trait implements {@link ButtonInterface} functionality
 *
 * @author  Sami Holck <sami.holck@gmail.com>
 * @since   2016-04-11
 * @link    http://foundation.zurb.com/ Foundation
 * @link    http://foundation.zurb.com/docs/components/buttons.html Foundation Buttons
 * @license http://www.gnu.org/licenses/gpl-3.0.html GPLv3
 * @filesource
 */
trait ButtonTrait {

  use ColourableTrait;

  /**
   * CSS classes corresponding to the size constants
   *
   * @var string[]
   */
  private $sizes = [
      'tiny', 'small', 'large', 'expand'
  ];

  /**
   * Returns the class attribute object
   * 
   * @return MultiValueAttribute the class attribute object
   */
  abstract public function cssClasses();

  /**
   * Sets the size of the button 
   * 
   * Predefined values of <var>$size</var> parameter:
   * 
   * * `'tiny'` for tiny buttons
   * * `'small'` for small buttons
   * * `'medium'` for "medium" (default) buttons
   * * `'large'` for large buttons
   * * `'extend'` for extended buttons (takes the full width of the container)
   * 
   * @param  string $size optional CSS class name defining button size. 
   *         `medium` value corresponds to no explicit size definition.
   * @return self for PHP Method Chaining
   * @link   http://foundation.zurb.com/docs/components/buttons.html#button-sizing Button Sizing
   */
  public function setSize($size = null) {
    $this->cssClasses()->remove($this->sizes);
    if ($size !== null) {
      $this->cssClasses()->add($size);
      if (!in_array($size, $this->sizes)) {
        $this->sizes[] = $size;
      }
    }
    return $this;
  }

  /**
   * Sets the button size to default
   * 
   *  Removes all specified size related CSS classes
   * 
   * @return self for PHP Method Chaining
   * @link   http://foundation.zurb.com/docs/components/buttons.html#button-sizing Button Sizing
   */
  public function setDefaultSize() {
    return $this->setSize('medium');
  }

}