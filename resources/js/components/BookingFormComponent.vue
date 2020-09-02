<template>
  <form @submit.prevent="createBooking">
    <div v-if="success" class="alert alert-success mt-3">
      Booking has been successfully created!
    </div>

    <div class="form-group row">
      <div class="col-md-12">
        <div class="input-group">
          <el-input placeholder="Your Name" v-model="full_name"></el-input>
        </div>
        <div v-if="errors && errors.full_name" class="text-danger">{{ errors.full_name[0] }}</div>
      </div>
    </div>

    <div class="form-group row">
      <div class="col-md-6">
        <div class="input-group">
          <el-date-picker v-model="reserved_date" type="date" placeholder="Pick a day">
          </el-date-picker>
        </div>
        <div v-if="errors && errors.reserved_date" class="text-danger">{{ errors.reserved_date[0] }}</div>
      </div>

      <div class="col-md-6">
        <div class="input-group">
          <el-time-select v-model="reserved_time" :picker-options="{start: '08:30', step: '00:15', end: '18:30'}"
                          placeholder="Select time">
          </el-time-select>
        </div>
        <div v-if="errors && errors.reserved_time" class="text-danger">{{ errors.reserved_time[0] }}</div>
      </div>
    </div>

    <div class="form-group row">
      <div class="col-md-12">
        <div class="input-group">
          <el-input type="textarea" :rows="4" placeholder="Your Message" v-model="message"></el-input>
        </div>
        <div v-if="errors && errors.message" class="text-danger">{{ errors.message[0] }}</div>
      </div>
    </div>

    <input type="submit" value="Submit">
  </form>
</template>

<script>
  import {Input} from 'element-ui'

  export default {
    name: "booking_form",
    data() {
      return {
        // csrf: document.head.querySelector('meta[name="csrf-token"]').content,
        full_name: '',
        reserved_date: '',
        reserved_time: '',
        message: '',
        errors: {},
        success: false,
      }
    },
    methods: {
      createBooking() {
        this.success = false;
        this.errors = {};
        axios.post('booking/store', {
          full_name: this.full_name,
          reserved_date: this.reserved_date,
          reserved_time: this.reserved_time,
          message: this.message,
        })
            .then((response) => {
              this.success = true;
              this.$root.$refs.booking_list.getBookings();
            })
            .catch(error => {
              if (error.response.status == 422) {
                this.errors = error.response.data.errors || {};
              }
            })
      }
    }
  }
</script>