<?php
require_once 'CoocieShell.php';
require_once 'FormHelper.php';
require_once 'TagHelper.php';
require_once 'Date.php';
require_once 'Interval.php';
require_once 'File.php';
require_once 'Tag.php';
require_once "Image.php";
require_once 'Link.php';
require_once 'HtmlList.php';
require_once 'ListItem.php';
require_once 'Ul.php';
require_once 'Ol.php';
require_once 'Form.php';
require_once 'Input.php';
require_once 'Submit.php';
require_once 'Password.php';
require_once 'Hidden.php';
require_once 'Textarea.php';
require_once 'Checkbox.php';
require_once 'Radio.php';
require_once 'Select.php';
require_once 'Option.php';
require_once 'SessionShell.php';
require_once 'FileManipulator.php';
require_once 'Validator.php';
$date = new Date('2025-12-31');
/*//echo $date->subYear(2)->getYear();
echo $date->addDay(7)->getDay()."<br>";
echo $date->addMonth(1)->getMonth('en')."<br>";
echo $date->subMonth(3)->getMonth('ru')."<br>";
echo $date->addYear(3)->getYear()."<br>";
echo $date->subYear(2)->getYear()."<br>";
echo $date->format('Y.m.d')."<br>";
echo $date."<br>";

$date1 = new Date('2025-12-31');
$date2 = new Date('2026-11-28');
$interval = new Interval($date1, $date2);
echo $interval->toDays()."<br>";   // выведет разницу в днях
echo $interval->toMonths()."<br>"; // выведет разницу в месяцах
echo $interval->toYears()."<br>";  // выведет разницу в годах
echo $interval."<br>"; // массив вида ['years' => '', 'months' => '', 'days' => '']
echo "<hr>";*/

/*$path = new File('new.txt');
echo $path->getPath()."<br>";
echo $path->getDir()."<br>";
echo $path->getName()."<br>";
echo $path->getExt()."<br>";
echo $path->getSize()."<br>";
echo $path->getText()."<br>";
echo $path->setText("YES \n")."<br>";
echo $path->appendText("NEW \n")."<br>";
echo $path->copy("folder/new.txt")."<br>";
//echo $path->delete()."<br>";
echo $path->rename("new.txt")."<br>";
echo $path->rename("folder/new1.txt")."<br>";*/

/*$img = new Tag('img');
echo $img->open();
$header = new Tag('header');
echo $header->open().'Хедер'.$header->close();
$input = new Tag('input',['id'=>'salt','name'=>'stone']);
echo $input->open();
$input = new Tag('input');
echo $input->setAtrr('id','yeah')->open();
echo $input->removeAttr('id')->open();
echo $input->setAtrs(['id'=>'yeah','type'=>'text'])->open();
echo $input->setAtrr('disabled',true)->open();
echo (new Tag('input'))->setAtrr('name',1)->open();
echo (new Tag('input'))->setAtrr('name',2)->open();*/

/*echo (new Tag('input'))->addClass('www')->open();
echo (new Tag('input'))->addClass('eee')->addClass('bbb')->open();
echo (new Tag('input'))->setAtrr('class', 'eee bbb')->addClass('kkk')->open();
echo (new Tag('input'))->setAtrr('class', 'eee bbb')->open();
echo (new Tag('input'))->addClass('eee')->addClass('bbb')->addClass('eee')->open();
$input = new Tag('input');
echo $input->setAtrr('class', 'eee zzz kkk')->removeClass('zzz')->open();
echo $input->getAttr();
echo $input->getElem('class');
echo (new Tag('div'))->setText('lol')->show();*/

/*$img = new Image();
echo $img->setAtrr('src','14.jpg')->open();
$img->setAtrr('height',200)->setAtrr('width',300);
echo $img;*/

/*echo (new Link())->setAtrr('href','/index.php')-> setText('index2')->show();
echo (new Link)->setAtrr('href', '/index.php')->setAtrr('class', 'link1 link2')->setText('index')->show();
var_dump($_SERVER['REQUEST_URI']);*/

/*$list = new HtmlList('ul');
 $list->setAtrr('class','eee')
    ->addItem((new ListItem())->setAtrr('class','first')->setText('item1'))
    ->addItem((new ListItem())->setText('item2'))
    ->addItem((new ListItem())->setText('item3'));
echo $list;
$ol = new Ol();
echo $ol->addItem((new ListItem())->setText('test'))
     ->addItem((new ListItem())->setText('test2'))->
     addItem((new ListItem())->setText('test3'));
$ul = new Ul();
echo $ul->addItem((new ListItem())->setText('test'))
    ->addItem((new ListItem())->setText('test2'))->
    addItem((new ListItem())->setText('test3'));*/

