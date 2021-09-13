<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>
        @yield('title')
    </title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.rtl.min.css" integrity="sha384-gXt9imSW0VcJVHezoNQsP+TNrjYXoGcrqBZJpry9zJt8PCQjobwmhMGaDHTASo9N" crossorigin="anonymous">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="/plugins/font-awesome/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="/dist/css/adminlte.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="/plugins/iCheck/flat/blue.css">
    <!-- Morris chart -->
    <link rel="stylesheet" href="/plugins/morris/morris.css">
    <!-- jvectormap -->
    <link rel="stylesheet" href="/plugins/jvectormap/jquery-jvectormap-1.2.2.css">
    <!-- Date Picker -->
    <link rel="stylesheet" href="/plugins/datepicker/datepicker3.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="/plugins/daterangepicker/daterangepicker-bs3.css">
    <!-- bootstrap wysihtml5 - text editor -->
    <link rel="stylesheet" href="/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    <!-- bootstrap rtl -->
    <link rel="stylesheet" href="/dist/css/bootstrap-rtl.min.css">
    <!-- template rtl version -->
    <link rel="stylesheet" href="/dist/css/custom-style.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

    <!-- Navbar -->
    @include('admin.layouts.navbar')
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    @include('admin.layouts.sidebar')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">

            <div class="container-fluid">
                @yield('page-header')
<!--                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark">داشبورد</h1>
                    </div>&lt;!&ndash; /.col &ndash;&gt;
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-left">
                            <li class="breadcrumb-item"><a href="#">خانه</a></li>
                            <li class="breadcrumb-item active">داشبورد ورژن 2</li>
                        </ol>
                    </div>&lt;!&ndash; /.col &ndash;&gt;
                </div>&lt;!&ndash; /.row &ndash;&gt;-->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                @yield('main-content')
                <!-- Small boxes (Stat box) -->
<!--                <div class="row">
                    <div class="col-lg-3 col-6">
                        &lt;!&ndash; small box &ndash;&gt;
                        <div class="small-box bg-info">
                            <div class="inner">
                                <h3>150</h3>

                                <p>سفارشات جدید</p>
                            </div>
                            <div class="icon">
                                <i class="ion ion-bag"></i>
                            </div>
                            <a href="#" class="small-box-footer">اطلاعات بیشتر <i class="fa fa-arrow-circle-left"></i></a>
                        </div>
                    </div>
                    &lt;!&ndash; ./col &ndash;&gt;
                    <div class="col-lg-3 col-6">
                        &lt;!&ndash; small box &ndash;&gt;
                        <div class="small-box bg-success">
                            <div class="inner">
                                <h3>53<sup style="font-size: 20px">%</sup></h3>

                                <p>افزایش امتیاز</p>
                            </div>
                            <div class="icon">
                                <i class="ion ion-stats-bars"></i>
                            </div>
                            <a href="#" class="small-box-footer">اطلاعات بیشتر <i class="fa fa-arrow-circle-left"></i></a>
                        </div>
                    </div>
                    &lt;!&ndash; ./col &ndash;&gt;
                    <div class="col-lg-3 col-6">
                        &lt;!&ndash; small box &ndash;&gt;
                        <div class="small-box bg-warning">
                            <div class="inner">
                                <h3>44</h3>

                                <p>کاربران ثبت شده</p>
                            </div>
                            <div class="icon">
                                <i class="ion ion-person-add"></i>
                            </div>
                            <a href="#" class="small-box-footer">اطلاعات بیشتر <i class="fa fa-arrow-circle-left"></i></a>
                        </div>
                    </div>
                    &lt;!&ndash; ./col &ndash;&gt;
                    <div class="col-lg-3 col-6">
                        &lt;!&ndash; small box &ndash;&gt;
                        <div class="small-box bg-danger">
                            <div class="inner">
                                <h3>65</h3>

                                <p>بازدید جدید</p>
                            </div>
                            <div class="icon">
                                <i class="ion ion-pie-graph"></i>
                            </div>
                            <a href="#" class="small-box-footer">اطلاعات بیشتر <i class="fa fa-arrow-circle-left"></i></a>
                        </div>
                    </div>
                    &lt;!&ndash; ./col &ndash;&gt;
                </div>-->
                <!-- /.row -->
                <!-- Main row -->
