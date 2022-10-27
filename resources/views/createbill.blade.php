<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="rtl">
<!-- BEGIN: Head-->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="Vuexy admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, Vuexy admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="PIXINVENT">
    <title>Dashboard analytics - Vuexy - Bootstrap HTML admin template</title>
    <link rel="apple-touch-icon" href="../../../app-assets/images/ico/apple-icon-120.png">
    <link rel="shortcut icon" type="image/x-icon" href="../../../app-assets/images/ico/favicon.ico">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600" rel="stylesheet">

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="../../../app-assets/vendors/css/vendors-rtl.min.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/vendors/css/charts/apexcharts.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/vendors/css/extensions/tether-theme-arrows.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/vendors/css/extensions/tether.min.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/vendors/css/extensions/shepherd-theme-default.css">
    <!-- END: Vendor CSS-->

    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="../../../app-assets/css-rtl/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/css-rtl/bootstrap-extended.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/css-rtl/colors.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/css-rtl/components.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/css-rtl/themes/dark-layout.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/css-rtl/themes/semi-dark-layout.css">

    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href="../../../app-assets/css-rtl/core/menu/menu-types/vertical-menu.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/css-rtl/core/colors/palette-gradient.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/css-rtl/pages/dashboard-analytics.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/css-rtl/pages/card-analytics.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/css-rtl/plugins/tour/tour.css">
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="../../../app-assets/css-rtl/custom-rtl.css">
    <link rel="stylesheet" type="text/css" href="../../../assets/css/style-rtl.css">
    <!-- END: Custom CSS-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <script src="https://code.jquery.com/jquery-3.3.1.min.js"
            integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
            crossorigin="anonymous">
    </script>

</head>
<!-- END: Head-->

<!-- BEGIN: Body-->

<body class="vertical-layout vertical-menu-modern 2-columns  navbar-floating footer-static  " data-open="click" data-menu="vertical-menu-modern" data-col="2-columns">



<!-- BEGIN: Main Menu-->
<div class="main-menu menu-fixed menu-light menu-accordion menu-shadow" data-scroll-to-active="true">
    <div class="shadow-bottom"></div>
    <div class="main-menu-content">
        <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
            <li class=" nav-item"><a href="/"><i class="feather icon-home"></i><span class="menu-title" data-i18n="Dashboard">القائمه الرئيسية</span></a>
                <ul class="menu-content">
                    <li class=""><a href="/"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="Analytics">اضافه عميل جديد</span></a>
                    </li>
                    <li><a href="/showall"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="eCommerce">عرض العملاء</span></a>
                    </li>
                    <li><a href="/addgoods"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="eCommerce">اضافه منتج</span></a>
                    </li>
                    <li><a href="/showgoods"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="eCommerce">عرض المنتجات</span></a>
                    </li>
                    <li><a href="/bill"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="eCommerce">عمل فاتوره</span></a>
                    </li>
                    <li><a href="/showallbill"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="eCommerce">عرض الفواتير</span></a>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
</div>
<!-- END: Main Menu-->

