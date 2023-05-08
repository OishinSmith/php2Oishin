<?php

namespace Core\Rooms;
use Core\Rooms\AppartmentBlock as AppartmentBlock;

class Appartment extends AppartmentBlock {
    protected function createRoom(): Room {
        return new Room(1, 2, "A cozy bedroom", 1000.00);
    }
}

