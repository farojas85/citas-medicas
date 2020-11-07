import {HasError, AlertError} from 'vform'

Vue.component(HasError.name, HasError)
Vue.component(AlertError.name, AlertError)

Vue.component('example-component', require('./components/ExampleComponent.vue').default);
