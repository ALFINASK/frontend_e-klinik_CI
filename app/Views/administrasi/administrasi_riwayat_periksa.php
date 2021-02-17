<?= $this->extend('layout/templateAdministrasi'); ?>

<?= $this->section('content'); ?>
<div id="body-content">
    <section id="daftar-pasien-adm" class="alur">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title" data-aos="fade-right">
                        <h2>Riwayat Periksa</h2>
                        <p>Riwayat pemeriksaan seluruh pasien di Klinik Pratama "Karya Asih"</p><br>
                        <table class="table table-striped">
                            <thead class="thead-dark">
                                <tr>
                                    <th scope="col">Pasien</th>
                                    <th scope="col">Tanggal Periksa</th>
                                    <th scope="col">Jenis Pengobatan</th>
                                    <th scope="col">No. Urut</th>
                                    <th scope="col">Dokter</th>
                                    <th scope="col">Petugas</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Budi</td>
                                    <td>21-09-2020</td>
                                    <td>Gigi</td>
                                    <td>3</td>
                                    <td>Riana</td>
                                    <td>Fitri</td>
                                </tr>
                                <tr>
                                    <td>Rina</td>
                                    <td>21-09-2020</td>
                                    <td>Umum</td>
                                    <td>1</td>
                                    <td>Hermawan</td>
                                    <td>Fitri</td>
                                </tr>
                                <tr>
                                    <td>Cika</td>
                                    <td>24-09-2020</td>
                                    <td>Gigi</td>
                                    <td>1</td>
                                    <td>Kenan</td>
                                    <td>Rika</td>
                                </tr>
                                <tr>
                                    <td>Budi</td>
                                    <td>24-09-2020</td>
                                    <td>Umum</td>
                                    <td>2</td>
                                    <td>Hermawan</td>
                                    <td>Rika</td>
                                </tr>
                                <tr>
                                    <td>Budi</td>
                                    <td>21-09-2020</td>
                                    <td>Gigi</td>
                                    <td>3</td>
                                    <td>Riana</td>
                                    <td>Fitri</td>
                                </tr>
                                <tr>
                                    <td>Rina</td>
                                    <td>21-09-2020</td>
                                    <td>Umum</td>
                                    <td>1</td>
                                    <td>Hermawan</td>
                                    <td>Fitri</td>
                                </tr>
                                <tr>
                                    <td>Cika</td>
                                    <td>24-09-2020</td>
                                    <td>Gigi</td>
                                    <td>1</td>
                                    <td>Kenan</td>
                                    <td>Rika</td>
                                </tr>
                                <tr>
                                    <td>Budi</td>
                                    <td>24-09-2020</td>
                                    <td>Umum</td>
                                    <td>2</td>
                                    <td>Hermawan</td>
                                    <td>Rika</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <head>
                <script>
                    window.onload = function() {

                        var chart = new CanvasJS.Chart("chartContainer", {
                            theme: "light2",
                            animationEnabled: true,
                            title: {
                                text: "Data Riwayat Periksa Tahun 2020"
                            },
                            axisY: {
                                title: "Jumlah Pasien"
                            },
                            toolTip: {
                                shared: "true"
                            },
                            legend: {
                                cursor: "pointer",
                                itemclick: toggleDataSeries
                            },
                            data: [{
                                    type: "spline",
                                    showInLegend: true,
                                    yValueFormatString: "## pasien",
                                    name: "Pengobatan Umum",
                                    dataPoints: [{
                                            label: "Januari",
                                            y: 585
                                        },
                                        {
                                            label: "Februari",
                                            y: 550
                                        },
                                        {
                                            label: "Maret",
                                            y: 600
                                        },
                                        {
                                            label: "April",
                                            y: 450
                                        },
                                        {
                                            label: "Mei",
                                            y: 300
                                        },
                                        {
                                            label: "Juni",
                                            y: 407
                                        },
                                        {
                                            label: "Juli",
                                            y: 567
                                        },
                                        {
                                            label: "Agustus",
                                            y: 576
                                        },
                                        {
                                            label: "September",
                                            y: 623
                                        },
                                        {
                                            label: "Oktober",
                                            y: 515
                                        },
                                        {
                                            label: "November",
                                            y: 543
                                        },
                                        {
                                            label: "Desember",
                                            y: 570
                                        }
                                    ]
                                },
                                {
                                    type: "spline",
                                    showInLegend: true,
                                    yValueFormatString: "## pasien",
                                    name: "Pengobatan Gigi",
                                    dataPoints: [{
                                            label: "Januari",
                                            y: 210
                                        },
                                        {
                                            label: "Februari",
                                            y: 180
                                        },
                                        {
                                            label: "Maret",
                                            y: 260
                                        },
                                        {
                                            label: "April",
                                            y: 197
                                        },
                                        {
                                            label: "Mei",
                                            y: 164
                                        },
                                        {
                                            label: "Juni",
                                            y: 200
                                        },
                                        {
                                            label: "Juli",
                                            y: 215
                                        },
                                        {
                                            label: "Agustus",
                                            y: 170
                                        },
                                        {
                                            label: "September",
                                            y: 246
                                        },
                                        {
                                            label: "Oktober",
                                            y: 200
                                        },
                                        {
                                            label: "November",
                                            y: 248
                                        },
                                        {
                                            label: "Desember",
                                            y: 273
                                        }
                                    ]
                                }
                            ]
                        });
                        chart.render();

                        function toggleDataSeries(e) {
                            if (typeof(e.dataSeries.visible) === "undefined" || e.dataSeries.visible) {
                                e.dataSeries.visible = false;
                            } else {
                                e.dataSeries.visible = true;
                            }
                            chart.render();
                        }

                    }
                </script>
            </head>

            <body>
                <div id="chartContainer" style="height: 400px; width: 100%;"></div>
                <script src="<?= base_url('/assets/js/canvasjs.min.js') ?>"></script>
            </body>

        </div>


    </section>
</div>
<?= $this->endSection(); ?>