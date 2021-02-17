<?= $this->extend('layout/templateApoteker'); ?>

<?= $this->section('content'); ?>
<div id="body-content">
    <section id="daftar-pasien-adm" class="alur">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title" data-aos="fade-right">
                        <h2>Riwayat Tebus Obat</h2>
                        <p>Riwayat tebus obat seluruh pasien di Klinik Pratama "Karya Asih"</p><br>
                        <table class="table table-striped">
                            <thead class="thead-dark">
                                <tr>
                                    <th scope="col">Pasien</th>
                                    <th scope="col">Tanggal Periksa</th>
                                    <th scope="col">Resep</th>
                                    <th scope="col">No. Urut</th>
                                    <th scope="col">Biaya Obat</th>
                                    <th scope="col">Apoteker</th>
                                </tr>
                            </thead>
                            <tbody style="text-align: center;">
                                <tr>
                                    <td style="text-align: left;">Budi</td>
                                    <td>21-09-2020</td>
                                    <td><a class="btn btn-outline-success" href="<?= base_url('/apoteker/resep') ?>" role="button"><i class="bi bi-eye"></i> Detail Resep</a></td>
                                    <td>3</td>
                                    <td>Rp.70.000</td>
                                    <td style="text-align: left;">Bobi</td>
                                </tr>
                                <tr>
                                    <td style="text-align: left;">Rina</td>
                                    <td>21-09-2020</td>
                                    <td><a class="btn btn-outline-success" href="<?= base_url('/apoteker/resep') ?>" role="button"><i class="bi bi-eye"></i> Detail Resep</a></td>
                                    <td>1</td>
                                    <td>Rp.50.000</td>
                                    <td style="text-align: left;">Bobi</td>
                                </tr>
                                <tr>
                                    <td style="text-align: left;">Cika</td>
                                    <td>24-09-2020</td>
                                    <td><a class="btn btn-outline-success" href="<?= base_url('/apoteker/resep') ?>" role="button"><i class="bi bi-eye"></i> Detail Resep</a></td>
                                    <td>1</td>
                                    <td>Rp.45.000</td>
                                    <td style="text-align: left;">Ratih</td>
                                </tr>
                                <tr>
                                    <td style="text-align: left;">Karina</td>
                                    <td>24-09-2020</td>
                                    <td><a class="btn btn-outline-success" href="<?= base_url('/apoteker/resep') ?>" role="button"><i class="bi bi-eye"></i> Detail Resep</a></td>
                                    <td>2</td>
                                    <td>Rp.75.000</td>
                                    <td style="text-align: left;">Ratih</td>
                                </tr>
                                <tr>
                                    <td style="text-align: left;">Ratu</td>
                                    <td>21-10-2020</td>
                                    <td><a class="btn btn-outline-success" href="<?= base_url('/apoteker/resep') ?>" role="button"><i class="bi bi-eye"></i> Detail Resep</a></td>
                                    <td>3</td>
                                    <td>Rp.60.000</td>
                                    <td style="text-align: left;">Bima</td>
                                </tr>
                                <tr>
                                    <td style="text-align: left;">Jeni</td>
                                    <td>21-10-2020</td>
                                    <td><a class="btn btn-outline-success" href="<?= base_url('/apoteker/resep') ?>" role="button"><i class="bi bi-eye"></i> Detail Resep</a></td>
                                    <td>1</td>
                                    <td>Rp.40.000</td>
                                    <td style="text-align: left;">Bima</td>
                                </tr>
                                <tr>
                                    <td style="text-align: left;">Aulia</td>
                                    <td>24-11-2020</td>
                                    <td><a class="btn btn-outline-success" href="<?= base_url('/apoteker/resep') ?>" role="button"><i class="bi bi-eye"></i> Detail Resep</a></td>
                                    <td>1</td>
                                    <td>Rp.30.000</td>
                                    <td style="text-align: left;">Bobi</td>
                                </tr>
                                <tr>
                                    <td style="text-align: left;">Hengki</td>
                                    <td>24-11-2020</td>
                                    <td><a class="btn btn-outline-success" href="<?= base_url('/apoteker/resep') ?>" role="button"><i class="bi bi-eye"></i> Detail Resep</a></td>
                                    <td>2</td>
                                    <td>Rp.70.000</td>
                                    <td style="text-align: left;">Bobi</td>
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
                                text: "Data Total Biaya Pengobatan Tahun 2020"
                            },
                            axisY: {
                                title: "Total Biaya"
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
                                    yValueFormatString: "Rp ##",
                                    name: "Pengobatan Umum",
                                    dataPoints: [{
                                            label: "Januari",
                                            y: 23400000
                                        },
                                        {
                                            label: "Februari",
                                            y: 22000000
                                        },
                                        {
                                            label: "Maret",
                                            y: 24000000
                                        },
                                        {
                                            label: "April",
                                            y: 18000000
                                        },
                                        {
                                            label: "Mei",
                                            y: 12000000
                                        },
                                        {
                                            label: "Juni",
                                            y: 16280000
                                        },
                                        {
                                            label: "Juli",
                                            y: 22680000
                                        },
                                        {
                                            label: "Agustus",
                                            y: 23040000
                                        },
                                        {
                                            label: "September",
                                            y: 24920000
                                        },
                                        {
                                            label: "Oktober",
                                            y: 23175000
                                        },
                                        {
                                            label: "November",
                                            y: 24435000
                                        },
                                        {
                                            label: "Desember",
                                            y: 25650000
                                        }
                                    ]
                                },
                                {
                                    type: "spline",
                                    showInLegend: true,
                                    yValueFormatString: "Rp ##",
                                    name: "Pengobatan Gigi",
                                    dataPoints: [{
                                            label: "Januari",
                                            y: 24150000
                                        },
                                        {
                                            label: "Februari",
                                            y: 20700000
                                        },
                                        {
                                            label: "Maret",
                                            y: 27300000
                                        },
                                        {
                                            label: "April",
                                            y: 20685000
                                        },
                                        {
                                            label: "Mei",
                                            y: 17220000
                                        },
                                        {
                                            label: "Juni",
                                            y: 21000000
                                        },
                                        {
                                            label: "Juli",
                                            y: 22575000
                                        },
                                        {
                                            label: "Agustus",
                                            y: 17850000
                                        },
                                        {
                                            label: "September",
                                            y: 25830000
                                        },
                                        {
                                            label: "Oktober",
                                            y: 21000000
                                        },
                                        {
                                            label: "November",
                                            y: 26040000
                                        },
                                        {
                                            label: "Desember",
                                            y: 28665000
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