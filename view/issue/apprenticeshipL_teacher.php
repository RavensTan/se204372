<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="card text-center">
            <div class="card-header">
                <h1 style="text-align: center; ">ออกหนังสือ</h1>
            </div>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-sm-12">
                    <div class="card text-center" style="height: 100%;">
                        <div class="card-body">
                            <form method="get" action="">
                                <table id="ProductDetailtable" class="table table-bordered table-striped" style="text-align:right;">
                                    <thead>
                                        
                                        <h1 style="font-size:140%;">หนังสือขอความอนุเคราะห์ฝึกงาน</h1>
                                        <br></br>
                                        <br></br>
                                       
                                        <table>
                                            <thead  >
                                                <div class="input-group mb-3">
                                                    <input type="text" class="form-control" placeholder="ชื่อ-สกุล" aria-label="ชื่อ-สกุล" aria-describedby="basic-addon2">
                                                    <div class="input-group-append">
                                                         <button class="btn btn-outline-secondary" type="button">เพิ่ม</button>
                                                    </div>
                                                </div>
                                                <div class="input-group mb-3">
                                                    <input type="text" class="form-control" placeholder="ชื่อ-สกุล" aria-label="ชื่อ-สกุล" aria-describedby="basic-addon2">
                                                    <div class="input-group-append">
                                                         <button class="btn btn-outline-secondary" type="button">เพิ่ม</button>
                                                    </div>
                                                </div>
                                            </thead>

                                        </table>
                                        <div class="pull-right">
                                            <button class="btn btn-outline-secondary" type="button">บันทึก</button>
                                            <button class="btn btn-outline-secondary" type="button">สั่งพิมพ์</button>
                                            <button class="btn btn-outline-secondary" type="button">ยกเลิก</button>
                                        </div>
                                    </thead>

                                   
                                </table>
                                <div class="row">
                                    <input type="text" lass="custom-control-input" id="approve" name="ArrApprove" style="display: none;" />
                                    <input type="text" lass="custom-control-input" id="disapprove" name="ArrDisApprove" style="display: none;" />

                                    <input type="hidden" name="controller" value="issueB_controller" />

                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
