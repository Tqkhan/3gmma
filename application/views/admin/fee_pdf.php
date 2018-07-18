
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




</style>


</head>
<body id="content">

   <div class="panel-body">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="panel-body print-div">
                                            <div class="row">
                                                
                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                    <div class="row">
                                                        
                                                        <div class="col-lg-4">
                <img src="<?php base_url();?>assets/assets/dist/img/header.png">
                                                        </div>

                                                    </div>
                                                   
                                                </div>


<caption>Fee Voucher</caption>


<caption style="text-align:center;font-size: 17px;"><b>Student Name</b> : <span><?php echo $expense_data['student_name']; ?></span></caption>
<caption style="text-align:center;font-size: 17px;"><b>Submission Date</b> : <span><?php echo $expense_data['submission_date']; ?></span></caption>
<caption style="text-align:center;font-size: 17px;"><b>Email</b> : <span><?php echo $expense_data['student_email']; ?></span></caption>
<caption style="text-align:center;font-size: 17px;"><b>Contact</b> : <span><?php echo $expense_data['student_contact']; ?></span></caption>
<br><br>
   <table align="center">
      

      <thead> <!-- Table Header -->
        <tr> 
           <!-- TH = Table Header -->
          <th scope="col" colspan="2">Detail</th>
          
 
        </tr>
      </thead>
      <tfoot>
        <tr>
          
        </tr>
      </tfoot>
      <tbody> <!-- Table Body for content -->
      
        <tr>
        
        <td>Student Fee Description</td> 
        <td><?php echo $expense_data['student_address']; ?></td> 
        
             
      </tr>
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
        <td><span class="total"><?php echo $expense_data['total']; ?></span></td>       
             
      </tr> 
      
    
  
     </tbody>
    </table>

        
                      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                              <div class="row">
                                <div class="col-lg-12">
                                    <img src="<?php base_url();?>assets/assets/dist/img/footer.png">
                                </div>
                             </div>                   
                          </div>
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