/*$form = (new Form())->setAtrs(['action'=>'','method'=>'post']);
echo $form->open();
echo (new Input())->setAtrr('name','year')->open();
echo (new Input())->setAtrr('type','text')->open();
echo $form->close();
$form = (new Form())->setAtrs(['action'=>'','method'=>'post']);
echo $form->open();
echo (new Input())->setAtrr('name','year');
echo (new Input())->setAtrr('type','text');
echo $form->close();*/
/*$form = (new Form)->setAtrs(['action' => '', 'method' => 'GET']);
echo $form->open();
echo (new Input)->setAtrr('name', 'year')->setAtrr('value', date('Y'));
echo (new Input)->setAtrr('type', 'submit');
echo $form->close();*/
/*$form = (new Form)->setAtrs(['action' => '', 'method' => 'GET']);
echo $form->open();
echo (new Input)->setAtrr('name', 'year');
echo (new Input)->setAtrr('name', '2');
echo (new Input)->setAtrr('name', '3');
echo (new Input)->setAtrr('name', '4');
echo (new Input)->setAtrr('name', '5');
echo (new Input)->setAtrr('type', 'submit');
echo $form->close();
echo array_sum($_REQUEST);*/

/*$form = (new Form)->setAtrs(['action' => 'test.php', 'method' => 'GET']);
echo $form->open();
echo (new Input)->setAtrr('name', 'year');
echo new Submit;
echo $form->close();*/

/*$form = (new Form)->setAtrs(['action' => 'test.php', 'method' => 'GET']);
echo $form->open();
echo (new Input)   ->setAtrr('name', 'login');
echo (new Password)->setAtrr('name', 'passw');
echo new Submit;
echo $form->close();*/

/*$form = (new Form)->setAtrs(['action' => 'test.php', 'method' => 'GET']);
echo $form->open();
echo (new Hidden)->setAtrr('name', 'id')->setAtrr('value', '123');
echo (new Input)   ->setAtrr('name', 'login');
echo (new Password)->setAtrr('name', 'passw');
echo new Submit;
echo $form->close();*/

/*$form = (new Form)->setAtrs(['action' => '', 'method' => 'GET']);
echo $form->open();
echo (new Input)->setAtrr('name', 'user');
echo (new Textarea)->setAtrr('name', 'message')->setText('my mess')->show();
echo new Submit;
echo $form->close();*/

/*$form = (new Form)->setAtrs(['action' => '', 'method' => 'POST']);
echo $form->open();
echo (new Checkbox)->setAtrr('name', 'checkbox');
echo (new Checkbox)->setAtrr('name', 'c2box');
echo (new Input)->setAtrr('name', 'user');
echo new Submit;
echo $form->close();*/

/*$form = (new Form)->setAtrs(['action' => '', 'method' => 'POST']);
echo $form->open();
echo (new Radio())->setAtrr('name','radio')->setAtrr('value',1);;
echo (new Radio())->setAtrr('name','radio')->setAtrr('value',2);
echo (new Input)->setAtrr('name', 'user');
echo new Submit;
echo $form->close();*/

/*$select = new Select();
echo ($select ->setAtrr('name','list'))->
    add((new Option())->setText('Item1'))->
    add((new Option())->setText('Item2')->setSelected())->
    add((new Option())->setText('Item3'))->
    show();*/

/*$form = (new Form)->setAtrs(['action' => '', 'method' => 'GET']);
echo $form->open();
echo (new Input)->setAtrr('name', 'test');
echo ((new Select)->setAtrr('name', 'list'))
			->add( (new Option())->setText('item1') )
    ->add( (new Option())->setText('item2') )
    ->add( (new Option())->setText('item3') )
    ->show();
		echo new Submit;
	echo $form->close();
	var_dump($_REQUEST);*/

/*$th = new TagHelper();
echo $th->open('div') . 'text' . $th->close('div');
$th = new TagHelper();
echo $th->open('form', ['action' => 'test.php', 'method' => 'GET']);
echo $th->open('input', ['name' => 'year']);
echo $th->open('input', ['type' => 'submit']);
echo $th->close('form');
echo $th->show('div',123);*/

/*$fh = new FormHelper();
echo $fh->openForm(['action' => '', 'method' => 'GET']);
echo $fh->input(['name' => 'year']);
echo $fh->checkbox(['name' => 'check']);
echo $fh->textarea(['name'=>'exp']);
echo $fh->select(
    ['name' => 'list', 'class' => 'eee'],
    [
        ['text' => 'item1', 'attrs' => ['value' => '1']],
        ['text' => 'item2', 'attrs' => ['value' => '1', 'selected' => true]],
        ['text' => 'item1', 'attrs' => ['value' => '1', 'class' => 'last']],
    ],
	);
echo $fh->submit();
echo $fh->closeForm();*/

/*$csh = new CookieShell;
$counter = ($csh->exists('count')) ? $csh->get('count') + 1 : 1 ;
$csh->set('count',$counter, 3600*24);
echo $csh->get('count');*/

/*$sess = new SessionShell();
echo $sess->set('test','new')->get('test');
$sess->destroy();*/

/*$files=new FileManipulator();
$files->create('files.txt');
$files->create('fil.txt');
$files->delete('fil.txt');
$files->copy('files.txt','folder/files.txt');
$files->replace('files.txt','folder/files.txt');
echo $files->weigh('folder/files.txt');*/

$val = new Validator();
var_dump($val->inLength('srtt',1,7));
echo $val->isEmail('kas@mail.ru');
echo $val->isDomain('mail.ru');

