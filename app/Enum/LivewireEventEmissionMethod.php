<?php

namespace App\Enum;

use App\Trait\SerializableEnum;

/**
 * @method static string EVENT()
 * @method static string PARENT_ONLY_EVENT()
 * @method static string SELF_EVENT()
 * @method static string TO_COMPONENT_EVENT()
 * @method static string BROWSER_EVENT()
 */
enum LivewireEventEmissionMethod: string {
    use SerializableEnum;

    case EVENT              = "emit";
    case PARENT_ONLY_EVENT  = "emitUp";
    case SELF_EVENT         = "emitSelf";
    case TO_COMPONENT_EVENT = "emitTo";
    case BROWSER_EVENT      = "dispatchBrowserEvent";
}
