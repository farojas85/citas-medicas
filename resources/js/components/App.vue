<template>
    <component :is="layout"></component>
</template>
<script>
    import LandingLayout from '../components/Layouts/Landing'
    import LoginLayout from '../components/Layouts/Login'
    import PrincipalLayout from '../components/Layouts/Principal'
    import {mapState} from 'vuex'

    export default {
        components: {LandingLayout,LoginLayout,PrincipalLayout},
        computed:mapState(['layout'])
    }
</script>
