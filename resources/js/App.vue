<template>
    <div class="page-container">
        <md-app md-mode="reveal">
            <md-app-toolbar class="md-primary">
                <md-button class="md-icon-button" @click="menuVisible = !menuVisible">
                    <md-icon>menu</md-icon>
                </md-button>
                <span class="md-title">Course Registration</span>
            </md-app-toolbar>

            <md-app-drawer :md-active.sync="menuVisible">
                <md-toolbar class="md-transparent" md-elevation="0">Navigation</md-toolbar>

                <md-list>
                    <md-list-item to="/" exact>
                        <md-icon>home</md-icon>
                        <router-link >Home</router-link>
                    </md-list-item>

                    <md-list-item to="/create" exact>
                        <md-icon>add</md-icon>
                        <router-link >Create Course</router-link>
                    </md-list-item>

                    <md-list-item to="/courses" exact>
                        <md-icon>list</md-icon>
                        <router-link >Courses</router-link>
                    </md-list-item>
                </md-list>
            </md-app-drawer>

            <md-app-content>
                <router-view></router-view>
            </md-app-content>
        </md-app>
    </div>
</template>

<style lang="scss" scoped>
    .md-app {
        max-height: 900px;
        border: 0px solid rgba(#000, .12);
    }

    // Demo purposes only
    .md-drawer {
        width: 230px;
        max-width: calc(100vw - 125px);
    }
    .md-app{}
</style>

<script>
    export default {
        name: 'Reveal',
        data: () => ({
            menuVisible: false
        })
    }
</script>


