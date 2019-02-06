<?php 

namespace App\Template;

use Illuminate\View\View;
// use App\Post;
use App\page;
use App\University;
use Carbon\Carbon;
use DB;


class UniversityTemplate extends AbstractTemplate{

	protected $view = 'university';

	// protected $posts;
	protected $pages;
	protected $universities;

	public function __construct( Page $pages,University $universities){
		// $this->posts = $posts;
		$this->pages = $pages;		
		$this->$universities = $universities;		
	}

	public function prepare(View $view, array $parameters){
		$universities = University::where('stutes', 'active')->get();
		$view->with(compact('universities', $universities));
	}

}