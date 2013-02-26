<?php
/**
 * ActiveRecord class file.
 *
 * @author likai<youyuge@gmail.com>
 * @link http://www.youyuge.com/
 */

/**
 * ActiveRecord based class
 *
 * @author likai<youyuge@gmail.com>
 * @version $Id$
 */
class ActiveRecord extends CActiveRecord
{
    public function unlessAttributes()
    {
        return array();
    }

    public function getIterator()
    {
        $attributes = $this->getIteratorAttributes();
        return new CMapIterator($attributes);
    }

    public function getIteratorAttributes()
    {
        return $this->getAttributes();
    }
}
