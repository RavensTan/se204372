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
                                <button class="btn btn-primary" type="submit" name="action" value="search_teacher">
                                    Search
                                </button>
                            </form>
                            <form method="get" action="">
                                <table id="ProductDetailtable" class="table table-bordered table-striped" style="text-align: center;">
                                    <thead>

                                        <th>ชื่อ-นามสกุล</th>
                                        <th>อนุมัติ</th>
                                        <th>ไม่อนุมัติ</th>

                                    </thead>

                                    <tbody>
                                        <?php
                                        foreach ($petitionStuList as $student) {
                                        ?>
                                            <tr>
                                                <td><a href="#" class="link_pdf" target="_blank" id="<?php echo "link_" . $student->petition_id; ?>"> <?php echo $student->name . " " . $student->lastname; ?></a></td> <!-- ใส่คำสั่งหรือหน้าเพื่อลิ้งไปหลังจากกดชื่อเพื่อเช็คข้างใน -->
                                                <?php
                                                if ($student->petition_status == "อนุมัติ") {
                                                ?>
                                                    <td>
                                                        <input type="checkbox" class="custom-control-input approve" checked id="<?php echo "approve_" . $student->petition_id; ?>">
                                                    </td>
                                                    <td>
                                                        <input type="checkbox" class="custom-control-input disapprove" disabled id="<?php echo "disapprove_" . $student->petition_id; ?>">
                                                    </td>
                                                <?php
                                                } elseif ($student->petition_status == "ไม่อนุมัติ") {
                                                ?>
                                                    <td>
                                                        <input type="checkbox" class="custom-control-input approve" disabled id="<?php echo "approve_" . $student->petition_id; ?>">
                                                    </td>
                                                    <td>
                                                        <input type="checkbox" class="custom-control-input disapprove" checked id="<?php echo "disapprove_" . $student->petition_id; ?>">
                                                    </td>
                                                <?php
                                                } else {
                                                ?>
                                                    <td>
                                                        <input type="checkbox" class="custom-control-input approve" id="<?php echo "approve_" . $student->petition_id; ?>">
                                                    </td>
                                                    <td>
                                                        <input type="checkbox" class="custom-control-input disapprove" id="<?php echo "disapprove_" . $student->petition_id; ?>">
                                                    </td>
                                                <?php
                                                }
                                                ?>
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
                                    <div class="col-sm-10">

                                    </div>
                                    <div class="col-sm-1">
                                        <button class="btn btn-primary" type="submit" name="action" value="update_petition" id="save_approve">บันทึก</button>

                                    </div>
                                    <div class="col-sm-1">
                                        <button class="btn btn-primary" type="submit" name="action" value="petition_list" id="cancle_approve">ยกเลิก</button>

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

<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>

<script>
    var ArrApproveCheck = []
    var ArrDisApproveCheck = []

    $(document).on("click", ".link_pdf", function() {

        if (this.id == "link_P01") {
            $("#" + this.id).attr("href", "pdffile/Popratee.pdf")
        } else if (this.id == "link_P02") {
            $("#" + this.id).attr("href", "pdffile/Ngungnon.pdf")
        } else if (this.id == "link_P03") {
            $("#" + this.id).attr("href", "pdffile/Mhew.pdf")
        } else if (this.id == "link_P04") {
            $("#" + this.id).attr("href", "pdffile/Gerate.pdf")
        }
    })
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

    })
</script>