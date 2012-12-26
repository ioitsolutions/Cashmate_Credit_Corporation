<?php defined('SYSPATH') or die('No direct access allowed.');

class Controller_Template_Admin extends Controller_Template{
    
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
            'Home' => '',
            'Bulletin Contents' => 'bulletin_announcement',
            'Authentication' => 'authentication_role',
            'Branch' => 'branch_branches',
            'Borrowers' => 'borrower_borrower',
            'Loan' => 'loan_type',
            
            /* Employee */
            /*'Application' => 'loan_application',
            'Loan' => 'loan_create',
            'Performance And Incentives' => 'incentives_custodian',
            'Inquiry' => 'loan_inquiry',
            'Reports' => ''*/
        );
        
        return $links;
    }
    
    protected function get_bulletin_links(){
        $sublinks = array(
            'Announcements' => 'bulletin_announcement',
            'Top Performers' => 'bulletin_performer',
            'Quotes' => 'bulletin_quote',
            'Memos' => 'bulletin_memo_employee',
            'News' => 'bulletin_news',
            'Holidays' => 'bulletin_holiday'
        );
        
        return $sublinks;
    }
    
    protected function get_branch_links(){
        $sublinks = array(
            'Branches' => 'branch_branches',
            'Areas' => 'branch_area',
            'Bank Accounts' => 'branch_account'
        );
        
        return $sublinks;
    }
    
    protected function get_loan_links(){
        $sublinks = array(
            /* Employee */
            /*'Application' => 'loan_application',
            'Create Request' => 'loan_create',
            'Send Request'  => 'loan_send',
            'Loan Approval' => 'loan_approval',
            'Release Check' => 'loan_check',
            'Release Voucher' => 'loan_voucher',
            'Collection'    => 'loan_collection',*/
            
            'Loan Types' => 'loan_type',
            'Loan Status' => 'loan_status',
        );

        return $sublinks;
    }
    
    protected function get_authentication_links(){
        $sublinks = array(
          'Employee' => 'authentication_employee',
          'Role' => 'authentication_role',
        );
        
        return $sublinks;
    }
    
    /* Employee */
    /*
    protected function get_incentives_links(){
        $sublinks = array(
            'Daily Cash Custodian' => 'incentives_custodian',
            'Performance Per Cut Off'  => 'incentives_cutoff',
        );
        
        return $sublinks;
    }*/
}
?>