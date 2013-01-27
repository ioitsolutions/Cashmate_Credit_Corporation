<?php defined('SYSPATH') or die('No direct access allowed.');

class Controller_Loan_Send extends Controller_Template_Admin{
    
    public function before(){
        parent::before();
        $this->template->title = "Cashmate Credit Corporation: Loan Request List";
        $this->template->title_content = "Loan Request List";
        $this->template->styles .= HTML::style('media/styles/emp/loan.css');
        $this->template->scripts .= HTML::script('media/scripts/emp/send_request.js');
        $this->template->sublinks = $this->get_loan_links();
   }
   
    public function action_index(){
      
        $this->redirect('loan_send/list/?page=1');
    }
    
    public function action_list(){
        
        $loan_requests = $this->query();
        $loan_requests->reset(FALSE);
        
        $view = View::factory('employee/loan/send/list');
        
        $paginator = new Pagination(array('total_items'=>$loan_requests->count_all()));
        $paginator->route_params(array('controller' => $this->request->controller(), 'action' => $this->request->action())); 
        $view->loan_requests = $loan_requests->offset($paginator->offset)->limit($paginator->items_per_page)->find_all()->as_array();
        $view->pagination = $paginator->render();
        
        $this->template->title_content = "Loan Request for Sending";
        $this->template->content = $view;
        
        //echo $this->generate_slr_id();
    }
    
    public function action_update()
    {
        $loan_request_id = $this->request->param('id');
        $loan_request = ORM::factory('loanrequest', $loan_request_id);
        
        $view = View::factory('employee/loan/send/edit');
        $view->set('loan_request', $loan_request);
        $this->template->content = $view;
    }
    
    public function action_post(){
        $this->save_document_number();
        
        $document = ORM::factory('document')
        ->where('document_number','=',$this->generate_slr_id())
        ->find();
        
        $checkbox = $_POST['posted'];
            
        if (is_array($checkbox)) {
            foreach ($checkbox as $key => $id)
            {
                $query = DB::insert('loan_requests_for_approvals', 
                        array('document_id', 'loan_request_id','create_user','visible'))
                        ->values(array($document->id, $id, Cookie::get('id'),'1'));
                $query->execute();
            }
        }
        $this->redirect('loan_send/list/?page=1');
    }
    
    public function action_delete(){
        $this->auto_render = false;
        
        $checkbox = $_POST['posted'];
        if (is_array($checkbox)) 
        {
            foreach ($checkbox as $key => $id)
            {
                $query =  DB::update('loan_requests')->set(array('visible' => '0'))->where('id','=', $id);
                $query->execute();
            }
            $status="Success";
        }
        
        echo json_encode($status);
    }
    
    public function action_save()
    {
        $loan_request_id = $this->request->param('id');
        $loan_request = ORM::factory('loanrequest', $loan_request_id);
        $loan_request->values($_POST);
        
        try{
            $loan_request->save();
            $this->redirect('loan_send/list/?page=1');
        }catch(ORM_Validation_Exception $ex){
            $errors = $ex->errors('validation');
        }
    }
    
    public function generate_slr_id()
    {
       return $this->generate_document_id('SLR',  Cookie::get('branch_code'));
    }
    
    public function generate_document_id($doc_code,$branch_code){
        
        $number = (unixtojd(strtotime('now')) - gregoriantojd(1, 1, 1900)) + 2;
        $new_slr_id = $doc_code.$branch_code.$number;
        return $new_slr_id;
    }
    
    public function save_document_number()
    {
        $document = ORM::factory('document')
        ->where('document_number','=',$this->generate_slr_id())
        ->find();
        
        $document->values(array(
            'document_type_id' => 6,
            'document_number'  => $this->generate_slr_id(),
            'document_date'    => date("Y-m-d",  strtotime('now')),
            'area_id'          => Cookie::get('area_id'),
            'update_user'      => Cookie::get('id'),
        ));
        
        $document->save();
    }
      
    public function query()
    {
                $loan_requests = ORM::factory('loanrequest')
                ->select(
                            array('d2.document_number','lr_number'),
                            array('d1.document_number','la_number'),
                            array('b.id', 'borrower_id'), 
                            'b.first_name', 
                            'b.middle_name', 
                            'b.last_name', 
                            'ba.address', 
                            'a.code', 
                            array('a.id','area_id'),
                            array(Db::expr('CONCAT(last_name,", ",first_name," ",middle_name)'),'fullname')
                        )
                ->join(array('loan_applications','la'), 'INNER')
                    ->on('la.id','=','loanrequest.loan_application_id')
                ->join(array('documents','d1'),'INNER')
                    ->on('d1.id', '=', 'la.document_id')
                ->join(array('documents','d2'),'INNER')
                    ->on('d2.id', '=', 'loanrequest.document_id')
                ->join(array('borrowers','b'), 'INNER')
                    ->on('b.id','=', 'la.borrower_id')
                ->join(array('borrowers_addresses','ba'), 'LEFT')
                    ->on('ba.borrower_id','=','b.id')
                ->join(array('areas','a'),'LEFT')
                    ->on('a.id', '=', 'ba.area_id')
                ->join(array('areas','a1'),'INNER')
                    ->on('a1.id', '=', 'la.area_id') 
                ->join(array('loan_requests_for_approvals','lrfa'),'LEFT')
                    ->on('lrfa.loan_request_id', '=', 'loanrequest.id')
                ->join(array('loan_approvals','lap'),'LEFT')
                    ->on('lap.id','=','lrfa.id')
                ->where('loanrequest.visible','=', 1)
                ->and_where('la.visible','=',1)
                ->and_where('d1.visible','=',1)
                ->and_where('d2.visible','=',1)
                ->and_where('loanrequest.posted', '=', 1)
                ->and_where('lrfa.id','=', NULL,'OR','lap.loan_requests_for_approval_id', '=', NULL)
                //->or_where('lap.loan_requests_for_approval_id', '=', NULL)
                ->and_where('a1.branch_id','=', Cookie::get('branch_id'))
                ->and_where('ba.address_type_id','=', 1)
                ->order_by('d1.document_number', 'ASC');
         return $loan_requests;
    }
    
}
?>
