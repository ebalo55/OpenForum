<?php

namespace App\Trait;

use ArchTech\Enums\From;
use ArchTech\Enums\InvokableCases;
use ArchTech\Enums\Metadata;
use ArchTech\Enums\Names;
use ArchTech\Enums\Options;
use ArchTech\Enums\Values;

trait SerializableEnum {
    use From, Metadata, Options, Values, Names, InvokableCases;
}
