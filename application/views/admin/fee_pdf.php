
<?php 
// echo "<pre>";
// print_r($expense_data);
// die();
 ?>
<head>
  <meta charset="UTF-8">
  <title>Expense Voucher</title>
      <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Expense Voucher</title>
    <link href='https://fonts.googleapis.com/css?family=Nunito:400,300' rel='stylesheet' type='text/css'>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">


<script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ=" crossorigin="anonymous"></script>  
   <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.3.5/jspdf.min.js"></script>  


<style>
    
body {
  font-family: 'Open Sans', sans-serif;
  color: #384047;
}

table {
  
  
}

caption {
  font-size: 1.6em;
  font-weight: 400;
  padding: 10px 0;
}

thead th {
  font-weight: 400;
  background: #8a97a0;
  color: #FFF;

      
}
thead th:first-child{
    
}

tr {
  background: #f4f7f8;
  border-bottom: 1px solid #FFF;
  margin-bottom: 5px;
}

tr:nth-child(even) {
  background: #e8eeef;
}

th, td {
  text-align: left;
  padding: 20px;
  font-weight: 300;
}

tfoot tr {
  background: none;
}

tfoot td {
  padding: 10px 2px;
  font-size: 0.8em;
  font-style: italic;
  color: #8a97a0;
}

td{
  white-space: nowrap !important;
}


</style>

<style type="text/css">
  .text-danger strong {
        color: #9f181c;
    }
    .receipt-main {
      background: #ffffff none repeat scroll 0 0;
      border-bottom: 12px solid #333333;
      border-top: 12px solid #9f181c;
      margin-top: 50px;
      margin-bottom: 50px;
      padding: 40px 30px !important;
      position: relative;
      box-shadow: 0 1px 21px #acacac;
      color: #333333;
      font-family: open sans;
    }
    .receipt-main p {
      color: #333333;
      font-family: open sans;
      line-height: 1.42857;
    }
    .receipt-footer h1 {
      font-size: 15px;
      font-weight: 400 !important;
      margin: 0 !important;
    }
    .receipt-main::after {
      background: #414143 none repeat scroll 0 0;
      content: "";
      height: 5px;
      left: 0;
      position: absolute;
      right: 0;
      top: -13px;
    }
    .receipt-main thead {
      background: #414143 none repeat scroll 0 0;
    }
    .receipt-main thead th {
      color:#fff;
    }
    .receipt-right h5 {
      font-size: 16px;
      font-weight: bold;
      margin: 0 0 7px 0;
    }
    .receipt-right p {
      font-size: 12px;
      margin: 0px;
    }
    .receipt-right p i {
      text-align: center;
      width: 18px;
    }
    .receipt-main td {
      padding: 9px 20px !important;
    }
    .receipt-main th {
      padding: 13px 20px !important;
    }
    .receipt-main td {
      font-size: 13px;
      font-weight: initial !important;
    }
    .receipt-main td p:last-child {
      margin: 0;
      padding: 0;
    } 
    .receipt-main td h2 {
      font-size: 20px;
      font-weight: 900;
      margin: 0;
      text-transform: uppercase;
    }
    .receipt-header-mid .receipt-left h1 {
      font-weight: 100;
      margin: 34px 0 0;
      text-align: right;
      text-transform: uppercase;
    }
    .receipt-header-mid {
      margin: 24px 0;
      overflow: hidden;
    }
    
    #container {
      background-color: #dcdcdc;
    }
</style>
</head>
<body id="content">
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<div class="container">
    <div class="row">
        
        <div class="receipt-main col-xs-10 col-sm-10 col-md-6 col-xs-offset-1 col-sm-offset-1 col-md-offset-3">
            <div class="row">
                <div class="receipt-header">
                  <img class="img-responsive" alt="iamgurdeeposahan" src="<?php base_url();?>assets/assets/dist/img/header.png" style="width: 1121px; border-radius: 43px;">
                  <br>
                    <div class="col-xs-6 col-sm-6 col-md-6 ">
                        <div class="receipt-right">
                            <h5>Name : <?php  echo $expense_data['student_name']; ?>.</h5>
                            <h6>Mobile :</b> <?php echo $expense_data['student_contact']; ?></h6>
                            <h6>Email :</b> <?php echo $expense_data['student_email']; ?></h6>
                        </div>
                    </div>
                </div>
            </div>
            
           
            
            <div>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Description</th>
                            <th>Amount</th>
                        </tr>
                    </thead>
                   <tbody> <!-- Table Body for content -->
                         <tr>
                           
                           <td>Fee Amount</td> 
                          
                           <td><span class="total"><?php echo $expense_data['student_fee']; ?></span></td>       
                                
                         </tr>
                         <tr>
                           
                           <td>Admission Fee</td> 
                           <td><span class="total"><?php echo $expense_data['admission_fee']; ?></span></td>  
                                
                                
                         </tr>
                         <tr>
                           
                           <td>Membership Fee</td> 
                           <td><span class="total"><?php echo $expense_data['membership_fee']; ?></span></td>  
                                
                                
                         </tr>
                         <tr>
                           
                           <td>Extra Charges</td> 
                           <td><span class="total"><?php echo $expense_data['extra_charges']; ?></span></td>  
                                
                                
                         </tr>
                     
                         <tr> 
                           <td>Discount Fee</td> 
                           <td><span class="total"><?php echo $expense_data['discountfee']; ?></span></td>              
                         </tr>

                         <tr>
                           
                           <td>Total</td> 
                           <td><span class="total"><?php 
                              
                              $sub_total = $expense_data['student_fee']+
