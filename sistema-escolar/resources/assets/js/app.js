new Vue({
	el: '#main',
	data: {
		people: []
	},
	name: '',
	methods: {
		addName: function(){
			this.people.push(this.name);
			this.name = '';
		}
	}
});