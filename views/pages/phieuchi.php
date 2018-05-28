

<!DOCTYPE html>
<html lang="en">
<?php
    include '../layouts/header.php';
?>

<?php
    
    include '../../server/config.php';
     $sql = " SELECT * FROM customers";
 
    // Thực thi câu truy vấn và gán vào $result
    $result = $conn->query($sql);
 ?> 
<body>

    <div id="wrapper">

        <div id="page-wrapper" style="margin-left: 200px; margin-right: 200px">
        	<div class="row" >
        		<input type="button" style="float: right;margin-top: 20px" name="in-pdf" value="IN PHIẾU">
        	</div>
            <div class="row">
                <div class="col-lg-6" >
                    <h3>CÔNG TY ĐẠI HƯNG PHÁT</h3>
                    <h5 style="padding-left: 70px">17- P.KD VLXH (BH)</h5>
                </div>

                <div class="col-lg-6" style="text-align: center;" >
                    <h6 ><b>Mẫu số 02 -TT</b> </h6>
                    <h5>( Ban hành theo QĐ số 15/2016/QĐ-BTC <br> ngày 20/03/2006 của Bộ trưởng BTC )</h5>
                </div>
                <!-- /.col-lg-12 -->
            </div>

			<div class="row">
				<div class="col-lg-6" >
                    <h3 style="float: right;display: block;color: red">PHIẾU CHI</h3>
                    
                </div>				
				<div class="col-lg-6 col-md-pull-1" >
                    
                    <h5 style="float: right;display: block;"> Số: CTM0125-16-96</h5>
                </div>				
				
			</div>

			<div class="row">
				<div class="col-lg-6">
					<h5><b>Người nhận tiền: <a href="">Đặng Minh Tâm (09001305)</a></b></h5>
				</div>
				<div class="col-lg-6 col-lg-pull-1" >
					<h5><b>Địa chỉ: <a href=""> Kho Trà Nóc: Đặng Minh Tâm</a></b></h5>
				</div>
				
				
			</div>

			<div class="row">
				<div class="col-lg-6">
					<h5><b>Lý do chi: <a href=""> Phí vận chuyển xi măng</a></b></h5>
				</div>
				<div class="col-lg-6 col-lg-push-2" >
					<h5><b>Số tiền:<a href="">1.650.000</a></b></h5>
				</div>
				
				
			</div>
			<div class="row">
				<div class="col-lg-12">
					<h5><b>Chứng từ gốc: <a href=""> HĐ 164</a></b></h5>
				</div>
				<div class="col-lg-12">
					<h5><b>Viết bằng chữ: <a href="">(Một triệu sáu trăm năm mươi ngàn đồng chẵn)</a></b></h5>
				</div>
			</div>

			<div class="row">
				<div class="col-lg-8">
					
						<table class="table">
			                <thead>
			                  <tr>
			                    <th>Mã số</th>
			                    <th>Tên khách hàng</th>
			                    <th>Số tiền</th>
			                                      
			                  </tr>
			                </thead>
			                <tbody>                  
			                    <tr>
			                        <th>71009613</th>                     
			                        <th>Cty TNHH MTV NNK Khánh Vinh</th>                     
			                        <th>1.500.000</th>                     
			                    </tr>  

			                    <tr>
			                        <th>71009613</th>                     
			                        <th>Cty TNHH MTV NNK Khánh Vinh</th>                     
			                        <th>1.500.000</th>                     
			                    </tr>                 
			                </tbody>
	              		</table>
				</div>

				<div class="col-lg-3">
					
						<table class="table">
			                <thead>
			                  <tr>
			                    <th>Mã số</th>
			                    
			                    <th>Số tiền</th>
			                                      
			                  </tr>
			                </thead>
			                <tbody>                  
			                    <tr>
			                        <th>71009613</th>                     
			                        <th>Cty</th>                     
			                                        
			                    </tr> 


			                    <tr>
			                        <th>71009613</th>                     
			                        <th>Cty</th>                     
			                                        
			                    </tr>                 
			                </tbody>
	              		</table>
					
				</div>
				
			</div>
            <!-- /.row -->
           
           <!--  <h3>
            	<button type="button" class="btn btn-default">THÊM</button>
            	<button type="button" class="btn btn-default">SỬA</button>
            	<button type="button" class="btn btn-default">XÓA</button>
            </h3>     -->        
           
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->
</body>

</html>
