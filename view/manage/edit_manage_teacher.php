<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
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


                            <form method="get" action="">
                                <table id="ProductDetailtable" class="table table-bordered table-striped"
                                    style="text-align: center;">
                                    <thead>

                                        <th>เอกสารที่เกี่ยวข้อง</th>
                                        <th>เอกสารยื่นเรื่องขอสหกิจ</th>


                                    </thead>

                                    <tbody>
                                        <tr>
                                            <td>เอกสาร ก &nbsp; &nbsp;
                                                <input type="checkbox" class="custom-control-input approve"
                                                    id="<?php echo "approve_" . $student->petition_id; ?>">
                                            </td>
                                            <td>เอกสาร ก &nbsp; &nbsp;
                                                <input type="checkbox" class="custom-control-input approve"
                                                    id="<?php echo "approve_" . $student->petition_id; ?>">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>เอกสาร ข &nbsp; &nbsp;
                                                <input type="checkbox" class="custom-control-input approve"
                                                    id="<?php echo "approve_" . $student->petition_id; ?>">
                                            </td>
                                            <td>เอกสาร ข &nbsp; &nbsp;
                                                <input type="checkbox" class="custom-control-input approve"
                                                    id="<?php echo "approve_" . $student->petition_id; ?>">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>เอกสาร ค &nbsp; &nbsp;
                                                <input type="checkbox" class="custom-control-input approve"
                                                    id="<?php echo "approve_" . $student->petition_id; ?>">
                                            </td>
                                            <td>เอกสาร ค &nbsp; &nbsp;
                                                <input type="checkbox" class="custom-control-input approve"
                                                    id="<?php echo "approve_" . $student->petition_id; ?>">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>เอกสาร ง &nbsp; &nbsp;
                                                <input type="checkbox" class="custom-control-input approve"
                                                    id="<?php echo "approve_" . $student->petition_id; ?>">
                                            </td>
                                            <td>เอกสาร ง &nbsp; &nbsp;
                                                <input type="checkbox" class="custom-control-input approve"
                                                    id="<?php echo "approve_" . $student->petition_id; ?>">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>เอกสาร จ &nbsp; &nbsp;
                                                <input type="checkbox" class="custom-control-input approve"
                                                    id="<?php echo "approve_" . $student->petition_id; ?>">
                                            </td>
                                            <td>เอกสาร จ &nbsp; &nbsp;
                                                <input type="checkbox" class="custom-control-input approve"
                                                    id="<?php echo "approve_" . $student->petition_id; ?>">
                                            </td>

                                        </tr>



                                    </tbody>

                                </table>



                            </form>

                            <button style="width:70px;" class="btn btn-primary" type="submit">เพิ่ม</button>
                            <button style="width:70px;" class="btn btn-primary" type="submit">ลบ</button>
                            <button style="width:70px;" class="btn btn-primary" type="submit">บันทึก</button>
                            <button style="width:70px;" class="btn btn-primary" type="submit">ยกเลิก</button>
                        </div>
                    </div>
                </div>

            </div>
            <div class="row">
                <!-- <input type="text" lass="custom-control-input" id="approve" name="ArrApprove" style="display: none;" />
                                    <input type="text" lass="custom-control-input" id="disapprove" name="ArrDisApprove" style="display: none;" /> -->

                <!-- <input type="hidden" name="controller" value="manage" /> -->
                <!-- <div class="col-sm-1">
                    <button style="width:70px;" class="btn btn-primary" type="submit" name="action"
                        value="edit_manage_teacher" id="save_approve">เพิ่ม</button>


                    <button style="width:70px;" class="btn btn-primary" type="submit" name="action" value="manage_list"
                        id="cancle_approve">ลบ</button>


                    <button style="width:70px;" class="btn btn-primary" type="submit" name="action"
                        value="edit_manage_teacher" id="save_approve">บันทึก</button>


                    <button style="width:70px;" class="btn btn-primary" type="submit" name="action" value="manage_list"
                        id="cancle_approve">ยกเลิก</button>

                </div> -->

                <!-- <a class="btn btn-primary" href="#" role="button">Link</a>
                <button style="width:70px;" class="btn btn-primary" type="submit">Button</button>
                <input style="width:70px;" class="btn btn-primary" type="button" value="Input">
                <input style="width:70px;" class="btn btn-primary" type="submit" value="Submit">
                <input style="width:70px;" class="btn btn-primary" type="reset" value="Reset"> -->


            </div>
        </div>
</body>

<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
    crossorigin="anonymous"></script>

<!--script>
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

    })
</script-->