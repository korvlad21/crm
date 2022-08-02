import UsersList from "./components/pages/UsersList";
import AdminPage from "./components/pages/AdminPage";

const routes = [
    {path: '/users', component:UsersList},
    {path: '/admin', component:AdminPage},
];

export default  routes;
