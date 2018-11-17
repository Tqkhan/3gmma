<?php

/**
*
*/
class Admin extends CI_Controller
{

	public function is_login($value='')
	{
         if (!$this->session->userdata('adminID')) {
            header("location:".base_url().'admin/login');
         }
	}



	public function index()
	{
		$this->is_login();
		$data['title']="Dashboard";
		$this->load->view('admin/header',$data);
		$this->load->view('admin/index');
		$this->load->view('admin/footer');
	}


	public function login()
	{
		$data['title']="Login Panel";
		$this->load->view('admin/login',$data);
	}

	public function check_login()
	{
		$data=$_POST;
		if ($user=$this->admin_model->get_row("users",$data)) {
			$this->session->set_userdata($user);
			redirect(base_url().'admin/');
		}else{

		$data['title']="Login Panel";
		$data['error']="Error in Login";
		}
		$this->load->view('admin/login',$data);

	}


	public function userattendence($qrcode)
	{
		
header('Content-Type: application/json');

		$this->db->select('studentID,student_name')
					 ->from('student')
					 ->where('qr', $qrcode);
					 $textdata = $this->db->get()->row_array();
		$studentID = $textdata['studentID'];
		$this->db->select('*')
					 ->from('userattendence')
					 ->where('studentID', $studentID)
					 ->where('status =', 0)
					 ->limit(1)
					 ->order_by("userattendence.id",'DESC');
					 $result_data = $this->db->get()->row_array();
					 if(empty($result_data))
					 {
					 

					 	$current_date = date("Y/m/d");
					 	$current_time = date("h:i:s");
					 	$insert_data =array(

					 		'studentID'=>$studentID,
					 		'checkin_date'=>$current_date,
					 		'checkin_time'=>$current_time,
					 		'checkout_date' => 0,
					 		'checkout_time'=> 0,
					 		'status' => 0

					 		);

			$result_return = $this->admin_model->insert($insert_data,"userattendence");
			$array_json=['Status'=>'Thank You , Successfully Checked In'];

					 }
					 else
					 {
					 	

					$this->db->select('id')
					 ->from('userattendence')
					 ->where('studentID', $studentID)
					 ->limit(1)
					 ->order_by("userattendence.id",'DESC');
					 $get_id = $this->db->get()->row_array();


						$where=array('id'=>$get_id['id']);
					 	$current_date_out = date("Y/m/d");
					 	$current_time_out = date("h:i:s");

					 	$update_result = array(

					 		'checkout_date' => $current_date_out,
					 		'checkout_time'=> $current_time_out,
					 		'status' => 1

					 		);

		$update_data = $this->admin_model->update("userattendence",$update_result,$where);

			$array_json=['Status'=>'Thank You, Successfully Checked Out']; }
    echo json_encode($array_json);

	}





	public function create_student()
	{
		$this->is_login();

		$data['courses']=$this->admin_model->get("trainer");
		$data['trainers']=$this->admin_model->get("trainer");
		$data['campus']=$this->admin_model->get("campus");
		$this->load->view('admin/header',$data);
		$this->load->view('admin/create_user');
		$this->load->view('admin/footer');
	}

	public function create_campus()
	{
		$this->is_login();

		$this->load->view('admin/header');
		$this->load->view('admin/create_campus');
		$this->load->view('admin/footer');
	}





    public function pdf_expense($s_id)
	{
		$this->is_login();

		$where=array('expenseID'=>$s_id);
		$result['expense_data'] = $this->admin_model->get_where_single('expense',$where);
		
		//$this->load->view('admin/pdf_expense',$result);

		$this->load->library('pdf');
		$this->pdf->load_view('admin/pdf_expense',$result);
		$this->pdf->Output();
		
	}





	 public function pdf_student($s_id)
	{
		

		$where=array('studentID'=>$s_id);

$query = $this->db->select('student.*, GROUP_CONCAT(course.course_title SEPARATOR ",") AS course_title,GROUP_CONCAT(trainer.trainer_name SEPARATOR ",") AS trainer,GROUP_CONCAT(students_courses.Timing SEPARATOR ",") AS course_timing,GROUP_CONCAT(students_courses.Fee SEPARATOR ",") AS course_fee,GROUP_CONCAT(students_courses.courseID SEPARATOR ",") AS course_ID,GROUP_CONCAT(students_courses.TrainerID SEPARATOR ",") AS trainer_ID,GROUP_CONCAT(students_courses.id SEPARATOR ",") AS course_data_ID,GROUP_CONCAT(students_courses.TrainerID SEPARATOR ",") AS TrinerID_data_ID')
						->from('student')
						->join('students_courses', 'student.studentID = students_courses.studentID')
						->join('course', 'course.courseID = students_courses.courseID')
						->join('trainer', 'trainer.trainerID=students_courses.trainerID')
						->where('student.studentID', $s_id)
						->group_by('student.studentID');
		$result['student']=$this->db->get()->result_array();

// echo '<pre>';print_r($result['student']);die();
		
		$result['data'] = $this->admin_model->get_where_single('student',$where);
		
		// $this->load->view('admin/pdf_student',$result);
		
		$this->load->library('pdf');
		$this->pdf->load_view('admin/pdf_student',$result);
		$this->pdf->Output();
		
	}




	function getdata_selectbox()
	{
		$course_id = $this->input->post('id');
		$this->db->select('course_timings')
					 ->from('course')
					 ->where('courseID', $course_id);
					 $textdata = $this->db->get()->result_array();
					 $data = $textdata[0]['course_timings'];
		$result_array = explode(",",$data);
		echo json_encode($result_array);
		//print_r($result_array);

	}




	function get_coarse_selectbox()
	{
		$course_id = $this->input->post('id');
		$textdata = $this->db->get_where('course',array('course_shift'=>$course_id))->result_array();
					echo json_encode($textdata);
	}
	function get_trainer_selectbox()
	{
		$course_id = $this->input->post('id');
		$this->db->select('a.trainerID,a.trainer_name')
					 ->from("trainer AS a")
					 ->join("course AS b","find_in_set(b.courseID, a.courseID)","left",false)
					 ->where('b.courseID', $course_id)
					 ->where('a.status', 'active')
					 ->group_by('a.trainerID');
					 $textdata = $this->db->get()->result_array();
		echo json_encode($textdata);
		// print_r($textdata);die();

		// SELECT  a.trainerID, a.trainer_name FROM trainer a 
		// INNER JOIN course b 
		// ON FIND_IN_SET(b.courseID, a.courseID) 
		// where b.courseID = 3 and  GROUP BY a.trainerID

	}


