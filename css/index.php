<!doctype html>
<html lang="en-us">
<head>
<title>Radix CSS Example Overview</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<?php
$file_list = array(
	'base.less',
	'html.less',
	'grid.less',
	'list.css',
	'form.css',
	'page.css',
	'info.css',
	'note.css',
	'menu.css',
	'debug.css',
);

switch ($_GET['css']) {
case 'less':
	foreach ($file_list as $f) {
		echo '<link href="' . $f . '" media="all" rel="stylesheet/less" type="text/css">';
	}
	break;
default:
	echo '<link href="radix.css" rel="stylesheet/less" type="text/css">';
	// echo '<link href="radix.less" rel="stylesheet/less" type="text/css">';
}
?>
<!-- <link href="responsive.css" media="all" rel="stylesheet" type="text/css"> -->
<script type="text/javascript" src="less.js"></script>
<style>
body {
	padding:16px;
}
h1 {
	border-left:4px solid #f00;
}
h2 {
	border-left:2px solid #0f0;
}
</style>
</head>
<body>
<header>
<h1>Radix Style Example Page</h1>
<p class="lead">
Radix Style is a baseline CSS framework providing a style normalisation, a grid and flair for key elements.
Use use <a href="http://lesscss.org">less</a> to make it go.
</p>
</header>
<nav>
<ul>
<li>Grid</li>
<li>Text</li>
<li><a ref="#list">Lists</a></li>
<li><a ref="#form">Forms</a></li>
<li><a href="?css=less">Less</a></li>
</ul>
</nav>


<p>
This list was taken from <a href="http://html5doctor.com/element-index/">html5doctor.com/element-index/</a> and depends heavily on the W3 draft.
</p>
<!-- http://www.w3.org/html/wg/drafts/html/master/dom.html#kinds-of-content -->

<!-- Grid System -->
<h2>Our Grid System</h2>
<p>
Similar to ones you've seen with 960, Bootstrap or Foundation.
12 Colums or a %column basis for 20 to 80% widths
</p>

<p>
Use the <code>grid</code> class to create a grid defining container and rows are contained in a <code>hbox</code>
A <code>div</code> with a class like <code>c#</code> will define the columns, at <code>o#</code> defines it's offset (if any is needed)
</p>

<div class="grid">

<div class="hbox">
    <div class="c1">One <em>c1</em></div>
    <div class="c1 o1">One, Offset One <em>c1 o1</em></div>
    <div class="c3">Three <em>c3</em></div>
</div>

<div class="hbox">
    <div class="c5 o1">Five Columns, Offset One</div>
</div>

<div class="hbox">
    <div class="c10 o2">10 Columns, Offset Two</div>
</div>

</div>

<h3>This Grid is With 600</h3>
<div class="grid" style="width:600px;">

<div class="hbox">
    <div class="c1">One <em>c1</em></div>
    <div class="c1 o1">One, Offset One <em>c1 o1</em></div>
    <div class="c3">Three <em>c3</em></div>
</div>

<div class="hbox">
    <div class="c5 o1">Five Columns, Offset One</div>
</div>

<div class="hbox">
    <div class="c10 o2">10 Columns, Offset Two</div>
</div>

</div>

<h2>And Percentage Grids Too</h2>
<div class="grid">
<div class="hbox"><div class="c20">20</div><div class="c60">60</div><div class="c20">20</div></div> 
<div class="hbox"><div class="c20">20</div><div class="c50">50</div><div class="c30">30</div></div> 
<div class="hbox"><div class="c20">20</div><div class="c30">30</div><div class="c20">20</div><div class="c30">30</div></div> 
</div>

<h2 id="text">Text and Body Elements</h2>
<p>
Radix provide styling for Headings, Inline-Elements.
</p>


<h2>Structure</h2>
<p>article, aside, nav, section</p>
<p>Article, Aside, Body, Cite, div, doctype, head, html, iframe, menu, nav, p, section, span, wbr</p>
<article>
<h2>article</h2>
<p>Each article indents a small amount</p>
<h2>aside</h2>
<p>Sits in a well, floating right</p>
<aside>This is the aside text</aside>
</article>

<h2>Headings</h2>
<p>The new <em>header</em> and <em>footer</em>, hgroup and the traditional <em>h*</em> tags.</p>

