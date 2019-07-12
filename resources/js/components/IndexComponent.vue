// IndexComponent.vue

<template>
    <div>
        <h1>Courses</h1>
        <div class="row">
            <div class="col-md-10"></div>
            <div class="col-md-2">
                <router-link :to="{ name: 'create' }" class="md-raised md-primary">Create Course</router-link>
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
                <td><md-button class="md-raised md-primary" :to="{name: 'edit', params: { id: course.id }}"><router-link >Edit</router-link>Edit</md-button></td>
                <td><button class="md-raised md-accent" @click.prevent="deleteCourse(course.id)">Delete</button></td>
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