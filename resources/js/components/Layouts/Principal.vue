<template>
    <div class="hold-transition sidebar-mini layout-fixed">
        <div class="wrapper">
            <v-navbar></v-navbar>
            <v-sidebar></v-sidebar>
            <div class="content-wrapper">
                <v-content-header></v-content-header>
                <section class="content">
                    <div class="container-fluid">
                        <router-view></router-view>
                    </div>
                </section>
            </div>
        </div>
        <v-footer></v-footer>
        <v-aside></v-aside>
    </div>
</template>
<script>
    import Navbar from '../Layouts/partials/Navbar'
    import Sidebar from '../Layouts/partials/Sidebar'
    import ContentHeader from '../Layouts/partials/ContentHeader'
    import Footer from '../Layouts/partials/Footer'
    import Aside from '../Layouts/partials/Aside'

    export default {
        components:{
            'v-navbar':Navbar,
            'v-sidebar':Sidebar,
            'v-content-header':ContentHeader,
            'v-footer':Footer,
            'v-aside': Aside
        },
        data() {
            return{

            }
        },
        methods:{
            logout() {
                let config = {
                    headers: {
                    'Authorization': 'Bearer ' + localStorage.getItem('tokencm')
                    }
                }
                let body={}
                axios.get('api/logout-user',config).then(respuesta=> {
                    localStorage.removeItem('tokencm')
                    this.$router.push('/')
                })
            }
        }
    }
</script>