<h1>Heading 1 <small>sub-text</small></h1>
<h2>Heading 2 <small>sub-text</small></h2>
<h3>Heading 3 <small>sub-text</small></h3>
<h4>Heading 4 <small>sub-text</small></h4>
<h5>Heading 5 <small>sub-text</small></h5>
<h6>Heading 6 <small>sub-text</small></h6>

<h2>Inline Indicators</h2>
<p>
<abbr>abbr<abbr> and <abbr title="Abbreviation">abbr+title</abbr>,
<b>&lt;b&gt;</b>, <code>code</code>, <del>del</del>, <em>em</em>, <i>i</i>, <ins>ins</ins>, <kbd>kbd</kbd>, <small>small</small>, <strong>strong</strong>, <sub>sub</sub>, <sup>sup</sup>, <u>u</u>.</p>
<p><address>address</address></p>

, bdi, bdo, blockquote, br, hr, mark, pre, q, s, samp</p>

<h2>Tables</h2>
<p>caption, col, colgroup, table, tbody, td, tfoot, th, thead, tr.</p>

<h3>Default Table Style</h3>
<table>
<thead><tr><th>Header 0</th><th>Header 1</th><th>Header 2</th></tr></thead>
<tbody>
<tr><td>Header 0</td><td>Header 1</td><td>Header 2</td></tr>
<tr><td>Header 0</td><td>Header 1</td><td>Header 2</td></tr>
<tr><td>Header 0</td><td>Header 1</td><td>Header 2</td></tr>
</tbody>
</table>

<h3>A Table Grid Style</h3>
<table class="grid">
<thead><tr><th>Header 0</th><th>Header 1</th><th>Header 2</th></tr></thead>
<tbody>
<tr><td>Header 0</td><td>Header 1</td><td>Header 2</td></tr>
<tr><td>Header 0</td><td>Header 1</td><td>Header 2</td></tr>
<tr><td>Header 0</td><td>Header 1</td><td>Header 2</td></tr>
</tbody>
</table>

<h3>A Table Row Style</h3>
<table class="grid">
<thead><tr><th>Header 0</th><th>Header 1</th><th>Header 2</th></tr></thead>
<tbody>
<tr><td>Header 0</td><td>Header 1</td><td>Header 2</td></tr>
<tr><td>Header 0</td><td>Header 1</td><td>Header 2</td></tr>
<tr><td>Header 0</td><td>Header 1</td><td>Header 2</td></tr>
</tbody>
</table>

<!-- #list -->
<h2 id="list">Lists</h2>
<p>
Our List styles are applied to dd, dl, dt, li, ol, ul.
Simply adding a <em>class</em> of <em>h</em> to them makes them horizontal.
</p>

<h3>Definition List</h3>
<dl>
<dt>A Data Term</dt><dd>And a Definition</dd>
<dt>A 2nd Term</dt><dd>And a Definition</dd>
<dt>A 3rd Term</dt><dd>And a Definition</dd>
</dl>

<h3>Ordered List</h3>
<ol>
<li>Order Lists can Have it Too</li>
<li>Order Lists can Have it Too</li>
<li>Order Lists can Have it Too</li>
</ol>

<h3>Unorderd List</h3>
<ul>
<li>But, you likely want to use a <code>ul</code>.</li>
<li>But, you likely want to use a <code>ul</code>.</li>
<li>But, you likely want to use a <code>ul</code>.</li>
</ul>

<h3>Horizontal List</h3>
<p>Horizontal lists can be created using the <code>h</code> class.</p>
<dl class="h" style="outline:1px solid #333;">
<dt>A Data Term</dt><dd>And a Definition</dd>
<dt>A 2nd Term</dt><dd>And a Definition</dd>
<dt>A 3rd Term</dt><dd>And a Definition</dd>
</dl>

<ol class="h">
<li>Order Lists can Have it Too</li>
<li>Order Lists can Have it Too</li>
<li>Order Lists can Have it Too</li>
</ol>

<ul class="h">
<li>But, you likely want to use a <code>ul</code>.</li>
<li>But, you likely want to use a <code>ul</code>.</li>
<li>But, you likely want to use a <code>ul</code>.</li>
</ul>

