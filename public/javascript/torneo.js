/**
 * 
 */

window.addEventListener('load', function(event) {
  torneo.init();
});

var torneo = (function() {
  var showParejaBinding;
  
  return {
    init: function() {
      this.showParejaBinding = this.showPareja.bind(this);
      var parejas = document.querySelectorAll('.pareja');
      for(var i=0, j=parejas.length; i < j; i++) {
        parejas[i].addEventListener('click', this.showParejaBinding);
      }
      
    },
    showPareja: function(event) {
      var id = event.currentTarget.getAttribute("data-id");
      if(id) {
        window.location.href = "pareja?id=" + id;
      }     
    }
  }
})();