require('./bootstrap');

import Vue from 'vue'


// import PeopleEdit from './components/people/Edit.vue'

import PeopleIndex from './components/people/Index.vue'

new Vue({
    el: '#app',
	components: {
		// PeopleEdit,
		PeopleIndex,
	}
});
