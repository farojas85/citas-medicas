<template>
    <div>
        <div class="login-logo">
            <router-link tag="a" to="/">
                <b>Citas</b> M&eacute;dicas
            </router-link>
        </div>
        <div class="card">
            <div class="card-body login-card-body">
                <p class="login-box-msg">Iniciar Sesi&oacute;n</p>
                <form id="form" @submit.prevent="login">
                    <div class="input-group mb-3">
                        <input type="email" class="form-control" placeholder="Correo Electrónico"
                            v-model="form.email"  :class="{ 'is-invalid': form.errors.has('email') }">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-envelope"></span>
                            </div>
                        </div>
                        <has-error :form="form" field="email"></has-error>
                    </div>
                    <div class="input-group mb-3">
                        <input type="password" class="form-control" placeholder="Contraseña"
                            v-model="form.password"  :class="{ 'is-invalid': form.errors.has('password') }">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-key"></span>
                            </div>
                        </div>
                        <has-error :form="form" field="password"></has-error>
                    </div>
                    <div class="row" v-if="form.errors.has('errorno')">
                        <span :class="{ 'text-danger': form.errors.has('errorno') }">Usuario y/o Contrase&ntilde;a Incorrectos</span>
                    </div>
                    <div class="row">
                        <div class="col-8">
                            <div class="icheck-primary">
                                <input type="checkbox" id="remember">
                                <label for="remember">
                                    Recordarme
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <button type="submit" class="btn btn-primary btn-block">Acceder</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</template>
<script>
export default {
    created() {
        this.$store.commit('SET_LAYOUT','login-layout')
    },
    data() {
        return {
            form:new form({
                email:'',
                password:''
            }),
        }
    },
    methods:{
        login() {
            this.form.post('api/login-user')
            .then(respuesta => {
                if(respuesta.data.token)
                {
                    localStorage.setItem('tokencm',respuesta.data.token)
                }
                if(respuesta.data.user){
                    window.user = respuesta.data.user
                    this.$router.push('/inicio')
                }
            })
            .catch(error => {
                if(error.response.status == 422)
                {
                    console.clear()
                } else {
                    //swal.fire('Error', `Ocurrió un Error: ${error.response.status}`,'error')
                }
            })
        }
    }
}
</script>
