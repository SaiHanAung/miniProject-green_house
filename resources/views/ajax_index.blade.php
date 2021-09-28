<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="https://cdn1.iconfinder.com/data/icons/logos-brands-in-colors/231/among-us-player-white-512.png" type="image/icon type">

    <title>Dashboard</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"/>
    <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css"/>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    {{-- sweetalert2 --}}
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</head>

<body>
<div class="container">
    <br/>
    <h3 align="center">Dashboard</h3>
    <br/>
    <div align="right">
        <button type="button" name="create_ProductBtn" id="create_ProductBtn" class="btn btn-success btn-sm">
            เพิ่มสินค้าใหม่
        </button>
    </div>
    <br/>
    <div class="table-responsive">
        <table class="table table-bordered table-striped" id="productTable_Form">
            <thead>
            <tr>
                <th width="20%">ตัวอย่างสินค้า</th>
                <th width="20%">ชื่อสินค้า</th>
                <th width="20%">ราคาสินค้า</th>
                <th width="20%">จำนวนคงเหลือ</th>
                <th width="20%">เครื่องมือ</th>
            </tr>
            </thead>
        </table>
    </div>
    <br/>
    <br/>
</div>
</body>
</html>


{{-- ฟอร์มดูเพิ่มเติมข้อมูลสินค้า --}}
<div id="readProductForm" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">

            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">รายละเอียดสินค้า</h4>
            </div>

            <div class="modal-body">
                <span id="readProductForm_Result"></span>
                <form class="form-horizontal">

                    <div class="form-group">
                        <label for="product_spanImage_Preview" class="control-label col-md-4"
                               title="โปสเตอร์สินค้า">โปสเตอร์สินค้า</label>
                        <div class="col-md-8">
                            <span id="product_spanImage_Preview" title="โปสเตอร์สินค้า"></span>

                        </div>
                    </div>

                    <div class="form-group">
                        <label for="product_inputName_Preview" class="control-label col-md-4" title="ชื่อสินค้า">ชื่อสินค้า
                            : </label>
                        <div class="col-md-8">
                            <input type="text" name="product_inputName_Preview" id="product_inputName_Preview"
                                   class="form-control"
                                   placeholder="ชื่อสินค้า" title="ชื่อสินค้า" readonly/>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="product_inputDetail_Preview" class="control-label col-md-4"
                               title="รายละเอียดสินค้า">รายละเอียดสินค้า : </label>
                        <div class="col-md-8">
                            <textarea name="product_inputDetail_Preview" id="product_inputDetail_Preview"
                                      class="form-control"
                                      placeholder="รายละเอียดสินค้า" rows="4" title="รายละเอียดสินค้า"
                                      readonly></textarea>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="product_inputPrice_Preview" class="control-label col-md-4" title="ราคาสินค้า">ราคาสินค้า
                            : </label>
                        <div class="col-md-8">
                            <input type="number" name="product_inputPrice_Preview" id="product_inputPrice_Preview"
                                   class="form-control"
                                   min="0" step="0.25" placeholder="ราคาสินค้า" title="ราคาสินค้า" readonly/>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="product_inputStock_Preview" class="control-label col-md-4" title="จำนวนสินค้า">จำนวนสินค้า
                            : </label>
                        <div class="col-md-8">
                            <input type="number" name="product_inputStock_Preview" id="product_inputStock_Preview"
                                   class="form-control"
                                   min="0" placeholder="จำนวนสินค้า" title="จำนวนสินค้า" readonly/>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="product_inputUnit_Preview" class="control-label col-md-4"
                               title="หน่วยราคาขายสินค้า">หน่วยราคาขายสินค้า : </label>
                        <div class="col-md-8">
                            <input type="text" name="product_inputUnit_Preview" id="product_inputUnit_Preview"
                                   class="form-control" placeholder="หน่วยราคาขายสินค้า" title="หน่วยราคาขายสินค้า"
                                   readonly/>

                        </div>
                    </div>

                    <div class="form-group">
                        <label for="product_inputGroup_Preview" class="control-label col-md-4" title="กลุ่มสินค้า">กลุ่มสินค้า
                            : </label>
                        <div class="col-md-8">
                            <input type="text" name="product_inputGroup_Preview" id="product_inputGroup_Preview"
                                   class="form-control" placeholder="กลุ่มสินค้า" title="กลุ่มสินค้า" readonly/>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="product_inputBrand_Preview" class="control-label col-md-4"
                               title="ยี่ห้อสินค้า">ยี่ห้อสินค้า
                            : </label>
                        <div class="col-md-8">
                            <input type="text" name="product_inputBrand_Preview" id="product_inputBrand_Preview"
                                   class="form-control"
                                   placeholder="ยี่ห้อสินค้า" title="ยี่ห้อสินค้า" readonly/>
                        </div>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">ปิด</button>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>

