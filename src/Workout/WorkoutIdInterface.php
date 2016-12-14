<?php

declare(strict_types = 1);

namespace Workout;

interface WorkoutIdInterface
{
    /**
     * @return string
     */
    public function toString(): string;

    /**
     * @param WorkoutIdInterface $other
     * @return bool
     */
    public function equals(WorkoutIdInterface $other): bool;
}