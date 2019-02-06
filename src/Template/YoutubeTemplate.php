<?php 

namespace App\Template;

use Illuminate\View\View;
// use App\Post;
use App\page;
use App\Youtube;
use Carbon\Carbon;
use DB;


class YoutubeTemplate extends AbstractTemplate{

	protected $view = 'youtube';

	// protected $posts;
	protected $pages;
	protected $youtubes;

	public function __construct( Page $pages, Youtube $youtubes){
		// $this->posts = $posts;
		$this->pages = $pages;		
		$this->youtubes = $youtubes;		
	}

	public function prepare(View $view, array $parameters){
		$youtubes = Youtube::where('stutes','active')->get();
		$view->with(compact('youtubes', $youtubes));
	}

}