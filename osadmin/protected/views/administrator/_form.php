
<div class="row-fluid">
  <div class="tab-pane active" id="Information">
	 <div class="span12 pull-left">
		<div class="span12">
			<fieldset class="portlet" >
             
             
  <div class="portlet-decoration arrow-minus" onclick=" $('#hide_box_line1').slideToggle();">
<div class="span11"><?php echo  Yii::t('administrators','heading_sub_title'); ?></div>
<div class="span1 Dev-arrow"><button class="btn btn-info arrow_main" id="hide_box_btn2" type="button" ></button> </div>
<div class="clearfix"></div>
</div>
 <div class="portlet-content" id="hide_box_line1">
 
    <div class="span5"> <?php 
		echo $form->textFieldRow(
           $model,'first_name',
           array('rel'=>'tooltip','data-toggle'=>"tooltip",'data-placement'=>"right",)
		); 
		?></div>
        
	 <div class="span5">  <?php echo $form->textFieldRow(
           $model,'last_name',
           array('rel'=>'tooltip','data-toggle'=>"tooltip",'data-placement'=>"right",)
		); ?></div>
        
	 <div class="span5">  <?php echo $form->textFieldRow(
           $model,'email',
           array('rel'=>'tooltip','data-toggle'=>"tooltip",'data-placement'=>"right",)
		); ?></div>
        
	 <div class="span5">  
	 <?php 
	 if(Yii::app()->controller->action->id=='update'){  
		echo $form->passwordFieldRow(
           $model,'password',
           array('rel'=>'tooltip','data-toggle'=>"tooltip",'data-placement'=>"right",'value'=>'')
        );
	}else{
		echo $form->passwordFieldRow(
           $model,'password',
           array('rel'=>'tooltip','data-toggle'=>"tooltip",'data-placement'=>"right"));
	}
	?></div>
	<div class="span5">  <?php echo $form->passwordFieldRow(
           $model,'confirm',
           array('rel'=>'tooltip','data-toggle'=>"tooltip",'data-placement'=>"right",)
        ); ?></div>	
	<div class="span5">  <?php echo $form->textFieldRow(
           $model,'phone',
           array('rel'=>'tooltip','data-toggle'=>"tooltip",'data-placement'=>"right",)
        ); ?></div>
	 <div class="span5">  <?php echo $form->radioButtonListRow($model,'status',array('1'=>'Enable','0'=>'Disable') ); 
	 
		  $list=CHtml::listData(AdminRole::getAdminRole(),'id_admin_role','role');
         ?></div>
	 <div class="span5">  <?php echo $form->dropDownListRow($model,'id_admin_role', $list, array('prompt'=>'Select Admin Role'));
       ?> </div>
       </div>
       
       
               </fieldset>
            </div>  
 		</div>
	</div>
</div>