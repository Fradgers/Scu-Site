
<?php

include_once('template_lib.php');


/**
 * Returns the url query as associative array
 *
 * @param    string    query
 * @return    array    params
 */
function convert_url_query($query) {
    $query_parts = explode('&', $query);
   
    $params = array();
    foreach ($query_parts as $param) {
        $item = explode('=', $param);
        $params[$item[0]] = $item[1];
    }
   
    return $params;
}


class Lookup {
	public $key_show_id = '';
	
	public $key_content_type = '';
	public $content_type_invert_results = false;
	
	public $key_resource_type = '';
	
	public function filter($array) {
		return array_filter($array, array($this,"callback"));
	}
	
	// check for match of specified keys against given content
	protected function callback($content)
	{
		if ($this->key_show_id && ($content->show_id != $this->key_show_id))
			return false;
		
		if ($this->key_resource_type && ($content->resource_type != $this->key_resource_type))
			return false;
			
		if ($this->key_content_type)
		{
			if ($content->content_type != $this->key_content_type)
			{
				if (!$this->content_type_invert_results)
					return false;
			}
			else
			{
				if ($this->content_type_invert_results)
					return false;
			}
		}
			
		return true;
	}
	
	/*
		// check for match of specified keys against given content
		protected function callback($content)
		{
			if ($this->key_show_id && ($content->show_id != $this->key_show_id))
				return false;
			
			if ($this->key_resource_type && ($content->resource_type != $this->key_resource_type))
				return false;
				
			if ($this->key_content_type && ($content->content_type != $this->key_content_type))
				return false;
				
			return true;
		}
	*/
	
}

$data = array(
		
	/*new Content(
		'Title',
		'Summary header',
		new VideoGroup(
			new Video('http://www.youtube.com/...',FLASH),
			VIDEO_LINK
		),
		'Summary footer',
		SHOWNAME, CONTENTTYPE, VIDEO),*/

	/*new Content(
		'Title',
		'<p>
		 First paragraph.
		</p><p>
		 Second paragraph.
		</p>',
		'',
		'',
		SHOWNAME, CONTENTTYPE, TEXT)*/
		
); // end of data array

?>
