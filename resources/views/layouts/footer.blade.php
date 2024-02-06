</div>
<!--End of body section-->
<!-- Script section starts here -->
<script type="text/javascript">
    $(function () {
        $('#picker').datetimepicker({
            format: 'YYYY-MM-DD'
        });

        $('.daily_frequency').hide(); 
        $('#frequency').change(function(){
            if($('#frequency').val() == 'Daily') {
                $('.daily_frequency').show(); 
            } else {
                $('.daily_frequency').hide(); 
            } 
        });

    });

    @if($message = session('success-message'))
    
        Swal.fire({
                    position: "center",
                    icon: "success",
                    title:'{{ $message }}',
                    showConfirmButton: false,
                    timer: 2500
        });

    @endif

    @if($error_message = session('error-message'))
        Swal.fire({
                    position: "center",
                    icon: "error",
                    title:'{{ $error_message }}',
                    showConfirmButton: false,
                    timer: 2500
        });
    @endif

    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <!-- Script section ends here -->
    </body>
</html>