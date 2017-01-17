 <div class=" header-background font-md text-center ">Change Your Note</div>
 <div class="row col-lg-offset-2  col-lg-6 margin-top">
    <form action="<?=base_url('Notes/editnote/' . $note->id)?>" method="post">
     <div class="form-group font-sm">
     	<label for="notesname">Note title:</label>
     	<input type="text" name="notes_name" id="notesname" class="form-control" value="<?=$note->notes_name?>">
     </div>

     <div class="form-group font-sm">
     	<label for="notescontent">Note Content:</label>
     	<textarea class="form-control" rows="5" id="notescontent" name="content"><?=$note->content?></textarea>
     </div> 
     <input type="submit" value="save" class="btn btn-success btn-block btn-lg font-sm">  
       
     </form>
 </div>