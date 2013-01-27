<?php defined('SYSPATH') or die('No direct access allowed.');

class Controller_Loan_Create extends Controller_Template_Admin{
    
    public function before(){
        parent::before();
        
        $this->template->title = "Cashmate Credit Corporation: Create Loan Request";
        $this->template->title_content = "Create Loan Request";
        $this->template->styles .= HTML::style('media/styles/emp/loan.css');
        $this->template->scripts .= HTML::script('media/scripts/emp/create_request.js');
        $this->template->sublinks = $this->get_loan_links();
        
   }
   
    public function action_index(){
        
         $this->redirect('loan_create/view');
    }
    
    public function action_view(){
        
        $view = View::factory('employee/loan/create');
        
        if(!$this->request->post()){
            $areas = ORM::factory('area')->where('branch_id','=', Cookie::get('branch_id'))->find_all()->as_array('id','code');
            $view->set('borrower',         $this->get_borrower_info(NULL));
            $view->set('borrower_address', $this->get_borrower_address(NULL));
            $view->set('areas',$areas);
            $view->set('loan_application', $this->get_current_loan_application(NULL));
            $view->set('loan_request',     $this->get_current_loan_request(NULL));
            $view->set('business',         $this->get_business_info(NULL));
            $view->set('co_borrowers',     $this->get_co_borrower(NULL));
            $view->set('appraisal', $this->get_appraisal(NULL));
            $view->set('collateral', $this->get_collateral(NULL));
        
        }else{
            $areas = ORM::factory('area')->where('branch_id','=', Cookie::get('branch_id'))->find_all()->as_array('id','code');
            $view->set('borrower',         $this->get_borrower_info($_POST['id']));
            $view->set('borrower_address', $this->get_borrower_address($_POST['id']));
            $view->set('areas',$areas);
            $view->set('loan_application', $this->get_current_loan_application($_POST['id']));
            $view->set('loan_request',     $this->get_current_loan_request(
                    $this->get_current_loan_application($_POST['id'])->id));
            $view->set('business',         $this->get_business_info($_POST['id']));
            $view->set('co_borrowers',     $this->get_co_borrower($this->get_current_loan_application($_POST['id'])->id));
            $view->set('appraisal', $this->get_appraisal($this->get_current_loan_application($_POST['id'])->id));
            $view->set('collateral', $this->get_collateral($this->get_appraisal($this->get_current_loan_application($_POST['id'])->id)));
            
        }
        
        $this->template->content = $view;
    }
    
    public function action_borrower_list()
    {
        if (!isset($_REQUEST['term']))
                exit;
        $this->auto_render = false;
        $borrowers = ORM::factory('borrower')->select(array(Db::expr('CONCAT(last_name,", ",first_name," ",middle_name)'),'fullname'))
                ->where('last_name','LIKE', $_REQUEST['term'].'%')
                ->order_by('last_name')
                ->limit(5)
                ->find_all()
                ->as_array('id','fullname');
        
        echo json_encode($borrowers);
        return;
    }
    
    public function action_create(){
        $this->auto_render = false;
        $this->request->headers['Content-Type'] = 'application/json';
        //$this->request->response = json_encode($this->generate_document_number());
        
        echo json_encode($this->generate_document_number());
        return;
    }
    
    public function action_save(){
        $this->auto_render = false;
        
        $this->save_borrower();
        $this->save_borrower_address();
        $this->save_loan_application();
        $this->save_loan_request();
        
        echo json_encode($this->request->post());
        return;
    }
    
    public function save_borrower()
    {
        $borrower = ORM::factory('borrower')
                ->where('id','=', $_POST['id'])
                ->find();
        
        $borrower->values(array(
            'contact_number' => $_POST['contact_number'],
        ));
        
        try{
            $borrower->save();
        }  catch (ORM_Validation_Exception $ex){
        
        }
    }
    
    public function save_borrower_address()
    {
        $borrower_address = ORM::factory('borroweraddress')
                ->where('borrower_id','=', $_POST['id'])
                ->and_where('address_type_id','=', '1')
                ->find();
        
        $borrower_address->values(array(
            'address_type_id' => '1',
            'address'         => $_POST['address'],
            'area_id'         => $_POST['area_id'],
            'borrower_id'     => $_POST['id'],
            'update_user'     => Cookie::get('id'),
        ));
        
        try{
            $borrower_address->save();
        }  catch (ORM_Validation_Exception $ex){
            
        }
    }
    public function save_loan_application(){
        
        $loan_application_id = $this->get_current_loan_application($_POST['id'])->id;
        $document_id = $this->get_current_loan_application($_POST['id'])->document_id;
        
        $document = ORM::factory('document')
        ->where('id','=', $document_id)
        ->find();
        
        $document->values(array(
            'document_type_id' => 1,
            'document_number'  => $_POST['laf_number'],
            'document_date'    => date("Y-m-d",strtotime($_POST['laf_date'])),
            'area_id'          => $_POST['area_id'],
            'update_user'      => Cookie::get('id'),
        ));
        
        $document->save();
        
        $loan_application = ORM::factory('loanapplication')
                ->where('id', '=', $loan_application_id)
                ->and_where('visible','=', '1')
                ->find();
        
        $loan_application->values(array(
            'document_id'   => $document->id,
            'borrower_id'   => $_POST['id'],
            'create_date'   => date("Y-m-d",strtotime($_POST['laf_date'])),
            'visible'       => '1',
            'area_id'       => $_POST['area_id'],
            'create_user'   => Cookie::get('id'),
        ));
        
        try{
            $document->save();
            $loan_application->save();
        }  catch (ORM_Validation_Exception $ex){
            
        }
    }
    
