/* CSS */
import "./backend-css.css";

import.meta.glob(["../images/**", "./images/**", "./fonts/**"]);

/* Import sweetalert2 */
import Swal from "sweetalert2";
window.Swal = Swal;

// import "./js/pace.min";
/* Bootstrap */
import "./js/bootstrap.bundle.min";

/* Import jQuery */
import $ from "jquery";
window.jQuery = window.$ = $;

/** PerfectScrollbar */
import PerfectScrollbar from "perfect-scrollbar";
window.PerfectScrollbar = PerfectScrollbar;

/* Plugins */
import "./js/simplebar.min";

import metisMenu from "metismenu";
window.metisMenu = metisMenu;

/* App */
import "./js/app_backend";

const Toast = Swal.mixin({
    toast: true,
    position: "bottom-left",
    showConfirmButton: false,
    timer: 3000,
    timerProgressBar: true,
    showCloseButton: true,
    didOpen: (toast) => {
        toast.addEventListener("mouseenter", Swal.stopTimer);
        toast.addEventListener("mouseleave", Swal.resumeTimer);
    },
});

window.Toast = Toast;
