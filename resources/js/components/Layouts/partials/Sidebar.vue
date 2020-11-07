<template>
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <a href="/" class="brand-link">
        <img src="images/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
            style="opacity: .8">
        <span class="brand-text font-weight-light">AdminLTE 3</span>
        </a>
        <div class="sidebar">
            <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                <div class="image">
                    <img src="images/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
                </div>
                <div class="info">
                    <a href="#" class="d-block">Alexander Pierce</a>
                </div>
            </div>
            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                    <router-link tag="li" class="nav-item" to="inicio">
                        <a href="" class="nav-link">
                            <i class="nav-icon fas fa-tachometer-alt"></i>
                            <p>Inicio</p>
                        </a>
                    </router-link>
                    <!-- <li class="nav-item">
                        <a href="pages/widgets.html" class="nav-link">
                        </a>
                    </li> -->
                </ul>
            </nav>
        </div>
    </aside>
</template>
<script>
export default {

}
</script>
