
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<HTML>
		<?php require_once('header.php')?>
		<center>
		    <a href="#preprocess">Preprocessor task</a>
		    <a href="#directives">Directives</a>
		    <a href="#comparision">Comparision</a>
		    <a href="#operators">Operators</a>
		    <a href="#eclipse_plugin">Eclipse plugin</a>
		</center>

		<a name="preprocess" />
		<h2>Preprocessor</h2>
<p>The new preprocessor backend is developed by Omry Yadan (omry at yadan dot net).</p>
<p>The preprocessor supports operations on variables and access to a device database (Currently only the J2ME polish devices database is supported)
is accsible from the WtkPreprocess task and from an Eclipse plugin.
This preprocessor is modeled after the NetBeans mobility suite preprocessor (but supports a few additional directives).</p>

		<p>
		The WtkPreprocess task provides a preprocessor, similar to the ones
		known from C and other languages. It allows for conditional compilation and
		inclusion of one source file into another and is helpful when trying to
		maintain a single source for several devices, each having its own bugs,
		add-on APIs, etc.</p>
		<p />
		
		Preprocessing source files to manage implementation
		differences is quite unusual in Java programming. Actually
		it might be considered "evil technology" by OO purists. While the latter is
		somewhat true - interfaces, abstract classes and loading classes by name are
		definitely the cleaner approach - pure OO is something you often cannot afford when
		developing for devices that accept only JAR files up to 30 KB. A simple
		interface easily costs a kilobyte or more in the JAR. Loading
		implementation-specific classes by name usually gets in the way of obfuscation.
		A conditionally compiled block, on the other hand, costs absolutely nothing
		(apart, maybe, from a bit of pride, in case you consider yourself an OO purist,
		but isn't that a small price to pay for a MIDlet that works merrily on dozens of
		different mobile phones?).
		
		<p />
		
		Please note that the task only preprocesses the source files, but doesn't
		compile them. So you still have to run the Java compiler on the preprocessed
		files afterwards. Since the preprocessor doesn't filter "inactive" conditional
		parts by removing them, but by commenting them out instead, line numbers for compiler
		errors are usually the same as for the original code (unless you are using
		#include).
		
		<p />
		
		In addition to conditional compilation the preprocessor
		replaces Ant-style properties in the source-code.
		
		<p />

		The task provides the following parameters:
		
		<p />

		<table class="color">
			<tr>
				<th>
		  			Parameter
		  		</th>

				<th>
		  			Type
		  		</th>

				<th>
		  			Required
		  		</th>

				<th>
		  			Purpose
		  		</th>
			</tr>

			<tr>
			<td>version</td>
			<td>int</td>
			<td>no</td>
			<td>
			    Preprocessor backend version.
			    <ul>
				<li>1: The old preprocessor backend (Documentation available <a href="wtkpreprocess_old.html">here</a>)</li>
				<li>2: The new netbeans-like preprocessor</li>
			    </ul>
			    The default is 2.
		    	</td>
			</tr>

			<tr>
			<td>device</td>
			<td>string</td>
			<td>no</td>
			<td>
			A device from the device database, for example <b>"Nokia/6280"</b>.<br/>
			All the symbols for this device will be automatically injected into the symbols list. (supported only by backend-version 2)
		    	</td>
			</tr>
			
			<tr>
				<td>devicedbpath</td>
				<td>dir</td>
				<td>no</td>
				<td>Optional path for the devices xml files</td>
			</tr>

			<tr>
			<td>debuglevel</td>
			<td>Debug level</td>
			<td>no</td>
			<td>
			Turn debug level on, value should be one of [debug|info|warn|error|fatal]
		    	</td>
			</tr>



			<tr>
			<td>printsymbols</td>
			<td>boolean</td>
			<td>no</td>
			<td>
			Used to debug, if true all preprocesor symbols will be printer prior to preprocessor.
		    	</td>
			</tr>

			<tr>
			<td>savesymbols</td>
			<td>Filename</td>
			<td>no</td>
			<td>
			Saves all the preprocessor symbols to a file
		    	</td>
			</tr>



			<tr>
				<td>
		    		srcdir
		    	</td>

				<td>
		    		file
		    	</td>

				<td>
		    		yes
		    	</td>

				<td>
		    	    The source directory from which Java source files are being
		    	    preprocessed.
		    	</td>
			</tr>

			<tr>
				<td>
		    		destdir
		    	</td>

				<td>
		    		file
		    	</td>

				<td>
		    		yes
		    	</td>

				<td>
		    	    The destination directory to which preprocessed files are
			    	written.
		    	</td>
			</tr>

			<tr>
				<td>
		    		newext
		    	</td>

				<td>
		    		string
		    	</td>

				<td>
		    		no
		    	</td>

				<td>
		    	    Specifies a new file extension for all files that have gone
		    	    through the preprocessor. Useful when you save the files to
		    	    preprocess with a special extension to distinguish them from
		    	    normal Java files. The new extension replaces everything from
		    	    (and including) the first dot in the filename up to the end,
		    	    so when you specify newext=".java", a file "MyFile.j2me.pp"
		    	    becomes "MyFile.java" once it goes through the peprocessor. If
		    	    you don't specify this parameter, file extensions are not
		    	    changed.
		    	</td>
			</tr>

			<tr>
				<td>
		    		indent
		    	</td>

				<td>
		    		boolean
		    	</td>

				<td>
		    		no
		    	</td>

				<td>
		    	    Controls indentation of comments that the preprocessor writes into
		    	    the target files. Defaults to true, which results in comments
		    	    having the same indentation as the the original line. Setting it to
		    	    false results in comments starting at the beginning of a line.
		    	</td>
			</tr>

			<tr>
				<td>
		    		symbols
		    	</td>

				<td>
		    		string
		    	</td>

				<td>
		    		no
		    	</td>

				<td>
		    		A list of define symbols that are initially defined
		    		for each file the preprocessor is invoked on.
Parsing of this list is done by the actual preprocessor backend, so the syntax changes from backend to backend.
<ul>
<li>Backend version 1 : Comma separated list (FOO,BAR,KAZ)</li>
<li>Backend version 2 : Comma separated list of key=value pairs or key (FOO,BAR=2,KAZ="abc")</li>
</ul>
		
		    	</td>
			</tr>

			<tr>
				<td>
		    		encoding
		    	</td>

				<td>
		    		string
		    	</td>

				<td>
		    		no
		    	</td>

				<td>
		    		Specifies the encoding to use when reading or writing source files.
					Defaults to the platform default encoding, if not specified.
		    	</td>
			</tr>

			<tr>
				<td>
		    		filter
		    	</td>

				<td>
		    		boolean
		    	</td>

				<td>
		    		no
		    	</td>

				<td>
		    		When set to true, the preprocessor filters all directives and
		    		"inactive" conditional parts. The resulting file contains only
		    		the actual Java source code that goes into the compiler.
		    		Defaults to false.
		    	</td>
			</tr>

			<tr>
				<td>
		    		verbose
		    	</td>

				<td>
		    		boolean
		    	</td>

				<td>
		    		no
		    	</td>

				<td>
		    		Turn verbose output on or off.
		    	</td>
			</tr>

			<tr>
				<td>
		    		if
		    	</td>

				<td>
		    		String
		    	</td>

				<td>
		    		no
		    	</td>

				<td>
		    		Provides fine-grained control over task execution based on a
		    		property definition. The task will only be executed if the
		    		given property is defined.
		    	</td>
			</tr>

			<tr>
				<td>
		    		unless
		    	</td>

				<td>
		    		String
		    	</td>

				<td>
		    		no
		    	</td>

				<td>
		    		Provides fine-grained control over task execution based on a
		    		property definition. The task will only be executed if the
		    		given property is not defined.
		    	</td>


		    </tr>

		</table>


		<h3>Symbol files</h3>
		It's possible to load symbol files into the preprocessor, files are loaded in the order they are declared<br/>
		File Format supports the following directives:
<pre>
<b>KEY=VALUE</b>		: Standard define, if key is already defined it will be replaced
<b>add_if_new@KEY=fff</b>	: Sets key only if it's not defined already
<b>unset@KEY</b>		: Clears the value of KEY
</pre>
		<p />

		<table class="color">
		    <tr>
			<th>Parameter</th>

			<th>Type</th>

			<th>Required</th>

			<th>Purpose</th>
		    </tr>

		    <tr>
			<td>Name</td>
			<td>string</td>
			<td>This or List</td>
			<td>Symbols file name to load/td>
		    </tr>
		    <tr>

			<td>List</td>
			<td>string</td>
			<td>This or name</td>
			<td>Comma separated list symbols file names to load</td>
		    </tr>
			
		</table>
		
		Example:
		<pre>
&lt;wtkpreprocess 
	verbose=&quot;true&quot;
	srcdir=&quot;src&quot; 
	destdir=&quot;out&quot; 
	device=&quot;Generic/Java&quot;
	symbols=&quot;LIST='1,2,3',STR='String',PI=3.1415,VERSION=${VERSION}&quot;
	printsymbols=&quot;true&quot;&gt;

	<b>&lt;!-- Load a.symbols --&gt;</b>
	&lt;symbols_file name=&quot;a.symbols&quot;/&gt;</b>
		
	<b>&lt;!-- Load b.symbols --&gt;</b>
	&lt;symbols_file name=&quot;b.symbols&quot;/&gt;
	
	<b>&lt;!-- Load c.symbols and d.symbols--&gt;</b>
	&lt;symbols_file list=&quot;c.symbols,d.symbols&quot;/&gt; 
	
&lt;/wtkpreprocess&gt;

		</pre>
		<p />



		<h3>Directives</h3>
		
		The preprocessor supports the following directives inside a Java
		source file. All directives follow a "//" comment that
		starts at the beginning of a line (whitespace is allowed left of them, but
		no Java code). That way, they don't interfere with normal Java compilation.
		Directives must not span multiple lines of code.
		In addition, whitespace is allowed between the // and the # of the directive to maintain preprocessor commands validity after eclipse source formatting.
		
		<p />

		<table class="color">
			<tr>
				<th width="30%">
		  			Directive
		  		</th>

				<th>
		  			Decription
		  		</th>
			</tr>

			<tr>
				<td>#ifdef [identifier]</td>
				<td>
The identifier represents a variable of any type (boolean, string, or integer) and checks whether or not the variable is defined. If true (the variable is defined), the code that follows is processed. Nested blocks are processed as well. If false (the variable is not defined), the code that follows is commented and nested blocks are not evaluated. The directive must be closed with #endif. 
		  		</td>
			</tr>

			<tr>
			    <td>#ifndef [identifier]</td>
			    <td>
Works in the same manner as ifdef, but returns "True" if the variable is not defined. The directive must be closed with #endif.		  	
			    </td>
			</tr>

			<tr>
				<td>
#elifdef [identifier]
		  		</td>
				<td>
Works as a standard else if statement, but automatically checks whether or not the identifier is defined. The directive can only complement inside blocks started by ifdef/ifndef. 
		  		</td>
			</tr>
			<tr>
				<td>
#elifndef [identifier]
		  		</td>
				<td>
Works as a standard else if statement but automatically checks whether the identifier is not defined. The directive can only complement inside blocks started by ifdef/ifndef. 
		  		</td>
			</tr>
			<tr>
				<td>
#if [expression]
		  		</td>
				<td>
Evaluates an expression passed to it and fires the appropriate action. The directive must be closed with endif. 
		  		</td>
			</tr>
			<tr>
				<td>
#elif [expression]
		  		</td>
				<td>
Works as a standard else if statement and can complement only in blocks started by an if statement. The directive preprocesses the code that follows based on the result of the expression. 
		  		</td>
			</tr>
			<tr>
				<td>
#else
		  		</td>
				<td>
Works as a standard else statement only preprocesses the code that follows when none of the previous conditions in the defining block were true. Complements inside any block started with the if/ifdef/ifndef directive.
		  		</td>
			</tr>
			<tr>
				<td>
#endif
		  		</td>
				<td>
This directive must be used to close any block started with if/ifdef/ifndef.
		  		</td>
			</tr>
			<tr>
				<td>
#condition [expression]
		  		</td>
				<td>
Must be on the first line in a file. This directive determines if the file should be included in the build based on the result of the expression.
		  		</td>
			</tr>
			<tr>
				<td>
#debug [level]
		  		</td>
				<td>
Determines if the line following the directive should be commented or uncommented based on the debug level set in Compiling page of the project properties. If the debug level is omitted and the debug level is not set to "Off" in the project properties, the preprocessor will automatically debug the line in question. Used for debugging purposes with expressions such as System.out.println, for example. This directive can be nested. 
		  		</td>
			</tr>
			<tr>
				<td>
#mdebug [level]
		  		</td>
				<td>
Behaves the same as #debug, but instead comments or uncomments a whole block of lines following the line it is on until it reaches #enddebug. This directive is used for debugging purposes with expressions such as System.out.println, for example. This directive can be nested. If the mdebug block partially intersects an if/ifdef/ifndef block (for example, enddebug is outside a closed if block in which mdebug is called) the preprocessor will generate errors. 
		  		</td>
			</tr>
			<tr>
				<td>
#enddebug
		  		</td>
				<td>
Must terminate #mdebug block.
		  		</td>
			</tr>
			<tr>
				<td>
#define [identifier]
		  		</td>
				<td>
#define [identifier=value] #define [identifier value] 	Adds temporary abilities or variables to the preprocessor memory. Can not be used in nested blocks. Global variables defined in the project configuration properties override these temporary variables. 
		  		</td>
			</tr>
			<tr>
				<td>
#undefine [identifier]
		  		</td>
				<td>
Removes temporary abilities/variables from the memory. This declaration can also be used to remove global variables defined in the project configuration properties from the preprocessor memory, but will not remove the variables from the list of project or configuration variables. 
		  		</td>
			</tr>
			<tr>
				<td>
#expand LINE WITH MACROS
		  		</td>
				<td>
Expand directive is used to replace build time defines in the code.<br/>
You can have a line like:<br/>
<b>//#expand public static int VERSION = %VERSION%;</b><br/>
<br/>
which will, assuming you have the define VERSION=5, be replaced with the <b>two</b> lines:<br/>
<b>//#expand public static int VERSION = %VERSION%;<br/>
public static int VERSION = 5;</b><br/>
<br/>
The reason //#expand is needed is to keep the preprocessing operation reversible (without it, it will not be possible to preprocess the same code and replace the number 5 with the correct version in case VERSION = 6 is defined).
		  		</td>
			</tr>
		</table>

 	

<a name="comparision" /> 	
<h3>Comparison Syntax in Preprocessor Directives</h3> 

The preprocessor supports three types of variables: 
<ul>
    <li>strings</li> 
    <li>integers</li> 
    <li>boolean values</li>
</ul>
</p>
<br/>
Most common comparisons (<=, <, >=, > and ==) are supported between the variables.<br/>
Boolean operations such as &&, ||, ! and ^ can also be performed on all symbol types.<br/>
Integers behave the same as strings when it comes to boolean operations. However, they are compared as true integers and can be used for such tasks as preprocessing code where various screen resolutions require different images that are optimized for different resolutions. For example, the directive<br/> 
<br/>
<b>//#if ScreenWidth>100 && ScreenHeight>120</b><br/>
<br/>
can specify a code block which will import images only for devices whose screens are larger than 100x120.<br/>
If a variable is defined, then it is considered a boolean with the value, "true." If the variable is not defined anywhere as an ability or configuration. then it is considered a boolean with value "false." <br/>
Comparisons should not be done on different variable types. However, such comparisons do not break the build process. If different variable types are compared, the preprocessor issues a warning, and evaluates the expressions as follows:<br/> 
<ul>
    <li>
    If left and right sides of the comparison operation are of different types, Both sides are considered strings and compared lexically, with the exception of the @ operation where the "subset" relationship operation will still be performed (allowing you to check whether a certain integer is in a particular set).
    </li>

    <li>
	If one of the variables is not defined or is defined as a boolean symbol,
	The variable is considered an empty string "". If one of the variables is integer it is also converted to a string and a lexical comparison will take place.<br/>
    </li>
    
</ul>

<a name="operators" /> 	
<h3>Operators</h3> 

		<table class="color">
			<tr>
				<th width="30%">
		  			Operator
		  		</th>

				<th>
		  			Decription
		  		</th>
			</tr>
			<tr>
				<td>
The "not" operator (!) 
		  		</td>
				<td>
This operator has the highest priority and can be used on variables and expressions with the syntax !<identifier> or !<expression>. 
For example, //#if !(ScreenWidth>100 && ScreenHeight>120) checks if the screen size is smaller than 100x120. 
Since the ! operator has the highest priority, expressions such as //#if !ScreenSize=="100x200" are illegal and yield syntax errors because a boolean result cannot be compared to a string. 
		  		</td>
			</tr>
			<tr>
				<td>
Comparison operators
		  		</td>
				<td>
Comparison operators have the second highest priority and perform typical comparison operations. Because the operators can compare strings lexically and integers mathematically, cross-type comparisons are supported. However, they can be used only in expressions and should compare two variables, not symbols.<br/>
There is also a special comparison operator which performs a "subset" relationship operation. This operator is denoted by the character @. Both left and right arguments should be strings which represent two sets of tokens delimited by specific delimiters. The operator first considers both left and right string arguments as sets and then determines if the set from the left argument is a subset of the set from the right argument. The valid word delimiters are <whitespace>,',' and ';'. The delimiters can be mixed arbitralily within each argument, as shown in the following examples. <br/>
<br/> 
<b>"gif" @ "gif86, jpeg, gifaboo" = false</b><br/> 
<b>"gif" @ "gif gif86 jpeg" = true </b><br/>
<b>"1 2 4;7,8" @ "0,1,2,3,4,5,6,7,8,9" = true </b><br/>
<b>"3 5 7 11 13" @ "0,1,2,3,4,5,6,7,8,9" = false</b><br/>
		  		</td>
			</tr>
			<tr>
				<td>
Boolean operators 
		  		</td>
				<td>
Boolean operators have the lowest priority relative to the rest of the operators. They also have different priorities amongst each other, just as in the Java language. Boolean operators perform typical logical operations such as &&, || and ^ on boolean expression results, or check for variable definitions and then treat those as Boolean expressions as well. Boolean operators are processed in the order: 
1.	&& 
2.	^ 
3.	|| 
		  		</td>
			</tr>
		</table>
</p>
The overall processing order is:
<ul>
<li>Not : !</li>
<li>Comparisons : ==,!=,<,<=,>,>=,@</li>
<li>And &&</li>
<li>Xor ^</li>
<li>Or ||</li>
</ul>


<a name="eclipse_plugin" /> 	
<h3>Eclipse plugin</h3> 
<h2>Requirements</h2>
The plugin was tested on eclipse 3.2.

<h2>Installation</h2>
Open eclipse, and go to Help->Software updates->Find and Install…<br/>
<br/>
<img src="plugin_install_1.jpg"/><br/>
<br/>
Select ‘Search for new features to install’:<br/>
<br/>
<img src="plugin_install_2.jpg"/><br/>

<br/>
And finally add the plugin update site <b>http://antenna.sf.net/update</b>:
<br/>
<img src="plugin_install_3.jpg"/><br/>

<h2>Usage instructions</h2>
From the project menu, enable the preprocessing:<br/><br/>
<img src="plugin_usage_1.jpg"/><br/>
<br/>
Open the project properties, and modify preprocessing parameters (Numbers appear in screenshot):<br/>
<ol>
<li>User defines, this overrides device specific defines. For example, FOO=’bar’,LIST=’1,2,3’</li>
<li>Validates the syntax of the user defines.</li>
<li>The name of the device active for this project.</li>
<li>Opens device search dialog, where you can select one of the devices from the included devices database (included in the jar).</li>
<li>Current device defines. This is read-only, but can be overridden by the user defines text field.</li>
<li>Project debug level. Code with lower debug level (//#debug or //#mdebug and //#enddebug directives) will be commented if they have a level lower than this level.</li>
</ol>
<img src="plugin_usage_2.jpg"/><br/>
<br/>
When preprocessing in active, blocks that are not active will be commented automatically by the prefix <b>//@</b><br/>
The Preprocessing is performed when an open file is modified and saved in eclipse (ctrl+s), or when the parameters in the preprocessing properties page is modified.<br/>
<br/>
</BODY>
</HTML>


