<?php namespace App\Controllers;

class Guide extends BaseController
{
	public function index()
	{
        $data['title'] = "Ironman Efficiency Guide";
        // Add variables to data array for navigation
        $data['app_path'] = APPPATH;
        $data['current_page'] = 0;
        $data['page_count'] = $this->getAmountOfPages();
        
        echo view('templates/header', $data);
        echo view('templates/navigation', $data);
		echo view('about', $data);
        echo view('templates/navigation', $data);
        echo view('templates/footer', $data);
	}
    
    public function contents() {
        $data['title'] = "Ironman Efficiency Guide";
        // Add variables to data array for navigation
        $data['app_path'] = APPPATH;
        $data['current_page'] = 0;
        $data['page_count'] = $this->getAmountOfPages();
        
        echo view('templates/header', $data);
        echo view('templates/navigation', $data);
		echo view('contents', $data);
        echo view('templates/navigation', $data);
        echo view('templates/footer', $data); 
    }
    
    public function page($page = 1) {
        if (!is_file(APPPATH.'/Views/steps/'.$page.'.php'))
        {
            // Whoops, we don't have a page for that!
            throw new \CodeIgniter\Exceptions\PageNotFoundException($page);
        }
        // Setup helpers
        helper('guide');
        helper('url');
        
        // Set data variables for general site content
        $data['title'] = "Ironman Efficiency Guide";
        
        // Add variables to data array for navigation
        $data['app_path'] = APPPATH;
        $data['current_page'] = $page;
        $data['page_count'] = $this->getAmountOfPages();
         
        // Build the site out of the views we need
        echo view('templates/header', $data);
        echo view('templates/navigation', $data);
        echo view("steps/" . $page);
        echo view('templates/navigation', $data);
        echo view('templates/footer', $data);
    }   
    
    public function getAmountOfPages() {
        $path = APPPATH .'/Views/steps/';
        $files = glob($path . "*");
        $count = count($files);
        return $count;
    }
    
}
