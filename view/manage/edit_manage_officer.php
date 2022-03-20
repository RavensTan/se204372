<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="card text-center">
            <div class="card-header">
                <h1 style="text-align: center; ">เอกสารที่เกี่ยวข้อง</h1>
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

                                        <th>เอกสารยื่นเรื่องขอฝึกงาน</th>
                                        <th>เอกสารยื่นเรื่องขอสหกิจ</th>

                                    </thead>

                                    <tbody>
                                        <?php


                                        

                                        ?>
                                            <tr>
                                                <td><br>เอกสาร ก </br> 
                                                    <br>เอกสาร ข </br>
                                                    <br>เอกสาร ค </br>
                                                    <br>เอกสาร ง </br>
                                                    <br>เอกสาร จ </br>
                                                </td>
                                                <td>
                                                    <br>เอกสาร ก </br> 
                                                    <br>เอกสาร ข </br>
                                                    <br>เอกสาร ค </br>
                                                    <br>เอกสาร ง </br>
                                                    <br>เอกสาร จ </br>

                                                </td>
                            



                                                
                                            </tr>
                                        <?php

                                        
                                        ?>
                                        

                                    </tbody>
                                </table>
                                <div class="row">
                                    <input type="text" lass="custom-control-input" id="approve" name="ArrApprove" style="display: none;" />
                                    <input type="text" lass="custom-control-input" id="disapprove" name="ArrDisApprove" style="display: none;" />

                                    <input type="hidden" name="controller" value="manage_controller" />


                                <div class="col-sm-1">
                                    <button class="btn btn-primary" type="submit" name="action" value="update_petition" id="save_approve">แก้ไข</button>

                                </div>
                                
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
</body>
