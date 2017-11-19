            
            <footer class="main-footer">
                <div class="pull-right hidden-xs">
                    <b>Version</b> 1.0
                </div>
                <strong>Copyright © 2016 <a href="">nama</a>.</strong> All rights reserved.
            </footer>

            <!-- Control Sidebar -->
            <div class="control-sidebar-bg" style="position: fixed; height: auto;"></div>

        </div>

        <script src="{{asset('js/script.js')}}"></script>
        
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script src="{{asset('js/analytics.js')}}"></script>
        <!-- jQuery 2.2.0 -->
        <script src="{{asset('js/jquery-1.11.0.min.js')}}"></script>
        <script src="{{asset('js/jquery-ui.min.js')}}"></script>
        <!-- Bootstrap 3.3.6 -->
        <script src="{{asset('js/bootstrap.min.js')}}"></script>
        <!-- AdminLTE App -->
        <script src="{{asset('js/app.min.js')}}"></script>
        <!-- Sparkline -->
        <!-- SlimScroll 1.3.0 -->
        <script src="{{asset('js/jquery.slimscroll.min.js')}}"></script>

        <!--Legacy Framework Mbiyen-->
        <script src="{{asset('js/moment.js')}}"></script>
        <script src="{{asset('js/bootstrap-datetimepicker.min.js')}}"></script>

        <!-- NOTINY -->
        <script src="{{asset('js/notiny.min.js')}}"></script>

        <!--CKEDITOR-->
        <script src="{{asset('js/ckeditor.js')}}"></script>
        <script src="{{asset('js/jquery.js')}}"></script>
        <!--CKEDITOR-->

        <!--chart-->
        <script src="{{asset('js/highcharts.js')}}"></script>
        <script src="{{asset('js/data.js')}}"></script>
        <script src="{{asset('js/exporting.js')}}"></script>
        <!--chart-->

        <script src="{{asset('js/materialPreloader.min.js')}}"></script>

        <!--TABS  -->
        <script src="{{asset('js/bootstrap-tab.min.js')}}"></script>
        <!--TABS  -->

        <!--VALDATION-->
        <script src="{{asset('js/jquery.validationEngine-id.js')}}"></script>
        <script src="{{asset('js/jquery.validationEngine.js')}}" ></script>

        <!--TABLE  -->
        <script src="{{asset('js/tablefix.js')}}" ></script>
        <script src="{{asset('js/fontawesome-iconpicker.js')}}" ></script>
        <script src="{{asset('js/jquery.amaran.min.js')}}"></script>
        <script src="{{asset('js/bootbox.min.js')}}"></script>
        <script src="{{asset('js/select2.full.min.js')}}"></script>
        <script src="{{asset('js/jquery.maskedinput.js')}}"></script>
        <script src="{{asset('js/claravel.js')}}"></script>
        <script src="{{asset('js/fileinput.js')}}"></script>
        <script src="{{asset('js/moment.min.js')}}"></script>
        <script src="{{asset('js/fullcalendar.min.js')}}"></script>
        <script src="{{asset('js/Chart.min.js')}}"></script>

        <!-- DataTables -->
        <script src="{{asset('bower_components/datatables.net/js/jquery.dataTables.min.js')}}"></script>
        <script src="{{asset('bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js')}}"></script>
        
        <script>
        $(function () {
            $('#example1').DataTable()
            $('#example2').DataTable({
            'paging'      : true,
            'lengthChange': true,
            'searching'   : false,
            'ordering'    : true,
            'info'        : true,
            'autoWidth'   : true
            })
        })

        $(document).ready(function() {
            $('#table-participant').DataTable();
        } );
        </script>
    </body>
</html>