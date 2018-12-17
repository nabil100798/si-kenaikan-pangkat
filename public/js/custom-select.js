
var CustomSelect = {
  template: "" +
    '<select class="col-sm-10 select2-A" ref="selectEl" style="width:500px" :name="name">' +
        '<option selected>Choose...</option>' +
        '<option v-for="item in options" :value="item.value">{{ item.text }}</option>' +
    '</select>' +
  "",

  props: ["options", "name"],

  methods: {
    handleSelect(value) {
      this.$emit("change", value)
    },
  },

  mounted() {
    var me = this;
    $(me.$refs.selectEl).change(function() {
        var value = $(this).val();
        me.handleSelect(value)
    });
  }
}
