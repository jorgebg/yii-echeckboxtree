Important
---------

The `checkboxtree` project development has been suspended. Please check the project homepage:
http://code.google.com/p/checkboxtree/


Introduction
------------

This extension uses **Valerio Galano's jQuery checkboxTree plugin** and extends CJuiWidget.

checkboxTree is lightweight jQuery plugin to handle collapsible checkbox's tree.


[![Flattr this git repo](http://api.flattr.com/button/flattr-badge-large.png)](https://flattr.com/submit/auto?user_id=jorgebg&url=https://github.com/jorgebg/yii-echeckboxtreeh&title=yii-echeckboxtreeh&language=en_GB&tags=github&category=software) 



Features
--------
    * fast and lightweight plugin
    * node's checking engine
    * configurable node's ancestors checking/unchecking behaviour
    * configurable node's descendants checking/unchecking behaviour
    * public methods to trigger checking engine's events
    * tree collapse engine
    * configurable node's collapse/expand behaviour
    * configurable collapse/expand effects
    * public methods to trigger collapse engine's events
    * automatic "collapse/expand all" buttons setup
    * css configurable layout 

##Requirements

Yii 1.1 or above

##Usage

Extract the files at _protected/extensions_.

Place this example code inside a _form_ or anywhere you want:

~~~
[php]
<?php $this->beginWidget('ext.ECheckBoxTree.ECheckBoxTree') ?>
	<li><input type="checkbox"/>Root
	<ul>
	    <li><input type="checkbox"/>Node 1
	    <ul>
		<li><input type="checkbox"/>Node 1.1
	    </ul></li>
	</ul>

	<ul>
	    <li><input type="checkbox"/>Node 2
	    <ul>
		<li><input type="checkbox"/>Node 2.1</li>
		<li><input type="checkbox"/>Node 2.2</li>
		<li><input type="checkbox"/>Node 2.3</li>
		<ul>
		    <li><input type="checkbox"/>Node 2.3.1</li>
		    <li><input type="checkbox"/>Node 2.3.2</li>
		</ul>
		<li><input type="checkbox"/>Node 2.4</li>
		<li><input type="checkbox"/>Node 2.5</li>
		<li><input type="checkbox"/>Node 2.6</li>
	    </ul></li>

	</ul>
	</li>
<?php $this->endWidget() ?>
~~~

Config the widget with the $options attribute. You can find the plugin documentation [here](http://code.google.com/p/checkboxtree/wiki/UserDocs04).

##Resources
 * [InDaHouseRulez SL](http://www.indahouserulez.com)
 * [Project page](http://code.google.com/p/checkboxtree/)
 * [Documentation](http://code.google.com/p/checkboxtree/wiki/UserDocs04)


 Last news
---------
Some time ago I developed this extension for [InDaHouseRulez SL](http://www.indahouserulez.com). I no longer work there, but I still support the extension.

The extension was released under the [MIT license](http://www.opensource.org/licenses/mit-license.php), so I made a fork on [GitHub](https://github.com), where you'll find the latest version:

[https://github.com/jorgebg/yii-echeckboxtree](https://github.com/jorgebg/yii-echeckboxtree)
