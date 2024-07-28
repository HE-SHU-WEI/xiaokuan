new Vue({
  el: '#app',
  data: {
    products: [
{ id: 1, name: '1.', price: 1400, quantity: 0 ,photo:'photos/shop/course/1.png'},
{ id: 2, name: '2.', price: 0, quantity: 0 ,photo:'photos/shop/course/2.png'},
{ id: 3, name: '3.', price: 0, quantity: 0 ,photo:'photos/shop/course/3.png'},
{ id: 4, name: '4.', price: 5200, quantity: 0 ,photo:'photos/shop/course/4.png'},
{ id: 5, name: '5.', price: 3000, quantity: 0 ,photo:'photos/shop/course/5.png'},
{ id: 6, name: '6.', price: 2400, quantity: 0 ,photo:'photos/shop/course/6.png'},
{ id: 7, name: '7.', price: 2400, quantity: 0 ,photo:'photos/shop/course/7.png'},
{ id: 8, name: '8.', price: 3600, quantity: 0 ,photo:'photos/shop/course/8.png'},
{ id: 9, name: '9.', price: 3600, quantity: 0 ,photo:'photos/shop/course/9.png'},
{ id: 10, name: '10.', price: 11000, quantity: 0,photo:'photos/shop/course/10.png' },
{ id: 11, name: '11.', price: 2880, quantity: 0 ,photo:'photos/shop/course/11.png'},
{ id: 12, name: '12.', price: 2055, quantity: 0 ,photo:'photos/shop/course/12.png'}

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
