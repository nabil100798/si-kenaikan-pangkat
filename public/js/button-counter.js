
var ButtonCounter = {
  template: "<button @click='tambahCounter($event)'>Counter {{ counter }}</button>",

  data() {
    return {
      counter: 0
    }
  },

  methods: {
    tambahCounter(e) {
      e.preventDefault()
      this.counter = this.counter + 1
    }
  }
}
