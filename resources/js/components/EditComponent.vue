// EditComponent.vue

<template>
    <div>
        <h1>Edit Course</h1>
        <form @submit.prevent="updateCourse">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Course Title:</label>
                        <input type="text" class="form-control" v-model="course.title">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Course Body:</label>
                        <textarea class="form-control" v-model="course.body" rows="5"></textarea>
                    </div>
                </div>
            </div><br />
            <div class="form-group">
                <button class="btn btn-primary">Update</button>
            </div>
        </form>
    </div>
</template>

<script>
    export default {

        data() {
            return {
                course: {}
            }
        },
        created() {
            let uri = `http://localhost:8000/api/course/edit/${this.$route.params.id}`;
            this.axios.get(uri).then((response) => {
                this.course = response.data;
            });
        },
        methods: {
            updateCourse() {
                let uri = `http://localhost:8000/api/course/update/${this.$route.params.id}`;
                this.axios.post(uri, this.course).then((response) => {
                    this.$router.push({name: 'courses'});
                });
            }
        }
    }
</script>