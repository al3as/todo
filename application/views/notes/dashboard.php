<div class="header-background font-md text-center">My Notes</div>
	<div class="col-lg-offset-1 col-lg-10">

	
		<a class="btn btn-primary btn-block btn-md font-sm" href="<?=base_url('notes/addnotes')?>">
			 Add notes <span class="glyphicon glyphicon-plus g-font-sm"></span></a>
		</a>
		<hr>
		<a class="btn btn-info btn-block btn-md font-md" href="<?=base_url('notes/completed')?>">
			 Completed Notes <span class="glyphicon glyphicon-globe g-font-sm"></span> </a>
		</a>
		<hr>

	<div  style="background-color: #aaa; margin-bottom: 8px; margin-top:26px;padding: 10px; border-radius: 10px;">
		<div class=" font-sm text-center white">All Your Notes  </div>
	</div>

	<?php $i=1?>
	<!-- <ul class="pagination">
		
	</ul>
	 -->
	 <?php if(count($notes) < 1):?>
	 	<h3>You have no notes yet.</h3>
	 <?php endif;?>
	 <?php foreach($notes as $note):?>
		<div class="row  margin-top font-sm">
		<div class="col-lg-6">
			<div class="panel panel-primary">
				<div class="panel-heading">
					<!-- <?=$i++?> --> <span class="glyphicon glyphicon-book"> </span> <?=$note->notes_name?> 
				</div>
				<div class="panel-body">
					<?=$note->content?>
				</div>
			</div>
		</div>
		<div class="col-lg-6">
			<a href="<?=base_url('notes/done/'. $note->id)?>" class="btn btn-success">Done <span class="glyphicon glyphicon-ok"></a>
			<a href="<?=base_url('notes/undone/' . $note->id)?>" disabled class="btn btn-warning">UnDone <span class="glyphicon glyphicon-off"></span> </a>
			<a href="<?=base_url('Notes/edite/' . $note->id)?>" class="btn btn-info">Edit <span class="glyphicon glyphicon-pencil"></a>
			<a href="<?=base_url('notes/deletenote/' . $note->id)?>" class="btn btn-danger delete">Delete <span class="glyphicon glyphicon-trash"></a>
		</div>
		</div>
		
	<?php endforeach;?>
</div>