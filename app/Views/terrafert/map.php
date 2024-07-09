<?= $this->extend('layouts/main'); ?>
<?= $this->section('content'); ?>
<div class="d-flex justify-content-center align-items-center py-2 px-2 w-100" style="background-color: #dfdfdf; height: 30px; width: 10px;">
    <div>
        <strong>Keterangan :</strong> <label style="margin-right: 50px;"></label>
    </div>
    <img src="<?= base_url('assets/img/m.png') ?>" style="width: 30px;">
    <div>
        <div>
            <strong> </strong> <label style="margin-right: 30px; margin-left: 5px;">Kekurangan</label>
        </div>
    </div>
    <img src="<?= base_url('assets/img/h.png') ?>" style="width: 30px;">
    <div>
        <div>
            <strong> </strong> <label style="margin-right: 30px; margin-left: 5px">Ideal</label>
        </div>
    </div>
    <img src=" <?= base_url('assets/img/kun.png') ?>" style="width: 30px;">
    <div>
        <div>
            <strong> </strong> <label style="margin-right: 30px; margin-left: 5px">Berlebih</label>
        </div>
    </div>
    <img src=" <?= base_url('assets/img/abu.png') ?>" style="width: 30px;">
    <div>
        <div>
            <strong> </strong> <label style="margin-right: 30px; margin-left: 5px">Tidak Ada Data</label>
        </div>
    </div>
