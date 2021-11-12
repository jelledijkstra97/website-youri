require('./bootstrap');
import * as _main from './main';

var main = null;

// On load
window.addEventListener('load', function () {
    main = new _main();
    main.init();
});