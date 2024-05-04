/**
 * When extending the control panel, be sure to uncomment the necessary code for your build process:
 * https://statamic.dev/extending/control-panel
 */

/** Example Fieldtype
 */
import Marker from './components/fieldtypes/Marker.vue';

Statamic.booting(() => {
    // NOTE: We need to add `-fieldtype` to the end of our
    // component's name in order for the CP to recognize it.
    // Should be named [snake_case_handle]-fieldtype
    Statamic.$components.register('marker-fieldtype', Marker);
});




/*
Statamic.booting(() => {
    // Should be named [snake_case_handle]-fieldtype
    // Statamic.$components.register('toggle_password-fieldtype', Fieldtype);

    Statamic.$components.register('marker-fieldtype', MarkerFieldtype);
});

*/

