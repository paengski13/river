<template>
  <div class="row">
    <div class="col-lg-6 col-md-6" v-for='user in users'>
      <span>{{ user.full_name }}</span><br/>
      <span>{{ user.formatted_reserved_date }}</span><br/>
      <span>{{ user.formatted_reserved_time }}</span><br/>
      <p class="mt-5">{{ user.message }}</p>
    </div>
  </div>
</template>

<script>
  export default {
    name: "booking_list",
    data() {
      return {
        users: {},
      }
    },
    methods: {
      getBookings() {
        axios.get('booking')
            .then((response) => {
              console.log(response.data)
              this.users = response.data;
            })
            .catch(error => {
              console.log(error.message)
            });
      }
    },
    created() {
      this.getBookings();
      this.$root.$refs.booking_list = this;
    }
  }
</script>