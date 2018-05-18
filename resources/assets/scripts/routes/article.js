export default {
  init() {
    // JavaScript to be fired on all pages
    var modal = document.getElementById('myModal');
    var btn_3 = document.getElementById("get_started_3");

    btn_3.onclick = function() {
        modal.style.display = "block";
    }
  },
  finalize() {
    // JavaScript to be fired on all pages, after page specific JS is fired
  },
};