<!-- BEGIN: Content-->
<div class="app-content content">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper">
        <div class="content-header row">
        </div>
        <div class="content-body">
            <!-- Dashboard Analytics Start -->
            <div class="card-body">
                <form class="form form-horizontal"enctype="multipart/form-data">
                    @csrf
                    <div class="form-body">
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group row">
                                    <div class="col-md-1">
                                        <span>اسم الصنف</span>
                                    </div>
                                    <div class="col-md-7">
                                        <div class="position-relative has-icon-left">
                                            <input type="text" id="name" class="form-control" name="icon-box" placeholder="اسم الصنف">
                                            <div class="form-control-position">
                                                <i class="feather icon-box"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group row">
                                    <div class="col-md-1">
                                        <span>الكميه</span>
                                    </div>
                                    <div class="col-md-7">
                                        <div class="position-relative has-icon-left">
                                            <input type="number" id="quantity" class="form-control" name="" placeholder="الكميه">
                                            <div class="form-control-position">
                                                <i class="feather icon-target"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 offset-md-3">

                                <button id="submit1" type="submit" class="btn btn-primary mr-1 mb-1 waves-effect waves-light">اضافه الي الفاتوره</button>

                            </div>
                        </div>
                    </div>
                </form>

                <div class="card-content">
                    <div class="card-body card-dashboard">
                        <div class="table-responsive">
                            <div id="DataTables_Table_5_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer"><div class="row"><div class="col-sm-12 col-md-6"><div class="dataTables_length" id="DataTables_Table_5_length"><label>Show <select name="DataTables_Table_5_length" aria-controls="DataTables_Table_5" class="custom-select custom-select-sm form-control form-control-sm"><option value="10">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select> entries</label></div></div><div class="col-sm-12 col-md-6"><div id="DataTables_Table_5_filter" class="dataTables_filter"><label>Search:<input type="search" class="form-control form-control-sm" placeholder="" aria-controls="DataTables_Table_5"></label></div></div></div><div class="row"><div class="col-sm-12"><div class="dataTables_scroll"><div class="dataTables_scrollHead" style="overflow: hidden; position: relative; border: 0px; width: 100%;"><div class="dataTables_scrollHeadInner" style="box-sizing: content-box; width: 1132.84px; padding-left: 17px;"><table class="table nowrap scroll-horizontal-vertical dataTable no-footer" role="grid" style="margin-left: 0px; width: 1132.84px;"><thead>
                                                        <tr role="row"><th class="sorting_asc" tabindex="0" aria-controls="DataTables_Table_5" rowspan="1" colspan="1" style="width: 67.2031px;" aria-sort="ascending" aria-label="First name: activate to sort column descending">#</th>
                                                        <tr role="row"><th class="sorting_asc" tabindex="0" aria-controls="DataTables_Table_5" rowspan="1" colspan="1" style="width: 67.2031px;" aria-sort="ascending" aria-label="First name: activate to sort column descending">اسم الصنف</th>
                                                            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_5" rowspan="1" colspan="1" style="width: 77.9688px;" aria-label="Last name: activate to sort column ascending">سعر الصنف</th>
                                                            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_5" rowspan="1" colspan="1" style="width: 146.1406px;" aria-label="Office: activate to sort column ascending"> الكميه </th>
                                                            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_5" rowspan="1" colspan="1" style="width: 156.1406px;" aria-label="Office: activate to sort column ascending"></th>
                                                        <tbody>
                                                        @foreach($good as $g)
                                                            <tr role="row" class="">
                                                                <td id="id" hidden>{{$g->id}}</td>
                                                                <td >{{$g->name}}</td>
                                                                <td>{{$g->price}}</td>
                                                                <td>{{$g->quantity}}</td>

                                                                <td>
                                                                    <a href="{{url("/deletebill/".$g->id)}}"> <button id="submit" type="submit" class="btn btn-danger btn-sm mr-1 mb-1 waves-effect waves-light" style="display: inline">Delete</button></a>
                                                                </td>

                                                            </tr>
                                                        @endforeach

                                                        </tbody>
                                                        <td> اجماي الفاتوره :   {{$total}} </td>


                                                    </table>

                                                </div></div></div></div><div class="row"><div class="col-sm-12 col-md-5"><div class="dataTables_info" id="DataTables_Table_5_info" role="status" aria-live="polite">Showing 1 to 10 of 50 entries</div></div><div class="col-sm-12 col-md-7"><div class="dataTables_paginate paging_simple_numbers" id="DataTables_Table_5_paginate"><ul class="pagination"><li class="paginate_button page-item previous disabled" id="DataTables_Table_5_previous"><a href="#" aria-controls="DataTables_Table_5" data-dt-idx="0" tabindex="0" class="page-link">Previous</a></li><li class="paginate_button page-item active"><a href="#" aria-controls="DataTables_Table_5" data-dt-idx="1" tabindex="0" class="page-link">1</a></li><li class="paginate_button page-item "><a href="#" aria-controls="DataTables_Table_5" data-dt-idx="2" tabindex="0" class="page-link">2</a></li><li class="paginate_button page-item "><a href="#" aria-controls="DataTables_Table_5" data-dt-idx="3" tabindex="0" class="page-link">3</a></li><li class="paginate_button page-item "><a href="#" aria-controls="DataTables_Table_5" data-dt-idx="4" tabindex="0" class="page-link">4</a></li><li class="paginate_button page-item "><a href="#" aria-controls="DataTables_Table_5" data-dt-idx="5" tabindex="0" class="page-link">5</a></li><li class="paginate_button page-item next" id="DataTables_Table_5_next"><a href="#" aria-controls="DataTables_Table_5" data-dt-idx="6" tabindex="0" class="page-link">Next</a></li></ul></div></div></div></div>
                            </div>
                        </div>
                    </div>
                </div>





            </div>


          <a href="/print">

              <button id="submit1" type="submit" class="btn btn-primary mr-1 mb-1 waves-effect waves-light">طباعه الفاتوره</button>

          </a>

            <!-- Dashboard Analytics end -->

        </div>
    </div>