$expense_data['admission_fee']+
$expense_data['membership_fee']+
$expense_data['extra_charges']-
$expense_data['discountfee'];
                          echo $sub_total;
                           ?>
                             

                           </span></td>       
                                
                         </tr> 
                         <?php if ($expense_data['is_installment']==1): 
                          
                          ?>
                           
                         <tr> 
                           <td>Installment</td> 
                           <td><span class="total"><?php echo $remaining = $sub_total-$expense_data['installment']; ?></span></td>              
                         </tr>
                     
                           
                         <tr> 
                           <td>Remaining Installment</td> 
                           <td><span class="total"><?php echo $expense_data['installment']; ?></span></td>              
                         </tr>
                         <?php endif ?>

                         <?php if ($expense_data['is_previous']==1): 
                          
                          ?>
                           
                         <tr> 
                           <td>Previous Installment</td> 
                           <td><span class="total"><?php echo $expense_data['previous_installment']; ?></span></td>              
                         </tr>
                     
                           
                         <tr> 
                           <td>Remaining Installment</td> 
                           <td><span class="total"><?php echo $expense_data['installment']; ?></span></td>              
                         </tr>
                         <?php endif ?>
                     
                        </tbody>
                </table>
            </div>
            
            <div class="row">
                <div class="receipt-header receipt-header-mid receipt-footer">
                    <div class="col-xs-8 col-sm-8 col-md-8 text-left">
                        <div class="receipt-right">
                            <p><b>Submission Date :</b> <?php echo $expense_data['submission_date']; ?></p>
                            <h5 style="color: rgb(140, 140, 140);">Thank you!</h5>
                        </div>
                    </div>
                    
                </div>
            </div>
            <img class="img-responsive" alt="iamgurdeeposahan" src="<?php base_url();?>assets/assets/dist/img/footer.png" style="width: 1121px; border-radius: 43px;">
        </div>    
    </div>
</div>
     
</body>
<div id="editor"></div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script type="text/javascript">
calc_total();



function calc_total(){
  var sum = 0;
  $(".total").each(function(){
    sum += parseFloat($(this).text());
  });
  $('#sum').text(sum);
}
</script>
<script>  
    (function () {  
        var  
         form = $('.form'),  
         cache_width = form.width(),  
         a4 = [595.28, 841.89]; // for a4 size paper width and height  
  
        $('#create_pdf').on('click', function () {  
            $('body').scrollTop(0);  
            createPDF();  
        });  
        //create pdf  
        function createPDF() {  
            getCanvas().then(function (canvas) {  
                var  
                 img = canvas.toDataURL("image/png"),  
                 doc = new jsPDF({  
                     unit: 'px',  
                     format: 'a4'  
                 });  
                doc.addImage(img, 'JPEG', 20, 20);  
                doc.save('Bhavdip-html-to-pdf.pdf');  
                form.width(cache_width);  
            });  
        }  
  
        // create canvas object  
        function getCanvas() {  
            form.width((a4[0] * 1.33333) - 80).css('max-width', 'none');  
            return html2canvas(form, {  
                imageTimeout: 2000,  
                removeContainer: true  
            });  
        }  
  
    }());  
</script>  
<script>  
    /* 
 * jQuery helper plugin for examples and tests 
 */  
    (function ($) {  
        $.fn.html2canvas = function (options) {  
            var date = new Date(),  
            $message = null,  
            timeoutTimer = false,  
            timer = date.getTime();  
            html2canvas.logging = options && options.logging;  
            html2canvas.Preload(this[0], $.extend({  
                complete: function (images) {  
                    var queue = html2canvas.Parse(this[0], images, options),  
                    $canvas = $(html2canvas.Renderer(queue, options)),  
                    finishTime = new Date();  
  
                    $canvas.css({ position: 'absolute', left: 0, top: 0 }).appendTo(document.body);  
                    $canvas.siblings().toggle();  
  
                    $(window).click(function () {  
                        if (!$canvas.is(':visible')) {  
                            $canvas.toggle().siblings().toggle();  
                            throwMessage("Canvas Render visible");  
                        } else {  
                            $canvas.siblings().toggle();  
                            $canvas.toggle();  
                            throwMessage("Canvas Render hidden");  
                        }  
                    });  
                    throwMessage('Screenshot created in ' + ((finishTime.getTime() - timer) / 1000) + " seconds<br />", 4000);  
                }  
            }, options));  
  
            function throwMessage(msg, duration) {  
                window.clearTimeout(timeoutTimer);  
                timeoutTimer = window.setTimeout(function () {  
                    $message.fadeOut(function () {  
                        $message.remove();  
                    });  
                }, duration || 2000);  
                if ($message)  
                    $message.remove();  
                $message = $('<div ></div>').html(msg).css({  
                    margin: 0,  
                    padding: 10,  
                    background: "#000",  
                    opacity: 0.7,  
                    position: "fixed",  
                    top: 10,  
                    right: 10,  
                    fontFamily: 'Tahoma',  
                    color: '#fff',  
                    fontSize: 12,  
                    borderRadius: 12,  
                    width: 'auto',  
                    height: 'auto',  
                    textAlign: 'center',  
                    textDecoration: 'none'  
                }).hide().fadeIn().appendTo('body');  
            }  
        };  
    })(jQuery);  
  
</script>