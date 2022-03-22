<div class="row">
    <div class="col-md-6">
        <div class="card">
            <div class="card-header">
                <div class="card-head-row">
                    <div class="card-title d-flex">
                        <div class="icon-big text-center mr-3">
                            <i class="flaticon-inbox text-secondary"></i>
                        </div>
                        Status Pesan
                    </div>
                    <div class="card-tools">
                        <a href="#" class="btn btn-info btn-border btn-round btn-sm mr-2">
                            <span class="btn-label">
                                <i class="fa fa-pencil"></i>
                            </span>
                            Export
                        </a>
                        <a href="#" class="btn btn-info btn-border btn-round btn-sm">
                            <span class="btn-label">
                                <i class="fa fa-print"></i>
                            </span>
                            Print
                        </a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="chart-container" style="min-height: 375px">
                    <canvas id="statisticsChart"></canvas>
                </div>
                <div id="myChartLegend"></div>
            </div>
        </div>
    </div>
    <div class="col-md-2">
        <div class="row">
            <div class="col-6 col-sm-6 col-lg-6">
                <div class="card card-menu-box" onclick="redirect()">
                    <div class="card-body p-3 text-center">
                        <div class="h1">
                            <div class="icon-big text-center">
                                <i class="flaticon-inbox text-primary"></i>
                            </div>
                        </div>
                        <div>SMS Masuk</div>
                    </div>
                </div>
            </div>
            <div class="col-6 col-sm-6 col-lg-6">
                <div class="card card-menu-box">
                    <div class="card-body p-3 text-center">
                        <div class="h1">
                            <div class="icon-big text-center">
                                <i class="flaticon-message text-primary"></i>
                            </div>
                        </div>
                        <div>SMS Terkirim</div>
                    </div>
                </div>
            </div>
            <div class="col-6 col-sm-6 col-lg-6">
                <div class="card card-menu-box">
                    <div class="card-body p-3 text-center">
                        <div class="h1">
                            <div class="icon-big text-center">
                                <i class="flaticon-error text-danger"></i>
                            </div>
                        </div>
                        <div>SMS Gagal</div>
                    </div>
                </div>
            </div>
            <div class="col-6 col-sm-6 col-lg-6">
                <div class="card card-menu-box">
                    <div class="card-body p-3 text-center">
                        <div class="h1">
                            <div class="icon-big text-center">
                                <i class="flaticon-envelope-3 text-primary"></i>
                            </div>
                        </div>
                        <div>Draft</div>
                    </div>
                </div>
            </div>
            <div class="col-6 col-sm-6 col-lg-6">
                <div class="card card-menu-box">
                    <div class="card-body p-3 text-center">
                        <div class="h1">
                            <div class="icon-big text-center">
                                <i class="flaticon-users text-primary"></i>
                            </div>
                        </div>
                        <div>Kontak</div>
                    </div>
                </div>
            </div>
            <div class="col-6 col-sm-6 col-lg-6">
                <div class="card bg-danger">
                    <div class="card-body p-3 text-center">
                        <div class="h1">
                            <div class="icon-big text-center">
                                <i class="flaticon-arrow text-light"></i>
                            </div>
                        </div>
                        <div class="text-light">Logout</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card">
            <div class="card-header">
                <div class="card-title">Log Pengunjung</div>
            </div>
            <div class="card-body pb-0">
                <ol class="activity-feed mb-0">
                    <li class="feed-item">
                        <time class="date" datetime="9-12">Sep 17</time>
                        <span class="text">Attending the event <a href="single-event.php">"Some New Event"</a></span>
                    </li>
                    <li class="feed-item">
                        <time class="date" datetime="9-12">Sep 17</time>
                        <span class="text">Attending the event <a href="single-event.php">"Some New Event"</a></span>
                    </li>
                </ol>
            </div>
        </div>
    </div>
</div>