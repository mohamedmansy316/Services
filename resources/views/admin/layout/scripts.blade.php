<!-- FontAwesome -->
<script src="https://kit.fontawesome.com/aa028fd33c.js" crossorigin="anonymous"></script>

<!-- Datatable -->
<script src="{{url('public/admin')}}/vendor/global/global.min.js"></script>
<script src="{{url('public/admin')}}/vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
<script src="{{url('public/admin')}}/vendor/chart.js/Chart.bundle.min.js"></script>
<script src="{{url('public/admin')}}/js/custom.min.js"></script>
<script src="{{url('public/admin')}}/js/deznav-init.js"></script>

<script src="{{url('public/admin')}}/vendor/owl-carousel/owl.carousel.js"></script>
<!-- Chart piety plugin files -->
<script src="{{url('public/admin')}}/vendor/peity/jquery.peity.min.js"></script>
<!-- Apex Chart -->
<script src="{{url('public/admin')}}/vendor/apexchart/apexchart.js"></script>
{{-- <script src="{{url('public/admin')}}/js/echart.js"></script> --}}
<!-- Dashboard 1 -->
<script src="{{url('public/admin')}}/vendor/datatables/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/scroller/2.0.5/js/dataTables.scroller.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.0.0/js/dataTables.buttons.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/2.0.0/js/buttons.html5.min.js"></script>
<script src="{{url('public/admin')}}/js/plugins-init/datatables.init.js"></script>
<script src="{{url('public/admin')}}/js/dashboard/dashboard-1.js"></script>
<script src="{{url('public/admin')}}/js/bootstrap-tagsinput.js"></script>
<script src="{{url('public/admin')}}/vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
<script src="{{url('public/admin')}}/vendor/jquery-steps/build/jquery.steps.min.js"></script>
<script src="{{url('public/admin')}}/vendor/jquery-validation/jquery.validate.min.js"></script>
<!-- Form validate init -->
<script src="{{url('public/admin')}}/js/plugins-init/jquery.validate-init.js"></script>
<script src="{{url('public/admin')}}/vendor/jquery-smartwizard/dist/js/jquery.smartWizard.js"></script>
<script src="{{url('public/admin')}}/vendor/moment/moment.min.js"></script>
<script src="{{url('public/admin')}}/vendor/bootstrap-daterangepicker/daterangepicker.js"></script>
<!-- clockpicker -->
<script src="{{url('public/admin')}}/vendor/clockpicker/js/bootstrap-clockpicker.min.js"></script>
<!-- asColorPicker -->
<script src="{{url('public/admin')}}/vendor/jquery-asColor/jquery-asColor.min.js"></script>
<script src="{{url('public/admin')}}/vendor/jquery-asGradient/jquery-asGradient.min.js"></script>
<script src="{{url('public/admin')}}/vendor/jquery-asColorPicker/js/jquery-asColorPicker.min.js"></script>
<!-- Material color picker -->
<script src="{{url('public/admin')}}/vendor/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js"></script>
<!-- pickdate -->
<script src="{{url('public/admin')}}/vendor/pickadate/picker.js"></script>
<script src="{{url('public/admin')}}/vendor/pickadate/picker.time.js"></script>
<script src="{{url('public/admin')}}/vendor/pickadate/picker.date.js"></script>
<!-- Daterangepicker -->
<script src="{{url('public/admin')}}/js/plugins-init/bs-daterange-picker-init.js"></script>
<!-- Clockpicker init -->
<script src="{{url('public/admin')}}/js/plugins-init/clock-picker-init.js"></script>
<!-- asColorPicker init -->
<script src="{{url('public/admin')}}/js/plugins-init/jquery-asColorPicker.init.js"></script>
<!-- Material color picker init -->
<script src="{{url('public/admin')}}/js/plugins-init/material-date-picker-init.js"></script>
<!-- Pickdate -->
<script src="{{url('public/admin')}}/js/plugins-init/pickadate-init.js"></script>
<script src="{{url('public/admin/')}}/js/tinymce/tinymce.min.js"></script>
<script type="text/javascript" src="{{url('public/admin/js/')}}/jquery.datetimepicker.full.min.js"></script>
{{-- font awesome lib --}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/js/all.min.js" integrity="sha512-rpLlll167T5LJHwp0waJCh3ZRf7pO6IT1+LZOhAyP6phAirwchClbTZV3iqL3BMrVxIYRbzGTpli4rfxsCK6Vw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
{{-- <script src="https://cdn.tiny.cloud/1/u45218i1ih94xwnoqnhk65g0lt2ev7f9zye2s9honqxu05xh/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script> --}}

<script>
    function carouselReview(){
        /*  event-bx one function by = owl.carousel.js */
        jQuery('.event-bx').owlCarousel({
            loop:true,
            margin:30,
            nav:true,
            center:true,
            autoplaySpeed: 3000,
            navSpeed: 3000,
            paginationSpeed: 3000,
            slideSpeed: 3000,
            smartSpeed: 3000,
            autoplay: false,
            navText: ['<i class="fa fa-caret-left" aria-hidden="true"></i>', '<i class="fa fa-caret-right" aria-hidden="true"></i>'],
            dots:true,
            responsive:{
                0:{
                    items:1
                },
                720:{
                    items:2
                },

                1150:{
                    items:3
                },

                1200:{
                    items:2
                },
                1749:{
                    items:3
                }
            }
        })
    }
    jQuery(window).on('load',function(){
        setTimeout(function(){
            carouselReview();
        }, 1000);
    });
</script>
