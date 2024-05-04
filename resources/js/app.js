import './bootstrap';


/**
 * When extending the control panel, be sure to uncomment the necessary code for your build process:
 * https://statamic.dev/extending/control-panel
 */

/** Example Fieldtype
 */


import Fieldtype from './components/fieldtypes/Marker.vue';

// Should be named [snake_case_handle]-fieldtype
Statamic.$components.register('marker-fieldtype', Fieldtype);


/*
Statamic.booting(() => {
    // Should be named [snake_case_handle]-fieldtype
    // Statamic.$components.register('toggle_password-fieldtype', Fieldtype);

    Statamic.$components.register('marker-fieldtype', MarkerFieldtype);
});

*/

console.log('🍕');
