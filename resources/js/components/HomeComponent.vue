// HomeComponent.vue

<template>
    <div class="row justify-content-center">
        <md-card md-with-hover>
            <md-ripple>
                <md-card-header>
                    <div class="md-title">Creative Writing</div>
                    <div class="md-subhead">Professor Williams</div>
                </md-card-header>

                <md-card-content>
                    <h5>Details</h5>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce convallis pellentesque metus id lacinia. Nunc dapibus pulvinar auctor. </p>
                    <h5>Time</h5>
                    <p>9am-11am </p>
                </md-card-content>

                <md-card-actions>
                    <md-button to="/courses">See Other Courses</md-button>

                </md-card-actions>
            </md-ripple>
        </md-card>
        <md-card md-with-hover>
            <md-ripple>
                <md-card-header>
                    <div class="md-title">English Literature</div>
                    <div class="md-subhead">Professor Williams</div>
                </md-card-header>

                <md-card-content>
                    <h5>Details</h5>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce convallis pellentesque metus id lacinia. Nunc dapibus pulvinar auctor. </p>
                    <h5>Time</h5>
                    <p>12pm-2pm </p>
                </md-card-content>

                <md-card-actions>
                    <md-button to="/courses">See Other Courses</md-button>
                </md-card-actions>
            </md-ripple>
        </md-card>

    </div>
</template>
<style lang="scss" scoped>
    .md-card {
        width: 320px;
        margin: 4px;
        display: inline-block;
        vertical-align: top;
    }
</style>
<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>