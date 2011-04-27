<?php

Yii::import('zii.widgets.jui.CJuiWidget');

/**
 * JNotify class file.
 */

class ECheckBoxTree extends CJuiWidget {

	protected $baseUrl;
	public $version='0.4.1';

	public function publishAssets() {
		$dir =dirname(__FILE__).DIRECTORY_SEPARATOR.'checkboxtree-'.$this->version;
		$this->baseUrl =Yii::app()->getAssetManager()->publish($dir);
	}


	public function registerClientScripts() {

		if ($this->baseUrl === '')
			throw new CException(Yii::t('ECheckBoxTree', 'baseUrl must be set.'));

		$clientScript = Yii::app()->getClientScript();
		$clientScript->registerScriptFile($this->baseUrl.'/jquery.checkboxtree.min.js');
		$clientScript->registerCssFile($this->baseUrl.'/jquery.checkboxtree.min.css');


	}


        public function init(){
            parent::init();
            echo CHtml::tag('ul', CMap::mergeArray(array('id'=>$this->id), $this->htmlOptions));
        }

	public function run() {
		$this->publishAssets();
		$this->registerClientScripts();

                Yii::app()->getClientScript()->registerScript($this->id.'-js', "jQuery('#{$this->id}').checkboxTree(".json_encode($this->options).")", CClientScript::POS_READY);

		parent::run();
                echo '</ul>';
	}




}
