window.Vue = require('vue');
import ProfileCard from './vue/ProfileCard';

Vue.component('profile-card', ProfileCard)

new Vue({
    el: '#app',
});

