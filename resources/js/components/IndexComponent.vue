// IndexComponent.vue

<template>
    <div>
        <h1>Courses</h1>
        <div class="row">
            <div class="col-md-10"></div>
            <div class="col-md-2">
                <router-link :to="{ name: 'create' }" class="btn btn-primary">Create Course</router-link>
            </div>
        </div><br />

        <table class="table table-hover">
            <thead>
            <tr>
                <th>ID</th>
                <th>Course Name</th>
                <th>Course Description</th>
                <th>Actions</th>
            </tr>
            </thead>
            <tbody>
            <tr v-for="course in courses" :key="course.id">
                <td>{{ course.id }}</td>
                <td>{{ course.title }}</td>
                <td>{{ course.body }}</td>
                <td><router-link :to="{name: 'edit', params: { id: course.id }}" class="btn btn-primary">Edit</router-link></td>
                <td><button class="btn btn-danger" @click.prevent="deleteCourse(course.id)">Delete</button></td>
            </tr>
            </tbody>
        </table>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                courses: []
            }
        },
        created() {
            let uri = 'http://localhost:8000/api/courses';
            this.axios.get(uri).then(response => {
                this.courses = response.data.data;
            });
        },
        methods: {
            deleteCourse(id)
            {
                let uri = `http://localhost:8000/api/course/delete/${id}`;
                this.axios.delete(uri).then(response => {
                    this.courses.splice(this.courses.indexOf(id), 1);
                });
            }
        }
    }
</script>