<!-- jquery latest version -->
<script src="{{ asset('assets/frontend/js/vendor/jquery-1.12.0.min.js')}}"></script>
<!-- bootstrap JS -->
<script src="{{ asset('assets/frontend/js/bootstrap.min.js')}}"></script>
<!-- owl.carousel JS -->
<script src="{{ asset('assets/frontend/js/owl.carousel.min.js')}}"></script>
<!-- bootstrap select JS -->
<script src="{{ asset('assets/frontend/js/bootstrap-select.min.js')}}"></script>
<!-- magnific popup JS -->
<script src="{{ asset('assets/frontend/js/jquery.magnific-popup.min.js')}}"></script>
<!-- jquery-ui JS -->
<script src="{{ asset('assets/frontend/js/jquery-ui.min.js')}}"></script>
<!-- wow JS -->
<script src="{{ asset('assets/frontend/js/wow.min.js')}}"></script>
<!-- bxslider JS -->
<script src="{{ asset('assets/frontend/js/jquery.bxslider.min.js')}}"></script>
<!-- counterup JS -->
<script src="{{ asset('assets/frontend/js/jquery.counterup.min.js')}}"></script>
<script src="{{ asset('assets/frontend/js/waypoints.min.js')}}"></script>
<!-- slick JS -->
<script src="{{ asset('assets/frontend/js/slick.min.js')}}"></script>
<!-- meanmenu js -->
<script src="{{ asset('assets/frontend/js/jquery.meanmenu.js')}}"></script>
<!-- plugins JS -->
<script src="{{ asset('assets/frontend/js/plugins.js')}}"></script>
<!-- main JS -->
<script src="{{ asset('assets/frontend/js/main.js')}}"></script>
<!-- toaster JS -->
<script src="{{asset('assets/admin/js/toastr.min.js')}}"></script>
{!! Toastr::message() !!}


<script type="text/javascript">
    $('#buyer-choice').change(function() {

        var buyerChoice = $('#buyer-choice').val();

        if (buyerChoice == 1 || buyerChoice == 2) {
            $(".land-area").css('display', 'inline-block');
            $(".flat-area").css('display', 'none');
        } else if (buyerChoice == 3 || buyerChoice == 4) {
            $(".land-area").css('display', 'none');
            $(".flat-area").css('display', 'inline-block');
        } else {
            $(".land-area").css('display', 'none');
            $(".flat-area").css('display', 'none');
        }

    });
</script>

<script>
    $('#district').change(function() {
        var district = $('#district').val();
        var url = "{{url('/district-to-thana')}}/" + district;
        // console.log(url);
        $.ajax({
            url: url,
            method: "GET",
        }).done(function(data) {
            console.log(data);
            var $thana = $('#thana');
            $thana.empty();

            $thana.append('<option value="#">Select Thana</option>');
            for (var i = 0; i < data.thanas.length; i++) {
                $thana.append('<option value=' + data.thanas[i]["id"] + '>' + data.thanas[i]["name_en"] + '</option>');
            }
            $thana.selectpicker('refresh');
        });
    });

    $('#thana').change(function() {
        var thana = $('#thana').val();
        var url = "{{url('/thana-to-localarea')}}/" + thana;
        // console.log(url);
        $.ajax({
            url: url,
            method: "GET",
        }).done(function(data) {
            var $localArea = $('#local-area');
            $localArea.empty();
            $localArea.append('<option value="#">Local Area</option>');
            for (var i = 0; i < data.localAreas.length; i++) {
                $localArea.append('<option value=' + data.localAreas[i]["id"] + '>' + data.localAreas[i]["name_en"] + '</option>');
            }
            $localArea.selectpicker('refresh');
        });
    });
</script>

@stack('js')