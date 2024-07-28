new Vue({
  el: '#app',
  data: {
    products: [
{ id: 13, name: '13.', price: 4110, quantity: 0 ,photo:'photos/shop/course/13.png'},
{ id: 14, name: '14.', price: 2466, quantity: 0 ,photo:'photos/shop/course/14.png'},
{ id: 15, name: '15.', price: 9800, quantity: 0 ,photo:'photos/shop/course/15.png'},
{ id: 16, name: '16.', price: 3780, quantity: 0 ,photo:'photos/shop/course/16.png'},
{ id: 17, name: '17.', price: 2520, quantity: 0 ,photo:'photos/shop/course/17.png'},
{ id: 18, name: '18.', price: 3780, quantity: 0 ,photo:'photos/shop/course/18.png'},
{ id: 19, name: '19.', price: 9500, quantity: 0 ,photo:'photos/shop/course/19.png'},
{ id: 20, name: '20.', price: 3780, quantity: 0 ,photo:'photos/shop/course/20.png'},
{ id: 21, name: '21.', price: 2100, quantity: 0 ,photo:'photos/shop/course/21.png'},
{ id: 22, name: '22.', price: 1400, quantity: 0,photo:'photos/shop/course/22.png' },
{ id: 23, name: '23.', price: 3150, quantity: 0 ,photo:'photos/shop/course/23.png'},
{ id: 24, name: '24.', price: 9500, quantity: 0 ,photo:'photos/shop/course/24.png'}

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