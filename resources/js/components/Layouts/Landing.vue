<template>
    <div>
        <nav class="navbar navbar-light bg-light static-top">
            <div class="container">
                <a class="navbar-brand" href="/">Citas M&eacute;dicas</a>
                <router-link tag="a" to="/login" class="btn btn-primary">
                    Iniciar Sesi&oacute;n
                </router-link>
            </div>
        </nav>
        <router-view></router-view>
    </div>
</template>
<script>
export default {

}
</script>
