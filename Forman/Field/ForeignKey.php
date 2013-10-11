<?php
/**
 * Forman
 *
 * @author Vasiliy Horbachenko <shadow.prince@ya.ru>
 * @copyright 2013 Vasiliy Horbachenko
 * @version 1.0
 * @package Form
 *
 */
namespace Forman\Field;

class ForeignKey extends Field {
    protected $link;

    public function __construct() {
        $args = func_get_args();

        $name = array_shift($args);
        $this->link = array_shift($args);

        call_user_func_array("parent::__construct", array_merge(array($name), $args));
    }

    public function getLink() {
        return $this->link;
    }
}