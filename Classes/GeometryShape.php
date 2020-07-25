<?php

/**
 * Base class for geometry objects.
 */

namespace Classes;

class GeometryShape {
    public function getName(){
        return get_class($this);
    }
}