<script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
<script src="{{ asset('assets/js/jquery-3.5.1.slim.min.js') }}"></script>

<script src="{{ asset('assets/js/popper.min.js') }}"></script>

<script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>

<script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>

@if ($pages != "Sign Up")
<script src="{{ asset('assets/js/jquery.nice-select.min.js') }}"></script>
@endif


<script src="{{ asset('assets/js/wow.min.js') }}"></script>

<script src="{{ asset('assets/js/meanmenu.js') }}"></script>

<script src="{{ asset('assets/js/jquery.ajaxchimp.min.js') }}"></script>

<script src="{{ asset('assets/js/form-validator.min.js') }}"></script>

<script src="{{ asset('assets/js/contact-form-script.js') }}"></script>

<script src="{{ asset('assets/js/custom.js') }}"></script>



@auth
<script>
    function popUp(){
        iziToast.show({
            theme: 'dark',
            icon: 'icon-person',
            title: 'Welcome to VIM Care',
            message: '<br>Hello {{ Auth::user()->name }}, For your profile visibility to prospective customers, ensure you update your profile information. Click on proceed to update your profile.',
            maxWidth: '400px',
            position: 'bottomRight', // bottomRight, bottomLeft, topRight, topLeft, topCenter, bottomCenter
            progressBarColor: 'rgb(0, 255, 184)',
            timeout: 10000000,
            buttons: [
                ['<button>Proceed</button>', function (instance, toast) {

                    if("{{ isset(Auth::user()->shopreg) }}" == false){
                        location.href = "{{ route('Basic') }}";
                    }
                    else if("{{ isset(Auth::user()->skillset) }}" == false){
                        location.href = "{{ route('Skills') }}";
                    }
                    else if("{{ isset(Auth::user()->toolset) }}" == false){
                        location.href = "{{ route('Tools') }}";
                    }

                }, true], // true to focus
                ['<button>Close</button>', function (instance, toast) {
                    instance.hide({
                        transitionOut: 'fadeOutUp',
                        onClosing: function(instance, toast, closedBy){
                            console.info('closedBy: ' + closedBy); // The return will be: 'closedBy: buttonName'
                        }
                    }, toast, 'buttonName');
                }]
            ],
            onOpening: function(instance, toast){
                console.info('callback abriu!');
            },
            onClosing: function(instance, toast, closedBy){
                console.info('closedBy: ' + closedBy); // tells if it was closed by 'drag' or 'button'
            }
        });
    }
</script>
@endauth



</body>

<!-- Mirrored from templates.hibootstrap.com/ezir/default/index-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 04 Feb 2021 15:12:42 GMT -->

</html>
