<template>
    <div class="content pt-5">
        <div class="container m-t-5">
            <h1>Users</h1>
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Name</th>
                  <th scope="col">Email</th>
                </tr>
              </thead>
              <tbody>
                <tr v-for="user in users"  :key="user.id">
                  <th scope="row">{{ user.id }}</th>
                  <td>{{ user.name }}</td>
                  <td>{{ user.email }}</td>
                </tr>
              </tbody>
            </table>
        </div>
    </div>
</template>

<script>
    export default {
        name: 'user-list',
        data() {
            return{
                baseUrl: location.protocol + '//' + location.host,
                users: []
            }
        },
        created() {
            var _this = this;
            axios
                .get(_this.baseUrl + '/api/users')
                .then(response => {
                    _this.users = response.data;
                });
        }
    }
</script>
