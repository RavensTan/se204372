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
                            <h3 class="card-title">รูปนิสิต</h3>
                            <img src="image/3135823.png" style="width: 300px">
                            <p class="card-text"></p>
                            <a href="#" class="btn btn-primary">แก้ไขรูปภาพ</a>
                        </div>
                    </div>
                </div>
                <?php
                //print_r($userList);
                foreach ($userList as $student) {
                ?>

                    <div class="col-sm-6">
                        <div class="card" style="height: 100%;">
                            <div class="card-body">
                                <h3 class="card-title">ข้อมูลนิสิต</h3>
                                <div class="input-group input-group-sm mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="inputGroup-sizing-sm">ชื่อ</span>
                                    </div>
                                    <input type="text" readonly class="form-control" value= "<?php echo $student->name;?>" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
                                </div>

                                <div class="input-group input-group-sm mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="inputGroup-sizing-sm">นามสกุล</span>
                                    </div>
                                    <input type="text" readonly class="form-control" value= "<?php echo $student->lastname;?>" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
                                </div>

                                <div class="input-group input-group-sm mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="inputGroup-sizing-sm">รหัสนิสิต</span>
                                    </div>
                                    <input type="text" readonly class="form-control" value= "<?php echo $student->ID; ?>" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
                                </div>

                                <div class="input-group input-group-sm mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="inputGroup-sizing-sm">ชั้นปีที่</span>
                                    </div>
                                    <input type="text" readonly class="form-control"  value= "<?php echo $student->year; ?>" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
                                </div>

                                <div class="input-group input-group-sm mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="inputGroup-sizing-sm">อาจารย์ที่ปรึกษา</span>
                                    </div>
                                    <input type="text" readonly class="form-control"  value= "<?php echo $student->advisor; ?>" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
                                </div>

                                <div class="input-group input-group-sm mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="inputGroup-sizing-sm">สถานะคำร้อง</span>
                                    </div>
                                    <input type="text" readonly class="form-control"  value= "<?php 
                                    if($student->petition_status == NULL){
                                        echo "คำร้องยังไม่ได้รับการตรวจสอบ";
                                    }
                                    else{
                                        echo $student->petition_status;
                                    }
                                    
                                    ?>" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
                                </div>

                                <div class="input-group input-group-sm mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="inputGroup-sizing-sm">ผลการฝึกงาน</span>
                                    </div>
                                    <input type="text" readonly class="form-control" value= "<?php echo $student->train_status; ?>" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
                                </div>

                                <a href="#" class="btn btn-primary">แก้ไขข้อมูล</a>
                            </div>
                        </div>
                    </div>
                <?php

                }
                ?>
            </div>
        </div>
    </div>
</body>