{{-- ฟอร์มเพิ่มสินค้า --}}
<div id="addProductForm" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">

            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">เพิ่มสินค้าใหม่</h4>
            </div>

            <div class="modal-body">
                <span id="addProductForm_Result"></span>
                <form method="POST" id="create_ProductForm" class="form-horizontal" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="product_inputPosterFile_Add" class="control-label col-md-4"
                               title="เพิ่มโปสเตอร์สินค้า" >โปสเตอร์สินค้าjjj</label>
                        <div class="col-md-8">
                            <span id="product_inputPosterFile_Add" title="เพิ่มโปสเตอร์สินค้า"></span>
                            <input type="file" name="product_inputPosterFile_Add" id="product_inputPosterFile_Add"
                            accept="image/png, image/gif, image/jpeg" multiple title="เพิ่มโปสเตอร์สินค้า" required/>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="product_inputName_Add" class="control-label col-md-4" title="เพิ่มชื่อสินค้า">ชื่อสินค้า
                            : </label>
                        <div class="col-md-8">
                            <input type="text" name="product_inputName_Add" id="product_inputName_Add"
                                   class="form-control"
                                   placeholder="เพิ่มชื่อสินค้า" title="เพิ่มชื่อสินค้า" required/>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="product_inputDetail_Add" class="control-label col-md-4"
                               title="เพิ่มรายละเอียดสินค้า">รายละเอียดสินค้า : </label>
                        <div class="col-md-8">
                            <textarea name="product_inputDetail_Add" id="product_inputDetail_Add" class="form-control"
                                      placeholder="เพิ่มรายละเอียดสินค้า" rows="4" title="เพิ่มรายละเอียดสินค้า"
                                      required></textarea>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="product_inputPrice_Add" class="control-label col-md-4" title="เพิ่มราคาสินค้า">ราคาสินค้า
                            : </label>
                        <div class="col-md-8">
                            <input type="number" name="product_inputPrice_Add" id="product_inputPrice_Add"
                                   class="form-control"
                                   min="0" step="0.25" placeholder="เพิ่มราคาสินค้า" title="เพิ่มราคาสินค้า" required/>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="product_inputStock_Add" class="control-label col-md-4" title="เพิ่มจำนวนสินค้า">จำนวนสินค้า
                            : </label>
                        <div class="col-md-8">
                            <input type="number" name="product_inputStock_Add" id="product_inputStock_Add"
                                   class="form-control"
                                   min="0" placeholder="เพิ่มจำนวนสินค้า" title="เพิ่มจำนวนสินค้า" required/>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="product_inputUnit_Add" class="control-label col-md-4"
                               title="เพิ่มหน่วยราคาขายสินค้า">หน่วยราคาขายสินค้า : </label>
                        <div class="col-md-8">
                            <select name="product_inputUnit_Add" id="product_inputUnit_Add" class="form-control"
                                    title="เพิ่มหน่วยราคาขายสินค้า" required>
                                <option value="">กรุณาเลือก</option>
                                <option value="A">A</option>
                                <option value="B">B</option>
                                <option value="C">C</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="product_inputGroup_Add" class="control-label col-md-4" title="เพิ่มกลุ่มสินค้า">กลุ่มสินค้า
                            : </label>
                        <div class="col-md-8">
                            <select name="product_inputGroup_Add" id="product_inputGroup_Add" class="form-control"
                                    title="กลุ่มสินค้า" required>
                                <option value="">กรุณาเลือก</option>
                                <option value="A">A</option>
                                <option value="B">B</option>
                                <option value="C">C</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="product_inputBrand_Add" class="control-label col-md-4" title="เพิ่มยี่ห้อสินค้า">ยี่ห้อสินค้า
                            : </label>
                        <div class="col-md-8">
                            <input type="text" name="product_inputBrand_Add" id="product_inputBrand_Add"
                                   class="form-control"
                                   placeholder="เพิ่มยี่ห้อสินค้า" title="เพิ่มยี่ห้อสินค้า" required/>
                        </div>
                    </div>

                    <br/>
                    <div class="modal-footer">
                        <input type="hidden" name="action" id="action"/>
                        <input type="hidden" name="hidden_id" id="hidden_id"/>
                        <input type="submit" name="action_button" id="action_button" class="btn btn-warning"
                               value="เพิ่มสินค้าใหม่"/>

                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