</div>

<script>
    $(document).ready(function(){
        $("#submit1").on('click',function(e){
            e.preventDefault();
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                }
            });
            jQuery.ajax({
                url: '/storetestbill',
                method: 'get',
                data: {
                    name: jQuery('#name').val(),
                    quantity: jQuery('#quantity').val()
                },
                success: function(result){
                    if (result.success == true) {
                        alert("تم اضافه الصنف بنجاح ");
                        window.location.href = '/bill';
                    }else {
                        alert("حدث خطاء اثناء اضافه الصنف الرجاء المحاوله مره اخري ");
                        window.location.href = '/bill';
                    }


                }});
        });
    });
</script>







<!-- END: Content-->

<div class="sidenav-overlay"></div>
<div class="drag-target"></div>

<!-- BEGIN: Footer-->
<footer class="footer footer-static footer-light">
    <p class="clearfix blue-grey lighten-2 mb-0"><span class="float-md-left d-block d-md-inline-block mt-25">COPYRIGHT &copy; 2019<a class="text-bold-800 grey darken-2" href="https://1.envato.market/pixinvent_portfolio" target="_blank">Pixinvent,</a>All rights Reserved</span><span class="float-md-right d-none d-md-block">Hand-crafted & Made with<i class="feather icon-heart pink"></i></span>
        <button class="btn btn-primary btn-icon scroll-top" type="button"><i class="feather icon-arrow-up"></i></button>
    </p>
</footer>
<!-- END: Footer-->


<!-- BEGIN: Vendor JS-->
<script src="../../../app-assets/vendors/js/vendors.min.js"></script>
<!-- BEGIN Vendor JS-->

<!-- BEGIN: Page Vendor JS-->
<script src="../../../app-assets/vendors/js/charts/apexcharts.min.js"></script>
<script src="../../../app-assets/vendors/js/extensions/tether.min.js"></script>
<script src="../../../app-assets/vendors/js/extensions/shepherd.min.js"></script>
<!-- END: Page Vendor JS-->

<!-- BEGIN: Theme JS-->
<script src="../../../app-assets/js/core/app-menu.js"></script>
<script src="../../../app-assets/js/core/app.js"></script>
<script src="../../../app-assets/js/scripts/components.js"></script>
<!-- END: Theme JS-->

<!-- BEGIN: Page JS-->
<script src="../../../app-assets/js/scripts/pages/dashboard-analytics.js"></script>
<!-- END: Page JS-->

</body>
<!-- END: Body-->

</html>
