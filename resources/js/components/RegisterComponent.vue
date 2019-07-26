// CreatePost.vue

<template>
    <div>
        <h1>Create A Post</h1>
        <form @submit.prevent="addPost">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label>First Name:</label>
                        <input type="text" class="form-control" v-model="users.FirstName">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Last Name:</label>
                        <input type="text" class="form-control" v-model="users.LastName">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Email:</label>
                        <input type="text" class="form-control" v-model="users.Email">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Password:</label>
                        <input type="text" class="form-control" v-model="users.Password">
                    </div>
                </div>
            </div><br />
            <div class="form-group">
                <button class="btn btn-primary">Sign Up</button>
            </div>
        </form>
    </div>
</template>

<script>
    export default {
        data(){
            return {
                post:{}
            }
        },
        methods: {
            addPost(){
                console.log(this.post);
            }
        }
    }
</script>