<!--                <div class="row">
                    &lt;!&ndash; Left col &ndash;&gt;
                    <section class="col-lg-7 connectedSortable">
                        &lt;!&ndash; Custom tabs (Charts with tabs)&ndash;&gt;
                        <div class="card">
                            <div class="card-header d-flex p-0">
                                <h3 class="card-title p-3">
                                    <i class="fa fa-pie-chart mr-1"></i>
                                    فروش
                                </h3>
                                <ul class="nav nav-pills mr-auto p-2">
                                    <li class="nav-item">
                                        <a class="nav-link active" href="#revenue-chart" data-toggle="tab">نمودار</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#sales-chart" data-toggle="tab">چارت</a>
                                    </li>
                                </ul>
                            </div>&lt;!&ndash; /.card-header &ndash;&gt;
                            <div class="card-body">
                                <div class="tab-content p-0">
                                    &lt;!&ndash; Morris chart - Sales &ndash;&gt;
                                    <div class="chart tab-pane active" id="revenue-chart"
                                         style="position: relative; height: 300px;"></div>
                                    <div class="chart tab-pane" id="sales-chart" style="position: relative; height: 300px;"></div>
                                </div>
                            </div>&lt;!&ndash; /.card-body &ndash;&gt;
                        </div>
                        &lt;!&ndash; /.card &ndash;&gt;

                        &lt;!&ndash; DIRECT CHAT &ndash;&gt;
                        <div class="card direct-chat direct-chat-primary">
                            <div class="card-header">
                                <h3 class="card-title">گفتگو</h3>

                                <div class="card-tools">
                                    <span data-toggle="tooltip" title="3 پیام جدید" class="badge badge-primary">3</span>
                                    <button type="button" class="btn btn-tool" data-widget="collapse">
                                        <i class="fa fa-minus"></i>
                                    </button>
                                    <button type="button" class="btn btn-tool" data-toggle="tooltip" title="مخاصبین"
                                            data-widget="chat-pane-toggle">
                                        <i class="fa fa-comments"></i>
                                    </button>
                                    <button type="button" class="btn btn-tool" data-widget="remove"><i class="fa fa-times"></i>
                                    </button>
                                </div>
                            </div>
                            &lt;!&ndash; /.card-header &ndash;&gt;
                            <div class="card-body">
                                &lt;!&ndash; Conversations are loaded here &ndash;&gt;
                                <div class="direct-chat-messages">
                                    &lt;!&ndash; Message. Default to the left &ndash;&gt;
                                    <div class="direct-chat-msg">
                                        <div class="direct-chat-info clearfix">
                                            <span class="direct-chat-name float-left">حسام موسوی</span>
                                            <span class="direct-chat-timestamp float-right">23 Jan 2:00 pm</span>
                                        </div>
                                        &lt;!&ndash; /.direct-chat-info &ndash;&gt;
                                        <img class="direct-chat-img" src="dist/img/user1-128x128.jpg" alt="message user image">
                                        &lt;!&ndash; /.direct-chat-img &ndash;&gt;
                                        <div class="direct-chat-text">
                                            واقعا این قالب رایگانه ؟ قابل باور نیست
                                        </div>
                                        &lt;!&ndash; /.direct-chat-text &ndash;&gt;
                                    </div>
                                    &lt;!&ndash; /.direct-chat-msg &ndash;&gt;

                                    &lt;!&ndash; Message to the right &ndash;&gt;
                                    <div class="direct-chat-msg right">
                                        <div class="direct-chat-info clearfix">
                                            <span class="direct-chat-name float-right">سارا</span>
                                            <span class="direct-chat-timestamp float-left">23 Jan 2:05 pm</span>
                                        </div>
                                        &lt;!&ndash; /.direct-chat-info &ndash;&gt;
                                        <img class="direct-chat-img" src="dist/img/user3-128x128.jpg" alt="message user image">
                                        &lt;!&ndash; /.direct-chat-img &ndash;&gt;
                                        <div class="direct-chat-text">
                                            بهتره اینو باور کنی :)
                                        </div>
                                        &lt;!&ndash; /.direct-chat-text &ndash;&gt;
                                    </div>
                                    &lt;!&ndash; /.direct-chat-msg &ndash;&gt;

                                    &lt;!&ndash; Message. Default to the left &ndash;&gt;
                                    <div class="direct-chat-msg">
                                        <div class="direct-chat-info clearfix">
                                            <span class="direct-chat-name float-left">حسام موسوی</span>
                                            <span class="direct-chat-timestamp float-right">23 Jan 5:37 pm</span>
                                        </div>
                                        &lt;!&ndash; /.direct-chat-info &ndash;&gt;
                                        <img class="direct-chat-img" src="dist/img/user1-128x128.jpg" alt="message user image">
                                        &lt;!&ndash; /.direct-chat-img &ndash;&gt;
                                        <div class="direct-chat-text">
                                            میخوام با این قالب یه اپلیکیشن باحال بزنم ؟‌ تو هم همکاری میکنی ؟
                                        </div>
                                        &lt;!&ndash; /.direct-chat-text &ndash;&gt;
                                    </div>
                                    &lt;!&ndash; /.direct-chat-msg &ndash;&gt;

                                    &lt;!&ndash; Message to the right &ndash;&gt;
                                    <div class="direct-chat-msg right">
                                        <div class="direct-chat-info clearfix">
                                            <span class="direct-chat-name float-right">سارا</span>
                                            <span class="direct-chat-timestamp float-left">23 Jan 6:10 pm</span>
                                        </div>
                                        &lt;!&ndash; /.direct-chat-info &ndash;&gt;
                                        <img class="direct-chat-img" src="dist/img/user3-128x128.jpg" alt="message user image">
                                        &lt;!&ndash; /.direct-chat-img &ndash;&gt;
                                        <div class="direct-chat-text">
                                            اره حتما
                                        </div>
                                        &lt;!&ndash; /.direct-chat-text &ndash;&gt;
                                    </div>
                                    &lt;!&ndash; /.direct-chat-msg &ndash;&gt;

                                </div>
                                &lt;!&ndash;/.direct-chat-messages&ndash;&gt;

                                &lt;!&ndash; Contacts are loaded here &ndash;&gt;
                                <div class="direct-chat-contacts">
                                    <ul class="contacts-list">
                                        <li>
                                            <a href="#">
                                                <img class="contacts-list-img" src="dist/img/user1-128x128.jpg">

                                                <div class="contacts-list-info">
                          <span class="contacts-list-name">
                            حسام موسوی
                            <small class="contacts-list-date float-left">1397/10/01</small>
                          </span>
                                                    <span class="contacts-list-msg">تا حالا کجا بودی ؟‌من...</span>
                                                </div>
                                                &lt;!&ndash; /.contacts-list-info &ndash;&gt;
                                            </a>
                                        </li>
                                        &lt;!&ndash; End Contact Item &ndash;&gt;
                                        <li>
                                            <a href="#">
                                                <img class="contacts-list-img" src="dist/img/user7-128x128.jpg">

                                                <div class="contacts-list-info">
                          <span class="contacts-list-name">
                            سارا فرهانی
                            <small class="contacts-list-date float-left">2/23/2015</small>
                          </span>
                                                    <span class="contacts-list-msg">تا حالا منتظر تو بودم...</span>
                                                </div>
                                                &lt;!&ndash; /.contacts-list-info &ndash;&gt;
                                            </a>
                                        </li>
                                        &lt;!&ndash; End Contact Item &ndash;&gt;
                                        <li>
                                            <a href="#">
                                                <img class="contacts-list-img" src="dist/img/user3-128x128.jpg">

                                                <div class="contacts-list-info">
                          <span class="contacts-list-name">
                            نکیسا کیانی
                            <small class="contacts-list-date float-left">2/20/2015</small>
                          </span>
                                                    <span class="contacts-list-msg">پس بیشتر صبر کن تا برگردم...</span>
                                                </div>
                                                &lt;!&ndash; /.contacts-list-info &ndash;&gt;
                                            </a>
                                        </li>
                                        &lt;!&ndash; End Contact Item &ndash;&gt;
                                        <li>
                                            <a href="#">
                                                <img class="contacts-list-img" src="dist/img/user5-128x128.jpg">

                                                <div class="contacts-list-info">
                          <span class="contacts-list-name">
                            رحمت موسوی
                            <small class="contacts-list-date float-left">2/10/2015</small>
                          </span>
                                                    <span class="contacts-list-msg"> حالتون چطورههههه !...</span>
                                                </div>
                                                &lt;!&ndash; /.contacts-list-info &ndash;&gt;
                                            </a>
                                        </li>
                                        &lt;!&ndash; End Contact Item &ndash;&gt;
                                        <li>
                                            <a href="#">
                                                <img class="contacts-list-img" src="dist/img/user6-128x128.jpg">

                                                <div class="contacts-list-info">
                          <span class="contacts-list-name">
                            جکسون عبداللهی
                            <small class="contacts-list-date float-left">1/27/2015</small>
                          </span>
                                                    <span class="contacts-list-msg">عالیییییییییی...</span>
                                                </div>
                                                &lt;!&ndash; /.contacts-list-info &ndash;&gt;
                                            </a>
                                        </li>
                                        &lt;!&ndash; End Contact Item &ndash;&gt;
                                        <li>
                                            <a href="#">
                                                <img class="contacts-list-img" src="dist/img/user8-128x128.jpg">

                                                <div class="contacts-list-info">
                          <span class="contacts-list-name">
                            کتایون ریحانی
                            <small class="contacts-list-date float-left">1/4/2015</small>
                          </span>
                                                    <span class="contacts-list-msg">بیخیالش پیداش میکنم...</span>
                                                </div>
                                                &lt;!&ndash; /.contacts-list-info &ndash;&gt;
                                            </a>
                                        </li>
                                        &lt;!&ndash; End Contact Item &ndash;&gt;
                                    </ul>
                                    &lt;!&ndash; /.contacts-list &ndash;&gt;
                                </div>
                                &lt;!&ndash; /.direct-chat-pane &ndash;&gt;
                            </div>
                            &lt;!&ndash; /.card-body &ndash;&gt;
                            <div class="card-footer">
                                <form action="#" method="post">
                                    <div class="input-group">
                                        <input type="text" name="message" placeholder="Type Message ..." class="form-control">
                                        <span class="input-group-append">
                      <button type="button" class="btn btn-primary">Send</button>
                    </span>
                                    </div>
                                </form>
                            </div>
                            &lt;!&ndash; /.card-footer&ndash;&gt;
                        </div>
                        &lt;!&ndash;/.direct-chat &ndash;&gt;

                        &lt;!&ndash; TO DO List &ndash;&gt;
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">
                                    <i class="ion ion-clipboard mr-1"></i>
                                    لیست کارها
                                </h3>

                                <div class="card-tools">
                                    <ul class="pagination pagination-sm">
                                        <li class="page-item"><a href="#" class="page-link">&laquo;</a></li>
                                        <li class="page-item"><a href="#" class="page-link">1</a></li>
                                        <li class="page-item"><a href="#" class="page-link">2</a></li>
                                        <li class="page-item"><a href="#" class="page-link">3</a></li>
                                        <li class="page-item"><a href="#" class="page-link">&raquo;</a></li>
                                    </ul>
                                </div>
                            </div>
                            &lt;!&ndash; /.card-header &ndash;&gt;
                            <div class="card-body">
                                <ul class="todo-list">
                                    <li>
                                        &lt;!&ndash; drag handle &ndash;&gt;
                                        <span class="handle">
                      <i class="fa fa-ellipsis-v"></i>
                      <i class="fa fa-ellipsis-v"></i>
                    </span>
                                        &lt;!&ndash; checkbox &ndash;&gt;
                                        <input type="checkbox" value="" name="">
                                        &lt;!&ndash; todo text &ndash;&gt;
                                        <span class="text">طراحی یک قالب زیبا</span>
                                        &lt;!&ndash; Emphasis label &ndash;&gt;
                                        <small class="badge badge-danger"><i class="fa fa-clock-o"></i> 2 دقیقه</small>
                                        &lt;!&ndash; General tools such as edit or delete&ndash;&gt;
                                        <div class="tools">
                                            <i class="fa fa-edit"></i>
                                            <i class="fa fa-trash-o"></i>
                                        </div>
                                    </li>
                                    <li>
                    <span class="handle">
                      <i class="fa fa-ellipsis-v"></i>
                      <i class="fa fa-ellipsis-v"></i>
                    </span>
                                        <input type="checkbox" value="" name="">
                                        <span class="text">رسپانسیو کردن قالب مورد نظر</span>
                                        <small class="badge badge-info"><i class="fa fa-clock-o"></i> 4 ساعت</small>
                                        <div class="tools">
                                            <i class="fa fa-edit"></i>
                                            <i class="fa fa-trash-o"></i>
                                        </div>
                                    </li>
                                    <li>
                    <span class="handle">
                      <i class="fa fa-ellipsis-v"></i>
                      <i class="fa fa-ellipsis-v"></i>
                    </span>
                                        <input type="checkbox" value="" name="">
                                        <span class="text">ارائه قالب برای استفاده بقیه</span>
                                        <small class="badge badge-warning"><i class="fa fa-clock-o"></i> 1 روز</small>
                                        <div class="tools">
                                            <i class="fa fa-edit"></i>
                                            <i class="fa fa-trash-o"></i>
                                        </div>
                                    </li>
                                    <li>
                    <span class="handle">
                      <i class="fa fa-ellipsis-v"></i>
                      <i class="fa fa-ellipsis-v"></i>
                    </span>
                                        <input type="checkbox" value="" name="">
                                        <span class="text">بهینه سازی بخش های بوجود اومده</span>
                                        <small class="badge badge-success"><i class="fa fa-clock-o"></i> 3 روز</small>
                                        <div class="tools">
                                            <i class="fa fa-edit"></i>
                                            <i class="fa fa-trash-o"></i>
                                        </div>
                                    </li>
                                    <li>
                    <span class="handle">
                      <i class="fa fa-ellipsis-v"></i>
                      <i class="fa fa-ellipsis-v"></i>
                    </span>
                                        <input type="checkbox" value="" name="">
                                        <span class="text">چک کردن پیام ها و نوتیفیکیشن ها</span>
                                        <small class="badge badge-primary"><i class="fa fa-clock-o"></i> 1 هفته</small>
                                        <div class="tools">
                                            <i class="fa fa-edit"></i>
                                            <i class="fa fa-trash-o"></i>
                                        </div>
                                    </li>
                                    <li>
                    <span class="handle">
                      <i class="fa fa-ellipsis-v"></i>
                      <i class="fa fa-ellipsis-v"></i>
                    </span>
                                        <input type="checkbox" value="" name="">
                                        <span class="text">طراحی صفحه ایمیل جدید</span>
                                        <small class="badge badge-secondary"><i class="fa fa-clock-o"></i> 1 ماه</small>
                                        <div class="tools">
                                            <i class="fa fa-edit"></i>
                                            <i class="fa fa-trash-o"></i>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            &lt;!&ndash; /.card-body &ndash;&gt;
                            <div class="card-footer clearfix">
                                <button type="button" class="btn btn-info float-right"><i class="fa fa-plus"></i> جدید</button>
                            </div>
                        </div>
                        &lt;!&ndash; /.card &ndash;&gt;
                    </section>
                    &lt;!&ndash; /.Left col &ndash;&gt;
                    &lt;!&ndash; right col (We are only adding the ID to make the widgets sortable)&ndash;&gt;
                    <section class="col-lg-5 connectedSortable">

                        &lt;!&ndash; Map card &ndash;&gt;
                        <div class="card bg-primary-gradient">
                            <div class="card-header no-border">
                                <h3 class="card-title">
                                    <i class="fa fa-map-marker mr-1"></i>
                                    بازدید‌ها
                                </h3>
                                &lt;!&ndash; card tools &ndash;&gt;
                                <div class="card-tools">
                                    <button type="button"
                                            class="btn btn-primary btn-sm daterange"
                                            data-toggle="tooltip"
                                            title="Date range">
                                        <i class="fa fa-calendar"></i>
                                    </button>
                                    <button type="button"
                                            class="btn btn-primary btn-sm"
                                            data-widget="collapse"
                                            data-toggle="tooltip"
                                            title="Collapse">
                                        <i class="fa fa-minus"></i>
                                    </button>
                                </div>
                                &lt;!&ndash; /.card-tools &ndash;&gt;
                            </div>
                            <div class="card-body">
                                <div id="world-map" style="height: 250px; width: 100%;"></div>
                            </div>
                            &lt;!&ndash; /.card-body&ndash;&gt;
                            <div class="card-footer bg-transparent">
                                <div class="row">
                                    <div class="col-4 text-center">
                                        <div id="sparkline-1"></div>
                                        <div class="text-white">بازدید‌ها</div>
                                    </div>
                                    &lt;!&ndash; ./col &ndash;&gt;
                                    <div class="col-4 text-center">
                                        <div id="sparkline-2"></div>
                                        <div class="text-white">آنلاین</div>
                                    </div>
                                    &lt;!&ndash; ./col &ndash;&gt;
                                    <div class="col-4 text-center">
                                        <div id="sparkline-3"></div>
                                        <div class="text-white">فروش</div>
                                    </div>
                                    &lt;!&ndash; ./col &ndash;&gt;
                                </div>
                                &lt;!&ndash; /.row &ndash;&gt;
                            </div>
                        </div>
                        &lt;!&ndash; /.card &ndash;&gt;

                        &lt;!&ndash; solid sales graph &ndash;&gt;
                        <div class="card bg-info-gradient">
                            <div class="card-header no-border">
                                <h3 class="card-title">
                                    <i class="fa fa-th mr-1"></i>
                                    نمودار فروش
                                </h3>

                                <div class="card-tools">
                                    <button type="button" class="btn bg-info btn-sm" data-widget="collapse">
                                        <i class="fa fa-minus"></i>
                                    </button>
                                    <button type="button" class="btn bg-info btn-sm" data-widget="remove">
                                        <i class="fa fa-times"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="chart" id="line-chart" style="height: 250px;"></div>
                            </div>
                            &lt;!&ndash; /.card-body &ndash;&gt;
                            <div class="card-footer bg-transparent">
                                <div class="row">
                                    <div class="col-4 text-center">
                                        <input type="text" class="knob" data-readonly="true" value="20" data-width="60" data-height="60"
                                               data-fgColor="#39CCCC">

                                        <div class="text-white">سفارش ایمیلی</div>
                                    </div>
                                    &lt;!&ndash; ./col &ndash;&gt;
                                    <div class="col-4 text-center">
                                        <input type="text" class="knob" data-readonly="true" value="50" data-width="60" data-height="60"
                                               data-fgColor="#39CCCC">

                                        <div class="text-white">سفارش آنلاین</div>
                                    </div>
                                    &lt;!&ndash; ./col &ndash;&gt;
                                    <div class="col-4 text-center">
                                        <input type="text" class="knob" data-readonly="true" value="30" data-width="60" data-height="60"
                                               data-fgColor="#39CCCC">

                                        <div class="text-white">سفارش فیزیکی</div>
                                    </div>
                                    &lt;!&ndash; ./col &ndash;&gt;
                                </div>
                                &lt;!&ndash; /.row &ndash;&gt;
                            </div>
                            &lt;!&ndash; /.card-footer &ndash;&gt;
                        </div>
                        &lt;!&ndash; /.card &ndash;&gt;

                        &lt;!&ndash; Calendar &ndash;&gt;
                        <div class="card bg-success-gradient">
                            <div class="card-header no-border">

                                <h3 class="card-title">
                                    <i class="fa fa-calendar"></i>
                                    تقویم
                                </h3>
                                &lt;!&ndash; tools card &ndash;&gt;
                                <div class="card-tools">
                                    &lt;!&ndash; button with a dropdown &ndash;&gt;
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-success btn-sm dropdown-toggle" data-toggle="dropdown">
                                            <i class="fa fa-bars"></i></button>
                                        <div class="dropdown-menu float-right" role="menu">
                                            <a href="#" class="dropdown-item">رویداد تازه</a>
                                            <a href="#" class="dropdown-item">حذف رویدادها</a>
                                            <div class="dropdown-divider"></div>
                                            <a href="#" class="dropdown-item">نمایش تقویم</a>
                                        </div>
                                    </div>
                                    <button type="button" class="btn btn-success btn-sm" data-widget="collapse">
                                        <i class="fa fa-minus"></i>
                                    </button>
                                    <button type="button" class="btn btn-success btn-sm" data-widget="remove">
                                        <i class="fa fa-times"></i>
                                    </button>
                                </div>
                                &lt;!&ndash; /. tools &ndash;&gt;
                            </div>
                            &lt;!&ndash; /.card-header &ndash;&gt;
                            <div class="card-body p-0">
                                &lt;!&ndash;The calendar &ndash;&gt;
                                <div id="calendar" style="width: 100%"></div>
                            </div>
                            &lt;!&ndash; /.card-body &ndash;&gt;
                        </div>
                        &lt;!&ndash; /.card &ndash;&gt;
                    </section>
                    &lt;!&ndash; right col &ndash;&gt;
                </div>-->
                <!-- /.row (main row) -->
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    <footer class="main-footer">
        @yield('footer')
<!--        <strong>CopyLeft &copy; 2018 <a href="http://github.com/hesammousavi/">حسام موسوی</a>.</strong>-->
    </footer>

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->
@yield('script')
<!-- jQuery -->
<script src="/plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
    $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- Morris.js charts -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
<script src="/plugins/morris/morris.min.js"></script>
<!-- Sparkline -->
<script src="/plugins/sparkline/jquery.sparkline.min.js"></script>
<!-- jvectormap -->
<script src="/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- jQuery Knob Chart -->
<script src="/plugins/knob/jquery.knob.js"></script>
<!-- daterangepicker -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.2/moment.min.js"></script>
<script src="/plugins/daterangepicker/daterangepicker.js"></script>
<!-- datepicker -->
<script src="/plugins/datepicker/bootstrap-datepicker.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<!-- Slimscroll -->
<script src="/plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="/plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="/dist/js/adminlte.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="/dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="/dist/js/demo.js"></script>
<script src="/js/custom.js"></script>
</body>
</html>
