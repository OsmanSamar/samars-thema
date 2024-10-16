import "babel-polyfill";
import "bootstrap";

// Styling
import "../scss/style.scss";

// Fontawesome
import { dom, library } from "@fortawesome/fontawesome-svg-core";
import {
  faFacebookF,
  faTwitter,
  faInstagram,
  faLinkedinIn,
} from "@fortawesome/free-brands-svg-icons";
library.add(faFacebookF, faTwitter, faInstagram, faLinkedinIn);
dom.watch();

// General
jQuery(document).ready(function ($) {
  if ($(".login.wp-core-ui").length) {
    $("#user_login").attr("placeholder", "Gebruikersnaam of e-mailadres");
    $("#user_pass").attr("placeholder", "Wachtwoord");
  }

  var u = jQuery(".fadeIn");
  function p() {
    for (
      var e = jQuery(document).scrollTop() + jQuery(window).height(), t = 0;
      t < u.length;
      t++
    ) {
      var i = u[t];
      jQuery(i).offset().top < e
        ? (i.classList.add("visible"),
          i.addEventListener(
            "transitionEnd",
            function () {
              (i.style.transitionDelay = "0s"),
                i.classList.remove("fadeIn"),
                console.log("remove delay");
            },
            {
              once: !0,
            }
          ),
          u.splice(t, 1))
        : i.classList.remove("visible");
    }
  }
  setTimeout(() => {
    for (let e = 0; e < 10; e++) p();
  }, 750);
});