</div>
<div class="d-flex w-100" style="height:100%; position: relative;">
    <div class="w-12" style="position: relative;
    z-index: 1001;
    padding: 10px;
    background-color: transparent;">
        <?php foreach ($Alat as $alat) : ?>
            <a onclick="check(<?= htmlspecialchars(json_encode($alat), ENT_QUOTES, 'UTF-8') ?>)" style="text-decoration:none;">
                <div class="text-center mb-2 d-flex align-items-center justify-content-center py-2 leaf-button" style="background-color: #dfdfdf; color: grey; border-radius: 10px; box-shadow: rgba(0, 0, 0, 0.3) 0px 19px 38px, rgba(0, 0, 0, 0.22) 0px 15px 12px;">
                    <img src="<?= base_url('assets/img/leaf.png') ?>" style="width: 40px;">
                    <label style="font-weight:bold;">
                        Alat <?= $alat['no_device']; ?>
                    </label>
                </div>
            </a>
        <?php endforeach; ?>
    </div>
    <div class="w-40" id="details" style="position: relative;
    z-index: 1001;
    padding: 10px;
    display: none;
    background-color: transparent;">
        <!-- <h2>TEST</h2> -->
        <div class="mb-2 py-2" style="background-color: #dfdfdf; color: grey; border-radius: 10px; box-shadow: rgba(0, 0, 0, 0.3) 0px 19px 38px, rgba(0, 0, 0, 0.22) 0px 15px 12px;">
            <div class="px-2 mb-2 d-flex align-items-center justify-content-between">
                <div class="d-flex align-items-center">
                    <img src="<?= base_url('assets/img/leaf.png') ?>" style="width: 40px;">
                    <label id="namaAlat" style="font-weight:bold; color : black;"> Alat 1</label>
                </div>
                <div>
                    <a onclick="uncheck()">
                        <img src="<?= base_url('assets/img/close.png') ?>" style="width: 25px;">
                    </a>
                </div>
            </div>
            <!-- <div class="d-flex justify-content-center align-items-center py-2 px-2 w-100" style="background-color: #dfdfdf;">
                <img src="<?= base_url('assets/img/m.png') ?>" style="width: 30px;">
                <div>
                    <div>
                        <strong> </strong> <label style="margin-right: 30px;">Kekurangan</label>
                    </div>
                </div>
                <img src="<?= base_url('assets/img/h.png') ?>" style="width: 30px;">
                <div>
                    <div>
                        <strong> </strong> <label style="margin-right: 30px;">Ideal</label>
                    </div>
                </div>
                <img src=" <?= base_url('assets/img/kun.png') ?>" style="width: 30px;">
                <div>
                    <div>
                        <strong> </strong> <label>Berlebih</label>
                    </div>
                </div>
            </div> -->
            <!-- <div class="px-2 py-3 d-flex align-items-center justify-content-center" style="background-color: #ffff;">
                <div class="text-center mx-3">
                    <img src="<?= base_url('assets/img/m.png') ?>" style="width: 40px;">
                    <div>
                        <strong> :</strong> <label>Kekurangan</label>
                    </div>
                </div>
                <div class="text-center mx-3">
                    <img src="<?= base_url('assets/img/h.png') ?>" style="width: 40px;">
                    <div>
                        <strong></strong>
                        <label>Ideal</label>
                    </div>
                </div>
                <div class="text-center mx-3">
                    <img src="<?= base_url('assets/img/kun.png') ?>" style="width: 40px;">
                    <div>
                        <strong></strong>
                        <label>Berlebih</label>
                    </div>
                </div>
            </div> -->

            <div class="px-2 py-3 d-flex align-items-center" style="background-color: #b8b9ba;">
                <img src="<?= base_url('assets/img/pin.png') ?>" style="width: 40px;">
                <div>
                    <div>
                        <strong>Lokasi:</strong> <label for="" id="location">Desa Curug Rendeng, Subang</label>
                    </div>
                    <div>
                        <strong>Koordinat Saat ini:</strong> <label for="" id="longlat">Dummy Data</label>
                    </div>
                </div>
            </div>
            <div class="mt-2">
                <div class="d-flex justify-content-between">
                    <div id="bg-humidity" class="d-flex justify-content-center align-items-center py-2 px-2 w-48" style="background-color: #76AF00;">
                        <div class="text-center me-1">
                            <div>
                                <h5>
                                    <strong id="humidity">65.5%</strong>
                                </h5>
                            </div>
                            <div>
                                <h6>
                                    <strong>Kelembaban</strong>
                                </h6>
                            </div>
                        </div>
                        <img src="<?= base_url('assets/img/water.png') ?>" style="width: 40px;">
                    </div>
                    <div id="bg-ph" class="d-flex justify-content-center align-items-center py-2 px-2 w-48" style="background-color: #76AF00;">
                        <div class="text-center me-1">
                            <div>
                                <h5>
                                    <strong id="ph">65.5%</strong>
                                </h5>
                            </div>
                            <div>
                                <h6>
                                    <strong>pH</strong>
                                </h6>
                            </div>
                        </div>
                        <img src="<?= base_url('assets/img/pH.png') ?>" style="width: 40px;">
                    </div>
                </div>
            </div>
            <div class="d-flex justify-content-between mt-2 mb-1">
                <div id="bg-natrium" class="d-flex justify-content-center align-items-center py-2 px-2 w-30" style="background-color: #76AF00;">
                    <div class="text-center me-1">
                        <div>
                            <div style="font-size : 10px !important; color:black;">
                                <strong id="natrium">65.5%</strong>
                            </div>
                        </div>
                        <div>
                            <div style="font-size : 10px !important; color:black;">
                                <strong>Nitrogen (N)</strong>
                            </div>
                        </div>
                    </div>
                    <img src="<?= base_url('assets/img/N.png') ?>" style="width: 30px;">
                </div>
                <div id="bg-phosphorus" class="d-flex justify-content-center align-items-center py-2 px-2 w-30" style="background-color: #76AF00;">
                    <div class="text-center me-1">
                        <div>
                            <div style="font-size : 10px !important; color:black;">
                                <strong id="phosphorus">65.5%</strong>
                            </div>
                        </div>
                        <div>
                            <div style="font-size : 10px !important; color:black;">
                                <strong>Fosfor (P)</strong>
                            </div>
                        </div>
                    </div>
                    <img src="<?= base_url('assets/img/P.png') ?>" style="width: 30px;">
                </div>
                <div id="bg-potassium" class="d-flex justify-content-center align-items-center py-2 px-2 w-30" style="background-color: #76AF00;">
                    <div class="text-center me-1">
                        <div>
                            <div style="font-size : 10px !important; color:black;">
                                <strong id="potassium">65.5%</strong>
                            </div>
                        </div>
                        <div>
                            <div style="font-size : 10px !important; color:black;">
                                <strong>Kalium (K)</strong>
                            </div>
                        </div>
                    </div>
                    <img src="<?= base_url('assets/img/K.png') ?>" style="width: 30px;">
                </div>
            </div>
        </div>
    </div>
    <div id="maps" class="w-100" style="position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(255, 255, 255, 0.5);">
    </div>
