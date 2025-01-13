import './bootstrap';
window.Echo.channel("test").listen("SendNotif", (event) => {
    toastr.success(event.msg,event.title);
});
