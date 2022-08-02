import UsersList from "./components/pages/UsersList";
import UsersPage from "./components/pages/UsersPage";
import AdminPage from "./components/pages/AdminPage";

const routes = [
    {path: '/users', component:UsersList},
    {path: '/users/:name', component:UsersPage},
    {path: '/admin', component:AdminPage},
];

export default  routes;
