<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="card text-center">
            <div class="card-header">
                <h1 style="text-align: center; ">คำร้องนิสิต</h1>
            </div>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-sm-12">
                    <div class="card text-center" style="height: 100%;">
                        <div class="card-body">

                            <form method="get" action="" class="d-flex justify-content-end">
                                <input class="form-control me-2" type="text" name="key" placeholder="Search" aria-label="Search" style="width: 25%;">
                                <input type="hidden" name="controller" value="petition" />
                                <button class="btn btn-primary" type="submit" name="action" value="search_admin">
                                    Search
                                </button>
                            </form>
                            <form method="get" action="">
                                <table id="ProductDetailtable" class="table table-bordered table-striped" style="text-align: center;">
                                    <thead>

                                        <th>ชื่อ-นามสกุล</th>
                                        <th>ผลการอนุมัติ</th>

                                    </thead>

                                    <tbody>
                                        <?php
                                        foreach ($petitionStuList as $student) {

                                        ?>
                                            <tr>
                                                <td><?php echo $student->name . " " . $student->lastname; ?></td>
                                                <td>
                                                    <?php
                                                        if ($student->petition_status == NULL) {
                                                            echo "คำร้องยังไม่ได้รับการตรวจสอบ";
                                                        } else {
                                                            echo $student->petition_status;
                                                        }
                                                    ?>

                                                </td>



                                                <!-- <td><a href="?controller=ProductDetail&action=update_ProductDetail&ProductDID=<?php echo $pd->ProductDID ?>" class="btn btn-primary">Edit</td>
                                                <td><a href="?controller=ProductDetail&action=delete_ProductDetail&ProductDID=<?php echo $pd->ProductDID ?>" class="btn btn-danger">Delete</td> -->
                                            </tr>
                                        <?php

                                        }
                                        ?>

                                    </tbody>
                                </table>
                                <div class="row">
                                    <input type="text" lass="custom-control-input" id="approve" name="ArrApprove" style="display: none;" />
                                    <input type="text" lass="custom-control-input" id="disapprove" name="ArrDisApprove" style="display: none;" />

                                    <input type="hidden" name="controller" value="petition" />

                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- <div class="col-sm-6">
                    <div class="card" style="height: 100%; text-align: center;">
                        <div class="card-body">
                            <h3 class="card-title">อนุมัติคำร้องนิสิต</h3>
                            <div class="row">
                                <div class="col-sm-6">
                                    <a href="#" class="btn btn-primary">บันทึก</a>
                                </div>
                                <div class="col-sm-6">
                                    <a href="#" class="btn btn-primary">ยกเลิก</a>
                                </div>
                            </div>



                        </div>
                    </div>
                </div> -->
            </div>
        </div>
    </div>
</body>

<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>

<script>
    var ArrApproveCheck = []
    var ArrDisApproveCheck = []

    $(document).on("click", ".approve", function() {
        var id = this.id.split("approve_")

        if ($(this).is(":checked")) {
            ArrApproveCheck.push(id[1])
            $("#disapprove_" + id[1]).attr("disabled", "disabled")
        } else {
            var index = ArrApproveCheck.findIndex(x => x == id[1])
            ArrApproveCheck.splice(index, 1)

            $("#disapprove_" + id[1]).removeAttr("disabled")
        }
    })

    $(document).on("click", ".disapprove", function() {
        var id = this.id.split("disapprove_")

        if ($(this).is(":checked")) {
            ArrDisApproveCheck.push(id[1])
            $("#approve_" + id[1]).attr("disabled", "disabled")
        } else {
            var index = ArrDisApproveCheck.findIndex(x => x == id[1])
            ArrDisApproveCheck.splice(index, 1)

            $("#approve_" + id[1]).removeAttr("disabled")
        }
    })

    $(document).on("click", "#save_approve", function() {
        if (ArrApproveCheck.length > 0 || ArrDisApproveCheck.length > 0) {
            $("#approve").val(ArrApproveCheck)
            $("#disapprove").val(ArrDisApproveCheck)
        } else {
            alert("กรุณาเลือกบุคคลเพื่อ อนุมัติหรือไม่อนุมัติ")
        }

        console.log($("#approve").val())
        console.log($("#disapprove").val())
    })
</script>