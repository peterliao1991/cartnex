<?php 
class Languages extends CWidget{
    public $languagearray=array();
    public function init(){
	    return parent::init();
	}
	public function run(){
		///echo "value of ".Yii::app()->urlManager->parseUrl(Yii::app()->request);
		//exit;
		 //$languagearray=array();
		 /*$languages=Language::model()->findAll();
		 Yii::app()->session['CONFIG_STORE_DEFAULT_LANGUAGES']=Yii::app()->session['CONFIG_STORE_DEFAULT_LANGUAGES']?Yii::app()->session['CONFIG_STORE_DEFAULT_LANGUAGES']:Yii::app()->session['CONFIG_STORE_DEFAULT_LANGUAGE'];
		 foreach($languages as $language){
			 if(Yii::app()->session['CONFIG_STORE_DEFAULT_LANGUAGES']!=$language['code'])
             $this->languagearray[]=array('label'=>$language['code'], 'url'=>array("",'lang'=>$language['code']));
		 }*/

		 /*$languages=Language::model()->findAll();
		 Yii::app()->session['CONFIG_STORE_DEFAULT_LANGUAGES']=Yii::app()->session['CONFIG_STORE_DEFAULT_LANGUAGES']?Yii::app()->session['CONFIG_STORE_DEFAULT_LANGUAGES']:Yii::app()->session['CONFIG_STORE_DEFAULT_LANGUAGE'];*/
		 if(sizeof(Yii::app()->config->getData('languages'))>1){
		 foreach(Yii::app()->config->getData('languages') as $language){
			 if($language['code']!=Yii::app()->session['language'])
             $this->languagearray[]=array('label'=>$language['code'], 'url'=>array('site/index','lang'=>$language['code']));
		 }
		 $this->render("language");
		 }
	}
}
?>