	public function view_attendence_students($value='')
    {
              
               $textdata['data_attendence']=$this->db->query("select student.studentID,student.student_name,userattendence.*,TIMEDIFF(userattendence.checkout_time,userattendence.checkin_time) as time_df from userattendence INNER JOIN student on (student.studentID=userattendence.studentID) ORDER BY userattendence.id DESC
")->result_array();

    	
		$this->load->view('admin/header');
		$this->load->view('admin/view_attendence_students',$textdata);
		$this->load->view('admin/footer');
    }












	function get_fee_selectbox()
	{
	$course_id = $this->input->post('id');
	$this->db->select('course_price')
			 ->from('course')
			 ->where('courseID', $course_id);
	$textdata = $this->db->get()->result_array();
	echo json_encode($textdata);

	}






	function in_active_fee($PendinguserfeeID)
	{
		
$where=array('id'=>$PendinguserfeeID);

$data['user_data']=$this->admin_model->get_where_single("pending_students_fees",$where);


// print_r($data['user_data']);die();

		$data=$_POST;
		$where=array('id'=>$PendingfeeID);
		if ($this->admin_model->update("course",$data,$where)) {
			echo "<script>
			alert('Successfully Updated');
			window.location.href='".base_url()."admin/view_course'
			</script>";
		}else{
			echo "<script>
			alert('Error in updating, Already Updated or no Row Found');
			window.location.href='".base_url()."admin/view_course'
			</script>";
		}
	}

	public function create_expense()
	{
		$this->is_login();

		$this->load->view('admin/header');
		$this->load->view('admin/create_expense');
		$this->load->view('admin/footer');
	}
	public function create_category()
	{
		$this->is_login();

		$data['title']="Create Category";
		$this->load->view('admin/header',$data);
		$this->load->view('admin/create_category');
		$this->load->view('admin/footer');
	}
	public function create_subcategory()
	{
		$this->is_login();

		$data['title']="Create Subcategory";
		$data['categories']=$this->admin_model->get_where_single("category",array('campus_id'=>$_SESSION['campus_id']));
		$this->load->view('admin/header',$data);
		$this->load->view('admin/create_subcategory');
		$this->load->view('admin/footer');
	}

	public function insert_abc()
	{
		for ($i=1364; $i <=1625 ; $i++) { 
			$this->db->insert('students_courses',['studentID'=>$i]);
		}
		echo "Done";
	}
	public function view_student()
	{


		$this->is_login();
     


			if ($_GET['filter']) {
            	$query = $this->db->select('s.studentID,s.student_name,s.student_contact,s.student_email,s.home_phone,s.status,c.course_title,cam.name as campus,sc.course_shift,sc.Timing,t.trainer_name as trainer')
						->from('student s')
						->join('students_courses sc', 's.studentID = sc.studentID', 'left')
						->join('course c', 'c.courseID = sc.courseID', 'left')
						->join('trainer t', 't.trainerID=sc.trainerID', 'left')
						->join('campus cam','cam.id = sc.campusID', 'left');

    	        if (isset($_GET['course_shift']) && $_GET['course_shift']!='') {
				 $this->db->where('sc.course_shift',$_GET['course_shift']);
				}
				if (isset($_GET['courseID']) && $_GET['courseID']!='') {				
				 $this->db->where('sc.courseID',$_GET['courseID']);
				} 
				if (isset($_GET['gym_timing']) && $_GET['gym_timing']!='') {
				 $this->db->where('sc.Timing',$_GET['gym_timing']);
				}
				if (isset($_GET['studentID']) && $_GET['studentID']!='') {
				 $this->db->where('sc.studentID',$_GET['studentID']);
				}
					$data['students']=$this->db->get()->result_array();

			}else if ($_GET['campus']) {
            	$query = $this->db->select('s.*, GROUP_CONCAT(c.course_title SEPARATOR ",") AS course_title,GROUP_CONCAT(t.trainer_name SEPARATOR ",") AS trainer,GROUP_CONCAT(sc.course_shift SEPARATOR ",") AS course_shift,GROUP_CONCAT(sc.Timing SEPARATOR ",") AS Timing,cam.name AS campus')
						->from('student s')
						->join('students_courses sc', 's.studentID = sc.studentID', 'left')
						->join('course c', 'c.courseID = sc.courseID', 'left')
						->join('trainer t', 't.trainerID=sc.trainerID', 'left')
						->join('campus cam','cam.id = sc.campusID', 'left')
						->order_by("s.studentID",'DESC')
						->group_by('s.studentID');
						
			   $this->db->where('sc.campusID', $_GET['campus']);

					$data['students']=$this->db->get()->result_array();

			}
            else{
		$query = $this->db->select('student.*, GROUP_CONCAT(course.course_title SEPARATOR ",") AS course_title,GROUP_CONCAT(trainer.trainer_name SEPARATOR ",") AS trainer,students_courses.course_shift,GROUP_CONCAT(students_courses.course_shift SEPARATOR ",") AS course_shift,GROUP_CONCAT(students_courses.Timing SEPARATOR ",") AS Timing,campus.name AS campus')
						->from('student')
						->join('students_courses', 'student.studentID = students_courses.studentID', 'left')
						->join('course', 'course.courseID = students_courses.courseID', 'left')
						->join('trainer', 'trainer.trainerID=students_courses.trainerID', 'left')
						->join('campus','campus.id = students_courses.campusID', 'left')
						->order_by("student.studentID",'DESC')
						->group_by('student.studentID');
						if ($_SESSION['main'] == "0") {
						    $this->db->where('students_courses.campusID', $_SESSION['campus_id']);
						} 
					$data['students']=$this->db->get()->result_array();

					}

						$data['length_of_rows'] = sizeof($data['students']);
						$data['title']="View Students";
						$data['courses']=$this->db->get('course')->result_array();
						$data['campuses']=$this->db->get('campus')->result_array();
						$data['students_row']=$this->db->get('student')->result_array();

						$this->load->view('admin/header',$data);
						$this->load->view('admin/view_student');
						$this->load->view('admin/footer');  
	}



	public function view_inactive_students()
		{
			$this->is_login();
			$query = $this->db->select('student.*, users.*, GROUP_CONCAT(course.course_title SEPARATOR ",") AS course_title,GROUP_CONCAT(trainer.trainer_name SEPARATOR ",") AS trainer,campus.name AS campus')
							->from('student')
							->join('students_courses', 'student.studentID = students_courses.studentID', 'left')
							->join('course', 'course.courseID = students_courses.courseID', 'left')
							->join('trainer', 'trainer.trainerID=students_courses.trainerID', 'left')
							->join('campus','students_courses.campusID = campus.id', 'left')
							->join('users','campus.id = users.campus_id', 'left')
							->where('student.status', 'in_active')
							->order_by("student.studentID",'DESC')
							->group_by('student.studentID');
							// if ($_SESSION['main'] == "0") {
							//     $this->db->where('course.campus_id', $_SESSION['campus_id']);
							// } 
							if ($_SESSION['adminID'] == "0") {
							    $this->db->where('course.campus_id', $_SESSION['campus_id']);
							} 
							else if ($_SESSION['adminID'] == "1") {
							    $this->db->where('users.campus_id', $_SESSION['campus_id']);
							}
							else if ($_SESSION['adminID'] == "2") {
							    $this->db->where('users.campus_id', $_SESSION['campus_id']);
							} 

			$data['students']=$this->db->get()->result_array();
			$data['length_of_rows'] = sizeof($data['students']);
			$data['title']="View In Active Students";
			$this->load->view('admin/header',$data);
			$this->load->view('admin/view_inactive_students');
			$this->load->view('admin/footer');  
		}




	public function view_active_students()
	{
		$this->is_login();
		$query = $this->db->select('student.*, users.*, GROUP_CONCAT(course.course_title SEPARATOR ",") AS course_title,GROUP_CONCAT(trainer.trainer_name SEPARATOR ",") AS trainer,campus.name AS campus')
						->from('student')
						->join('students_courses', 'student.studentID = students_courses.studentID','left')
						->join('course', 'course.courseID = students_courses.courseID','left')
						->join('trainer', 'trainer.trainerID=students_courses.trainerID','left')
						->join('campus','students_courses.campusID = campus.id', 'left')
						->join('users','campus.id = users.campus_id', 'left')
						->where('student.status', 'active')
						->order_by("student.studentID",'DESC')
						->group_by('student.studentID');
						if ($_SESSION['adminID'] == "0") {
						    $this->db->where('course.campus_id', $_SESSION['campus_id']);
						} 
						else if ($_SESSION['adminID'] == "1") {
						    $this->db->where('users.campus_id', $_SESSION['campus_id']);
						}
						else if ($_SESSION['adminID'] == "2") {
						    $this->db->where('users.campus_id', $_SESSION['campus_id']);
						} 
						// print_r($_SESSION['main']);die();
		$data['students']=$this->db->get()->result_array();
		$data['length_of_rows'] = sizeof($data['students']);
		$data['title']="View Active Students";
		$this->load->view('admin/header',$data);
		$this->load->view('admin/view_active_students');
		$this->load->view('admin/footer');

	}




		function getresult_data_fee()
		{
			echo $course_fee_data = $this->input->post('id');

		}



	public function view_subcategory()
	{
		$this->is_login();
		
		if ($_SESSION['main'] == "0") {
			    $query="select category.categoryName,subcategory.* from subcategory inner join category on(category.categoryID=subcategory.categoryID) where category.campus_id = ".$_SESSION['campus_id']." order by subcategory.subCategoryID DESC";
			} 
			else{
				$query="select category.categoryName,subcategory.* from subcategory inner join category on(category.categoryID=subcategory.categoryID) order by subcategory.subCategoryID DESC";
			}
		$data['subcategories']=$this->admin_model->raw_query($query,1);
		$data['title']="View Subcategory";
		$this->load->view('admin/header',$data);
		$this->load->view('admin/view_subcategory');
		$this->load->view('admin/footer');
	}
	public function create_course()
	{
		$this->is_login();
		$this->load->view('admin/header');
		$this->load->view('admin/create_course');
		$this->load->view('admin/footer');
	}
	public function view_course()
	{
		$this->is_login();
		$data['courses']=$this->admin_model->get("course");
		$data['title']="View Course";
		$this->load->view('admin/header',$data);
		$this->load->view('admin/view_course');
		$this->load->view('admin/footer');
	}
	public function view_category()
	{
		$this->is_login();
		$data['categories']=$this->admin_model->get_where_single("category",array('campus_id'=>$_SESSION['campus_id']));
		$data['title']="View Category";
		$this->load->view('admin/header',$data);
		$this->load->view('admin/view_category');
		$this->load->view('admin/footer');
	}
	public function get_subcategories()
	{
		$this->is_login();

		$query="select * from subcategory where categoryID='".$_POST['categoryID']."'";
		$subcategories=$this->admin_model->raw_query($query,1);
        echo '<option value="">Select Sub Category</option>';
        foreach ($subcategories as $subcategory) {
        ?>
          <option value="<?php echo $subcategory['subCategoryID'] ?>"><?php echo $subcategory['subCategoryName'] ?></option>
        <?php
        }

	}
	

	public function create_trainer()
	{
		$this->is_login();
		$data['courses']=$this->admin_model->raw_query("select * from course ",1);
		$this->load->view('admin/header',$data);
		$this->load->view('admin/create_trainer');
		$this->load->view('admin/footer');
	}


	public function edit_trainer($trainerID)
	{
		$this->is_login();

		$where=array('trainerID'=>$trainerID);
		$data['courses']=$this->admin_model->raw_query("select * from course ",1);


	$this->db->select('a.*,GROUP_CONCAT(b.course_title SEPARATOR ",") AS course_title')
	->from("trainer AS a")
	->join("course AS b","find_in_set(b.courseID, a.courseID)","left",false)
	->where("trainerID",$trainerID )
	->group_by('a.trainerID');
	$data['trainers_data'] = $this->db->get()->result_array();
	$data['trainer']=$this->admin_model->get_row("trainer",$where);
	$data['title']="Edit Trainer";

		$this->load->view('admin/header',$data);
		$this->load->view('admin/edit_trainer');
		$this->load->view('admin/footer');
	}

	public function edit_campus($id)
	{
		//error_reporting('-1');
		$this->is_login();
		$data['campus'] = $this->admin_model->get_row('campus',array('id' => $id));
		$data['title']="Edit Campus";
		$this->load->view('admin/header',$data);
		$this->load->view('admin/edit_campus');
		$this->load->view('admin/footer');
	}

	public function edit_student($studentID)
	{
		$this->is_login();
		$where=array('studentID'=>$studentID);

$query = $this->db->select('student.*, GROUP_CONCAT(course.course_title SEPARATOR ",") AS course_title,GROUP_CONCAT(trainer.trainer_name SEPARATOR ",") AS trainer,GROUP_CONCAT(students_courses.Timing SEPARATOR ",") AS course_timing,GROUP_CONCAT(students_courses.Fee SEPARATOR ",") AS course_fee,GROUP_CONCAT(students_courses.courseID SEPARATOR ",") AS course_ID,GROUP_CONCAT(students_courses.TrainerID SEPARATOR ",") AS trainer_ID,GROUP_CONCAT(students_courses.id SEPARATOR ",") AS course_data_ID,GROUP_CONCAT(students_courses.TrainerID SEPARATOR ",") AS TrinerID_data_ID, students_courses.campusID')
						->from('student')
						->join('students_courses', 'student.studentID = students_courses.studentID')
						->join('course', 'course.courseID = students_courses.courseID')
						->join('trainer', 'trainer.trainerID=students_courses.trainerID')
						->where('student.studentID', $studentID)
						->group_by('student.studentID');
		$data['student']=$this->db->get()->result_array();


// echo '<pre>';print_r($data['student']);die();

// echo '<pre>';print_r($data['students_courses']);die();
		$data['title']="Edit Student";
		$data['courses']=$this->admin_model->get_where_single("course",array('campus_id'),$_SESSION['campus_id']);
		$data['campus']=$this->admin_model->get("campus");
		$data['trainers']=$this->admin_model->get("trainer");
		$this->load->view('admin/header',$data);
		//print_r($data['campus']);die();
		$this->load->view('admin/edit_student');
		$this->load->view('admin/footer');
	}
	public function edit_course($courseID)
	{
		$this->is_login();

		$where=array('courseID'=>$courseID);
		$data['course']=$this->admin_model->get_row("course",$where);
		$data['title']="Edit Course";
		$this->load->view('admin/header',$data);
		$this->load->view('admin/edit_course');
		$this->load->view('admin/footer');
	}
	public function edit_expense($expenseID)
	{
		$this->is_login();

		$where=array('expenseID'=>$expenseID);
		$data['expense']=$this->admin_model->get_row("expense",$where);
		$data['title']="Edit Expense";
		$this->load->view('admin/header',$data);
		$this->load->view('admin/edit_expense');
		$this->load->view('admin/footer');
	}
	public function edit_category($categoryID)
	{
		$this->is_login();

		$where=array('categoryID'=>$categoryID);
		$data['category']=$this->admin_model->get_row("category",$where);
		$data['title']="Edit Category";
		$this->load->view('admin/header',$data);
		$this->load->view('admin/edit_category');
		$this->load->view('admin/footer');
	}
	public function edit_subcategory($subcategoryID)
	{
		$this->is_login();

		$where=array('subCategoryID'=>$subcategoryID);
		$data['categories']=$this->admin_model->get("category");
		$data['subcategory']=$this->admin_model->get_row("subcategory",$where);
		$data['title']="Edit SubCategory";
		$this->load->view('admin/header',$data);
		$this->load->view('admin/edit_subcategory');
		$this->load->view('admin/footer');
	}
	public function edit_product($productID)
	{
		$this->is_login();

		$where=array('productID'=>$productID);
		$data['categories']=$this->admin_model->get("category");
		$data['product']=$this->admin_model->get_row("products",$where);
		$categoryID=$data['product']['categoryID'];
		$data['subcategories']=$this->admin_model->raw_query("select * from subcategory where categoryID='$categoryID'",1);
		$data['title']="Edit Product";
		$this->load->view('admin/header',$data);
		$this->load->view('admin/edit_product');
		$this->load->view('admin/footer');
	}
	public function sell_product($studentID)
	{
		$this->is_login();
		$where=array('studentID'=>$studentID);
		$data['student']=$this->admin_model->get_row("student",$where);
		$data['categories']=$this->admin_model->get("category");
		$data['students']=$this->admin_model->get("student");
		$query="select  subcategory.subCategoryName,category.categoryName,products.* from products inner join category on (category.categoryID=products.categoryID) inner join subcategory on (subcategory.subCategoryID=products.subCategoryID) order by products.productID DESC";
		$data['products']=$this->admin_model->raw_query($query,1);
		/*$data['product']=$this->admin_model->get_row("products",$where);*/
		/*$categoryID=$data['product']['categoryID'];*/
		/*$data['subcategories']=$this->admin_model->raw_query("select * from subcategory where categoryID='$categoryID'",1);*/
		$data['students']=$this->admin_model->raw_query("select * from student",1);
		$data['title']="Edit Product";
		$this->load->view('admin/header',$data);
		$this->load->view('admin/sell_product');
		$this->load->view('admin/footer');
	}
	public function sell_product_selected()
	{
	$data=$_POST;
	// $data['year']=date("Y");
	// $data['months']=date("F");
	// $data['day']=date("d");


		if ($this->admin_model->insert($data,"sell_product")) {
			$product=$this->admin_model->get_row("products",array('productID'=>$data['productName']));
			$qty = ($product['qty'] - $data['quantity']);
			$this->admin_model->update('products',array('qty'=>$qty),array('productID'=>$data['productName']));
			echo "<script>
			alert('Successfully Sold');
			window.location.href='".base_url()."admin/sold_product'
			</script>";
		}else{
			echo "<script>
			alert('Error in Inserting, Please Try Again');
			</script>";
		}
	}
	public function view_trainer()
	{
		$this->is_login();
		//$courseID_explode_data['carry'] = array();
		$where=array('status'=>'active');

		$this->db->select('a.*,GROUP_CONCAT(b.course_title SEPARATOR ",") AS course_title')
					 ->from("trainer AS a")
					 ->join("course AS b","find_in_set(b.courseID, a.courseID)","left",false)
					 ->group_by('a.trainerID');
					 $data['trainers'] = $this->db->get()->result_array();
					 
							if ($_SESSION['main'] == "0") {
						    /*$this->db->where('course.campus_id', $_SESSION['campus_id']);*/
						} 

		$data['title']="View Trainer";
		$this->load->view('admin/header',$data);
		$this->load->view('admin/view_trainer');
		$this->load->view('admin/footer');
	}

	public function view_campus()
	{
		$this->is_login();
		$data['campus'] = $this->admin_model->get('campus');
		$data['title']="View Campus";
		$this->load->view('admin/header',$data);
		$this->load->view('admin/view_campus');
		$this->load->view('admin/footer');
	}


	function view_trainer_active()
	{

	$this->is_login();
	$where=array('status'=>'active');

	$this->db->select('a.*,GROUP_CONCAT(b.course_title SEPARATOR ",") AS course_title')
				 ->from("trainer AS a")
				 ->join("course AS b","find_in_set(b.courseID, a.courseID)","left",false)
				 ->where("a.status","active")
				 ->group_by('a.trainerID');
				 $data['trainers'] = $this->db->get()->result_array();
	
	$data['title']="View Active Trainer";
	$this->load->view('admin/header',$data);
	$this->load->view('admin/view_trainer_active');
	$this->load->view('admin/footer');


	}


	public function create_product()
	{
		$data['title']="Create Product";
		$data['categories']=$this->admin_model->get_where_single("category",array('campus_id'=>$_SESSION['campus_id']));
		$this->load->view('admin/header',$data);
		$this->load->view('admin/create_product');
		$this->load->view('admin/footer');

	}

	public function view_product()
	{
		$data['title']="View Product";
		
		if ($_SESSION['main'] == "0") {
						   $query="select subcategory.subCategoryName,category.categoryName,products.* from products inner join category on (category.categoryID=products.categoryID) inner join subcategory on (subcategory.subCategoryID=products.subCategoryID) where category.campus_id = ".$_SESSION['campus_id']." order by products.productID DESC";
						} 
						else{
							$query="select subcategory.subCategoryName,category.categoryName,products.* from products inner join category on (category.categoryID=products.categoryID) inner join subcategory on (subcategory.subCategoryID=products.subCategoryID) order by products.productID DESC";
						}
		$data['products']=$this->admin_model->raw_query($query,1);
		$this->load->view('admin/header',$data);
		$this->load->view('admin/view_product');
		$this->load->view('admin/footer');

	}
	public function sold_product()
	{
		
		if ($_SESSION['main'] == "0") {
						   $data['solds']=$this->admin_model->raw_query("select sell_product.*,student.*,products.productName from sell_product inner join student on (sell_product.studentID=student.studentID) inner join products on (sell_product.productName=products.productID) inner join category on (category.categoryID=products.categoryID) where category.campus_id = ".$_SESSION['campus_id']." order by sell_ID DESC",1);
						} 
						else{
							$data['solds']=$this->admin_model->raw_query("select sell_product.*,student.*,products.productName from sell_product inner join student on (sell_product.studentID=student.studentID) inner join products on (sell_product.productName=products.productID) inner join category on (category.categoryID=products.categoryID)  order by sell_ID DESC",1);
						}
		$this->load->view('admin/header',$data);
		$this->load->view('admin/sold_product');
		$this->load->view('admin/footer');

	}
	public function product_sell_process()
	{

	}
	public function product_sale()
	{
		$this->is_login();
		$where=array('studentID'=>$studentID);
		$data['categories']=$this->admin_model->get("category");
		$data['students']=$this->admin_model->get("student");
		$query="select  subcategory.subCategoryName,category.categoryName,products.* from products inner join category on (category.categoryID=products.categoryID) inner join subcategory on (subcategory.subCategoryID=products.subCategoryID) where category.campus_id = ".$_SESSION['campus_id']." order by products.productID DESC";
		$data['products']=$this->admin_model->raw_query($query,1);
		$data['title']="Product For Sale";
		//print_r($data);die;
		$this->load->view('admin/header',$data);
		$this->load->view('admin/sell_product');
		$this->load->view('admin/footer');
		// $data['title']="Product For Sale";
		// $data['students']=$this->admin_model->raw_query("select * from student",1);
		// $query="select subcategory.subCategoryName,category.categoryName,products.* from products inner join category on (category.categoryID=products.categoryID) inner join subcategory on (subcategory.subCategoryID=products.subCategoryID) order by products.productID DESC";
		// $data['products']=$this->admin_model->raw_query($query,1);
		// $this->load->view('admin/header',$data);
		// $this->load->view('admin/product_sale');
		// $this->load->view('admin/footer');
	}

	public function get_product_detail()
	{
		$name = $this->input->post('name');
		$product=$this->admin_model->get_row("products",array('productID'=>$name));
		echo json_encode($product);
	}
	public function mark_attendence()
	{
		$data['students']=$this->admin_model->raw_query("select * from student",1);
		$this->load->view('admin/header',$data);
		$this->load->view('admin/mark_attendence');
		$this->load->view('admin/footer');
	}




	function trainers_salaries($id= null)
	{
		$query = $this->db->select('trainer.trainerID,trainer.trainer_salary,trainer.trainer_name,trainer_salary.id,trainer_salary.submission_date,trainer_salary.status')
		->from('trainer_salary')
		->join('trainer', 'trainer_salary.trainerID = trainer.trainerID')
		->where('trainer_salary.status', 0);
						
		$data['trainer'] = $this->db->get()->result_array();
		$this->load->view('admin/header',$data);
		$this->load->view('admin/trainers_salaries');
		$this->load->view('admin/footer');
	}

	function submit_salaries($id= null)
	{
		error_reporting(1);
		$query = $this->db->select('trainer.trainerID,trainer.trainer_salary,trainer.trainer_name,trainer_salary.id,trainer_salary.submission_date,trainer_salary.status')
		->from('trainer_salary')
		->join('trainer', 'trainer_salary.trainerID = trainer.trainerID')
		->where('trainer_salary.status', 1)
		->where("trainer_salary.submission_date > ", " DATE_SUB(now(), INTERVAL 1 MONTH) ");
			if ($id) {
		$this->db->where('trainer_salary.trainerID', $id);
			}
		$data['trainer'] = $this->db->get()->result_array();
		$this->load->view('admin/header',$data);
		$this->load->view('admin/submit_salaries');
		$this->load->view('admin/footer');
	}







	public function insert_attendence()
	{
		$data=$_POST;
		$data['time_of_attendence']=date("d-m-Y h:i:s a");
		if ($this->admin_model->insert($data,"student_attendence")) {
			echo "<script>
			alert('Successfully Inserted');
			window.location.href='".base_url()."admin/view_attendence'
			</script>";
		}else{
			echo "<script>
			alert('Error in Inserting, Please Try Again');
			</script>";
		}

	}
	public function view_attendence()
	{
		/*$query="select student.*,student_attendence.* from student inner join student_attendence on (student.studentID=student_attendence.studentID) order by student_attendence.attendenceID DESC";*/
		$query="select student_attendence.*,student.* from student_attendence inner join student on (student.studentID=student_attendence.studentID) order by student_attendence.attendenceID DESC";
		$data['attendences']=$this->admin_model->raw_query($query,1);
		$this->load->view('admin/header',$data);
		$this->load->view('admin/view_attendence');
		$this->load->view('admin/footer');
	}
	public function view_expense()
	{
		$data['expenses']=$this->admin_model->get_where_single("expense",array('campus_id'=>$_SESSION['campus_id']));
		$data['title']="View Expense";
		$this->load->view('admin/header',$data);
		$this->load->view('admin/view_expense');
		$this->load->view('admin/footer');
	}
	// public function view_fees_one_student($id= null)
	// {
		
		
	// 	$this->db->select('sf.*')
	// 	 ->from('student_fee sf')
	// 	 ->join('student s', 's.studentID = sf.studentID')
	// 	 ->join('students_courses sc', 'sc.studentID = s.studentID')
	// 	 ->join('course c', 'c.courseID = sc.courseID')
	// 	 ->order_by('sf.feeID')
	// 	 ->group_by('sf.feeID');
		  
	// 	   if (!$id) {
	// 	   	if ($_SESSION['main']!=1) {
	// 	$this->db->where('sc.campusID',$_SESSION['campus_id']);			  	}
	// 	  }
	// 	  else{
	// 	$this->db->where('s.studentID',$id);
	// 	  }
				   
			
				


	// 	$data['fees'] = $this->db->get()->result_array();
	// 	$this->load->view('admin/header',$data);
	// 	$this->load->view('admin/view_fees_one_student');
	// 	$this->load->view('admin/footer');
	// }
	public function view_fees_one_student($id= null)
		{
			

			$this->db->select('pending_students_fees.*, std.monthly_fee');
			$this->db->from('pending_students_fees')
			  ->join('student std', 'std.studentID = pending_students_fees.studentID')


			 // ->join('student_fee stdf', 'stdf.studentID = pending_students_fees.studentID' , 'left');
		      // ->group_by('stdf.feeID');
			// ->join('student_fee stdf', 'stdf.studentID = std.studentID')
			->order_by('pending_students_fees.id' , 'DESC');
			  $this->db->where('pending_students_fees.studentID' , $id);


			//$data['fees']=$this->admin_model->get("student_fee");
			/**/
			// $this->db->select('sf.*')
			// 		 ->from('student_fee sf')
			// 		 ->join('student s', 's.studentID = sf.studentID')
			// 		 ->join('students_courses sc', 'sc.studentID = s.studentID')
			// 		 ->join('course c', 'c.courseID = sc.courseID')
			// 		 ->order_by('sf.feeID')
			// 		 ->group_by('sf.feeID');
					  
			// 		   if (!$id) {
			// 		   	if ($_SESSION['main']!=1) {
			// 		$this->db->where('sc.campusID',$_SESSION['campus_id']);			  	}
			// 		  }
			// 		  else{
			// 		$this->db->where('s.studentID',$id);
			// 		  }
				/**/	   
					  // }
					


			$data['fees'] = $this->db->get()->result_array();
			   // print_r($data['fees']);die();
			$this->load->view('admin/header',$data);
			$this->load->view('admin/view_fees_one_student');
			$this->load->view('admin/footer');
		}
	public function view_fees()
	{
		
		//$data['fees']=$this->admin_model->get("student_fee");
		$this->db->select('sf.*')
				 ->from('student_fee sf')
				 ->join('student s', 's.studentID = sf.studentID')
				 ->join('students_courses sc', 'sc.studentID = s.studentID')
				 ->join('course c', 'c.courseID = sc.courseID')
				 ->order_by('sf.feeID')
				 ->group_by('sf.feeID');
				  
				
				   	if ($_SESSION['main']!=1) {
				$this->db->where('sc.campusID',$_SESSION['campus_id']);			  	}
				 
				
				  // }
				


		$data['fees'] = $this->db->get()->result_array();
		$this->load->view('admin/header',$data);
		$this->load->view('admin/view_fees');
		$this->load->view('admin/footer');
	}



	public function create_fee_voucher($requestID)
	{
		$where=array(
			'feeID'=>$requestID
			);
		$data['expense_data']=$this->admin_model->edit_request($where);
		// echo '<pre>';print_r($data);die();
		// $this->load->view('admin/fee_pdf',$data);


       
		$this->load->library('pdf');
		$this->pdf->load_view('admin/fee_pdf',$data);
		$this->pdf->Output();


	}
	

	
	public function create_fee()
	{
		$query = $this->db->select('student.student_name,student.monthly_fee,student.admission_fee,student.membership_fee,student.other_fee,student.discountfee,student.membership_fee,pending_students_fees.date,pending_students_fees.studentID,pending_students_fees.id')
						->from('student')
						->join('students_courses', 'students_courses.studentID = student.studentID', 'left')
						->join('course', 'course.courseID = students_courses.courseID', 'left')
						->join('pending_students_fees', 'student.studentID = pending_students_fees.studentID')
						->where('pending_students_fees.status', 0);
						if ($_SESSION['campus_id']!=0) {
						
						$this->db->where('students_courses.campusID',$_SESSION['campus_id']);
						}
						// $this->db->group_by('student.studentID');
		$data['students'] = $this->db->get()->result_array();
		// echo '<pre>';print_r($query);die();
		$this->load->view('admin/header',$data);
		$this->load->view('admin/create_fee');
		$this->load->view('admin/footer');
	}


	public function fee_form($studentID,$pendingfeeID)
	{

		$this->is_login();
		$where=array('studentID'=>$studentID);
		$where_pending=array('id'=>$pendingfeeID,'studentID'=>$studentID);
		$data['student']=$this->db->query('SELECT `student`.*, GROUP_CONCAT(course.courseID SEPARATOR ", ") AS course_id, GROUP_CONCAT(trainer.trainerID SEPARATOR ", ") AS trainerID FROM `student` INNER JOIN `students_courses` ON `student`.`studentID` = `students_courses`.`studentID` INNER JOIN `course` ON `course`.`courseID` = `students_courses`.`courseID` 
			inner join trainer on students_courses.trainerID=trainer.trainerID WHERE `student`.`studentID` ='.$studentID)->row_array();



		$data['fee_detail']=$this->admin_model->get_row("pending_students_fees",$where_pending);
		$data['title']="Edit Student";
		$data['courses']=$this->admin_model->get("course");
		$data['trainers']=$this->admin_model->get("trainer");
		$this->load->view('admin/header',$data);
		$this->load->view('admin/fee_form');
		$this->load->view('admin/footer');
	}


	function salary_submit_form($trainerID,$pendingtrainID)
	{
		
		$this->is_login();
		$where=array('trainerID'=>$trainerID);
		$where_pending=array('id'=>$pendingtrainID,'trainerID'=>$trainerID);
		$data['trainer']=$this->admin_model->get_row("trainer",$where);
		$data['trainer_salary']=$this->admin_model->get_row("trainer_salary",$where_pending);
		$data['title']="Edit Trainer";
		$this->load->view('admin/header',$data);
		$this->load->view('admin/salary_submit_form');
		$this->load->view('admin/footer');
	}




function salary_submission()
{
	$data=$_POST;

	
	$submission_salary_data = array(
		'trainerID' => $data['trainerID'] ,
		'month' => $data['submission_month'],
		'salary_submission_date' => $data['submission_date'],
		'salary' => $data['salary'],
		'status' => $data['status'] 
		);

$expense_salary_data = array(
		'expense_title' => 'Salary - '.$data['trainer_name'] ,
		'expense_description' => 'Salary Expense - '.$data['submission_month'],
		'expense_amount' => $data['salary'],
		'date_time' => $data['submission_date'] .' '. date("h:i:s a")
		);

	$trainer_salaryID = $data['trainer_salaryID'];
	$this->admin_model->update('trainer_salary',array('status' => 1),array('id' =>$trainer_salaryID));
	echo 'sucess';



	if ($this->admin_model->insert($submission_salary_data,"trainer_salary_submission")) {

	$data_expense = $this->admin_model->insert($expense_salary_data,"expense");
	echo "<script>
	alert('Successfully Inserted');
	window.location.href='".base_url()."admin/trainers_salaries'
	</script>";
	}else{
	echo "<script>
	alert('Error in Inserting, Please Try Again');
	</script>";
	}
	
}





	public function insert_fee()
	{
		
		$data=$_POST;
		$ID = $data['studentID'];
		$st=$this->db->query('select * from student_fee where studentID='.$ID.' order by feeID DESC limit 0,1')->row_array();
		 // die("<pre>".print_r($st));
		$PendindID = $data['pendingID'];
		unset($data['pendingID']);
		unset($data['installment_total']);
		$delete_data = array(
			'studentID'=>$ID 
			);




$id_data = $this->admin_model->update('pending_students_fees', $data ,array('id' =>$PendindID));

			if ($_POST['installment']!="" && $_POST['is_installment']!=0) {
				$this->db->update('pending_students_fees',
			
			[
			'previous_installment'=>$st['installment'],
		    'is_previous'=>$st['is_installment'],
		    'status'=> 'Partial',
			'is_installment'=>$_POST['is_installment'],
			'installment'=>$_POST['installment_total']-$_POST['installment'],
		    ]

		    ,['studentID'=>$ID,'id'=>$PendindID]);
			}
			else{
			$this->db->update('pending_students_fees',[
		      'is_installment'=>0,'installment'=>0,
		      'previous_installment'=>$st['installment'],
		      'status'=> 'Paid',
		      'is_previous'=>$st['is_installment'],
		      ],['studentID'=>$ID,'id'=>$PendindID]);

			}



			// if ($_POST['installment']!="" && $_POST['is_installment']!=0) {
			// 	$this->db->update('pending_students_fees',
			// [
			
		 //    'status'=> 1,
		 //    'payment_status'=> 'Partial',
			
		 //    ],['studentID'=>$ID,'id'=>$PendindID]);
			// }
			// else{
			// $this->db->update('pending_students_fees',[
		      
		 //      'status'=> 1,
		 //      'payment_status'=> 'Paid',
		     
		 //      ],['studentID'=>$ID,'id'=>$PendindID]);

			// }
$this->admin_model->update('student',array('admission_fee' => 0,'membership_fee'=>0),array('studentID' =>$ID));
		if ($this->admin_model->insert($data,"student_fee")) {	
			$feeID=$this->db->insert_id();
			if ($_POST['installment']!="" && $_POST['is_installment']!=0) {
				$this->db->update('student_fee',
			[
			'previous_installment'=>$st['installment'],
		    'is_previous'=>$st['is_installment'],
		    'status'=> 'Partial',
			'is_installment'=>$_POST['is_installment'],
			'installment'=>$_POST['installment_total']-$_POST['installment'],
		    ],['studentID'=>$ID,'feeID'=>$feeID]);
			}
			else{
			$this->db->update('student_fee',[
		      'is_installment'=>0,'installment'=>0,
		      'previous_installment'=>$st['installment'],
		      'status'=> 'Paid',
		      'is_previous'=>$st['is_installment'],
		      ],['studentID'=>$ID,'feeID'=>$feeID]);

			}

			echo "<script>
			alert('Successfully Inserted');
			window.location.href='".base_url()."admin/view_fees'
			</script>";
		}else{
			echo "<script>
			alert('Error in Inserting, Please Try Again');
			</script>";
		}
	}



	
	public function insert_course()
	{
		$data=$_POST;
		//$data['campus_id'] = $_SESSION['campus_id'];

		if ($this->admin_model->insert($data,"course")) {

			$this->session->set_flashdata('message', '<span><strong>Success</strong></span><p>Your Record Inserted Successfully</p>');
		$this->session->set_flashdata('is_popup', true);

			echo "<script>
			window.location.href='".base_url()."admin/view_course'
			</script>";
		}else{
			echo "<script>
			alert('Error in Inserting, Please Try Again');
			</script>";
		}
	}

	

	public function check_qr($qr)
	{
		$result = $this->admin_model->get_row('student',array('qr'=>$qr));
		if (!empty($result)) {
			$qr = rand();
			$this->check_qr($qr);
		}
		else{
			return $qr;
		}
	}
	public function insert_student()
	{

       $saved=$_POST['joindate'];

	  

$date1 = $saved;
$date2 = date('Y-m-d');

$ts1 = strtotime($date1);
$ts2 = strtotime($date2);

$year1 = date('Y', $ts1);
$year2 = date('Y', $ts2);

$month1 = date('m', $ts1);
$month2 = date('m', $ts2);

$diff = (($year2 - $year1) * 12) + ($month2 - $month1);


// print_r($diff);

 

$data=$_POST;
	
// print_r($data);
 // die();
// Image uploading  OR  File Uploading
////////////////////////////////////

$config['upload_path']          = 'uploads/userimage/';
$config['allowed_types']        = 'gif|jpg|png';
$config['max_size']             = 42000;
$config['max_width']            = 41024;
$config['max_height']           = 4768;
$this->load->library('upload', $config);
// put input field name below condition === Here name is profile_image
 if (!$this->upload->do_upload('profile_image'))
{
        $error = array('error' => $this->upload->display_errors());
        print_r($this->upload->display_errors());die();
        //$this->load->view('upload_form', $error);
}
else
{
  $data += array('user_image' => 'uploads/userimage/'.$this->upload->data('file_name'));
        //$this->load->view('upload_success', $data);
}

// Image uploading  OR  File Uploading
////////////////////////////////////

$qr = rand();

$qr = $this->check_qr($qr);
$data['qr'] = $qr;
	$data_unset=$_POST;
	$course_array_data = $data['courseID'];

	unset($data['courseID']);
	unset($data['gym_timing']);
	unset($data['campusID']);
	unset($data['course_shift']);
	unset($data['trainerID']);
	unset($data['fee']);

		$data['date_time']=date("d-m-Y h:i:s a");
		$id = $this->admin_model->insert($data,"student");
		$count_array_course = count($data_unset['courseID']);

for($i= 0; $i < $count_array_course; $i++)
{

	$insertTable_data = array(
		'studentID' => $id,
		'courseID'=>$data_unset['courseID'][$i],
		'Timing'=>$data_unset['gym_timing'][$i],
		'campusID'=>$data_unset['campusID'][0],
		'course_shift'=>$data_unset['course_shift'][$i],
		'TrainerID'=>$data_unset['trainerID'][$i],
		'Fee'=>$data_unset['fee'][$i]
	);

	$course_data_id = $this->admin_model->insert($insertTable_data,"students_courses");

		
}
//print_r($course_data_id);die;
		//print_r($id);die();

		
	
		if ($course_data_id) {
			if ($diff==0) {
				$insertTable_data = array(
				'studentID' => $id,
				'date'=> $_POST['joindate'],
				'Payment_status'=> 'UnPaid',
				'student_name'=> $_POST['student_name'],
				);
			$studentID = $this->admin_model->insert($insertTable_data,"pending_students_fees");
		}else{
   
			for ($i=0; $i <=$diff ; $i++) { 
			 $date_d=strtotime($_POST['joindate'].$i.' MONTH');

				$insertTable_data = array(
				'studentID' => $id,
				'date'=>  date('Y-m-d',$date_d),
				'Payment_status'=> 'UnPaid',
				'student_name'=>  $_POST['student_name'],
				);

			$studentID = $this->admin_model->insert($insertTable_data,"pending_students_fees");
			}

		}

		$this->session->set_flashdata('message', '<span><strong>Success</strong></span><p>Your Record Inserted Successfully</p>');
		$this->session->set_flashdata('is_popup', true);

		echo "<script>
		alert('Successfully Inserted');
		window.location.href='".base_url()."admin/view_student'
		</script>";
			
		}else{
			echo "<script>
			alert('Error in Inserting, Please Try Again');
			</script>";
		}
	}






	public function insert_trainer()
	{
		$this->is_login();
		$data=$_POST;

		$trainer_data = implode(",",$data['courseID']);



		$data['courseID'] = $trainer_data;

		if ($this->admin_model->insert($data,"trainer")) {
		   
		   $trainerID=$this->db->insert_id();
           
           $date_interval=date('Y-m-d', strtotime($_POST['trainer_Joining_date']. " + 30 days"));
           $this->db->insert('trainer_salary',['trainerID'=>$trainerID,'submission_date'=>$date_interval,'status'=>1]);

		
			echo "<script>
			alert('Successfully Inserted');
			window.location.href='".base_url()."admin/view_trainer'
			</script>";
		}else{
			echo "<script>
			alert('Error in Inserting, Please Try Again');
			</script>";
		}
	}

	public function insert_campus()
	{
		$this->is_login();
		$data=$_POST;
		if ($this->admin_model->insert($data,"campus")) {
			echo "<script>
			alert('Successfully Inserted');
			window.location.href='".base_url()."admin/view_campus'
			</script>";
		}else{
			echo "<script>
			alert('Error in Inserting, Please Try Again');
			</script>";
		}
	}


	public function insert_expense()
	{
		$data=$_POST;		
		$data['campus_id'] = $_SESSION['campus_id'];
		$data['date_time']=date("d-m-Y h:i:s a");
		if ($this->admin_model->insert($data,"expense")) {
			echo "<script>
			alert('Successfully Inserted');
			window.location.href='".base_url()."admin/view_expense'
			</script>";
		}else{
			echo "<script>
			alert('Error in Inserting, Please Try Again');
			window.location.href='".base_url()."admin/view_expense'
			</script>";
		}
	}



	public function insert_category()
	{
             $config['upload_path']   = './uploads/category/';
             $config['allowed_types'] = 'gif|jpg|png';
         $this->load->library('upload', $config);
         if ( ! $this->upload->do_upload('categoryImage')) {
                  $data=array(
                        'categoryName'=>$_POST['categoryName'],
                        'categoryDesc'=>$_POST['categoryDesc'],
                     );
         }
         else {
            $upload_data = $this->upload->data();
            $data=array(
                        'categoryName'=>$_POST['categoryName'],
                        'categoryDesc'=>$_POST['categoryDesc'],
                        'categoryImage'=>$upload_data['file_name'],
                        'campus_id'=>$_SESSION['campus_id'],
                     );
              }
		if ($this->admin_model->insert($data,"category")) {
			echo "<script>
			alert('Successfully Inserted');
			window.location.href='".base_url()."admin/view_category'
			</script>";
		}else{
			echo "<script>
			alert('Error in Inserting, Please Try Again');
			window.location.href='".base_url()."admin/view_category'
			</script>";
		}
	}
	public function insert_product()
	{
             $config['upload_path']   = './uploads/product/';
             $config['allowed_types'] = 'gif|jpg|png';
         $this->load->library('upload', $config);
         if ( ! $this->upload->do_upload('productImage')) {
                  $data=$_POST;
         }
         else {
            $upload_data = $this->upload->data();
                              $data=$_POST;
                        $data['productImage']=$upload_data['file_name'];
              }
		if ($this->admin_model->insert($data,"products")) {
			echo "<script>
			alert('Successfully Inserted');
			window.location.href='".base_url()."admin/view_product'
			</script>";
		}else{
			echo "<script>
			alert('Error in Inserting, Please Try Again');
			window.location.href='".base_url()."admin/view_product'
			</script>";
		}
	}
	public function update_product($productID)
	{
             $config['upload_path']   = './uploads/product/';
             $config['allowed_types'] = 'gif|jpg|png';
         $this->load->library('upload', $config);
         if ( ! $this->upload->do_upload('productImage')) {
                  $data=$_POST;
         }
         else {
            $upload_data = $this->upload->data();
                              $data=$_POST;
                        $data['productImage']=$upload_data['file_name'];
              }
		$where=array('productID'=>$productID);
		if ($this->admin_model->update("products",$data,$where)) {
			echo "<script>
			alert('Successfully Updated');
			window.location.href='".base_url()."admin/view_product'
			</script>";
		}else{
			echo "<script>
			alert('Error in Updating, Please Try Again');
			window.location.href='".base_url()."admin/view_product'
			</script>";
		}
	}
	public function insert_subcategory()
	{
             $config['upload_path']   = './uploads/subcategory/';
             $config['allowed_types'] = 'gif|jpg|png';
         $this->load->library('upload', $config);
         if ( ! $this->upload->do_upload('subCategoryImage')) {
                  $data=array(
                        'subCategoryName'=>$_POST['subCategoryName'],
                        'subCategoryDesc'=>$_POST['subCategoryDesc'],
                     );
         }
         else {
            $upload_data = $this->upload->data();
            $data=array(
                        'subCategoryName'=>$_POST['subCategoryName'],
                        'categoryID'=>$_POST['categoryID'],
                        'subCategoryDesc'=>$_POST['subCategoryDesc'],
                        'subCategoryImage'=>$upload_data['file_name'],
                     );
              }
		if ($this->admin_model->insert($data,"subcategory")) {
			echo "<script>
			alert('Successfully Inserted');
			window.location.href='".base_url()."admin/view_subcategory'
			</script>";
		}else{
			echo "<script>
			alert('Error in Inserting, Please Try Again');
			window.location.href='".base_url()."admin/view_subcategory'
			</script>";
		}
	}
	public function update_trainer($trainerID)
	{
		$data=$_POST;
		

		// $trainer_data = implode(",",$data['training_type']);
		$trainer_data = implode(",",$data['courseID']);
		$data['courseID'] = $trainer_data;
		$where=array('trainerID'=>$trainerID);
		if ($this->admin_model->update("trainer",$data,$where)) {
			echo "<script>
			alert('Successfully Updated');
			window.location.href='".base_url()."admin/view_trainer'
			</script>";
		}else{
			echo "<script>
			alert('Error in updating, Already Updated or no Row Found');
			window.location.href='".base_url()."admin/view_trainer'
			</script>";
		}
	}


	public function update_campus()
	{
		$data=$_POST;
		

		$where=array('id'=>$data['id']);
		unset($data['id']);
		if ($this->admin_model->update("campus",$data,$where)) {
			echo "<script>
			alert('Successfully Updated');
			window.location.href='".base_url()."admin/view_campus'
			</script>";
		}else{
			echo "<script>
			alert('Error in updating, Already Updated or no Row Found');
			window.location.href='".base_url()."admin/view_campus'
			</script>";
		}
	}

	public function update_category($categoryID)
	{
             $config['upload_path']   = './uploads/category/';
             $config['allowed_types'] = 'gif|jpg|png';
         $this->load->library('upload', $config);
         if ( ! $this->upload->do_upload('categoryImage')) {
                  $data=array(
                        'categoryName'=>$_POST['categoryName'],
                        'categoryDesc'=>$_POST['categoryDesc'],
                     );
         }
         else {
            $upload_data = $this->upload->data();
            $data=array(
                        'categoryName'=>$_POST['categoryName'],
                        'categoryDesc'=>$_POST['categoryDesc'],
                        'categoryImage'=>$upload_data['file_name'],
                     );
              }
		$where=array('categoryID'=>$categoryID);
		if ($this->admin_model->update("category",$data,$where)) {
			echo "<script>
			alert('Successfully Updated');
			window.location.href='".base_url()."admin/view_category'
			</script>";
		}else{
			echo "<script>
			alert('Error in updating, Already Updated or no Row Found');
			window.location.href='".base_url()."admin/view_category'
			</script>";
		}
	}
	public function update_subcategory($subcategoryID)
	{
           $config['upload_path']   = './uploads/subcategory/';
             $config['allowed_types'] = 'gif|jpg|png';
         $this->load->library('upload', $config);
         if ( ! $this->upload->do_upload('subCategoryImage')) {
                  $data=array(
                        'subCategoryName'=>$_POST['subCategoryName'],
                        'subCategoryDesc'=>$_POST['subCategoryDesc'],
                     );
         }
         else {
            $upload_data = $this->upload->data();
            $data=array(
                        'subCategoryName'=>$_POST['subCategoryName'],
                        'categoryID'=>$_POST['categoryID'],
                        'subCategoryDesc'=>$_POST['subCategoryDesc'],
                        'subCategoryImage'=>$upload_data['file_name'],
                     );
              }
		$where=array('subCategoryID'=>$subcategoryID);
		if ($this->admin_model->update("subcategory",$data,$where)) {
			echo "<script>
			alert('Successfully Updated');
			window.location.href='".base_url()."admin/view_subcategory'
			</script>";
		}else{
			echo "<script>
			alert('Error in updating, Already Updated or no Row Found');
			window.location.href='".base_url()."admin/view_category'
			</script>";
		}

	}



	function gettrainer()
	{
		
		$data = $_POST['id'];
		$trainerID = $_POST['trainerid']; 


		$trainerID= $this->input->post('trainerid');
		$query = $this->db->select('student.student_name,course.course_title,students_courses.id,trainer.trainer_name')
						->from('students_courses')
						->join('student', 'students_courses.studentID = student.studentID', 'left')
						->join('course', 'students_courses.courseID = course.courseID', 'left')
						->join('trainer', 'students_courses.TrainerID = trainer.trainerID', 'left')
						->where('students_courses.TrainerID', $trainerID)
						->where('course.courseID', $data);				
		$data_trainer['datatrainer']=$this->db->get()->result_array();



		$query_data = $this->db->select('trainer.trainerID,trainer.trainer_name')
						->from('course')
						->join('trainer',"find_in_set(course.courseID, trainer.courseID)")
						->where('trainer.trainerID !=', $trainerID)
						->where('course.courseID', $data);				
		$data_trainer['all_trainer']=$this->db->get()->result_array();
		


		// $str = $this->db->last_query();
		// print_r($str);die();


		// $this->db->select('a.trainerID,a.trainer_name')
		// 			 ->from("trainer AS a")
		// 			 ->join("course AS b","find_in_set(b.courseID, a.courseID)","left",false)
		// 			 ->where('b.courseID', $course_id)
		// 			 ->where('a.status', 'active')
		// 			 ->group_by('a.trainerID');




		
		echo json_encode($data_trainer);
	}



// SELECT student.student_name,course.course_title,students_courses.id
// FROM students_courses
// LEFT JOIN student ON students_courses.studentID = student.studentID
// INNER JOIN course ON students_courses.courseID = course.courseID
// WHERE students_courses.TrainerID = 2



	public function update_course($courseID)
	{
		$data=$_POST;
		$where=array('courseID'=>$courseID);
		if ($this->admin_model->update("course",$data,$where)) {
			echo "<script>
			alert('Successfully Updated');
			window.location.href='".base_url()."admin/view_course'
			</script>";
		}else{
			echo "<script>
			alert('Error in updating, Already Updated or no Row Found');
			window.location.href='".base_url()."admin/view_course'
			</script>";
		}

	}



public function edit_profile_user()
	{
		$this->is_login();
		$userID = $this->session->userdata('adminID');

		$where=array('adminID'=>$userID);
		$data['users']=$this->admin_model->get_row("users",$where);
		// echo '<pre>';print_r($data['users']);die();
		$data['title']="Edit Profile";
		$this->load->view('admin/header',$data);
		$this->load->view('admin/edit_profile');
		$this->load->view('admin/footer');
	}


public function edit_profile($profileID)
{
	$data=$_POST;

	$where=array('adminID'=>$profileID);
	if ($this->admin_model->update("users",$data,$where)) {
		echo "<script>
		alert('Successfully Updated');
		window.location.href='".base_url()."admin/index'
		</script>";
	}else{
		echo "<script>
		alert('Error in updating, Already Updated or no Row Found');
		window.location.href='".base_url()."admin/index'
		</script>";
	}

}







		public function view_one_student($s_id)
		{



$where=array('studentID'=>$s_id);

$query = $this->db->select('student.*, GROUP_CONCAT(course.course_title SEPARATOR ",") AS course_title,GROUP_CONCAT(trainer.trainer_name SEPARATOR ",") AS trainer,GROUP_CONCAT(students_courses.Timing SEPARATOR ",") AS course_timing,GROUP_CONCAT(students_courses.Fee SEPARATOR ",") AS course_fee,GROUP_CONCAT(students_courses.courseID SEPARATOR ",") AS course_ID,GROUP_CONCAT(students_courses.TrainerID SEPARATOR ",") AS trainer_ID,GROUP_CONCAT(students_courses.id SEPARATOR ",") AS course_data_ID,GROUP_CONCAT(students_courses.TrainerID SEPARATOR ",") AS TrinerID_data_ID')
						->from('student')
						->join('students_courses', 'student.studentID = students_courses.studentID')
						->join('course', 'course.courseID = students_courses.courseID')
						->join('trainer', 'trainer.trainerID=students_courses.trainerID')
						->where('student.studentID', $s_id)
						->group_by('student.studentID');
		$result['student']=$this->db->get()->result_array();

// echo '<pre>';print_r($result['student']);die();


		
		$result['data'] = $this->admin_model->get_where_single('student',$where);
		$this->load->view('admin/header');
		$this->load->view('admin/view_one_student',$result);
		$this->load->view('admin/footer');


		
		}






	function updateTrainerData()
	{
		$trainer_id = $this->input->post('trainid');
		$id = $this->input->post('rowid');
		if ($this->admin_model->update("students_courses",array('trainerID'=>$trainer_id),array('id'=>$id))) {
			echo '1';
		}
		else{
			echo '2';
		}
	}
	



	function updateTrainersdata()
	{
		$trainer_id = $this->input->post('trainerid');
		$ids = $this->input->post('ids');
		$ids = explode(',',$ids);
		for ($i = 0; $i < sizeof($ids); $i++) {
		    $this->admin_model->update("students_courses",array('trainerID'=>$trainer_id),array('id'=>$ids[$i]));
		}
        echo '1';
	}




function updatemultitrainer(){
        $trainer_id = $this->input->post('trainer_id');
  $ids = $this->input->post('student_id');
  //$ids = explode(',',$ids);
  for ($i = 0; $i < sizeof($ids); $i++) {
      $this->admin_model->update("students_courses",array('trainerID'=>$trainer_id[$i]),array('id'=>$ids[$i]));
  }
        echo '1';
    }







	public function update_expense($expenseID)
	{
		$data=$_POST;
		$where=array('expenseID'=>$expenseID);
		if ($this->admin_model->update("expense",$data,$where)) {
			echo "<script>
			alert('Successfully Updated');
			window.location.href='".base_url()."admin/view_expense'
			</script>";
		}else{
			echo "<script>
			alert('Error in updating, Already Updated or no Row Found');
			window.location.href='".base_url()."admin/view_expense'
			</script>";
		}

	}
	public function update_student($studentID)
	{
		$data=$_POST;


		if (!empty($_FILES['profile_image']['name'])) {
			$config['upload_path']          = 'uploads/userimage/';
			$config['allowed_types']        = 'gif|jpg|png';
			$config['max_size']             = 200000;
			$config['max_width']            = 1024;
			$config['max_height']           = 768;
			$this->load->library('upload', $config);
			// put input field name below condition === Here name is profile_image
			 if (!$this->upload->do_upload('profile_image'))
			{
			    $error = array('error' => $this->upload->display_errors());
			    print_r($this->upload->display_errors());die();
			}
			else
			{
			  $data += array('user_image' => 'uploads/userimage/'.$this->upload->data('file_name'));
			}   
		}


		$id = $studentID;
		$data_unset=$_POST;
		$course_array_data = $data_unset['courseID'];
		$count_array_course = count($data_unset['courseID']);
		$education_id = $this->input->post('scid[]');
		unset($data['courseID']);
		unset($data['gym_timing']);
                unset($data['course_shift']);
		unset($data['trainerID']);
		unset($data['campusID']);
		unset($data['fee']);
		unset($data['scid']);
		if($data['past_experience'] == 'no' ){
		$data['remarks'] = 'no';}
		$where=array('studentID'=>$studentID);
		if ($this->admin_model->update("student",$data,$where)) {
			$s_courses = $this->admin_model->get_where_single('students_courses',array('studentID' => $studentID));
			$edu_delete = [];
		for($i=0;$i<$count_array_course;$i++)
		{
			$insertTable_data = array(
			'studentID' =>$id,
			'courseID'=>$data_unset['courseID'][$i],
			'Timing'=>$data_unset['gym_timing'][$i],
            'course_shift'=>$data_unset['course_shift'][$i],
                 'campusID'=>$data_unset['campusID'][$i],
			'TrainerID'=>$data_unset['trainerID'][$i],
			'Fee'=>$data_unset['fee'][$i]
			);
			if(empty($education_id[$i]))
			{
				$this->admin_model->insert($insertTable_data,"students_courses");
				
			}
			else
			{
				$key = array_search($education_id[$i], array_column($s_courses, 'id'));
				$edu_delete[] = $key;
				$this->admin_model->update("students_courses",$insertTable_data,array('id' => $education_id[$i]));
			}
		}
		if (sizeof($edu_delete) >= 1) {
        for ($i=0; $i < sizeof($edu_delete); $i++) { 
          unset($s_courses[$edu_delete[$i]]);
        }
      }
      $s_courses = array_values($s_courses);
      if (sizeof($s_courses) >= 1) {
        for ($i=0; $i < sizeof($s_courses); $i++) { 
          $this->admin_model->delete('students_courses',array('id' => $s_courses[$i]['id']));
        }
      }


			echo "<script>
			window.location.href='".base_url()."admin/view_student'
			</script>";


		}else{
			echo "<script>
			alert('Error in updating, Already Updated or no Row Found');
			window.location.href='".base_url()."admin/view_student'
			</script>";
		}

	}




function student_deactivate($studentID)
{


$data = array('status'=>'in_active');

	$where=array('studentID'=>$studentID);
		if ($this->admin_model->update("student",$data,$where)) {
			echo "<script>
			alert('Successfully Updated');
			window.location.href='".base_url()."admin/view_student'
			</script>";
		}else{
			echo "<script>
			alert('Error in updating, Already Updated or no Row Found');
			window.location.href='".base_url()."admin/view_student'
			</script>";
		}


}




function unpaid_notification()
{
	$where=array('status'=>0);
	$result = $this->admin_model->get_where_single('pending_students_fees',$where);
	echo sizeof($result);
}



function trainer_unpaid_salary()
{
	$where=array('status'=>0);
	$result = $this->admin_model->get_where_single('trainer_salary',$where);
	echo sizeof($result);
}





function trainer_deactivate($trainerID)
{

$data = array('status'=>'in_active');

	$where=array('trainerID'=>$trainerID);
		if ($this->admin_model->update("trainer",$data,$where)) {
			echo "<script>
			alert('Successfully Updated');
			window.location.href='".base_url()."admin/view_trainer'
			</script>";
		}else{
			echo "<script>
			alert('Error in updating, Already Updated or no Row Found');
			window.location.href='".base_url()."admin/view_trainer'
			</script>";
		}


}




	function feecheck_date()
	{
		
		$data['student'] = $this->admin_model->get('student');
		$rows = 0;

		foreach($data['student'] as $dataview)
		{
			$current_date = date("d");
			$date_split = explode("-",$dataview['joindate']);
				if($current_date >= $date_split[sizeof($date_split) - 1])
				{
					$first = $year = date('Y-m-01');
					$last = $year = date('Y-m-t');
					$this->db->select('studentID')
					 ->from('pending_students_fees')
					 ->where('studentID', $dataview['studentID'])
					 ->where('date >=', $first)
					 ->where('date <=', $last);
					 $fee = $this->db->get()->result_array();
					 if(empty($fee))
					 {
					 $submitdate  = date('Y-m-'.$date_split[sizeof($date_split) - 1]);

					 $insert_data = array(

					 	'studentID' => $dataview['studentID'],
					 	'date'=>$submitdate,

					 	);

					  $this->admin_model->insert($insert_data,"pending_students_fees");
					 
					 $rows= $rows + 1; 
					 }		 
					 
				}

		}
		echo $rows . ' Records Inserted';

	}













//salary start orn job function

function trainercheck_date()
	{
		
		$data['trainer'] = $this->admin_model->get('trainer');
		
		$rows = 0;

		foreach($data['trainer'] as $dataview)
		{
			$current_date = date("d");
			$date_split = explode("-",$dataview['trainer_Joining_date']);
			 // echo '<pre>'; print_r($date_split);die();
				if($current_date >= $date_split[sizeof($date_split) - 1])
				{
					$first = $year = date('Y-m-01');
					$last = $year = date('Y-m-t');
					$this->db->select('trainerID')
					 ->from('trainer_salary')
					 ->where('trainerID', $dataview['trainerID'])
					 ->where('submission_date >=', $first)
					 ->where('submission_date <=', $last);
					 $fee = $this->db->get()->result_array();

					


					 if(empty($fee))
					 {
					 $submitdate  = date('Y-m-'.$date_split[sizeof($date_split) - 1]);

					 $insert_data = array(

					 	'trainerID' => $dataview['trainerID'],
					 	'submission_date'=>$submitdate,

					 	);

					  $this->admin_model->insert($insert_data,"trainer_salary");
					 
					 $rows= $rows + 1; 
					 }		 
					 
				}

		}
		echo $rows . ' Records Inserted';

	}	



























	public function delete($table,$column,$ID)
	{
		$where=array($column=>$ID);
		if ($this->admin_model->delete($table,$where)) {

          if ($table=="expense") {
			echo "<script>
			alert('Successfully Deleted');
			window.location.href='".base_url()."admin/view_expense'
			</script>";

          }else if($table=="course"){
		echo "<script>
			alert('Successfully Deleted');
			window.location.href='".base_url()."admin/view_course'
			</script>";

          }else if($table=="trainer"){
			echo "<script>
			alert('Successfully Deleted');
			window.location.href='".base_url()."admin/view_trainer'
			</script>";

          }else if($table=="student"){
			echo "<script>
			alert('Successfully Deleted');
			window.location.href='".base_url()."admin/view_student'
			</script>";

          }else if($table=="category"){
			echo "<script>
			alert('Successfully Deleted');
			window.location.href='".base_url()."admin/view_category'
			</script>";

          }
          else if($table=="student_fee"){
			echo "<script>
			alert('Successfully Deleted');
			window.location.href='".base_url()."admin/view_fees'
			</script>";
          }
          else if($table=="subcategory"){
			echo "<script>
			alert('Successfully Deleted');
			window.location.href='".base_url()."admin/view_subcategory'
			</script>";
          }
          else if($table=="products"){
			echo "<script>
			alert('Successfully Deleted');
			window.location.href='".base_url()."admin/view_product'
			</script>";

          }
          else if($table=="campus"){
			echo "<script>
			alert('Successfully Deleted');
			window.location.href='".base_url()."admin/view_campus'
			</script>";

          }
		}
		else{
			echo "<script>
			alert('Error in Deleting, Already Deleted or no Row Found');
			window.location.href='".base_url()."admin/view_expense'
			</script>";
		}
	}
	public function logout()
	{
		$this->session->sess_destroy();
		redirect(base_url().'admin');
	}




	public function expense_voucher($s_id)
	{

$where=array('expenseID'=>$s_id);
		$result['expense_data'] = $this->admin_model->get_where_single('expense',$where);
		// echo '<pre>';print_r($result);die();
		$this->load->view('admin/header');
		$this->load->view('admin/expense_voucher',$result);
		$this->load->view('admin/footer');

	}


public function card_p($s_id)
	{
		$where=array('studentID'=>$s_id);

$query = $this->db->select('student.*, GROUP_CONCAT(course.course_title SEPARATOR ",") AS course_title,GROUP_CONCAT(trainer.trainer_name SEPARATOR ",") AS trainer,GROUP_CONCAT(students_courses.Timing SEPARATOR ",") AS course_timing,GROUP_CONCAT(students_courses.Fee SEPARATOR ",") AS course_fee,GROUP_CONCAT(students_courses.courseID SEPARATOR ",") AS course_ID,GROUP_CONCAT(students_courses.TrainerID SEPARATOR ",") AS trainer_ID,GROUP_CONCAT(students_courses.id SEPARATOR ",") AS course_data_ID,GROUP_CONCAT(students_courses.TrainerID SEPARATOR ",") AS TrinerID_data_ID')
						->from('student')
						->join('students_courses', 'student.studentID = students_courses.studentID')
						->join('course', 'course.courseID = students_courses.courseID')
						->join('trainer', 'trainer.trainerID=students_courses.trainerID')
						->where('student.studentID', $s_id)
						->group_by('student.studentID');
		$result['student']=$this->db->get()->result_array();

// echo '<pre>';print_r($result['student']);die();
		
		$result['data'] = $this->admin_model->get_where_single('student',$where);
		$this->load->view('admin/header');
		$this->load->view('admin/card_p',$result);
		$this->load->view('admin/footer');

	}


	public function check_month()
	{
		$month = $this->input->post('month');
		$id = $this->input->post('id');
		$year = date('Y');
		$date = date_parse($month);
		$ts = strtotime($month .' '.$year);
		$first = $year.'-'.$date['month'].'-'.'01';
		$last = $year.'-'.$date['month'].'-'.date('t', $ts);
		$this->db->select('feeID')
				 ->from('student_fee')
				 ->where('studentID', $id)
				 ->where('submission_date >=', $first)
				 ->where('submission_date <=', $last);
		$fee = $this->db->get()->result_array();
		echo sizeof($fee);
	}



}
