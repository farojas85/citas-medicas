import Landing from './components/views/Landing'
import Login from './components/views/Login'
import Principal from './components/views/Principal'

let routes = [
    { path:'/', name:'Landing',component:Landing},
    { path:'/login', name:'Login',component:Login},
    { path:'/inicio',name:'Inicio',component:Principal}
]

export default routes
