
<div class="content-wrapper">
                <div class="container">
                    <!-- main content -->
                    <div class="content">
                        <!-- Content Header (Page header) -->
                        <div class="content-header">
                            <div class="header-icon">
                                <i class="pe-7s-note2"></i>
                            </div>
                            <div class="header-title">
                                <h1>Sale Product</h1>
                                <ol class="breadcrumb">
                                    <li><a href="#"><i class="pe-7s-home"></i> Home</a></li>
                                    <li><a href="#">Product</a></li>
                                    <li class="active">Sale Product</li>
                                </ol>
                            </div>
                        </div> <!-- /. Content Header (Page header) -->
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="panel panel-bd ">
                                    <div class="panel-heading">
                                       <?php
                                       print_r($student['courseID']); ?>
                                    </div>
                                    <div class="panel-body">

                                        <form action="<?php echo base_url() ?>admin/sell_product_selected" method="post">
                                        <div class="form-group row">
                                            <label for="example-text-input" class="col-sm-3 col-form-label">Student ID</label>
                                            <div class="col-sm-9">
                                                <!-- <input class="form-control" value="<?php echo $student['studentID'] ?>" name="studentID" placeholder="Student Name " type="text"  id="example-text-input" readonly> -->


                                                <select class="form-control select" name="studentID"  type="text" id="example-text-input" required="">
                                               <option value="">Select Student</option>
                                               <?php foreach ($students as $student): ?>
                                                   <option value="<?php echo $student['studentID'] ?>"><?php echo $student['student_name'] ?></option>
                                               <?php endforeach ?>
                                                 </select>
                                            </div>
                                        </div>






                                         <div class="form-group row">
                                            <label for="example-text-input" class="col-sm-3 col-form-label">Select Product</label>
                                            <div class="col-sm-9">
                                                <select class="form-control select change_product" name="productName"  type="text" id="example-text-input" required="">
                                               <option value="">Select Product Name</option>
                                               <?php foreach ($products as $product): ?>
                                                   <option value="<?php echo $product['productID'] ?>"><?php echo $product['productName'] ?></option>
                                               <?php endforeach ?>
                                                 </select>
                                            </div>

                                        </div>
                                        <div class="form-group row">
                                            <label for="example-text-input" class="col-sm-3 col-form-label">Enter Quantity</label>
                                            <div class="col-sm-9">
                                                <input class="form-control" value="" name="quantity" placeholder="Quantity" type="text" required="" id="example-text-input" readonly="">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="example-text-input" class="col-sm-3 col-form-label">Enter Price</label>
                                            <div class="col-sm-9">
                                                <input class="form-control" value="" name="price" placeholder="price" type="text" required="" id="example-text-input">
                                            </div>
                                        </div>
                                        <div class="form-group row col-md-12">
                                           <input type="submit" value="Sell Product" class="btn btn-primary pull-right">
                                        </div>
                                       </form>
                                    </div>
                                </div>
                            </div>
                        </div>

<script type="text/javascript">
    var qty;
    var price;
    $('.change_product').change(function() {
        var val = $(this).val()
        $.ajax({
            url: "<?php echo base_url(); ?>admin/get_product_detail",
            data: {name: val},
            type: 'POST',
            dataType: 'json', // added data type
            success: function(res) {
                if(res.qty >= 1){
                    qty = res.qty
                    price = res.price
                    $('[name="price"]').val(res.price)
                    $('[name="quantity"]').val('1')
                    $('[name="quantity"]').attr('readonly', false)
                }
                else{
                    alert('qty not avalible')
                    $('[name="quantity"]').attr('readonly', true)
                }
            }
        })
    })
    $('[name="quantity"]').keyup(function() {
        if($(this).val() != null && $(this).val() != ''){
            var val = parseInt($(this).val())
            if(val > parseInt(qty)){
                $(this).val('')
                $('[name="price"]').val('0')
                alert('qty not avalible')
            }
            else{
                price = val * parseInt(price);
                $('[name="price"]').val(price)
            }
        }
        else{
            $('[name="price"]').val('0')
        }
    })
</script>