<?php

namespace Core\Rooms;

interface AppartmentBlockInterface {
    public function calculateTotalPrice(): float;
    public function getAppartmentCapacity(): int;
}

