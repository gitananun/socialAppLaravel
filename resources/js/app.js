import ProfileEdit from "./vue/ProfileEdit";
import ProfileDelete from "./vue/ProfileDelete";

window.Vue = require('vue');

Vue.component('profile-edit', ProfileEdit);
Vue.component('profile-delete', ProfileDelete);

new Vue({
    el: '#app',
});

