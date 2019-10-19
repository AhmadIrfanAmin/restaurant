                </div> <!-- container -->

            </div> <!-- content -->

            <!-- Footer Start -->

            <footer class="footer">

                <div class="container-fluid">

                    <div class="row">

                        <div class="col-md-6">

                            2019 &copy; by <a href="">DLV Express Restaurant</a> 

                        </div>


                    </div>

                </div>

            </footer>

            <!-- end Footer -->



        </div>



        <!-- ============================================================== -->

        <!-- End Page content -->

        <!-- ============================================================== -->





    </div>

    <!-- END wrapper -->



    <!-- Right Sidebar -->



    <!-- /Right-bar -->



    <!-- Right bar overlay-->

    <div class="rightbar-overlay"></div>





    <script src="{{ URL::asset('public/assets-restaurant/js/vendor.min.js')}}"></script>



    <!-- Third Party js-->

    <script src="{{ URL::asset('public/assets-restaurant/libs/peity/jquery.peity.min.js')}}"></script>

    <script src="{{ URL::asset('public/assets-restaurant/libs/apexcharts/apexcharts.min.js')}}"></script>

    <script src="{{ URL::asset('public/assets-restaurant/libs/jquery-vectormap/jquery-jvectormap-1.2.2.min.js')}}"></script>

    <script src="{{ URL::asset('public/assets-restaurant/libs/jquery-vectormap/jquery-jvectormap-us-merc-en.js')}}"></script>



    <!-- Datatables js -->

    <script src="{{ URL::asset('public/assets-restaurant/libs/datatables/jquery.dataTables.min.js')}}"></script>

    <script src="{{ URL::asset('public/assets-restaurant/libs/datatables/dataTables.bootstrap4.js')}}"></script>

    <script src="{{ URL::asset('public/assets-restaurant/libs/datatables/dataTables.responsive.min.js')}}"></script>

    <script src="{{ URL::asset('public/assets-restaurant/libs/datatables/dataTables.buttons.min.js')}}"></script>

    <script src="{{ URL::asset('public/assets-restaurant/libs/datatables/buttons.bootstrap4.min.js')}}"></script>

                <!-- third party js ends -->



                <!-- Datatables init -->
    <script src="{{ URL::asset('public/assets-restaurant/js/pages/datatables.init.js')}}"></script>



    <script src="{{ URL::asset('public/assets-restaurant/libs/jquery-nice-select/jquery.nice-select.min.js')}}"></script>

    <script src="{{ URL::asset('public/assets-restaurant/libs/switchery/switchery.min.js')}}"></script>

    <script src="{{ URL::asset('public/assets-restaurant/libs/select2/select2.min.js')}}"></script>

    <script src="{{ URL::asset('public/assets-restaurant/libs/bootstrap-select/bootstrap-select.min.js')}}"></script>

    <script src="{{ URL::asset('public/assets-restaurant/libs/bootstrap-touchspin/jquery.bootstrap-touchspin.min.js')}}"></script>

    <script src="{{ URL::asset('public/assets-restaurant/libs/bootstrap-maxlength/bootstrap-maxlength.min.js')}}"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script> 

    <!-- Init js-->
    <script src="{{ URL::asset('public/assets-restaurant/js/pages/form-advanced.init.js')}}"></script>
    <!-- Dashboard init -->

    <script src="{{ URL::asset('public/assets-restaurant/js/pages/dashboard-1.init.js')}}"></script>
    <!-- App js -->

    <script src="{{ URL::asset('public/assets-restaurant/js/app.min.js')}}"></script>

    <script src="{{ URL::asset('public/assets-restaurant/js/pages/tickets.js')}}"></script>
    <script src="{{ URL::asset('public/assets-restaurant/libs/jquery-toast/jquery.toast.min.js')}}"></script>
    <script type="text/javascript">
       
        function modal(header, body, footer, size, center, callback,classes) {
            header = header !== undefined ? header : 'Modal header';
            body = body !== undefined ? body : 'Modal body';
            footer = footer !== undefined ? footer : 'Modal footer';
            center = center !== undefined ? 'modal-dialog-centered' : '';
            size = size !== undefined ? size : '';
            classes = classes !== undefined ? classes : '';
            let closeBtn = `<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>`;

            let $modalId = new Date().getSeconds();
            let $modal = `<div class="modal fade " tabindex="-1" role="dialog" id="modal-${$modalId}">
            <div class="modal-dialog ${center} ${size}" role="document">
            <div class="modal-content border-orange">
            <div class="modal-header">
            ${header}${closeBtn}
            </div>
            <div class="modal-body ${classes}">
            ${body}
            </div>
            <div class="modal-footer">
            ${footer}
            </div>
            </div>
            </div>
            </div>`;

            $(document.body).append($modal);
            $('#modal-'+$modalId).modal('show');

            $(document).on('hidden.bs.modal', '#modal-'+$modalId, function(e) {
            $('#modal-'+$modalId).remove();
            });
            if (callback !== undefined && typeof callback == 'function') {
            return callback('modal-'+$modalId);
            }
        }
    </script>

    @yield('script-dashboard')

</body>



</html>