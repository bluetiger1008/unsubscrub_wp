export default {
  init() {
    // JavaScript to be fired on the home page
    // Get the modal
    var modal = document.getElementById('myModal');
    
    var btn_1 = document.getElementById("get_started_1");
    var btn_2 = document.getElementById("get_started_2");

    // When the user clicks the button, open the modal 
    btn_1.onclick = function() {
        modal.style.display = "block";
    }

    btn_2.onclick = function() {
        modal.style.display = "block";
    }
  },
  finalize() {
    // JavaScript to be fired on the home page, after the init JS
  },
};
