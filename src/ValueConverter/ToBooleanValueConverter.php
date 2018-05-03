<?php

namespace IntelligentSpark\ValueConverter;

class ToBooleanValueConverter {

    public function __invoke($input)
    {
        if (isset($input))
            return (bool)$input;
    }
}