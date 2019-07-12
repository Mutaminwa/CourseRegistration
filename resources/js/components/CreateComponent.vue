// CreateCourse.vue

<template>
    <div>
        <h1>Create A Course</h1>
        <form @submit.prevent="addCourse">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Course Name:</label>
                        <input type="text" class="form-control" v-model="course.title">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label> Course Details:</label>
                        <textarea class="form-control" v-model="course.body" rows="5"></textarea>
                    </div>
                </div>
            </div><br />
            <div class="form-group">
                <button class="btn btn-primary">Create</button>
            </div>
        </form>
    </div>
</template>

<script>
    export default {
        data(){
            return {
                course:{}
            }
        },
        methods: {
            addCourse(){
                let uri = 'http://localhost:8000/api/course/create';
                this.axios.post(uri, this.course).then((response) => {
                    this.$router.push({name: 'courses'});
                });
            }
        }
    }
</script>