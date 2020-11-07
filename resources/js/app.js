require('./bootstrap')

//IMPORTACIONES
import VueRouter from 'vue-router'
import VueAxios from 'vue-axios'
import Axios from 'axios'
import * as VeeValidate from 'vee-validate'
import es from 'vee-validate/dist/locale/es'
import Swal from 'sweetalert2';
import Form  from 'vform'
import VueProgressBar from 'vue-progressbar'
import routes from './routes'
import App from './components/App'
import {store} from './store'
import Auth from './auth'

window.Vue = require('vue')
window.swal = Swal
window.form = Form


//Usos
Vue.use(VueRouter)
Vue.use(VueAxios,Axios)
Vue.use(VeeValidate);
VeeValidate.localize("es",es)
Vue.use(VueProgressBar,{
    color: 'rgb(143,255,199)',
    failedColor: 'red',
    height: '30px'
})

Vue.prototype.$auth = new Auth(window.user);

//Pequeñas ALertas
const toast = swal.mixin({
    toast: true,
    position: 'top-end',
    showConfirmButton: false,
    timer: 3000
})
window.toast = toast


require('./componente')

const router = new VueRouter({
    mode: 'history',
    routes,
})

const app = new Vue({
    el: '#app',
    router,
    store,
    render: h => h(App)
});
