import Home from './components/Homes.vue';
import UserList from './components/User/List.vue';
import CreateUser from './components/User/Create.vue';

export const routes = [
	{
		name: 'home',
		path: '/home',
		componet: Home
	},
	{
		name: 'user-list',
		path: '/user',
		component: UserList
	},
	{
		name: 'create-user',
		path: '/user/create',
		component: CreateUser
	},
];