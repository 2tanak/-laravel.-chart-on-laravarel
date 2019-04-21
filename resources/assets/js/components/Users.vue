<template>
<div class='container-fluid' style='border:1px solid red'>
<div class='row'>
<line-chart :chart-data="data" :height="200" :options="{responsive: true, maintainAspectRation: true}">
</line-chart>
</div>
  </div>

</template>

<script>

import axios from 'axios';
import $ from 'jquery';
import lineChart from '../lineChart.js';
//alert($('meta[name="csrf-token"]').attr('content'));
    export default {
	
    data:function () {
    return {
      data:[]
    }
  },
  components: {
	  lineChart:lineChart
  },
      methods: {
         sendMessage: function(e) {
		 
		   axios.get('/chats')
			.then(response => {
				this.data = response.data;
            })
         }
      },
	   mounted() {
			this.sendMessage();
		 }
	  
	  
    }
</script>
