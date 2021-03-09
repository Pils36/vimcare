
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/izitoast/1.4.0/css/iziToast.min.css" integrity="sha512-O03ntXoVqaGUTAeAmvQ2YSzkCvclZEcPQu1eqloPaHfJ5RuNGiS4l+3duaidD801P50J28EHyonCV06CUlTSag==" crossorigin="anonymous" />

<script src="https://cdnjs.cloudflare.com/ajax/libs/izitoast/1.4.0/js/iziToast.min.js" integrity="sha512-Zq9o+E00xhhR/7vJ49mxFNJ0KQw1E1TMWkPTxrWcnpfEFDEXgUiwJHIKit93EW/XxE31HSI5GEOW06G6BF1AtA==" crossorigin="anonymous"></script>

@if ($pages == "Home" && (isset(Auth::user()->shopreg) == false || isset(Auth::user()->skillset) == false || isset(Auth::user()->toolset) == false))
        <script>
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
        </script>

@elseif(session('error'))

    <script>
        swal('Oops', '{{ session("error") }}', 'error');
    </script>

@endif