<?php defined('SYSPATH') or die('No direct access allowed.');

class Controller_Template_Employee extends Controller_Template{
    
    public $template = 'template/admin';
    
    public function before(){
        parent::before();
        $this->template->meta = $this->get_meta();
        $this->template->styles = $this->get_styles();
        $this->template->scripts = $this->get_scripts();
        $this->template->links = $this->get_links(); 
    }
    
    protected function get_meta(){
        $data =  null;
        
        return $data;
    }
    
    protected function get_styles(){
        $data = null;
        $data .= HTML::style('media/styles/south-street/jquery-ui-1.9.2.custom.css');
        $data .= HTML::style('media/styles/globalstyle.css');
        //$data .= HTML::style('media/styles/application.css');
        return $data;
    }
    
    protected function get_scripts(){
        $data = null;
        $data .= HTML::script('media/scripts/jquery-1.8.3.js');
        $data .= HTML::script('media/scripts/jquery-ui-1.9.2.custom.js');
        
        return $data;
    }
    
    protected function get_links(){
        $links = array(
            'Home' => 'home',
            'Application' => 'loan_application',
            'Loan' => 'loan_create',
            'Performance And Incentives' => 'incentives_custodian',
            'Inquiry' => 'loan_inquiry',
            'Reports' => ''
            
        );
        
        return $links;
    }
    
    protected function get_loan_links(){
        $sublinks = array(
            'Create Request' => 'loan_create',
            'Send Request'  => 'loan_send',
            'Loan Approval' => 'loan_approval',
            'Release Check' => 'loan_check',
            'Release Voucher' => 'loan_voucher',
            'Collection'    => 'loan_collection'
        );
        
        return $sublinks;
    }
    
    protected function get_incentives_links(){
        $sublinks = array(
            'Daily Cash Custodian' => 'incentives_custodian',
            'Performance Per Cut Off'  => 'incentives_cutoff',
        );
        
        return $sublinks;
    }
}
?>
