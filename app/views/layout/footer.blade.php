</div> 
        <!-- jQuery 1.11.2 -->
        {{-- {{HTML::script('js/jquery-1.11.2.js')}} --}}
        
        <!-- Bootstrap -->
        {{HTML::script('js/bootstrap.min.js')}}
        
        <!-- Morris.js charts -->
        {{HTML::script('js/plugins/morris/morris.min.js')}}
        
        
        {{-- <!-- Sparkline -->
        <script src="js/plugins/sparkline/jquery.sparkline.min.js" type="text/javascript"></script>
        <!-- jvectormap -->
        <script src="js/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js" type="text/javascript"></script>
        <script src="js/plugins/jvectormap/jquery-jvectormap-world-mill-en.js" type="text/javascript"></script>
        <!-- fullCalendar -->
        <script src="js/plugins/fullcalendar/fullcalendar.min.js" type="text/javascript"></script>
        jQuery Knob Chart
        <script src="js/plugins/jqueryKnob/jquery.knob.js" type="text/javascript"></script>
        <!-- daterangepicker -->
        <script src="js/plugins/daterangepicker/daterangepicker.js" type="text/javascript"></script>
        <!-- Bootstrap WYSIHTML5 -->
        <script src="js/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js" type="text/javascript"></script>
        <!-- iCheck -->
        <script src="js/plugins/iCheck/icheck.min.js" type="text/javascript"></script>
 --}}
        <!-- AdminLTE App -->
        {{HTML::script("js/AdminLTE/app.js")}}
        
        
       {{--  <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
        <script src="js/AdminLTE/dashboard.js" type="text/javascript"></script>     
        
        <!-- AdminLTE for demo purposes -->
        <script src="js/AdminLTE/demo.js" type="text/javascript"></script> --}}
        <script type="text/javascript">
            $(document).ready(function(){

            //hilangkan notifikasi
            window.setTimeout(function() {
                $(".hilang").fadeTo(1500, 0).slideUp(500, function(){
                  $(this).remove(); 
              });
            }, 3000);
            
        });
        </script>
    </body>
</html>