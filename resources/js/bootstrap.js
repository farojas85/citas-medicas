window._ = require('lodash');

try {
    window.Popper = require('popper.js').default;
    window.$ = window.jQuery = require('jquery');

    require('bootstrap');
    require('admin-lte');
    require('admin-lte/plugins/select2/js/select2.full')
    require('admin-lte/plugins/select2/js/i18n/es')
} catch (e) {}

window.axios = require('axios');

window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';