    public function save_loan_request(){
        
        $loan_application_id = $this->get_current_loan_application($_POST['id'])->id;
        $lr_document_id = $this->get_current_loan_request($this->get_current_loan_application($_POST['id'])->id)->document->id;
        
        $document = ORM::factory('document')
                ->where('document_number','=', $_POST['clr_number'])
                ->find();
        //$document->reset(false);
        
        $document->values(array(
            'document_type_id' => 5,
            'document_number'  => $_POST['clr_number'],
            'document_date'    => date("Y-m-d",strtotime($_POST['clr_date'])),
            'area_id'          => $_POST['area_id'],
            'update_user'      => Cookie::get('id'),
        ));
        
        try{
            //if(empty($document))
            $document->save();
        }  catch (ORM_Validation_Exception $ex){
            
        }
        
        $loan_request = ORM::factory('loanrequest')
                ->where('id', '=', $_POST['lr_id'])
                ->and_where('visible','=', '1')
                ->and_where('posted','=', '0')
                ->find();
        
        $loan_request->values(array(
            'loan_application_id'    => $loan_application_id,
            'document_id'            => $document->id,
            'amount_requested'       => $_POST['amount_requested'],
            'loan_class'             => $_POST['loan_class'],
            'requested_date_release' => $_POST['date_release'],
            'create_date'            => date("Y-m-d",strtotime($_POST['clr_date'])),
            'create_user'            => Cookie::get('id')
            
        ));
        
        try{
            $loan_request->save();
        }  catch (ORM_Validation_Exception $ex){
            
        }
    }
    
    public function generate_document_number(){
    
        $data = array();
        
        $number = (unixtojd(strtotime('now')) - gregoriantojd(1, 1, 1900)) + 2;

        $data[] = array('documentNumber' => 'CLR'.Cookie::get('branch_code').$number);
        $data[] = array('documentNumber' => $this->generate_laf_id());
        $data[] = array('status'         => '200');
        
        return $data;
    
    }
    
    public function generate_laf_id(){
        
        return $this->generate_document_id('LAF', Cookie::get('branch_code'));
    }
    
    public function generate_document_id($doc_code,$branch_code){
        $document = ORM::factory('document')
                ->where('document_number','LIKE', '%'.$doc_code.$branch_code.'%')
                ->order_by('document_number', 'DESC')
                ->find();

        $number = $number = substr($document->document_number, 6); //return ######
        $new_id = $doc_code . $branch_code . $this->generate($number +=1);
        
        return $new_id;
    }
    
    public function generate($number){
        $temp='';
	for($i=strlen($number); $i < 6; $i++)
		$temp.='0';
	
	return $temp.$number;
    }
    
    public function get_borrower_info($id){
        $borrower = ORM::factory('borrower',$id);
        
        return $borrower;
    }
    
    public function get_borrower_address($id){
        $address = ORM::factory('borroweraddress')->where('borrower_id', '=', $id)
                ->order_by('update_ts','DESC')
                ->find();
        
        return $address;
    }
    
    public function get_business_info($borrower_id){
        $business = ORM::factory('business')
                ->where('borrower_id','=', $borrower_id)
                ->find();
        
        return $business;
    }
    
    public function get_co_borrower($loan_application_id){
        $co_borrowers = ORM::factory('coborrower')
                ->where('loan_application_id', '=', $loan_application_id)
                ->find_all();
        
        return $co_borrowers;
    }
    
    public function get_current_loan_application($id){
        $loan_application = ORM::factory('loanapplication')
                ->where('borrower_id','=',$id)
                //->where('background_check_remarks','=','Checked')
                ->find();
        
        return $loan_application;
    }
    
    public function get_current_loan_request($id){
        $loan_request = ORM::factory('loanrequest')
                ->where('loan_application_id', '=', $id)
                ->and_where('visible','=', '1')
                ->where('posted','=',0)
                ->find();
        
        return $loan_request;
    }
    
    public function get_collateral($appraisal_id)
    {
        $la_collateral = ORM::factory('loanapplicationcollateral')
                ->where('loan_application_appraisal_id','=',$appraisal_id)
                ->find();
        
        return $la_collateral;
    }
    
    public function get_appraisal($loan_application_id)
    {
        $la_appraisal = ORM::factory('loanapplicationappraisal')
                ->where('loan_application_id','=',$loan_application_id)
                ->find();
        
        return $la_appraisal;
        
    }
        
}
?>
