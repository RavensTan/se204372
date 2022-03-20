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
                                <table id="ProductDetailtable" class="table table-bordered table-striped" style="text-align: center;">
                                <thead>
                                        <div class="card-header">
                                            <h3 style="text-align: center; ">หนังสือขอความอนุเคราะห์ฝึกงาน</h3>
                                        </div> <br>
                                        <a href="view/issue/apprenticeshipL_officer.php"
                                            class="btn btn-primary">จัดทำหนังสือขอความอนุเคราะห์ฝึกงาน</a>
                                        <br></br>
                                        <div class="card-header">
                                            <h3 style="text-align: center; ">หนังสือส่งตัวนิสิต</h3>
                                        </div><br>
                                        <a href="view/issue/referralL_officer.php"
                                            class="btn btn-primary">จัดทำหนังสือส่งตัวนิสิต</a>
                                        <br>
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
