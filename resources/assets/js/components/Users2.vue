<template>

<span>
  <textarea 
  name="textarea" 
  v-model="textarea">
  value= {{ textarea }}
  </textarea>
 
  <button @click="sendMessage" class='btn btn-info'>отправить</button>
</span>
  

</template>

<script>

import axios from 'axios';
import $ from 'jquery'
//alert($('meta[name="csrf-token"]').attr('content'));
    export default {
		props: [
		'post'
		],
    data () {
    return {
      textarea: 'I am initial text',
	  tok: 'hhh'
    }
  },
      methods: {
         sendMessage: function(e) {
		     //'X-CSRF-TOKEN': document.querySelector('#token').getAttribute('value')
			 //alert($('#commentform2').attr('action'))
			
		     e.preventDefault();
			 var token= $('input[name=_token]').val();
			 //var data = new FormData();
			//data.append('_token', token);
			//data.append('text', this.textarea);
			var data = $('#commentform2').serializeArray();
			 axios.post($('#commentform2').attr('action'),data,
			 {headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},datatype:'JSON',type:'POST'
			 })
			.then(response => {
				return response.data;
            })
           .then(user => {//console.log(user);return false;
		   console.log(user.name)
			 //alert(user)
			 
		  })
			 
			 
			 
			 
          
        }
      },
	   mounted() {

		   
		   
			 var token= $('input[name=_token]').val();
			 this.tok = token;
		 }
	  
	  
    }
</script>