{{-- ฟอร์มแก้ไขข้อมูลสินค้า --}}
<div id="editProductForm" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">

            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">แก้ไขข้อมูลสินค้า</h4>
            </div>

            <div class="modal-body">
                <span id="editProductForm_Result"></span>
                <form method="POST" id="update_ProductForm" class="form-horizontal" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="product_inputPosterFile_Edit" class="control-label col-md-4"
                               title="เพิ่มโปสเตอร์สินค้า">โปสเตอร์สินค้า</label>
                        <div class="col-md-8">
                            <span id="product_spanPosterFile_Edit" title="เพิ่มโปสเตอร์สินค้า"></span>
                            <input type="file" name="product_inputPosterFile_Edit" id="product_inputPosterFile_Edit"
                                   title="เพิ่มโปสเตอร์สินค้า"/>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="product_inputName_Edit" class="control-label col-md-4" title="เพิ่มชื่อสินค้า">ชื่อสินค้า
                            : </label>
                        <div class="col-md-8">
                            <input type="text" name="product_inputName_Edit" id="product_inputName_Edit"
                                   class="form-control"
                                   placeholder="เพิ่มชื่อสินค้า" title="เพิ่มชื่อสินค้า" required/>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="product_inputDetail_Edit" class="control-label col-md-4"
                               title="เพิ่มรายละเอียดสินค้า">รายละเอียดสินค้า : </label>
                        <div class="col-md-8">
                            <textarea name="product_inputDetail_Edit" id="product_inputDetail_Edit" class="form-control"
                                      placeholder="เพิ่มรายละเอียดสินค้า" rows="4" title="เพิ่มรายละเอียดสินค้า"
                                      required></textarea>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="product_inputPrice_Edit" class="control-label col-md-4" title="เพิ่มราคาสินค้า">ราคาสินค้า
                            : </label>
                        <div class="col-md-8">
                            <input type="number" name="product_inputPrice_Edit" id="product_inputPrice_Edit"
                                   class="form-control"
                                   min="0" step="0.25" placeholder="เพิ่มราคาสินค้า" title="เพิ่มราคาสินค้า" required/>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="product_inputStock_Edit" class="control-label col-md-4" title="เพิ่มจำนวนสินค้า">จำนวนสินค้า
                            : </label>
                        <div class="col-md-8">
                            <input type="number" name="product_inputStock_Edit" id="product_inputStock_Edit"
                                   class="form-control"
                                   min="0" placeholder="เพิ่มจำนวนสินค้า" title="เพิ่มจำนวนสินค้า" required/>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="product_inputUnit_Edit" class="control-label col-md-4"
                               title="เพิ่มหน่วยราคาขายสินค้า">หน่วยราคาขายสินค้า : </label>
                        <div class="col-md-8">
                            <select name="product_inputUnit_Edit" id="product_inputUnit_Edit" class="form-control"
                                    title="เพิ่มหน่วยราคาขายสินค้า" required>
                                <option value="">กรุณาเลือก</option>
                                <option value="A">A</option>
                                <option value="B">B</option>
                                <option value="C">C</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="product_inputGroup_Edit" class="control-label col-md-4" title="เพิ่มกลุ่มสินค้า">กลุ่มสินค้า
                            : </label>
                        <div class="col-md-8">
                            <select name="product_inputGroup_Edit" id="product_inputGroup_Edit" class="form-control"
                                    title="กลุ่มสินค้า" required>
                                <option value="">กรุณาเลือก</option>
                                <option value="A">A</option>
                                <option value="B">B</option>
                                <option value="C">C</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="product_inputBrand_Edit" class="control-label col-md-4" title="เพิ่มยี่ห้อสินค้า">ยี่ห้อสินค้า
                            : </label>
                        <div class="col-md-8">
                            <input type="text" name="product_inputBrand_Edit" id="product_inputBrand_Edit"
                                   class="form-control"
                                   placeholder="เพิ่มยี่ห้อสินค้า" title="เพิ่มยี่ห้อสินค้า" required/>
                        </div>
                    </div>

                    <br/>
                    <div class="modal-footer">
                        <input type="hidden" name="action" id="action"/>
                        <input type="hidden" name="hidden_id" id="hidden_id"/>
                        <input type="submit" name="action_button" id="action_button" class="btn btn-warning"
                               value="Add"/>

                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


