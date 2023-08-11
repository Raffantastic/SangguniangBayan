<?php
include 'db_connect.php';
$qry = $conn->query("SELECT * FROM documents where md5(id) = '{$_GET['id']}' ")->fetch_array();
foreach($qry as $k => $v){
	if($k == 'title')
		$k = 'ftitle';
	$$k = $v;
}
?>
<div class="col-lg-12">
      <?php if(isset($_SESSION['login_id'])): ?>
    <?php endif; ?>
	<div class="row">
		<div class="col-md-7">
			<div class="card card-outline card-info">
				<div class="card-header">
					<div class="card-tools">
						<small class="text-muted">
							Date Uploaded: <?php echo date("M d, Y",strtotime($date_created)) ?>
						</small>
					</div>
				</div>
				<div class="card-body">
					<div class="callout callout-info">
						<dl>
							<dt>Number and Series</dt>
							<dd><?php echo $ftitle ?></dd>
						</dl>
					</div>
					<div class="callout callout-info">
						<dl>
							<dt>Title</dt>
							<dd><?php echo html_entity_decode($description) ?></dd>
						</dl>
					</div>
				</div>
			</div>
		</div>
		<div class="col-md-5">
			<div class="card card-outline card-primary">
				<div class="card-header">
					<h3><b>Document</b></h3>
				</div>
				<div class="card-body">
					<div class="col-md-12">
						<div class="alert alert-info px-2 py-1"><i class="fa fa-info-circle"></i>&nbsp&nbsp You can print or download this Document.</div>
						<div class="row">
							 <?php
					            if(isset($file_json) && !empty($file_json)):
					              foreach(json_decode($file_json) as $k => $v):
					                if(is_file('assets/uploads/'.$v)):
					                $_f = file_get_contents('assets/uploads/'.$v);
					                $dname = explode('_', $v);
					         ?>
		 
							<div class="col-sm-3">
								<a href="download.php?f=<?php echo $v ?>" target="_blank" class="text-white border-rounded file-item p-1">
			                      <span class="img-fluid bg-dark border-rounded px-4 py-1 d-flex justify-content-center align-items-center" style="width: 85px;height: 85px">
			                      	<h1 class="bg-dark"><i class="fa fa-file-pdf"></i></h1>
			                      </span>
			                      <i></i><span title="Open Document" class="text-dark">Click this file.</span></i>
			                    </a>
							</div>
							 <?php endif; ?>
					         <?php endforeach; ?>
					         <?php endif; ?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<script>
	$('.file-item').hover(function(){
		$(this).addClass("active")
	})
	$('file-item').mouseout(function(){
		$(this).removeClass("active")
	})
	function dl($link){
		start_load()
		window.open($link,"_blank")
		end_load()
	}
	$('#share').click(function(){
		uni_modal("<i class='fa fa-share'></i> Share this document using the link.","modal_share_link.php?did=<?php echo md5($id) ?>")
	})
</script>