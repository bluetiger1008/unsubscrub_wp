export default {
  init() {
    // JavaScript to be fired on the home page
    // Get the modal
    var modal = document.getElementById('myModal');

    // Get the button that opens the modal
    var btn_1 = document.getElementById("get_started_1");
    var btn_2 = document.getElementById("get_started_2");
    var btn_continue = document.getElementById("btn_continue");

    // Get the <span> element that closes the modal
    var span = document.getElementsByClassName("close")[0];

    // When the user clicks the button, open the modal 
    btn_1.onclick = function() {
        modal.style.display = "block";
    }

    btn_2.onclick = function() {
        modal.style.display = "block";
    }
    // When the user clicks on <span> (x), close the modal
    span.onclick = function() {
        modal.style.display = "none";
        document.getElementById("checkbox_label").classList.remove("red");
    }

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }

    btn_continue.onclick = function(event) {
      console.log('continue');
      if(document.getElementById("check_accept").checked) {
        return true;
      } else {
        event.preventDefault();
        document.getElementById("checkbox_label").classList.add("red");
      }
    }

    // $('.continue').on('click', function(e) {
    //   if ($('.accept').prop('checked') == true) {
    //       return true;
    //   } else {
    //       e.preventDefault();
    //       $('.acceptText').animate({color: 'red'}, 200).animate({color: 'black'}, 4000);
    //   }
  },
  finalize() {
    // JavaScript to be fired on the home page, after the init JS
  },
};
