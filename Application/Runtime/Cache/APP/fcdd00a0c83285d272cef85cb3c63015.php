<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title><?php echo ($title); ?></title>
<script src="http://code.jquery.com/jquery-2.1.1.min.js"></script>
<script src="https://cdn.bootcss.com/vue/2.2.2/vue.min.js"></script>
<!-- <script src="test.html"></script> -->
</head>

<body>
  <div id="app">
    <!-- <btn></btn> -->
    <!-- <ipt v-model="searchText"></ipt> -->
    <hello></hello>
  </div>
  <div id="main">
    <ca></ca>
    <!-- <btn></btn> -->
  </div>
  <!-- <div id="example">
    <p>Original message: "{{ message }}"</p>
    <p>Computed reversed message: "{{ reversedMessage }}"</p>
  </div> -->
</body>
<script type="text/x-template" id="btn-template">
  <button type="text" @click="clickme">点击</button>
</script>
<script type="text/x-template" id="foreignerName">
  <ul>
    <li>
      <button @click="count++">You clicked me {{count}} times.</button>
      <btn></btn>
    </li>
    <li>
      <div v-if="Math.random() > 0.5">Now you see me</div>
      <div v-else>Now you don't</div>
    </li>
  </ul>
</script>
<script>
Vue.component('btn', {
  template: "#btn-template",
  methods: {
    clickme: function(e) {
      alert('Hello!');
    }
  }
});

// Vue.component('ipt', {
// 	props:['value'],
//   template: `<input :value="value" @input="$emit('input',#event.target.value)" >`
// });

Vue.component('hello', {
  template: "#foreignerName",
  data: function() {
    return {
      count: 5
    }
  },
  components: {
    'btn': {
      template: "#btn-template",
      methods: {
        clickme: function(e) {
          alert('My!');
        }
      },
    }
  }
});

new Vue({
  el: "#app",
});

new Vue({
	el:'#example',
	data:{
		message:'msg'
	},
	computed:{
		reversedMessage: function(){
			return this.message.split('').reverse().join('')
		}
	}
});

var ca = {
	name:"ca",
  template: "#foreignerName",
  data: function() {
    return {
      count: 0
    }
  },
  components: { 'btn': { props:["count"],template: "#btn-template", methods: { clickme: function() { alert(count); } } } }
}
var btn = {
  template: "#btn-template",
  methods: {
    clickme: function() {
      alert('world');
    }
  }
}

new Vue({
	name:"main",
  el: '#main',
  components: { 'ca': ca, 'btn': btn },
  // components:{ btn, Vue2 }
  beforeCreate: function() {
    console.log(0);
  },
  created: function() {
    console.log(1);
  },
  beforeMount: function() {
    console.log(2);
  },
  mounted: function() {
    console.log(3);
  },
  beforeDestory: function() {
    console.log(4);
  },
  destory: function() {
    console.log(5);
  }
});
</script>
</html>