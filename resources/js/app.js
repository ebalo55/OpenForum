import focus from "@alpinejs/focus"
import AlpineFloatingUI from "@awcodes/alpine-floating-ui"

import Alpine from "alpinejs"
import FormsAlpinePlugin from "../../vendor/filament/forms/dist/module.esm"
import NotificationsAlpinePlugin from "../../vendor/filament/notifications/dist/module.esm"
import "./bootstrap"

Alpine.plugin(FormsAlpinePlugin)
Alpine.plugin(AlpineFloatingUI)
Alpine.plugin(NotificationsAlpinePlugin)
Alpine.plugin(focus)

window.Alpine = Alpine
Alpine.start()