<script>
    $(document).ready(function () {

        //ฟังก์ชัน ที่แสดงผลทางตาราง
        $('#productTable_Form').DataTable({

            processing: true,
            serverSide: true,
            ajax: {
                url: "{{ route('ajax-crud.index') }}",
            },
            columns: [
                {
                    data: 'product_poster',
                    name: 'product_poster',
                    render: function (data, type, full, meta) {
                        return "<img src={{ URL::to('/') }}/images/" + data + " width='70' class='img-thumbnail' />";
                    },
                    orderable: false
                },
                {
                    data: 'product_name',
                    name: 'product_name'
                },
                {
                    data: 'product_price',
                    name: 'product_price'
                },
                {
                    data: 'product_stock',
                    name: 'product_stock',

                },
                {
                    data: 'action',
                    name: 'action',
                    orderable: false
                }
            ]
        });

        //จบฟังก์ชัน ที่แสดงผลทางตาราง


        //ฟังก์ชัน เพิ่มสินค้าเรียกฟอร์ม
        $('#create_ProductBtn').click(function () {
            $('.modal-title').text("เพิ่มสินค้าใหม่");

            $('#actionAddNew_Product').val("actionAddNew_Product");
            $('#action_buttonAddNew_Product').val("เพิ่ม");
            $('#addProductForm').modal('show');
        });
        //จบฟังก์ชัน เพิ่มสินค้าเรียกฟอร์ม


        //ฟังก์ชัน ปุ่มที่อยู่ในฟอร์ม
        $('#create_ProductForm').on('submit', function (event) {
            event.preventDefault();
            // ถ้ากดปุ่ม เพิ่ม
            if ($('#action').val() == 'Add') {
                $.ajax({
                    url: "{{ route('ajax-crud.store') }}",
                    method: "POST",
                    data: new FormData(this),
                    contentType: false,
                    cache: false,
                    processData: false,
                    dataType: "json",
                    success: function (data) {

                        if (data.errors) {
                            Swal.fire({
                                icon: 'error',
                                title: 'เกิดข้อผิดพลาด',
                                text: 'ข้อมูลบางอย่างไม่ถูกต้อง กรุณาตรวจสอบแล้วลอง อีกครั้ง!'

                            })
                        }
                        if (data.success) {
                            const Toast = Swal.mixin({
                                toast: true,
                                position: 'top-end',
                                showConfirmButton: false,
                                timer: 3000,
                                timerProgressBar: true,
                                didOpen: (toast) => {
                                    toast.addEventListener('mouseenter', Swal.stopTimer)
                                    toast.addEventListener('mouseleave', Swal.resumeTimer)
                                }
                            })
                            Toast.fire({
                                icon: 'success',
                                title: 'สินค้าใหม่ถูกเพิ่มแล้ว'
                            })
                            $('#create_ProductForm')[0].reset();
                            $('#addProductForm').modal('hide')
                            $('#productTable_Form').DataTable().ajax.reload();
                        }


                    }
                })
            }


            // ถ้ากดปุ่ม แก้ไข
            if ($('#action').val() == "Edit") {
                $.ajax({
                    url: "{{ route('ajax-crud.update') }}",
                    method: "POST",
                    data: new FormData(this),
                    contentType: false,
                    cache: false,
                    processData: false,
                    dataType: "json",
                    success: function (data) {
                        var html = '';
                        if (data.errors) {
                            if (data.errors) {
                                Swal.fire({
                                    icon: 'error',
                                    title: 'เกิดข้อผิดพลาด',
                                    text: 'ข้อมูลบางอย่างไม่ถูกต้อง กรุณาตรวจสอบแล้วลอง อีกครั้ง!'

                                })
                            }
                        }
                        if (data.success) {
                            html = '<div class="alert alert-success">' + data.success + '</div>';
                            $('#create_ProductForm')[0].reset();
                            $('#product_inputPosterFile_Edit').html('');
                            $('#productTable_Form').DataTable().ajax.reload();
                        }
                        $('#addProductForm_Result').html(html);
                    }
                });
            }
        });

        // เริ่มฟังก์ชัน แก้ไขข้อมูล ปุ่มที่อยู่ในฟอร์ม
        $(document).on('click', '.edit', function () {
            var id = $(this).attr('id');
            $('#editProductForm_Result').html('');
            $.ajax({
                url: "/ajax-crud/" + id + "/edit",
                dataType: "json",
                success: function (html) {
                    // ตั้งค่าโมเดล
                    $('#editProductForm').modal('show');
                    $('.modal-title').text("แก้ไขข้อมูลสินค้า");


                    $('#action').val("Edit");
                    $('#action_button').val("Edit");


                    $('#hidden_idEdit').val(html.data.id);
                    $('#product_inputName_Edit').val(html.data.product_name);
                    $('#product_inputDetail_Edit').val(html.data.product_detail);
                    $('#product_inputPrice_Edit').val(html.data.product_price);
                    $('#product_inputStock_Edit').val(html.data.product_stock);
                    $('#product_inputUnit_Edit').val(html.data.product_unit);
                    $('#product_inputGroup_Edit').val(html.data.product_group);
                    $('#product_inputBrand_Edit').val(html.data.product_brand);
                    $('#product_spanPosterFile_Edit').html("<img src={{ URL::to('/') }}/images/" + html.data.product_poster + " width='70' class='img-thumbnail' />");
                    $('#product_inputPosterFile_Edit').append("<input type='hidden' name='hidden_image' value='" + html.data.product_poster + "' />");

                }
            })
        });
        // จบฟังก์ชัน แก้ไขข้อมูล ปุ่มที่อยู่ในฟอร์ม


        // เริ่มฟังก์ชัน ดูข้อมูล ปุ่มที่อยู่ในฟอร์ม
        $(document).on('click', '.read', function () {
            var id = $(this).attr('id');
            $('#readProductForm_Result').html(''); //หัวฟอร์มส่งค่ากลับมาแสดง
            $.ajax({
                url: "/ajax-crud/" + id + "/edit",
                dataType: "json",
                success: function (html) {
                    // ตั้งค่าโมเดล
                    $('#readProductForm').modal('show'); //เรียกตัวฟอร์ม
                    $('.modal-title').text("รายละเอียดสินค้า");

                    $('#hidden_id').val(html.data.id);
                    $('#product_inputName_Preview').val(html.data.product_name);
                    $('#product_inputDetail_Preview').val(html.data.product_detail);
                    $('#product_inputPrice_Preview').val(html.data.product_price);
                    $('#product_inputStock_Preview').val(html.data.product_stock);
                    $('#product_inputUnit_Preview').val(html.data.product_unit);
                    $('#product_inputGroup_Preview').val(html.data.product_group);
                    $('#product_inputBrand_Preview').val(html.data.product_brand);

                    $('#product_spanImage_Preview').html("<img src={{ URL::to('/') }}/images/" + html.data.product_poster + " width='70' class='img-thumbnail' />");


                }
            })
        });
        // จบฟังก์ชัน ดูข้อมูล ปุ่มที่อยู่ในฟอร์ม


        // เริ่มฟังก์ชัน ลบข้อมูล ปุ่มที่อยู่ในฟอร์ม
        var product_id;
        $(document).on('click', '.delete', function () {
            product_id = $(this).attr('id');
            Swal.fire({
                title: 'แน่ใจที่จะลบข้อมูลหรือไม่ ?',
                text: "ไม่สามารถกู้คืนได้!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'ใช่, ลบเดี๋ยวนี้!',
                cancelButtonText: 'ยกเลิก'
            }).then((result) => {
                if (result.isConfirmed) {
                    $.ajax({
                        url: "ajax-crud/destroy/" + product_id,

                        success: function (data) {
                            setTimeout(function () {
                                $('#confirmModal').modal('hide');
                                $('#productTable_Form').DataTable().ajax.reload();
                            }, 20);
                        }
                    })
                    Swal.fire(
                        'ลบข้อมูลสำเร็จ!',
                        'ข้อมูลถูกลบแล้ว',
                        'success'
                    )
                }
            })


        });
        // จบฟังก์ชัน ลบข้อมูล ปุ่มที่อยู่ในฟอร์ม

    });
</script>
