<div class="span12 top_box_fixed">
    <?php    $this->widget('ext.Flashmessage.Flashmessage');    ?> 
    <?php
    $form = $this->beginWidget('CActiveForm',
            array(
        'id' => 'gridForm',
        'enableAjaxValidation' => false,
    ));
    ?>
    <div class="row-fluid grid-menus span12 pull-left ">
        <div class="span12">
            <div class="span10 buttons_top">
            <?php Library::addButton(array('label'=>Yii::t('common','button_insert'),'url'=> $this->createUrl('create')));  ?>
            <?php Library::buttonBulk(array('label'=>Yii::t('common','button_delete'),'permission'=>$this->deletePerm,'url'=> $this->createUrl($this->uniqueid . "/delete")));?>
            </div>
            <div class="span2 dropdown_cut_main pull-right">
                <div class="span7 pull-right">
                    <?php Library::getPageList(array('totalItemCount' => $dataProvider->totalItemCount)); ?>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row-fluid">
  <div class="span12 top_box_margin theme-div-main">
    <?php

$this->widget('bootstrap.widgets.TbExtendedGridView', array(
	 'type'=>'striped bordered condensed',
	 'template'=>"{summary}{pager}{items}",
	 'summaryText'=>'Displaying {start}-{end} of {count} Results.',
	 'enablePagination' => true,
          'rowCssClassExpression'=>'$data["default"]?"active":""',
        'pager'=>array('class'=>'CListPager', 'header' => '&nbsp;Page',  'id' => 'no-widthdesign_left' ),
	'ajaxUpdate'=>false,
        'id'=>'productinfo-grid',
	'dataProvider'=>$dataProvider,
	'columns'=>array(
     /*array(
        'header'=>'S.No',
        'value'=>'$this->grid->dataProvider->pagination->currentPage * $this->grid->dataProvider->pagination->pageSize + ($row+1)',
         
      ),*/
                
            array('name'=>'mockup','header'=>Yii::t('manufacturers','column_name'),'type'=>'raw','value'=>array($this,'grid')),
			array('name'=>'title','header'=>Yii::t('manufacturers','column_name'),'type'=>'raw','value'=>array($this,'grid')),

           
	),
)); 
?>
    <input type="hidden" name="backurl" value="<?php echo base64_encode(urldecode(Yii::app()->request->requestUri));?>">
    <?php $this->endWidget(); ?>
  </div>
</div>
