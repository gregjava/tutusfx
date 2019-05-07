<script>
  Vue.component('todo-item', { props: ['todo'], template: '<div class="todo-item fakeimg trendingtrades"><p class="trendingtradeusername"> {{ todo.currency+";" }}</p><p>{{ "Current Profit: "+todo.profit+";"+"  Profit Margin: "+todo.margin+";" }}</p><p>{{ "Trade Volume: "+todo.volume+";"+"  Token Charges: "+todo.charges+";" }}</p><p v-html="todo.user"></p><hr/></div>' })

  var app = new Vue({
	el: '#app',
	data: {
	topTrades: [
	  { id: 0, currency: 'USD/AUD', profit: '+$309.82', margin: '+31.01', volume: '$10.00', charges: '$2.8', user: '<a href="@guest#609325cwq98">guest#609325cwq98;</a>' },
	  { id: 1, currency: 'USD/GBP', profit: '+$287.10', margin: '+42.35', volume: '$7.00', charges: '$9.35', user: '<a href="@guest#302q25%eo4j">guest#302q25%eo4j;</a>' },
	  { id: 2, currency: 'USD/CAD', profit: '+$684.37', margin: '+13.70', volume: '$50.00', charges: '$0.63', user: '<a href="@guest#48557310~u2">guest#48557310~u2;</a>' }
	]
	}
  })
</script>