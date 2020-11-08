<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Rickandmorty extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	function __construct() {
		parent::__construct();
		$this -> load -> helper('url');
		$this->load->library('parser');
		
		$partial = array(
		$this -> template -> title('Rick and Morty'), 
		$this -> template -> set_layout('main'));
	}
	public function index() // character list page
	{
		$data = array();
		$this -> template -> build('rickmorty_search',$data);


	}
   
	public function search_result() // load all character or search by details
	{
		$data=array();
		$url ="https://rickandmortyapi.com/api/character/"; 
		$search_para="";
		if(isset($_POST['pagelink']) && $_POST['pagelink']!="") // next and previous click
		{
            $url =$_POST['pagelink'];

		}else // search function
		{
				if(isset($_POST['character_name']) && $_POST['character_name']!="")
				{
					$search_para=($search_para=="")?$search_para."?name=".$_POST['character_name']:$search_para."&name=".$_POST['character_name'];

				}
				if(isset($_POST['character_species']) && $_POST['character_species']!="")
				{
					$search_para=($search_para=="")?$search_para."?species=".$_POST['character_species']:$search_para."&species=".$_POST['character_species'];

				}
				if(isset($_POST['character_gender']) && $_POST['character_gender']!="")
				{
					$search_para=($search_para=="")?$search_para."?gender=".$_POST['character_gender']:$search_para."&gender=".$_POST['character_gender'];

				}
				$search_para=str_replace(' ', '%20',$search_para);
				$url=$url."".$search_para;	
	   }
       //echo $url;

		      
						$fd = @implode ('', file ($url));  //API Call
						$result= json_decode($fd,true);
						//echo $result->characters;
						//echo "<pre>";
						//print_r($result['info']);

                        
						$data['result_list'] = $result;
						$this -> template -> set_layout('blank');
						$this -> template -> build('search_result',$data);          

		
	}

	public function get_episode_list() // Character appeare episode list function
	{
		$data=array();
		$episode_str="";
		$arr_episode_list=array();
		$result_episode=array();
		
		$chara_id =$_POST['chara_id']; // Character ID

		//API call for get a particular character full details by character id
		$url ="https://rickandmortyapi.com/api/character/".$chara_id; 
		$fd = @implode ('', file ($url));  
		$result= json_decode($fd,true);
		//echo "<pre>";
		//print_r($result);
		

		// get all episode id details
		if(isset($result['episode']) && count($result['episode'])>0) 
		{
				foreach($result['episode'] as $episode)
				{

					//echo $episode."<br>";
					$episode_arr=explode("/",$episode);
					$arr_episode_list[]=end($episode_arr);
				}
			   if(count($arr_episode_list)>0)
			   {
				$episode_str=implode(",",$arr_episode_list);
			   }
	    }
	   
		// get each episode complete details
		if($episode_str!="")
		{

			$url_episode ="https://rickandmortyapi.com/api/episode/".$episode_str; 
		    $fd_episode = @implode ('', file ($url_episode));  
			$temp_result_episode= json_decode($fd_episode,true);
			if(isset($temp_result_episode[0]))
			{
				$result_episode=$temp_result_episode;
			}else
			{
				$result_episode[0]=$temp_result_episode;
			}
			//echo "<pre>";
		    //print_r($result_episode);

		}
		
		$data['result_episode_list'] = $result_episode;
		$this -> template -> set_layout('blank');
		$this -> template -> build('character_appeared_episode_list',$data);  

	}
	
}
