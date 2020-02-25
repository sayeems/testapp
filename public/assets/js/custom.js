// $(document).ready(function() {
//     // SideNav Button Initialization
//     $(".button-collapse").sideNav();
//     // SideNav Scrollbar Initialization
//     var sideNavScrollbar = document.querySelector(".custom-scrollbar");
//     var ps = new PerfectScrollbar(sideNavScrollbar);
// });
$(document).ready(function () {
    // $('.toast').toast(

    // );
    toastr.options = {
        "closeButton": true,
        "debug": false,
        "newestOnTop": false,
        "progressBar": true,
        "positionClass": "md-toast-top-right",
        "preventDuplicates": false,
        "onclick": null,
        "showDuration": 300,
        "hideDuration": 1000,
        "timeOut": 5000,
        "extendedTimeOut": 1000,
        "showEasing": "swing",
        "hideEasing": "linear",
        "showMethod": "fadeIn",
        "hideMethod": "fadeOut"
    }

    // $("#alert-target").click(function () {
    //     toastr["info"]("I was launched via jQuery!")
    // });
    // $('.file-upload').file_upload();
});


$('.toast').toast({
    progressBar: true,
});


