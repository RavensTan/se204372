<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="card text-center">
            <div class="card-header">
                <h1 style="text-align: center; ">จัดการบัญชีผู้ใช้</h1>
            </div>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-sm-6">
                    <div class="card text-center" style="height: 100%;">
                        <div class="card-body">
                            <h3 class="card-title">รูปเจ้าหน้าที่</h3>
                            <img src="https://cdn-icons.flaticon.com/png/512/122/premium/122491.png?token=exp=1647156127~hmac=9c8ac00e509ba9fdbe0fbd4380ce5416" style="width: 300px">
                            <p class="card-text"></p>
                            <a href="#" class="btn btn-primary">แก้ไขรูปภาพ</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="card" style="height: 100%;">
                        <div class="card-body">
                            <h3 class="card-title">ข้อมูลนิสิต</h3>
                            <div class="input-group input-group-sm mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="inputGroup-sizing-sm">ชื่อ-สกุล</span>
                                </div>
                                <input type="text" readonly class="form-control" placeholder="เจ้าหน้าที่ กะดึกตลอดไป" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
                            </div>

                            <div class="input-group input-group-sm mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="inputGroup-sizing-sm">รหัสเจ้าหน้าที่</span>
                                </div>
                                <input type="text" readonly class="form-control" placeholder="612547896" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
                            </div>

                            <div class="input-group input-group-sm mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="inputGroup-sizing-sm">อีเมล</span>
                                </div>
                                <input type="text" readonly class="form-control" placeholder="admin_midnight@ku.th" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
                            </div>

                            <a href="#" class="btn btn-primary">แก้ไขข้อมูล</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>