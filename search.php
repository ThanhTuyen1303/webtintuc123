<?php
require_once 'app/init.php';

if(isset($_GET['q']))
{
	$q=$_GET['q'];
	$query = $es->search([
		'body' => [
			'query' => [
				'bool' => [
					'should' => [
//						'match' => ['tenbaiviet' =>$q],
						
						'multi_match' => [
							'query' =>$q,
							'fields' =>['tenbaiviet','tomtat','noidung']
						]
						
						
					]
					
				]
			]
			
		]
		
		
		
				
	]);
	
//	echo '<pre>',print_r($query), '</pre>';
//	
//	die();
	
	if($query['hits']['total'] >=1){
		$results =$query['hits']['hits'];
	}
}


?>


<div class="content_left" style="width:auto;" >
	<?php
	
	if(isset($results)){
		foreach($results as $r)
		{
			?>
		<div class="result">
			<a href="?xem=chitiet&id=<?php echo $r['_id'];  ?>"><?php echo $r['_source']['tenbaiviet'];  ?></a>
			<div class="result-tomtat"><?php echo $r['_source']['tomtat'];  ?></div>
		</div>
			<?php
		}
	}
	
	?>
</div>