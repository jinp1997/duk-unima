<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="description" content="UNIMA MAPALUS">
        <meta name="author" content="UNIMA MAPALUS">
        <title>SI - DATA KEPEGAWAIAN UNIMA</title>
        <link rel="shortcut icon" href="<?php echo base_url(); ?>assets/img/logo.png">

        <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

        <link href="<?= base_url('assets/new-assets/plugins/bootstrap/css/bootstrap.css') ?>" rel="stylesheet" type="text/css">
        <link href="<?= base_url('assets/new-assets/plugins/node-waves/waves.css') ?>" rel="stylesheet" type="text/css">
        <link href="<?= base_url('assets/new-assets/plugins/animate-css/animate.css') ?>" rel="stylesheet" type="text/css">
        <link href="<?= base_url('assets/new-assets/plugins/jquery-datatable/skin/bootstrap/css/dataTables.bootstrap.css') ?>" rel="stylesheet" type="text/css">
        <link href="<?= base_url('assets/new-assets/plugins/morrisjs/morris.css') ?>" rel="stylesheet" />
        <link href="<?= base_url('assets/new-assets/css/style.css') ?>" rel="stylesheet" type="text/css">
        <link href="<?= base_url('assets/new-assets/css/themes/all-themes.css') ?>" rel="stylesheet" type="text/css">
        <link href="<?= base_url('assets/new-assets/plugins/bootstrap-material-datetimepicker/css/bootstrap-material-datetimepicker.css') ?>" rel="stylesheet" />
        <link href="<?= base_url('assets/new-assets/plugins/bootstrap-datepicker/css/bootstrap-datepicker.css') ?>" rel="stylesheet" />
        <link href="<?= base_url('assets/new-assets/plugins/waitme/waitMe.css') ?>" rel="stylesheet" />
        <link href="<?= base_url('assets/new-assets/plugins/bootstrap-select/css/bootstrap-select.css') ?>" rel="stylesheet" />
    </head>
    <body class="theme-red">
        <?php $this->load->view('layouts/topbar'); ?>       
        <?php $this->load->view('layouts/sidebar'); ?>
        <?php $this->load->view($main); ?>
        <?php $this->load->view('layouts/footer'); ?>

        <script src="<?= base_url('assets/new-assets/plugins/jquery/jquery.min.js') ?>"></script>  
        <script src="<?= base_url('assets/new-assets/plugins/bootstrap/js/bootstrap.js') ?>"></script>  
        <script src="<?= base_url('assets/new-assets/plugins/bootstrap-select/js/bootstrap-select.js') ?>"></script>  
        <script src="<?= base_url('assets/new-assets/plugins/jquery-slimscroll/jquery.slimscroll.js') ?>"></script>  
        <script src="<?= base_url('assets/new-assets/plugins/node-waves/waves.js') ?>"></script>  
        <script src="<?= base_url('assets/new-assets/plugins/jquery-datatable/jquery.dataTables.js') ?>"></script>  
        <script src="<?= base_url('assets/new-assets/plugins/jquery-datatable/skin/bootstrap/js/dataTables.bootstrap.js') ?>"></script>  
        <script src="<?= base_url('assets/new-assets/plugins/jquery-datatable/extensions/export/dataTables.buttons.min.js') ?>"></script>  
        <script src="<?= base_url('assets/new-assets/plugins/jquery-datatable/extensions/export/buttons.flash.min.js') ?>"></script>  
        <script src="<?= base_url('assets/new-assets/plugins/jquery-datatable/extensions/export/jszip.min.js') ?>"></script>  
        <script src="<?= base_url('assets/new-assets/plugins/jquery-datatable/extensions/export/pdfmake.min.js') ?>"></script>  
        <script src="<?= base_url('assets/new-assets/plugins/jquery-datatable/extensions/export/vfs_fonts.js') ?>"></script>  
        <script src="<?= base_url('assets/new-assets/plugins/jquery-datatable/extensions/export/buttons.html5.min.js') ?>"></script>  
        <script src="<?= base_url('assets/new-assets/plugins/jquery-datatable/extensions/export/buttons.print.min.js') ?>"></script>  
        <script src="<?= base_url('assets/new-assets/plugins/autosize/autosize.js') ?>"></script>
        <script src="<?= base_url('assets/new-assets/plugins/momentjs/moment.js') ?>"></script>
        <script src="<?= base_url('assets/new-assets/plugins/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js') ?>"></script>
        <script src="<?= base_url('assets/new-assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js') ?>"></script>
        <script src="<?= base_url('assets/new-assets/js/pages/forms/basic-form-elements.js') ?>"></script>
        <script src="<?= base_url('assets/new-assets/js/pages/tables/jquery-datatable.js') ?>"></script>  
        <script src="<?= base_url('assets/new-assets/plugins/jquery-countto/jquery.countTo.js') ?>"></script>

        <script src="<?= base_url('assets/new-assets/plugins/raphael/raphael.min.js') ?>"></script>
        <script src="<?= base_url('assets/new-assets/plugins/morrisjs/morris.js') ?>"></script>

        <script src="<?= base_url('assets/new-assets/plugins/chartjs/Chart.bundle.js') ?>"></script>

        <script src="<?= base_url('assets/new-assets/plugins/flot-charts/jquery.flot.js') ?>"></script>
        <script src="<?= base_url('assets/new-assets/plugins/flot-charts/jquery.flot.resize.js') ?>"></script>
        <script src="<?= base_url('assets/new-assets/plugins/flot-charts/jquery.flot.pie.js') ?>"></script>
        <script src="<?= base_url('assets/new-assets/plugins/flot-charts/jquery.flot.categories.js') ?>"></script>
        <script src="<?= base_url('assets/new-assets/plugins/flot-charts/jquery.flot.time.js') ?>"></script>

        <script src="<?= base_url('assets/new-assets/plugins/jquery-sparkline/jquery.sparkline.js') ?>"></script>

        <script src="<?= base_url('assets/new-assets/js/admin.js') ?>"></script> 
        <script src="<?= base_url('assets/new-assets/js/demo.js') ?>"></script>

        <?php  
            $terdaftar = $this->db->get('pegawai')->num_rows();
            $diterima  = $this->db->where('jenis_kelamin', 'Laki-Laki')->get('pegawai')->num_rows();
            $ditolak   = $this->db->where('jenis_kelamin', 'Perempuan')->get('pegawai')->num_rows();

            $total_realisasi = 10;
            $penetapan = 100;
        ?>
        <script type="text/javascript">
            $(function () {
                initDonutChart();
            });

            var realtime = 'on';
            function initRealTimeChart() {
                //Real time ==========================================================================================
                var plot = $.plot('#real_time_chart', [getRandomData()], {
                    series: {
                        shadowSize: 0,
                        color: 'rgb(0, 188, 212)'
                    },
                    grid: {
                        borderColor: '#f3f3f3',
                        borderWidth: 1,
                        tickColor: '#f3f3f3'
                    },
                    lines: {
                        fill: true
                    },
                    yaxis: {
                        min: 0,
                        max: 100
                    },
                    xaxis: {
                        min: 0,
                        max: 100
                    }
                });

                function updateRealTime() {
                    plot.setData([getRandomData()]);
                    plot.draw();

                    var timeout;
                    if (realtime === 'on') {
                        timeout = setTimeout(updateRealTime, 320);
                    } else {
                        clearTimeout(timeout);
                    }
                }

                updateRealTime();

                $('#realtime').on('change', function () {
                    realtime = this.checked ? 'on' : 'off';
                    updateRealTime();
                });
                //====================================================================================================
            }

            function initSparkline() {
                $(".sparkline").each(function () {
                    var $this = $(this);
                    $this.sparkline('html', $this.data());
                });
            }

            function initDonutChart() {
                Morris.Donut({
                    element: 'donut_chart',
                    data: [{
                        label: 'JUMLAH PEGAWAI',
                        value: <?= ($terdaftar) ?>
                    },
                    {
                        label: 'LAKI-LAIK',
                        value: <?= ($diterima) ?>
                    },
                    {
                        label: 'PEREMPUAN',
                        value: <?= ($ditolak) ?>
                    }],
                    colors: ['rgb(233, 30, 99)', 'rgb(0, 188, 212)', 'rgb(255, 152, 0)', 'rgb(0, 150, 136)', 'rgb(96, 125, 139)'],
                    formatter: function (y) {
                        return y
                    }
                });
            }

            var data = [], totalPoints = 110;
            function getRandomData() {
                if (data.length > 0) data = data.slice(1);

                while (data.length < totalPoints) {
                    var prev = data.length > 0 ? data[data.length - 1] : 50, y = prev + Math.random() * 10 - 5;
                    if (y < 0) { y = 0; } else if (y > 100) { y = 100; }

                    data.push(y);
                }

                var res = [];
                for (var i = 0; i < data.length; ++i) {
                    res.push([i, data[i]]);
                }

                return res;
            }
        </script>
    </body>
</html>