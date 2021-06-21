<template>
	<form @submit.prevent="save()" method="POST" class="form">
		<div class="form-group">
			<label>Full Name</label>
			<input type="text" class="form-control" v-model="person.full_name" required>
		</div>
		<div class="form-group">
			<label>Phone</label>
			<input type="text" class="form-control" v-model="person.phone" required>
		</div>
		<div class="form-group">
			<label>Email</label>
			<input type="text" class="form-control" v-model="person.email" required>
		</div>
		<div class="form-group">
			<label>Address</label>
			<input type="text" class="form-control" v-model="person.address" required>
		</div>

		<div class="text-center">
			<button type="submit" class="btn btn-primary">Update</button>
		</div>
	</form>
</template>

<script>
export default {
	data(){
		return{
			person: {
				full_name: '',
				phone: '',
				email: '',
				address: ''
			}
		}
	},
	methods:{
		async save(){
			await axios.post(`/People/store`, this.person).then(res => {
				if(res.data.saved){
					this.person = {
						full_name: '',
						phone: '',
						email: '',
						address: ''
					}
					// this.$parent.all_people.push(res.data.person)
					alert('Persona actualizada!')
				}
			})
		}
	}
}
</script>
