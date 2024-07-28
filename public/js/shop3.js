new Vue({
  el: '#app',
  data: {
    products: [
{ id: 25, name: '25.', price: 13000, quantity: 0 ,photo:'photos/shop/course/25.png'},
{ id: 26, name: '26.', price: 6000, quantity: 0 ,photo:'photos/shop/course/26.png'},
{ id: 27, name: '27.', price: 11000, quantity: 0 ,photo:'photos/shop/course/27.png'},
{ id: 28, name: '28.', price: 6000, quantity: 0 ,photo:'photos/shop/course/28.png'},
{ id: 29, name: '29.', price: 2520, quantity: 0 ,photo:'photos/shop/course/29.png'},
{ id: 30, name: '30.', price: 5600, quantity: 0 ,photo:'photos/shop/course/30.png'}
		
    ],
    cart: [],
    showCart: false,
  },
  methods: {
    addToCart(product) {
      const item = this.cart.find(item => item.id === product.id);
      if (item) {
        item.quantity++;
      } else {
        this.cart.push({...product, quantity: 1 });
      }
    },
    removeFromCart(item) {
      const index = this.cart.indexOf(item);
      this.cart.splice(index, 1);
    },
    increaseQuantity(item) {
      item.quantity++;
    },
    decreaseQuantity(item) {
      if (item.quantity > 1) {
        item.quantity--;
      }
    }
  },
  computed: {
    total() {
      return this.cart.reduce((acc, item) => acc + (item.price * item.quantity), 0);
    }
  }
});
// JavaScript Document