<h2 id="form">Form Elements</h2>
<p>Button, Command, Fieldset, Form, input, label, legend, menu, optgroup, option, output, progress, select, textarea, time, var</p>

<div>
<h2>Input Fields</h2>
<p>See the page on <a href="http://html5doctor.com/html5-forms-input-types/">HTML5 Doctor</a> for more information.</p>
<input type="text" value="Textbox">
<input type="search" value="search">
<input type="email" value="email">
<input type="url" value="url">
<input type="tel" value="tel">
<input type="number" value="number">
<input type="range" value="Textbox">
<input type="date" value="Textbox">
<input type="month" value="Textbox">
<input type="week" value="Textbox">
<input type="datetime" value="datetime">
<input type="datetime-local" value="datetime-local">
<input type="color">

<!-- Buttons -->
<input type="button" value="Button">
<input type="submit" value="Submit">
<input type="reset" value="Reset">
</div>
<div>

<h3>Checkboxes</h3>
<label><input type="checkbox"> Checkbox One</label>
<label><input type="checkbox"> Checkbox Two</label>
</div>
<div>

<h3>Radios</h3>
<label><input type="radio"> Checkbox One</label>
<label><input type="radio"> Checkbox Two</label>
</div>

<div><textarea>Textarea</textarea></div>

<h3 id="button">Buttons</h3>
<div>
<button class="grey">Default</button>
<button class="exec">Exec</button>
<button class="good">Good</button>
<button class="info">Info</button>
<button class="warn">Warn</button>
<button class="fail">Fail</button>
</div>

<h4>Larger / Smaller</h4>
<p>Just add the <em>.l</em> or <em>.s</em> attribute.</p>
<div>
<button class="l grey">Default</button>
<button class="l exec">Exec</button>
<button class="l good">Good</button>
<button class="l info">Info</button>
<button class="l warn">Warn</button>
<button class="l fail">Fail</button>
</div>
<div>
<button class="s grey">Default</button>
<button class="s exec">Exec</button>
<button class="s good">Good</button>
<button class="s info">Info</button>
<button class="s warn">Warn</button>
<button class="s fail">Fail</button>
</div>

<h4>Disabled</h4>
<p>Just add the <em>disabled</em> attribute.</p>
<div>
<button disabled class="grey">Default</button>
<button disabled class="exec">Exec</button>
<button disabled class="good">Good</button>
<button disabled class="info">Info</button>
<button disabled class="warn">Warn</button>
<button disabled class="fail">Fail</button>
</div>



<h2 id="media">Media</h2>
<p>area, audio, canvas, embed, figcapton, figure, img, keygen, map, meter, object, param, source, track, video</p>

<audio></audio>

<video></video>

<h2>Misc</h2>
<p>datalist, details, dfn, rp, rt, ruby, noscript

<h2 id="note">Notes / Labels / Pills</h2>
<p>These note classes are intended to be used like <em>note xxxx</em></p>
<div style="height:40px;">
<span class="pill grey">Base</span>
<span class="pill exec">Exec</span>
<span class="pill good">Good</span>
<span class="pill info">Info</span>
<span class="pill warn">Warn</span>
<span class="pill fail">Fail</span>
</div>

<div style="height:40px;">
<span class="note grey">Base</span>
<span class="note exec">Exec</span>
<span class="note good">Good</span>
<span class="note info">Info</span>
<span class="note warn">Warn</span>
<span class="note fail">Fail</span>
</div>

       
<footer>
<p>Footer Paragraphs are Easy</p>
<addres>The Address gets a special look here</address>
<addres><a href="http://radix.edoceo.com/css/">Radix CSS</address>
</footer>  

<!-- #debug Stuff -->
<h2>Debug Information</h2>
<div class="debug">
<?php
$list = array('grey','exec','good','info','warn','fail');
foreach ($list as $x) {
	echo '<div class="' . $x . '" title="' . $x . '"></div>';
	echo '<div class="' . $x . '_hi" title="' . $x . '_hi"></div>';
	echo '<div class="' . $x . '_lo" title="' . $x . '_lo"></div>';
}
?>
</div>

<script>
less.watch();
</script>

</body>
</html>