</div>

<script>
    var map = L.map('maps').setView({
        lat: 0.7893,
        lon: 113.9213
    }, 10);

    L.tileLayer('https://mt1.google.com/vt/lyrs=y&x={x}&y={y}&z={z}', {
        maxZoom: 22,
        attribution: '© Google Maps'
    }).addTo(map);

    // L.marker({lat : 0.7893, lon : 113.9213}).bindPopup('Hello Indonesia').addTo(map);

    const myCustomColour = '#1cbb8c'

    const markerHtmlStyles = `
    background-color: ${myCustomColour};
    width: 1.5rem;
    height: 1.5rem;
    display: block;
    right: 0.7rem;
    bottom: 0.2rem;
    position: relative;
    border-radius: 3rem 3rem 0;
    transform: rotate(45deg);
    border: 1px solid #FFFFFF`

    const icon = L.divIcon({
        className: "my-custom-pin",
        iconAnchor: [0, 24],
        labelAnchor: [-6, 0],
        popupAnchor: [0, -36],
        html: `<span style="${markerHtmlStyles}" />`
    })

    $.ajax({
        url: "<?php echo base_url('map/getAllDevices'); ?>",
        type: "POST",
        data: {},
        dataType: "json",
        success: function(data) {
            $.each(data, function(index, alat) {
                // console.log(alat);

                var myCustomColour = '#6c757d';

                var jumlah = 0;
                if (alat.N != null) {
                    var Npoint = parseInt(alat.N) < 210 ? 0 : (parseInt(alat.N) > 500 ? 1 : 2);
                    var Ppoint = parseInt(alat.P) < 8 ? 0 : (parseInt(alat.P) > 10 ? 1 : 2);
                    var Kpoint = parseInt(alat.K) < 210 ? 0 : (parseInt(alat.K) > 400 ? 1 : 2);

                    if ((Npoint == 2 && Ppoint == 2 && Kpoint == 2)) {
                        myCustomColour = '#1cbb8c';
                    } else if ((Npoint == 1 && Ppoint == 1 && Kpoint == 1) || (Npoint == 1 && Ppoint == 1 && Kpoint == 2) || (Npoint == 1 && Ppoint == 2 && Kpoint == 1) | (Npoint == 2 && Ppoint == 1 && Kpoint == 1) || (Npoint == 2 && Ppoint == 2 && Kpoint == 1) || (Npoint == 1 && Ppoint == 2 && Kpoint == 2) || (Npoint == 2 && Ppoint == 1 && Kpoint == 2)) {
                        myCustomColour = '#fcb92c';
                    } else {
                        myCustomColour = '#dc3545';
                    }
                }

                const markerHtmlStyles = `
                background-color: ${myCustomColour};
                width: 1.5rem;
                height: 1.5rem;
                display: block;
                right: 0.7rem;
                bottom: 0.2rem;
                position: relative;
                border-radius: 3rem 3rem 0;
                transform: rotate(45deg);
                border: 1px solid #FFFFFF`

                const icon = L.divIcon({
                    className: "my-custom-pin",
                    iconAnchor: [0, 24],
                    labelAnchor: [-6, 0],
                    popupAnchor: [0, -36],
                    html: `<span style="${markerHtmlStyles}" />`
                })
                L.marker({
                    lat: alat.latitude,
                    lon: alat.longitude
                }, {
                    icon: icon
                }).addTo(map);
            });
        },
        error: function(xhr, status, error) {
            console.error(error);
        }
    });

    // define rectangle 1 geographical bounds
    var bounds = [
        [-6.690872, 107.672272],
        [-6.690887, 107.672337],
        [-6.690817, 107.672350],
        [-6.690823, 107.672291]
    ];

    // create an orange rectangle
    L.rectangle(bounds, {
        color: "red",
        weight: 4
    }).addTo(map);

    // define rectangle geographical bounds
    var bounds = [
        [-6.690887, 107.672357],
        [-6.690866, 107.672433],
        [-6.690824, 107.672427],
        [-6.690817, 107.672351]
    ];

    // create an orange rectangle
    L.rectangle(bounds, {
        color: "grey",
        weight: 1
    }).addTo(map);

    // define rectangle geographical bounds
    var bounds = [
        [-6.675621, 107.673930],
        [-6.675746690326929, 107.67382129311204],
        [-6.675921, 107.673875],
        [-6.676092, 107.673808],
        [-6.676275, 107.674096],
        [-6.675778052663614, 107.67431749408412]
    ];
    // create an orange rectangle
    L.polygon(bounds, {
        color: "grey",
        weight: 1
    }).addTo(map);

    // define rectangle geographical bounds
    var bounds = [
        [-6.676262, 107.674164],
        [-6.676647, 107.673943],
        [-6.676750, 107.674299],
        [-6.676405, 107.674498],
    ];

    // create an orange rectangle
    L.polygon(bounds, {
        color: "grey",
        weight: 1
    }).addTo(map);

    // define rectangle geographical bounds
    var bounds = [
        [-6.677698, 107.672633],
        [-6.677828, 107.672927],
        [-6.678320, 107.672744],
        [-6.678210, 107.672444]
    ];

    // create an orange rectangle
    L.polygon(bounds, {
        color: "grey",
        weight: 1
    }).addTo(map);

    // define rectangle geographical bounds
    var bounds = [
        [-6.674560, 107.674206],
        [-6.675035, 107.673954],
        [-6.675306, 107.674581],
        [-6.675024, 107.674707],
        [-6.674822, 107.674316],
        [-6.674598, 107.674385]
    ];

    // create an orange rectangle
    L.polygon(bounds, {
        color: "grey",
        weight: 1
    }).addTo(map);

    // define rectangle geographical bounds
    var bounds = [
        [-6.677022, 107.673838],
        [-6.677352, 107.673597],
        [-6.677523, 107.673876],
        [-6.677123, 107.674053]
    ];

    // create an orange rectangle
    L.polygon(bounds, {
        color: "grey",
        weight: 1
    }).addTo(map);

    // define rectangle geographical bounds
    var bounds = [
        [-6.676830, 107.673651],
        [-6.676585, 107.673699],
        [-6.676727, 107.674257],
        [-6.677012, 107.674103]
    ];

    // create an orange rectangle
    L.polygon(bounds, {
        color: "grey",
        weight: 1
    }).addTo(map);

    var bounds = [
        [-6.690288, 107.670685],
        [-6.690461, 107.670650],
        [-6.690529, 107.671004],
        [-6.690466, 107.671016],
        [-6.690415, 107.670999],
        [-6.690400, 107.670910],
        [-6.690321, 107.670910]
    ];

    // create an orange rectangle
    L.polygon(bounds, {
        color: "grey",
        weight: 1
    }).addTo(map);

    var bounds = [
        [-6.690985, 107.670884],
        [-6.690940, 107.670957],
        [-6.690806, 107.670978],
        [-6.690792, 107.670832],
        [-6.690912, 107.670799],
        [-6.690931, 107.670877]
    ];

    // create an orange rectangle
    L.polygon(bounds, {
        color: "grey",
        weight: 1
    }).addTo(map);

    var bounds = [
        [-6.690867, 107.671499],
        [-6.690907, 107.671692],
        [-6.690757, 107.671744],
        [-6.690723, 107.671525]
    ];

    // create an orange rectangle
    L.polygon(bounds, {
        color: "grey",
        weight: 1
    }).addTo(map);

    var bounds = [
        [-6.691793, 107.671027],
        [-6.691876, 107.671001],
        [-6.691935, 107.671224],
        [-6.691746, 107.671262],
        [-6.691719, 107.671171],
        [-6.691810, 107.671136]
    ];

    // create an orange rectangle
    L.polygon(bounds, {
        color: "grey",
        weight: 1
    }).addTo(map);

    var bounds = [
        [-6.691336, 107.672879],
        [-6.691207, 107.672889],
        [-6.691143, 107.672686],
        [-6.691226, 107.672662]

    ];

    // create an orange rectangle
    L.polygon(bounds, {
        color: "grey",
        weight: 1
    }).addTo(map);

    var bounds = [
        [-6.691991, 107.672109],
        [-6.691998, 107.672171],
        [-6.692151, 107.672119],
        [-6.692111, 107.672063]
    ];

    // create an orange rectangle
    L.polygon(bounds, {
        color: "grey",
        weight: 1
    }).addTo(map);

    // define rectangle geographical bounds
    var bounds = [
        [-6.690833, 107.671780],
        [-6.690878, 107.671952],
        [-6.690753, 107.671995],
        [-6.690726, 107.671834]
    ];

    // create an orange rectangle
    L.rectangle(bounds, {
        color: "grey",
        weight: 1
    }).addTo(map);

    // define rectangle geographical bounds
    var bounds = [
        [-6.690670, 107.671764],
        [-6.690465, 107.671815],
        [-6.690494, 107.671992],
        [-6.690686, 107.671941]
    ];

    // create an orange rectangle
    L.rectangle(bounds, {
        color: "grey",
        weight: 1
    }).addTo(map);

    // define rectangle geographical bounds
    var bounds = [
        [-6.690631, 107.672086],
        [-6.690681, 107.672182],
        [-6.690827, 107.672139],
        [-6.690785, 107.672064]
    ];

    // create an orange rectangle
    L.polygon(bounds, {
        color: "grey",
        weight: 1
    }).addTo(map);

    // define rectangle geographical bounds
    var bounds = [
        [-6.690767, 107.672275],
        [-6.690655, 107.672284],
        [-6.690684, 107.672430],
        [-6.690809, 107.672413]
    ];

    // create an orange rectangle
    L.rectangle(bounds, {
        color: "grey",
        weight: 1
    }).addTo(map);

    // define rectangle geographical bounds
    var bounds = [
        [-6.690917, 107.672368],
        [-6.691027, 107.672407],
        [-6.691063, 107.672529],
        [-6.690970, 107.672498]
    ];

    // create an orange rectangle
    L.rectangle(bounds, {
        color: "grey",
        weight: 1
    }).addTo(map);

    // define rectangle geographical bounds
    var bounds = [
        [-6.691748, 107.672999],
        [-6.691928, 107.673380],
        [-6.691618, 107.673505],
        [-6.691432, 107.673130]
    ];

    // create an orange rectangle
    L.polygon(bounds, {
        color: "grey",
        weight: 1
    }).addTo(map);

    // define rectangle geographical bounds
    var bounds = [
        [-6.691934, 107.673402],
        [-6.692148, 107.673817],
        [-6.691866, 107.673925],
        [-6.691663, 107.673533]
    ];

    // create an orange rectangle
    L.polygon(bounds, {
        color: "grey",
        weight: 1
    }).addTo(map);

    // define rectangle geographical bounds
    var bounds = [
        [-6.691889, 107.674011],
        [-6.692041, 107.674448],
        [-6.692397, 107.674323],
        [-6.692182, 107.673880]
    ];

    // create an orange rectangle
    L.polygon(bounds, {
        color: "grey",
        weight: 1
    }).addTo(map);

    // define rectangle geographical bounds
    var bounds = [
        [-6.692097, 107.671829],
        [-6.692067, 107.671690],
        [-6.691891, 107.671718],
        [-6.691899, 107.671836]
    ];

    // create an orange rectangle
    L.polygon(bounds, {
        color: "grey",
        weight: 1
    }).addTo(map);

    // define rectangle geographical bounds
    var bounds = [
        [-6.691847, 107.672964],
        [-6.692013, 107.672875],
        [-6.692049, 107.672970],
        [-6.692038, 107.673056],
        [-6.691967, 107.673188]
    ];

    // create an orange rectangle
    L.polygon(bounds, {
        color: "grey",
        weight: 1
    }).addTo(map);

    // define rectangle geographical bounds
    var bounds = [
        [-6.692273, 107.673725],
        [-6.692503, 107.674125],
        [-6.692744, 107.673984],
        [-6.692600, 107.673498]

    ];

    // create an orange rectangle
    L.polygon(bounds, {
        color: "grey",
        weight: 1
    }).addTo(map);

    // define rectangle geographical bounds
    var bounds = [
        [-6.690875, 107.672435],
        [-6.690887, 107.672515],
        [-6.690827, 107.672510],
        [-6.690817, 107.672443]
    ];

    // create an orange rectangle
    L.rectangle(bounds, {
        color: "grey",
        weight: 1
    }).addTo(map);

    // define rectangle geographical bounds
    var bounds = [
        [-6.698929, 107.676562],
        [-6.698756, 107.675109],
        [-6.693869, 107.675325],
        [-6.688714, 107.678029],
        [-6.687532, 107.678137],
        [-6.683988, 107.680245],
        [-6.683827, 107.680137],
        [-6.681786, 107.681002],
        [-6.679530, 107.682246],
        [-6.676523, 107.683598],
        [-6.674966, 107.684787],
        [-6.671958, 107.677704],
        [-6.671550, 107.671862],
        [-6.671821, 107.670568],
        [-6.671685, 107.668592],
        [-6.673377, 107.668252],
        [-6.672700, 107.667025],
        [-6.673309, 107.665766],
        [-6.672548, 107.665307],
        [-6.670926, 107.666072],
        [-6.670118, 107.665701],
        [-6.673578, 107.663432],
        [-6.673215, 107.662298],
        [-6.673707, 107.661451],
        [-6.675638, 107.662747],
        [-6.675627, 107.662773],
        [-6.679811, 107.658593],
        [-6.682988, 107.656092],
        [-6.685287, 107.656317],
        [-6.686372, 107.655577],
        [-6.686596, 107.656831],
        [-6.687426, 107.657410],
        [-6.689821, 107.661493],
        [-6.694545, 107.660507],
        [-6.696067, 107.660984],
        [-6.698503, 107.664049],
        [-6.699856, 107.664390],
        [-6.698672, 107.672837],
        [-6.699992, 107.673518]
    ];

    // create an orange rectangle
    L.polygon(bounds, {
        color: "darkgrey",
        weight: 5
    }).addTo(map);

    // zoom the map to the rectangle bounds
    map.setView({
        lat: -6.6908840,
        lon: 107.6722790
    }, 14);

    function check(data) {
        console.log(data);
        $('#namaAlat').html(data.device_name);
        $('#longlat').html(data.longitude + ', ' + data.latitude);
        $('#humidity').html(data.humidity ? data.humidity + '%' : 0);
        $('#ph').html(data.ph ? data.ph : 0);
        $('#natrium').html(data.N ? data.N + ' ppm' : 0);
        $('#phosphorus').html(data.P ? data.P + ' ppm' : 0);
        $('#potassium').html(data.K ? data.K + ' ppm' : 0);
        $('#location').html(data.first_address);
        $('#details').css('display', '');

        var jumlah = 0;
        var myCustomColourN = '#6c757d';
        var myCustomColourP = '#6c757d';
        var myCustomColourK = '#6c757d';
        var myCustomColourPH = '#6c757d';
        var myCustomColourHumidity = '#6c757d';
        if (data.N != null) {
            myCustomColourN = parseInt(data.N) < 210 ? '#EB3939' : (parseInt(data.N) > 500 ? '#EBFF02' : '#76AF00');
        }


        if (data.P != null) {
            myCustomColourP = parseInt(data.P) < 8 ? '#EB3939' : (parseInt(data.P) > 10 ? '#EBFF02' : '#76AF00');
        }


        if (data.K != null) {
            myCustomColourK = parseInt(data.K) < 210 ? '#EB3939' : (parseInt(data.K) > 400 ? '#EBFF02' : '#76AF00');
        }


        if (data.humidity != null) {
            myCustomColourHumidity = parseInt(data.humidity) < 40 ? '#EB3939' : (parseInt(data.humidity) > 60 ? '#EBFF02' : '#76AF00');
        }


        if (data.ph != null) {
            myCustomColourPH = data.ph < 4.5 ? '#EB3939' : (data.ph > 6.5 ? '#EBFF02' : '#76AF00');
        }

        $('#bg-humidity').css('background-color', myCustomColourHumidity);
        $('#bg-ph').css('background-color', myCustomColourPH);
        $('#bg-natrium').css('background-color', myCustomColourN);
        $('#bg-phosphorus').css('background-color', myCustomColourP);
        $('#bg-potassium').css('background-color', myCustomColourK);


        map.setView({
            lat: data.latitude,
            lon: data.longitude
        }, 20);
    }

    function uncheck() {
        map.setView({
            lat: -6.6908840,
            lon: 107.6722790
        }, 14);
        $('#details').css('display', 'none');
    }
</script>
<?= $this->endSection(); ?>