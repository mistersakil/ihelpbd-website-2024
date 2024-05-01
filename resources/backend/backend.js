import.meta.glob(["../images/**"]);

/* Import css */

resources / backend / app.css;
import "./backend.css";

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
    position: "bottom-end",
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

/** Broadcasting */
import Echo from "laravel-echo";
import Pusher from "pusher-js";

window.Pusher = Pusher;

window.Echo = new Echo({
    broadcaster: "pusher",
    key: import.meta.env.VITE_PUSHER_APP_KEY,
    cluster: import.meta.env.VITE_PUSHER_APP_CLUSTER,
    forceTLS: true,
});
