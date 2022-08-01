<script>
    window.deleteButtonTrans = '{{ trans("global.app_delete_selected") }}';
    window.copyButtonTrans = '{{ trans("global.app_copy") }}';
    window.csvButtonTrans = '{{ trans("global.app_csv") }}';
    window.excelButtonTrans = '{{ trans("global.app_excel") }}';
    window.pdfButtonTrans = '{{ trans("global.app_pdf") }}';
    window.printButtonTrans = '{{ trans("global.app_print") }}';
    window.colvisButtonTrans = '{{ trans("global.app_colvis") }}';
</script>


<script src="{{JS_ADMINLTE_ONILNE}}jquery-1.11.3.min.js"></script>
<script src="{{JS_ADMINLTE_ONILNE}}jquery.dataTables.min.js"></script>
<script src="{{JS_ADMINLTE_ONILNE}}dataTables.buttons.min.js"></script>
<script src="{{JS_ADMINLTE_ONILNE}}buttons.flash.min.js"></script>
<script src="{{JS_ADMINLTE_ONILNE}}jszip.min.js"></script>


<script src="{{JS_ADMINLTE_ONILNE}}pdfmake.min.js"></script>
<script src="{{JS_ADMINLTE_ONILNE}}vfs_fonts.js"></script>
<script src="{{JS_ADMINLTE_ONILNE}}buttons.html5.min.js"></script>
<script src="{{JS_ADMINLTE_ONILNE}}buttons.print.min.js"></script>
<script src="{{JS_ADMINLTE_ONILNE}}buttons.colVis.min.js"></script>
<script src="{{JS_ADMINLTE_ONILNE}}dataTables.select.min.js"></script>
<script src="{{JS_ADMINLTE_ONILNE}}jquery-ui.min.js"></script>



<script src="{{JS_ADMINLTE}}bootstrap.min.js"></script>
<script src="{{JS_ADMINLTE}}select2.full.min.js"></script>
<script src="{{JS_ADMINLTE}}main.js"></script>

<script src="{{PLUGINS_ADMINLTE}}slimScroll/jquery.slimscroll.min.js"></script>
<script src="{{PLUGINS_ADMINLTE}}fastclick/fastclick.js"></script>
<script src="{{JS_ADMINLTE}}app.min.js"></script>

<script src="{{JS}}sweetalert-dev.js"></script>


<script>
    // window._token = '{{ csrf_token() }}';
    
    var csrfToken = $('[name="csrf_token"]').attr('content');

            setInterval(refreshToken, 600000); // 1 hour 

            function refreshToken(){
                $.get('refresh-csrf').done(function(data){
                    csrfToken = data; // the new token
                });
            }

            setInterval(refreshToken, 600000); // 1 hour 
</script>

<script>
    $.extend(true, $.fn.dataTable.defaults, {
        "language": {
            "url": "//cdn.datatables.net/plug-ins/1.10.15/i18n/{{ config('app.languages')[app()->getLocale()] }}.json"
        }
    });

     

</script>

 

<script>
    $(document).ready(function () {
        $(".notifications-menu").on('click', function () {
            if (!$(this).hasClass('open')) {
                $('.notifications-menu .label-warning').hide();
                $.get('internal_notifications/read');
            }
        });
    });
</script>

@include('errors.formMessages')

@yield('footer_scripts')



@yield('custom_div_end')


<div class="ajax-loader" style="display:none;" id="ajax_loader"><img src="{{AJAXLOADER}}"> {{trans('please_wait')}}...</div>